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
}
