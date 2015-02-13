<?php
  class Homework_Model extends CI_Model {

    var $facebookID;
    var $q1=null;
    var $q2=null;
    var $q3=null;
    var $q4=null;
    var $q5=null;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function check($facebookID){
      $query = $this->db->get_where('homework', array('facebookID' => $facebookID));
      if($query->num_rows()>0){
        return true;
      }
      else{
        $this->facebookID=$facebookID;
        return false;
      }
   }
   function insert(){

     $this->db->insert('homework',$this);
   }

    function update($data ,$id){
        if(!$this->check($id)){
            $this->insert();
        }
        $this->db->update('homework', $data, array('facebookID' => $id));
    }


}
