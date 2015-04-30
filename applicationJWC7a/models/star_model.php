<?php
  class Star_model extends CI_Model {

  function getReal( $gender ) {
    $query = $this->db->select('register.facebookID, confirmation.nickName, register.sex, registerType, register.status, confirmation.status')
      ->from('register')
      ->join('confirmation','register.facebookID = confirmation.facebookID')
      ->where('register.sex', $gender)
      ->where('register.status', 'Accepted')
      ->where('confirmation.status', 'Real')
      ->order_by('registerType');
    return $query->get()->result_array();
  }
}
