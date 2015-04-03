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

  public function confirmation() {
    $user_id =$this->facebook->getUser();
    $data['login_url'] = $this->facebook->getLoginUrl();
    $user_id =$this->facebook->getUser();
    if( $user_id ) {
      $data["facebook_id"] = $user_id;
      $this->load->view('result/confirmation',$data);
    } else {
      $this->load->view('result/confirmlogin',$data);
    }
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
}
