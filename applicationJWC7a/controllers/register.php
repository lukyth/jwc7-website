<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

  /**
   * Subscribe Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/register
   *	- or -
   * 		http://example.com/index.php/register/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
   function __construct(){
  		    parent::__construct();
   		   $fb_config = array(
          'appId'  => '1540852432838036',
          'secret' => '06ac519f4aa347ae3059da8bc6504ea6'
        );

        $this->load->library('facebook/facebook', $fb_config,'facebook');

		}

  public function index($type)
  {
    $this->load->helper(array('form','html'));
    $this->load->model('Register_Model','register');
    $codeToken=$this->input->get('code', TRUE);
    $data=array('type' =>$type);

    $user_id =$this->facebook->getUser();
    if($user_id) {
      try {
        if(!$this->register->checkRegister($user_id))
        {
          $this->register->facebookID=$user_id;
          $this->register->insert();
        }
        redirect('register/step1/'.$type, 'refresh');
      } catch(FacebookApiException $e) {
        $data['login_url'] = $this->facebook->getLoginUrl();
        //echo 'Please <a href="' . $login_url . '">login.</a>';
        //var_dump($e->getType());
        //var_dump($e->getMessage());
      }
    } else {

      // No user, print a link for the user to login
      $data['login_url'] = $this->facebook->getLoginUrl();
      if($type == 1)
        $this->load->view('register/index_C',$data);
      else if($type == 2)
        $this->load->view('register/index_D',$data);
      else if($type == 3)
        $this->load->view('register/index_M',$data);

    }



  }

  public function _cleanData( $data ) {
    foreach( $data as $sub ) {
      $sub = addslashes( $sub );
    }
    if( $data["sex"] == "0" ) {
      $data["sex"] = "";
    }
    if( $data["grade"] == "0" ) {
      $data["grade"] = "";
    }
    if( $data["knowFrom"] == "0" ) {
      $data["knowFrom"] = "";
    } else if( $data["knowFrom"] == "etc" ) {
      $data["knowFrom"] = $this->input->post('inputKnowFormEtc');
    }
    if( $data["province"] == "0" ) {
      $data["province"] = "";
    }
    return $data;
  }

  public function step1($type = "1",$status = "normal"){

      $this->load->helper(array('form','html'));
      $this->load->library('form_validation');
      $this->load->model('Register_Model','register');
      $this->load->model('Homework_Model','homework');
      $user_id =$this->facebook->getUser();
      if(!$this->register->checkRegister($user_id)){
        redirect('register/index/'.$type, 'refresh');
      }
      $data=array(
        'type' => $type,
        'redirect' => ""
      );

      $form_register_data= $this->_cleanData( array(
          'profilePic'=>$this->input->post('inputProfilePic'),
          'registerType'=>$type,
          'name'=>$this->input->post('inputName'),
          'surname'=>$this->input->post('inputSurname'),
          'nickname'=>$this->input->post('inputNickname'),
          'sex'=>$this->input->post('inputSex'),
          'national_ID'=>$this->input->post('inputNational_ID'),
          'school'=>$this->input->post('inputSchool'),
          'grade'=>$this->input->post('inputGrade'),
          'phone'=>$this->input->post('inputPhone'),
          'address'=>$this->input->post('inputAddress'),
          'province'=>$this->input->post('inputProvince'),
          'postalCode'=>$this->input->post('inputPostalCode'),
          'email'=>$this->input->post('inputEmail'),
          'knowFrom'=>$this->input->post('inputKnowFrom'),
          'foodAllergy'=>$this->input->post('inputFoodAllergy'),
          'disease'=>$this->input->post('inputDisease'),
          'drugAllergy'=>$this->input->post('inputDrugAllergy'),
          'specialFood'=>$this->input->post('inputSpecialFood'),
          'parentPhone'=>$this->input->post('inputParentPhone'),
          'registerDate'=>date('Y-m-d H:i:s', time()),
          //'parentPhone'=>$this->input->post('input'),
          'status'=>'InProgress',
          'sizeshirt'=>$this->input->post('inputSizeShirt'),
      ) );

      $form_homework_data=array(
          'q1'=>$this->input->post('inputQ1'),
          'q2'=>$this->input->post('inputQ2'),
          'q3'=>$this->input->post('inputQ3'),
          'q4'=>$this->input->post('inputQ4'),
          'q5'=>$this->input->post('inputQ5'),
      );

      if( $status == "tmp" ) {
        
        $this->register->update($form_register_data,$user_id);
        $this->homework->update($form_homework_data,$user_id);

        die();
      }

      $this->form_validation->set_message('required', 'กรุณากรอก %s');
      $rulesform=array(
              array(
                     'field'   => 'inputName',
                     'label'   => 'ชื่อ',
                     'rules'   => 'trim|required'
              ),
              array(
                    'field' => 'inputSurName',
                    'label' => 'นามสกุล',
                    'rules' => 'trim|required'
              ),
              array(
                     'field'   => 'inputNickname',
                     'label'   => 'ชื่อเล่น',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputSex',
                     'label'   => 'เพศ',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputNational_ID',
                     'label'   => 'เลขบัตรประชาชน',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputSchool',
                     'label'   => 'ชื่อโรงเรียน',
                     'rules'   => 'trim|required'
              ),
              array(
                      'field' => 'inputGrade',
                      'label' => 'ระดับการศึกษา',
                      'rules' => 'trim|required'
              ),
              array(
                     'field'   => 'inputPhone',
                     'label'   => 'เบอร์โทรศัพท์',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputAddress',
                     'label'   => 'ที่อยู่บ้าน',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputProvince',
                     'label'   => 'จังหวัด',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputPostalCode',
                     'label'   => 'รหัสไปรษณีย์',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputEmail',
                     'label'   => 'E-Mail',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputKnowFrom',
                     'label'   => 'รู้จักค่ายจากที่ไหน',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputKnowFrom',
                     'label'   => 'ไซส์เสื้อ',
                     'rules'   => 'trim|required'
              ),
              array (
                      'field' => 'inputParentPhone',
                      'label' => 'เบอร์โทรผู้ปกครอง',
                      'rules' => 'trim|required'
              ),
            array(
                   'field'   => 'inputQ1',
                   'label'   => 'คำถามข้อที่ 1',
                   'rules'   => 'trim|required'
            ),
            array(
                   'field'   => 'inputQ2',
                   'label'   => 'คำถามข้อที่ 2',
                   'rules'   => 'trim|required'
            ),
            array(
                   'field'   => 'inputQ3',
                   'label'   => 'คำถามข้อที่ 3',
                   'rules'   => 'trim|required'
            ),
            array(
                   'field'   => 'inputQ4',
                   'label'   => 'คำถามข้อที่ 4',
                   'rules'   => 'trim|required'
            )
      );

      $this->form_validation->set_rules($rulesform);

      if ($this->form_validation->run() == TRUE) {
          $form_register_data['status'] ='Homework_Submitted';

          $data['isSubmited'] = "true";
          $data['result']='SAVE';
          //print_r($form_register_data);
          $this->register->update($form_register_data,$user_id);
          $this->homework->update($form_homework_data,$user_id);
          if($type == 1)
            redirect('register/finish/c', 'refresh');
          else if($type == 2)
            redirect('register/finish/d', 'refresh');
          else if($type == 3)
            redirect('register/finish/m', 'refresh');
      }
      else{

        $data["form"] = $this->register->data($user_id);
        $data["formhomework"] = $this->homework->data($user_id);

        if( $this->input->post("issubmited") == "true" )
          $data["redirect"] = "5";

        if($type == 1)
          $this->load->view('register/step1_C',$data);
        else if($type == 2)
          $this->load->view('register/step1_D',$data);
        else if($type == 3)
          $this->load->view('register/step1_M',$data);
      }

  }



  public function finish($type){
    $this->load->library(array('email'));
    $this->load->model('Register_Model','register');
    $user_id =$this->facebook->getUser();

    if($this->register->checkRegister($user_id)){
        $this->email->initialize();
        $this->email->from('jwc7@ywc.in.th', 'jwc7');

        $this->email->to($this->register->email);

        $this->email->subject('ยืนยันการสมัครค่าย JWC7');
        $this->email->message('ขอบคุณที่สมัครค่าย JWC7 <br><br> ขอบคุณครับ <br>ทีมงาน jwc7');
        if($this->email->send()) {
            $data['result']='OK';
        }
        else {
            $data['result']='ERROR';
            $data['error'] =$this->email->print_debugger();
        }

        if ($type == 'c') {
          $this->load->view('register/finished_C',$data);
        }
        else if ($type == 'd') {
          $this->load->view('register/finished_D',$data);
        }
        else if ($type == 'm') {
          $this->load->view('register/finished_M',$data);
        }
    }else {
      redirect('main', 'refresh');
    }

  }
}
