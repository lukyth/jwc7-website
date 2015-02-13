<?php
  class User_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function get_amount_c(){
        $query = $this->db->get_where('register', array('registerType' => 'Content'));
        return $query->num_rows();       
    }

    function get_amount_d(){
        $query = $this->db->get_where('register', array('registerType' => 'Design'));
        return $query->num_rows();       
    }

    function get_amount_m(){
        $query = $this->db->get_where('register', array('registerType' => 'Marketing'));
        return $query->num_rows();       
    }


}
