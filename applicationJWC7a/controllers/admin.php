<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  /**
   * admin Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/admin
   *	- or -
   * 		http://example.com/index.php/admin/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */

  public function index(){

    $this->checkAccess();

    $this->load->view('admin/index');
  }

  public function login()
  {
    //echo sha1("night");
    $this->load->helper(array('form','html'));
    $this->load->library(array('form_validation'));
    $this->load->model('user_model','user');

    $data=array();

    $this->form_validation->set_message('required', 'กรุณากรอก %s');
    $this->form_validation->set_rules('inputUsername', 'Username', 'trim|required');
    $this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
    if ($this->form_validation->run() == TRUE) {
          $usename=$this->input->post('inputUsername');
          $password=$this->input->post('inputPassword');
          if($this->user->login($usename,$password)){
            $session_array=array('id'=>$this->user->getId(),'username'=>$this->user->getUsername(),'permission'=>$this->user->getPermission());
            $this->session->set_userdata('login', $session_array);

            redirect('admin/index', 'refresh');

          }else {
            $data['result']= 'no';
          }
    }

    $this->load->view('admin/login',$data);

  }



  public function subscribe() {

    $this->load->model('subscribe_model','subscribe');

    $this->checkAccess();

    $data=array();

    $data['listSubscribe']=$this->subscribe->get();

    $this->load->view('admin/subscribe',$data);
  }

  public function sendmail(){
      $this->checkAccess();
      $this->load->helper(array('form','html'));
      $this->load->library(array('form_validation','email'));


      $data=array();

      $this->form_validation->set_message('required', 'กรุณากรอก %s');
      $this->form_validation->set_rules('inputSubject', 'Subject', 'trim|required');
      $this->form_validation->set_rules('text', 'Text', 'trim|required');

      $sendToAll=$this->input->post('inputSendAll') ? true:false;
      if(!$sendToAll) $this->form_validation->set_rules('inputTo', 'To', 'trim|required');

      if ($this->form_validation->run() == TRUE) {
            $this->email->initialize();
            $this->email->from('pichet_nk@hotmail.com', 'pichet');

            if($sendToAll) {
                $query = $this->db->get('subscribe');
                $listEmail=array();
                foreach ($query->result()  as $row)
                {
                  array_push($listEmail,$row->email);
                }
                $this->email->to($listEmail);
            }
            else{
                $this->email->to($this->input->post('inputTo'));
            }

            $this->email->subject($this->input->post('inputSubject'));
            $this->email->message($this->input->post('inputText'));

            if($this->email->send()) {
              $data['result']='OK';
            }
            else {
              $data['result']='ERROR';
              $data['error'] =$this->email->print_debugger();
            }

      }
      $this->load->view('admin/sendmail',$data);

  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('admin', 'refresh');
  }

  private function checkAccess(){

    if ($this->session->userdata('login') == FALSE)
    {
       redirect('admin/login', 'refresh');
    }
  }
}
