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
    if( $data["sex"] == "0" ) {
      $data["sex"] = "";
    }
    if( $data["grade"] == "0" ) {
      $data["grade"] = "";
    }
    if( $data["knowFrom"] == "0" ) {
      $data["knowFrom"] = "";
    } else if( $data["knowFrom"] == "etc" ) {
      $data["knowFrom"] = $this->input->post('inputKnowFromEtc');
    }
    if( $data["province"] == "0" ) {
      $data["province"] = "";
    }
    return $data;
  }

  function _protectData( $txt ) {
    return str_replace(array("\r\n","\r","\n"), "\\n", $txt);
  }

  function _more_validation( $data ) {
    $ret = "";
    if( strlen( $data["national_ID"] ) != 0 && preg_match( "/^([0-9]{13})$/", $data["national_ID"] ) == 0 ) {
      $ret .= "<p class='show'>เลขบัตรประชาชนไม่ถูกต้อง</p>";
    } else if( strlen( $data["phone"] ) != 0 && preg_match( "/^(0[0-9]{9})$/", $data["phone"] ) == 0 ) {
      $ret .= "<p class='show'>หมายเลขโทรศัพท์ไม่ถูกต้อง</p>";
    } else if( strlen( $data["postalCode"] ) != 0 && preg_match( "/^([0-9]{5})$/", $data["postalCode"] ) == 0 ) {
      $ret .= "<p class='show'>รหัสไปรษณีย์ไม่ถูกต้อง</p>";
    }  else if( strlen( $data["email"] ) != 0 && !filter_var( $data["email"],FILTER_VALIDATE_EMAIL) ) {
      $ret .= "<p class='show'>E-mail ไม่ถูกต้อง</p>";
    } else if( strlen( $data["parentPhone"] ) != 0 && preg_match( "/^(0[0-9]{9})$/", $data["parentPhone"] ) == 0 ) {
      $ret .= "<p class='show'>เบอร์โทรผู้ปกครองไม่ถูกต้อง</p>";
    }
    return $ret;
  }

  public function edit( $status = "normal" ) {

    $this->load->helper(array('form','html'));
    $this->load->model('Register_Model','register');
    $this->load->model('Homework_Model','homework');

    $user_id =$this->facebook->getUser();
    if(!$this->register->checkRegister($user_id)){
      redirect('register/index/'.$type, 'refresh');
    }

    $type = $this->register->getUserType($user_id);
      switch( $type ) {
        case "Content" : $type = 1; break;
        case "Design" : $type = 2; break;
        case "Marketing" : $type = 3; break;
      }

    $data = array(
      'type' => $type,
      'redirect' => '',
      'edit' => '1',
      'user_id' => $user_id
    );

    if( $status == "update" ) {
      $form_homework_data=array(
          'q1'=>$this->_protectData( $this->input->post('inputQ1') ),
          'q2'=>$this->_protectData( $this->input->post('inputQ2') ),
          'q3'=>$this->_protectData( $this->input->post('inputQ3') ),
          'q4'=>$this->_protectData( $this->input->post('inputQ4') ),
          'q5'=>$this->_protectData( $this->input->post('inputQ5') ),
      );
      $this->homework->update($form_homework_data,$user_id);
    }

    $data["form"] = $this->register->data($user_id);
    $data["formhomework"] = $this->homework->data($user_id); 
    $data["redirect"] = "";

    if($type == 1)
      $this->load->view('register/step1_C',$data);
    else if($type == 2)
      $this->load->view('register/step1_D',$data);
    else if($type == 3)
      $this->load->view('register/step1_M',$data);
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
        'redirect' => "",
        'edit' => '',
        'user_id' => $user_id
      );

      $form_register_data = $this->_cleanData( array(
          'profilePic'=>$this->input->post('inputProfilePic'),
          'registerType'=>$type,
          'name'=>$this->_protectData( $this->input->post('inputName') ),
          'surname'=>$this->_protectData( $this->input->post('inputSurname') ),
          'nickname'=>$this->_protectData( $this->input->post('inputNickname') ),
          'sex'=>$this->_protectData( $this->input->post('inputSex') ),
          'national_ID'=>$this->_protectData( $this->input->post('inputNational_ID') ),
          'school'=>$this->_protectData( $this->input->post('inputSchool') ),
          'grade'=>$this->_protectData( $this->input->post('inputGrade') ),
          'phone'=>$this->_protectData( $this->input->post('inputPhone') ),
          'address'=>$this->_protectData( $this->input->post('inputAddress') ),
          'province'=>$this->_protectData( $this->input->post('inputProvince') ),
          'postalCode'=>$this->_protectData( $this->input->post('inputPostalCode') ),
          'email'=>$this->_protectData( $this->input->post('inputEmail') ),
          'knowFrom'=>$this->_protectData( $this->input->post('inputKnowFrom') ),
          'foodAllergy'=>$this->_protectData( $this->input->post('inputFoodAllergy') ),
          'disease'=>$this->_protectData( $this->input->post('inputDisease') ),
          'drugAllergy'=>$this->_protectData( $this->input->post('inputDrugAllergy') ),
          'specialFood'=>$this->_protectData( $this->input->post('inputSpecialFood') ),
          'parentPhone'=>$this->_protectData( $this->input->post('inputParentPhone') ),
          'registerDate'=>date('Y-m-d H:i:s', time()),
          //'parentPhone'=>$this->input->post('input'),
          'status'=>'InProgress',
          'sizeshirt'=>$this->_protectData( $this->input->post('inputSizeShirt') ),
      ) );

      $form_homework_data=array(
          'q1'=>$this->_protectData( $this->input->post('inputQ1') ),
          'q2'=>$this->_protectData( $this->input->post('inputQ2') ),
          'q3'=>$this->_protectData( $this->input->post('inputQ3') ),
          'q4'=>$this->_protectData( $this->input->post('inputQ4') ),
          'q5'=>$this->_protectData( $this->input->post('inputQ5') ),
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
                    'field' => 'inputSurname',
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
                 'label'   => 'รู้จักเราจากที่ไหน',
                 'rules'   => 'trim|required'
              ),
              array (
                      'field' => 'inputSizeShirt',
                      'label' => 'ไซส์เสื้อ',
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

      $more_valid = $this->_more_validation($form_register_data);

      if( $this->register->isRegisted($user_id) ) {
        redirect('register/edit/','refresh');
      }

      if ( $this->form_validation->run() == TRUE && strlen($more_valid) == 0 && $status == "submit" ) {
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

        $data["redirect"] = "";
        if( $status == "confirm" )
          $data["redirect"] = "5";

        $data["error_result"] = $more_valid;

        if($type == 1)
          $this->load->view('register/step1_C',$data);
        else if($type == 2)
          $this->load->view('register/step1_D',$data);
        else if($type == 3)
          $this->load->view('register/step1_M',$data);
      }

  }

  public function registed() {
    $this->load->view('register/registed');
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
