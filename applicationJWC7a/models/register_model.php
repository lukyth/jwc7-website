<?php
  class Register_Model extends CI_Model {

    var $facebookID;
    var $profilePic=null;
    var $registerType=null;
    var $name=null;
    var $surname=null;
    var $nickname=null;
    var $sex=null;
    var $national_ID=null;
    var $school=null;
    var $grade=null;
    var $phone=null;
    var $address=null;
    var $province=null;
    var $postalCode=null;
    var $email=null;
    var $knowFrom=null;
    var $foodAllergy=null;
    var $disease=null;
    var $drugAllergy=null;
    var $specialFood=null;
    var $registerDate=null;
    var $parentPhone=null;
    var $status=null;
    var $sizeshirt=null;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function checkRegister($facebookID){
      $query = $this->db->get_where('register', array('facebookID' => $facebookID));

      if($query->num_rows()>0){
          $results=$query->result();
          $result=$results[0];
          $this->facebookID=addslashes($result->facebookID);
          $this->profilePic=addslashes($result->profilePic);
          $this->registerType=addslashes($result->registerType);
          $this->name=addslashes($result->name);
          $this->surname=addslashes($result->surname);
          $this->nickname=addslashes($result->nickname);
          $this->sex=addslashes($result->sex);
          $this->national_ID=addslashes($result->national_ID);
          $this->school=addslashes($result->school);
          $this->address=addslashes($result->address);
          $this->grade=addslashes($result->grade);
          $this->phone=addslashes($result->phone);
          $this->province=addslashes($result->province);
          $this->postalCode=addslashes($result->postalCode);
          $this->email=addslashes($result->email);
          $this->knowFrom=addslashes($result->knowFrom);
          $this->foodAllergy=addslashes($result->foodAllergy);
          $this->disease=addslashes($result->disease);
          $this->drugAllergy=addslashes($result->drugAllergy);
          $this->specialFood=addslashes($result->specialFood);
          $this->registerDate=addslashes($result->registerDate);
          $this->parentPhone=addslashes($result->parentPhone);
          $this->status=addslashes($result->status);
          $this->sizeshirt=addslashes($result->sizeshirt);
          return true;
      }else {
      //  $this->facebookID=$facebookID;
        //$this->db->set($this);
      //  $this->db->insert('register');
        return false;
      }
    }

    function data($facebookID) {
      $this->checkRegister($facebookID);
      return $this;
    }

    function insert(){
      $this->db->insert('register',$this);
    }

    function update($data,$id){
        $this->db->update('register', $data, array('facebookID' => $id));
    }
}
