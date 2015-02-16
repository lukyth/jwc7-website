<?php
  class User_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function get_amount_c(){
        $query = $this->db->get_where('register', array('registerType' => 'Content',"status" => "Registered"));
        return $query->num_rows();       
    }

    function get_amount_d(){
        $query = $this->db->get_where('register', array('registerType' => 'Design',"status" => "Registered"));
        return $query->num_rows();       
    }

    function get_amount_m(){
        $query = $this->db->get_where('register', array('registerType' => 'Marketing',"status" => "Registered"));
        return $query->num_rows();       
    }

    function login($username, $password) {
       $query = $this->db->get_where('users', array('username' => $username,'password'=>sha1($password)));

       if($query -> num_rows() == 1) {

           $result=$query->result();
           $this->id=$result[0]->id;
           $this->username=$result[0]->username;
           $this->permission=$result[0]->permission;
           return true;
       } else {
           return false;
       }
    }


}
