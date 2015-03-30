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
		return $this->db->select(
				'register.facebookID,'.
				'AVG(CASE WHEN q1 <> 0 THEN q1 ELSE NULL END) AS q1'.
				',AVG(CASE WHEN q2 <> 0 THEN q2 ELSE NULL END) AS q2'.
				',AVG(CASE WHEN q3 <> 0 THEN q3 ELSE NULL END) as q3'.
				',AVG(CASE WHEN q4 <> 0 THEN q4 ELSE NULL END) AS q4'.
				',AVG(CASE WHEN q5 <> 0 THEN q5 ELSE NULL END) AS q5,'. //Score
				'SUM(q1+q2)/COUNT(CASE WHEN q1 <> 0 THEN 1 ELSE NULL END) + SUM(q4+q5)/COUNT(CASE WHEN q4 <> 0 THEN 1 ELSE NULL END)'.
				' AS sum,prefix,name,surname,nickname,registerType,'. //Ordinary Column
				'(SELECT group_concat(username) FROM users '. //Query all username which not checked
					'WHERE id NOT IN (SELECT userID FROM homework_score WHERE facebookID = register.facebookID) '. //select where id not in checked users_id
					//grouping content,design,marketing
					'AND (permission = 4 '.
						'OR (register.registerType="Content" AND permission=1) '.
						'OR (register.registerType="Design" AND permission=2) '.
						'OR (register.registerType="Marketing" AND permission=3))) '.
					'AS notChecked,'.
				'(SELECT group_concat(username) FROM users '. //Query all username which has checked
					'WHERE id IN (SELECT userID FROM homework_score WHERE facebookID = register.facebookID) '.
					//grouping content,design,marketing
					'AND (permission = 4 '.
						'OR (register.registerType="Content" AND permission=1) '.
						'OR (register.registerType="Design" AND permission=2) '.
						'OR (register.registerType="Marketing" AND permission=3))) '.
					'AS checked')
			->from('register')
			->order_by('registerType, sum desc')
			->join('homework_score', 'register.facebookID = homework_score.facebookID', 'left')
			->where('status !=', 'InProgress')
			->group_by('register.facebookID')
			->get()
			->result();
	}
}
