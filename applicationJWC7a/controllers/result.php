<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {

  function __construct(){
       parent::__construct();
       $this->fb_config = array(
         'appId'  => '1540852432838036',
         'secret' => '06ac519f4aa347ae3059da8bc6504ea6'
       );
       $this->load->library('facebook/facebook', $this->fb_config,'facebook');
   }

  public function index()
  {
    $this->load->model('Result_model', 'result');

    $data = array();
    $data['design']['candidate'] = $this->result->getList('Design', 'candidate');
    $data['design']['spare'] = $this->result->getList('Design', 'spare');
    $data['content']['candidate'] = $this->result->getList('Content', 'candidate');
    $data['content']['spare'] = $this->result->getList('Content', 'spare');
    $data['marketing']['candidate'] = $this->result->getList('Marketing', 'candidate');
    $data['marketing']['spare'] = $this->result->getList('Marketing', 'spare');

    $this->load->view('result/index', array('data' => $data));
  }

  public function upload() {

    if( $this->input->server('REQUEST_METHOD') == "GET" ) {
      redirect('result/confirmation', 'refresh');
      return ;
    }

    $user_id =$this->facebook->getUser();
    if( !$user_id ) {
      redirect('result/confirmation', 'refresh');
      return ;
    }

    $config['upload_path'] = 'assets/confirmation/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']	= '4096';
    $config['encrypt_name']  = true;

    $this->load->library('upload',$config);
    $this->load->model('Result_Model','result');

    $cur_file = $this->result->getFileName( $user_id, $this->input->post('type') );
    if( strlen($cur_file) != 0 ) unlink('assets/confirmation/'.$cur_file);

    if( $this->upload->do_upload() ) {
      $this->result->updateFileName( $user_id, $this->upload->data()["file_name"],$this->input->post('type') );
      redirect('result/confirmation', 'refresh');
    } else {
      $err = $this->upload->display_errors();
      if( strcmp( $err,"<p>The filetype you are attempting to upload is not allowed.</p>" ) == 0 ) {
        $err = "ประเภทของไฟล์ ไม่ถูกต้อง";
      } else if( strcmp( $err,"<p>The uploaded file exceeds the maximum allowed size in your PHP configuration file.</p>" ) == 0 ) {
        $err = "ขนาดของไฟล์นั้นใหญ่เกินไป";
      } else if( strcmp( $err,"<p>You did not select a file to upload.</p>") == 0 ) {
        $err = "คุณยังไม่ได้ทำการเลือกไฟล์ใดๆ";
      } else {
        $err = "อัพโหลดไม่สมบูรณ์ กรุณาลองใหม่อีกครั้ง";
      }
      $this->confirmation( $err );
    }
  }

  public function confirmation( $err = "" ) {
    $user_id =$this->facebook->getUser();
    $data['login_url'] = $this->facebook->getLoginUrl();
    $data['error'] = $err;
    $user_id =$this->facebook->getUser();

    $this->load->helper(array('form', 'url'));

     if( $user_id ) {

      $this->load->model('Result_Model','result');
      $isPass = $this->result->checkIsPassed( $user_id );
      if( $isPass != 1 ) {
       $this->load->view('result/sorry',array("type" => $isPass == 2 ? "revoke" : ""));
       return ;
      }

      $data["user_data"] = $this->result->getUserData( $user_id )[0];

      $data["facebook_id"] = $user_id;
      $this->load->view('result/confirmation',$data);
    } else {
      $this->load->view('result/confirmlogin',$data);
    }
  }

  public function sorry() {
    $data = array(
      "error" => "",
      "type" => ""
    );
    $this->load->view('result/sorry',$data);
  }

  public function confirmation_2() {
    $user_id =$this->facebook->getUser();
    $data['login_url'] = $this->facebook->getLoginUrl();
    $user_id =$this->facebook->getUser();
    if( $user_id ) {
      $data["facebook_id"] = $user_id;
      $this->load->view('result/confirmation_2',$data);
    } else {
      $this->load->view('result/confirmlogin',$data);
    }
  }

  public function getUserID() {
    $user_id =$this->facebook->getUser();
    $data['login_url'] = $this->facebook->getLoginUrl();
    $data['error'] = "";
    if( $user_id ) {
      print $user_id;
    } else {
      $this->load->view('result/confirmlogin',$data);
    }
  }
}
