<?php
  class Register_Model extends CI_Model {

    var $facebookID;
    var $profilePic=null;
    var $registerType=null;
    var $prefix=null;
    var $name=null;
    var $surname=null;
    var $nickname=null;
    var $sex=null;
    var $birthday=null;
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
    var $relateParent=null;
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
          $this->facebookID=$result->facebookID;
          $this->profilePic=$result->profilePic;
          $this->registerType=$result->registerType;
          $this->prefix=$result->prefix;
          $this->name=$result->name;
          $this->surname=$result->surname;
          $this->nickname=$result->nickname;
          $this->sex=$result->sex;
          $this->birthday=$result->birthday;
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
          $this->relateParent=$result->relateParent;
          $this->status=$result->status;
          $this->sizeshirt=$result->sizeshirt;
          return true;
      } else {
      //  $this->facebookID=$facebookID;
        //$this->db->set($this);
      //  $this->db->insert('register');
        return false;
      }
    }

    function isRegisted($facebookID) {
      $query = $this->db->get_where('register', array(
        'facebookID' => $facebookID,
        "status !=" => "InProgress"
      ) );
      if( $query->num_rows()>0 ) return true;
      return false;
    }

    function getUserType($facebookID) {
      $query = $this->db->get_where('register',array('facebookID' => $facebookID));
      $result = $query->result();
      return $result[0]->registerType;
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

    function get($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->get_where(
        'register', $filter
      );
      return $query->result();
    }

    /**
     * Return a list of registrations with annotated homework grading status
     */
    function getWithUser($userId){
      $query = $this->db->select('register.*, q1, q2, q3, q4, q5')
        ->from('register')
        ->where('status !=', 'InProgress')
        ->join('homework_score', 'register.facebookID = homework_score.facebookID AND homework_score.userID = '.(int) $userId, 'left')
        ->get();
      return $query->result();
    }

    function getId($id){
      $query = $this->db->from('register')
        ->where('register.facebookID', $id)
        ->join('homework', 'register.facebookID = homework.facebookID')
        ->get();
      return $query->row();
    }

    function getFoodAllergic($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->select('foodAllergy')
        ->select('COUNT(*) AS count')
        ->from('register')
        ->where($filter)
        ->group_by('foodAllergy')
        ->get();
      return $query->result();
    }

    function getDrugAllergic($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->select('drugAllergy')
        ->select('COUNT(*) AS count')
        ->from('register')
        ->where($filter)
        ->group_by('drugAllergy')
        ->get();
      return $query->result();
    }

    function getSpecialFood($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->select('specialFood')
        ->select('COUNT(*) AS count')
        ->from('register')
        ->where($filter)
        ->group_by('specialFood')
        ->get();
      return $query->result();
    }

    function getKnowFrom($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->select('knowFrom')
        ->select('COUNT(*) AS count')
        ->from('register')
        ->where($filter)
        ->group_by('knowFrom')
        ->get();
      return $query->result();
    }

    function getSizeShirt($filter=array()){
      $filter = array_merge(array(
        'status !=' => 'InProgress'
      ), $filter);
      $query = $this->db->select('sizeshirt')
        ->select('COUNT(*) AS count')
        ->from('register')
        ->where($filter)
        ->group_by('sizeshirt')
        ->get();
      return $query->result();
    }

    function insertConfirmation($data){
      $query = $this->db->select('facebookID')
        ->from('confirmation')
        ->where('facebookID', $data['facebookID'])
        ->get();

      if ( $query->num_rows() == 0 ) {
        $this->db->insert('confirmation',$data);
      }
    }

}
