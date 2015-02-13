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
          $result=$query->result()[0];
          $this->facebookID=$result->facebookID;
          $this->profilePic=$result->profilePic;
          $this->registerType=$result->registerType;
          $this->name=$result->name;
          $this->surname=$result->surname;
          $this->nickname=$result->nickname;
          $this->sex=$result->sex;
          $this->national_ID=$result->national_ID;
          $this->school=$result->school;
          $this->address=$result->address;
          $this->grade=$result->grade;
          $this->phone=$result->phone;
          $this->province=$result->province;
          $this->postalCode=$result->postalCode;
          $this->email=$result->email;
          $this->knowFrom=$result->knowFrom;
          $this->foodAllergy=$result->foodAllergy;
          $this->disease=$result->disease;
          $this->drugAllergy=$result->drugAllergy;
          $this->specialFood=$result->specialFood;
          $this->registerDate=$result->registerDate;
          $this->parentPhone=$result->parentPhone;
          $this->status=$result->status;
          $this->sizeshirt=$result->sizeshirt;
          return true;
      }else {
      //  $this->facebookID=$facebookID;
        //$this->db->set($this);
      //  $this->db->insert('register');
        return false;
      }


    }
    function insert(){
      $this->db->insert('register',$this);
    }

    function update($data,$id){
        $this->db->update('register', $data, array('facebookID' => $id));
    }


}
