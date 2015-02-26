<?php

class Homework_Score_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getId($id){
		$user = $this->session->userdata('login');
		$userid = $user['id'];

		$query = $this->db->get_where(
			'homework_score', array(
				'facebookID' => $id,
				'userID' => $userid
			)
		);

		return $query->row();
	}

	function upsert($id, $userid, $data){
		$this->db->trans_start();

		$query = $this->db->get_where(
			'homework_score', array(
				'facebookID' => $id,
				'userID' => $userid
			)
		);

		$data = (array) $data;

		// whitelist only allowed keys
		$data = elements(array(
			'q1', 'q2', 'q3', 'q4', 'q5'
		), $data);

		if($query->num_rows() > 0){
			// update
			$this->db->where('facebookID', $id)
				->where('userID', $userid)
				->update('homework_score', $data);
		}else{
			// insert
			$data['facebookID'] = $id;
			$data['userID'] = $userid;
			$this->db->insert('homework_score', $data);
		}

		$this->db->trans_complete();
	}

	function getList(){
		return $this->db->select('register.facebookID,AVG(q1) AS q1,AVG(q2) AS q2,AVG(q4) AS q4,AVG(q5) AS q5,SUM(q1+q2+q4+q5)/COUNT(userID) AS sum,prefix,name,surname,nickname,registerType, (SELECT GROUP_CONCAT(username) FROM users WHERE id NOT IN (homework_score.userID) AND permission <= 4) AS notChecked')
			->from('register')
			->order_by('registerType, sum desc')
			->join('homework_score', 'register.facebookID = homework_score.facebookID', 'left')
			->where('status !=', 'InProgress')
			->group_by('register.facebookID')
			->get()
			->result();
	}
}
