<?php

class Confirmation_Model extends CI_Model {
	function getId($id){
		$query = $this->db->select('*, confirmation.status AS c_status, confirmation.address')
			->from('confirmation')
			->where(array('confirmation.facebookID' => $id))
			->join('register', 'register.facebookID = confirmation.facebookID', 'left');
		return $query->get()->row();
	}

	function update($data, $id){
		$this->db->update('confirmation', $data, array('facebookID' => $id));
	}

	function get(){
		return $this->db->select('*, confirmation.status AS c_status')
			->from('confirmation')
			->join('register', 'register.facebookID = confirmation.facebookID', 'left')
			->order_by('registerType, confirmation.facebookID')
			->get()
			->result();
	}
}
