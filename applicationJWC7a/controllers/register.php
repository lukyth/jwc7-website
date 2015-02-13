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
        $this->load->model('Register_Model','register');
		}

  public function index()
  {
    $this->load->helper(array('form','html'));
    $codeToken=$this->input->get('code', TRUE);
    $data=array();

    $user_id =$this->facebook->getUser();
    if($user_id) {
      try {
        if(!$this->register->checkRegister($user_id))
        {
          $this->register->facebookID=$user_id;
          $this->register->insert();
        }
        redirect('register/step1', 'refresh');
      } catch(FacebookApiException $e) {
        $data['login_url'] = $this->facebook->getLoginUrl();
        //echo 'Please <a href="' . $login_url . '">login.</a>';
        //var_dump($e->getType());
        //var_dump($e->getMessage());
      }
    } else {

      // No user, print a link for the user to login
      $data['login_url'] = $this->facebook->getLoginUrl();
      $this->load->view('register/index',$data);

    }



  }

  public function step1(){
      $user_id =$this->facebook->getUser();
      if(!$this->register->checkRegister($user_id)){
        redirect('register', 'refresh');
      }

      



  }



}
