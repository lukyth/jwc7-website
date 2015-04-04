<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $crud_allowed = array('User', 'Subscribe', 'Register', 'Homework_Score');

	private $encKey = '/yLGaB+oKKNLPWDNjtdSCo0RWGv6tnrA9EjrTaUcdv56KE/2fScNQIQebDdrrrby';

	public function index(){
		// $this->checkAccess();

		$this->load->view('admin/index');
	}

	public function login(){
		$this->load->model('User_Model', 'user');
		$post = $this->get_post_body();

		if($this->user->login($post->username,$post->password)){
			$session_array = array(
				'id' => $this->user->id,
				'username'=>$this->user->username,
				'permission'=>(int) $this->user->permission
			);

			$this->session->set_userdata('login', $session_array);

			$this->output_json($session_array);
		}else {
			$this->output_error('Cannot log you in', 401);
		}
	}

	public function refresh(){
		$this->output_json($this->session->userdata('login'));
	}

	public function crud($object, $objectId=-1){
		if(!$this->checkAccessLevel(5)){
			return;
		}

		if(!in_array($object, $this->crud_allowed)){
			return $this->output_error('Not found', 404);
		}

		$this->load->model($object.'_Model', 'model');

		if($objectId != -1){
			$obj = $this->model->getId($objectId);
			if(!$obj){
				return $this->output_error('Object not found', 404);
			}

			if($object == 'Homework_Score'){
				foreach(array('q1', 'q2', 'q3', 'q4', 'q5') as $name){
					if(isset($obj->$name)){
						$obj->$name = (int) $obj->$name;
					}
				}
			}

			$this->output_json($obj);
		}else{
			if($object == 'Register'){
				$user = $this->session->userdata('login');
				$userid = $user['id'];
				$data = $this->model->getWithUser($userid);

				foreach($data as &$item){
					foreach(array('q1', 'q2', 'q3', 'q4', 'q5') as $name){
						if(isset($item->$name)){
							$item->$name = (int) $item->$name;
						}
					}
				}
			}else{
				$data = $this->model->get();
			}

			$this->output_json($data);
		}
	}

	public function get_obs_register(){
		if(!$this->checkAccessJson()){
			return;
		}

		$this->load->model('Register_Model', 'model');
		$this->load->library('encrypt');

		@$id = $_GET['id'];

		if(empty($id)){
			$user = $this->session->userdata('login');
			$userid = $user['id'];
			$data = $this->model->getWithUser($userid);
			$out = array();

			foreach($data as $item){
				$obj = array();
				$obj['id'] = $this->encrypt->encode($item->facebookID, $this->encKey);
				foreach(array('registerType', 'status') as $name){
					if(isset($item->$name)){
						$obj[$name] = $item->$name;
					}
				}
				foreach(array('q1', 'q2', 'q3', 'q4', 'q5') as $name){
					if(isset($item->$name)){
						$obj[$name] = (int) $item->$name;
					}
				}
				$out[] = $obj;
			}
		}else{
			$objectId = $this->encrypt->decode($id, $this->encKey);
			$obj = $this->model->getId($objectId);
			$out = array();

			foreach(array('q1', 'q2', 'q3', 'q4', 'q5', 'registerType') as $item){
				$out[$item] = $obj->$item;
			}
		}

		$this->output_json($out);
	}

	public function get_obs_score(){
		$this->load->model('Homework_Score_Model', 'model');
		$this->load->library('encrypt');

		$objectId = $this->encrypt->decode($_GET['id'], $this->encKey);
		$obj = $this->model->getId($objectId);
		$out = array();

		foreach(array('q1', 'q2', 'q3', 'q4', 'q5') as $name){
			@$out[$name] = (int) $obj->$name;
		}

		$this->output_json($out);
	}

	public function report($type){
		if(!$this->checkAccessLevel(5)){
			return;
		}
		$allowed = array('roster', 'food', 'mkt', 'size', 'hw');

		if(!in_array($type, $allowed)){
			$this->output_error('No such report');
			return;
		}

		return call_user_func(array($this, '_report_' . $type));
	}

	public function save_hw_score(){
		if(!$this->checkAccessJson()){
			return;
		}

		$this->load->model('Homework_Score_Model', 'model');
		$this->load->helper('array');
		$this->load->library('encrypt');

		$id = $this->encrypt->decode($_GET['id'], $this->encKey);

		$post = $this->get_post_body();

		$user = $this->session->userdata('login');
		$userid = $user['id'];
		if(in_array($user['permission'], array(1, 2, 3))){
			// cannot check q1, q2, q3
			unset($post->q1);
			unset($post->q2);
			unset($post->q3);
		}else if($user['permission'] == 4){
			unset($post->q4);
			unset($post->q5);
		}

		$this->model->upsert($id, $userid, $post);

		$this->output_json(array('succes' => true));
	}

	public function save_status($id){
		if(!$this->checkAccessLevel(5)){
			return;
		}

		$this->load->model('Register_Model', 'model');

		$post = $this->get_post_body();

		if ($post->status == 'Accepted') {
			$this->model->insertConfirmation(array(
				'facebookID' => $id
			));
		}

		$this->model->update(array(
			'status' => $post->status
		), $id);

		$this->output_json(array('succes' => true));
	}

	public function sendmail(){
		if(!$this->checkAccessLevel(7)){
			return;
		}

		$data = $this->get_post_body();

		if(empty($data->subject) || empty($data->body)){
			$this->output_error('Incomplete form!');
			return;
		}

		$this->load->library('email');
		$this->email->initialize();
		$this->email->from('jwc@jwc.in.th', 'Junior Webmaster Camp #7');
		$this->email->to('jwc@jwc.in.th', 'Junior Webmaster Camp #7');

		$sentCount = 0;

		if($data->all) {
			$query = $this->db->get('subscribe');
			$listEmail = array();

			foreach ($query->result() as $row) {
				$listEmail[] = $row->email;
				$sentCount++;
			}

			$this->email->bcc($listEmail);
		}else{
			if(empty($data->to)){
				$this->output_error('Requested sending to an address, but address is not given');
				return;
			}
			$sentCount++;
			$this->email->bcc($data->to);
		}

		$this->email->subject($data->subject);
		$this->email->message($data->body);

		if($this->email->send()) {
			$this->output_json(array('count' => $sentCount));
		}else {
			$this->output_error($this->email->print_debugger());
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin', 'refresh');
	}

	private function checkAccess(){

		if ($this->session->userdata('login') == FALSE)
		{
			 redirect('admin/login', 'refresh');
		}
	}
	private function checkAccessJson(){
		if ($this->session->userdata('login') == FALSE){
			$this->output_error('You must be logged in to use this page', 403);
			return false;
		}
		return true;
	}

	/**
	 * Access level:
	 * 1: check content only
	 * 2: check design only
	 * 3: check marketing only
	 * 4: check all only
	 * 5: access register list and dashboard
	 * 7: send email
	 * 10: add user
	 */
	private function checkAccessLevel($level){
		if(!$this->checkAccessJson()){
			return;
		}
		$userdata = $this->session->userdata('login');
		if($userdata['permission'] < $level){
			$this->output_error('Your user level cannot access this page', 403);
			return false;
		}
		return true;
	}

	private function get_post_body(){
		return json_decode(file_get_contents('php://input'));
	}

	private function output_json($out){
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($out));
	}

	private function output_error($out, $status=500){
		$this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode(array(
				'error' => $out
			)));
	}

	private function _report_roster(){
		$this->load->model('Register_Model', 'model');
		$this->output_json($this->model->get($this->_get_filter()));
	}

	private function _report_food(){
		$this->load->model('Register_Model', 'model');
		$filter = $this->_get_filter();
		$result = array(
			'food_allergic' => $this->model->getFoodAllergic($filter),
			'drug_allergic' => $this->model->getDrugAllergic($filter),
			'food' => $this->model->getSpecialFood($filter),
			'list' => $this->model->get($filter)
		);
		$this->output_json($result);
	}

	private function _report_mkt(){
		$this->load->model('Register_Model', 'model');
		$filter = $this->_get_filter();
		$result = array(
			'knowFrom' => $this->model->getKnowFrom($filter),
			'list' => $this->model->get($filter)
		);
		$this->output_json($result);
	}

	private function _report_size(){
		$this->load->model('Register_Model', 'model');
		$filter = $this->_get_filter();
		$result = array(
			'sizeShirt' => $this->model->getSizeShirt($filter),
			'list' => $this->model->get($filter)
		);
		$this->output_json($result);
	}

	private function _report_hw(){
		$this->load->model('Homework_Score_Model', 'score');

		$out = $this->score->getList();

		$this->output_json(array_values($out));
	}

	private function _get_filter(){
		return array_filter(array(
			'registerType' => $_GET['type'],
			'status' => $_GET['status']
		));
	}
}
