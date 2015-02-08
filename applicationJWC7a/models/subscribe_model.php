<?php
  class Subscribe_Model extends CI_Model {

    var $id   = null;
    var $email = '';
    var $timestamp    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function insert()
    {
        timezones('UM7');
        $this->email = $_POST['email'];
        $this->timestamp=date('Y-m-d H:i:s', time());
      //  date('Y-m-d H:i:s');

        $dbInsert=$this->db->insert('subscribe', $this);

        if (!$dbInsert) {
			         return $this->db->_error_number();
		       }
		    return 1;
    }

    function get(){
      $query = $this->db->get('subscribe');
      return $query->result();
    }

}
