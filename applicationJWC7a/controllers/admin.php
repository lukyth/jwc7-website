<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $crud_allowed = array('User', 'Subscribe', 'Register', 'Homework_Score');

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
				'permission'=>$this->user->permission
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
		if(!$this->checkAccessJson()){
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

	public function save_hw_score($id){
		if(!$this->checkAccessJson()){
			return;
		}

		$this->load->model('Homework_Score_Model', 'model');
		$this->load->helper('array');

		$post = $this->get_post_body();

		$user = $this->session->userdata('login');
		$userid = $user['id'];

		$this->model->upsert($id, $userid, $post);

		$this->output_json(array('succes' => true));
	}

	public function save_status($id){
		if(!$this->checkAccessJson()){
			return;
		}

		$this->load->model('Register_Model', 'model');
		
		$post = $this->get_post_body();

		$this->model->update(array(
			'status' => $post->status
		), $id);

		$this->output_json(array('succes' => true));
	}

	public function sendmail(){
		if(!$this->checkAccessJson()){
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
}
