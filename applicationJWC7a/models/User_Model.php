<?php
  class User_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function get_amount_c(){
        $query = $this->db->get_where('register', array('registerType' => 'Content',"status" => "Homework_Submitted"));
        return $query->num_rows();       
    }

    function get_amount_d(){
        $query = $this->db->get_where('register', array('registerType' => 'Design',"status" => "Homework_Submitted"));
        return $query->num_rows();       
    }

    function get_amount_m(){
        $query = $this->db->get_where('register', array('registerType' => 'Marketing',"status" => "Homework_Submitted"));
        return $query->num_rows();       
    }


}
