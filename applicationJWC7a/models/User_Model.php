<?php
  class User_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function get_amount(){
      return $this->db->count_all('users');
    }


}
