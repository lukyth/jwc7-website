<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe extends CI_Controller {

  /**
   * Subscribe Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/subscribe
   *	- or -
   * 		http://example.com/index.php/subscribe/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    redirect('', 'refresh');
    $this->load->helper(array('form','html'));
    $this->load->library('form_validation');

    $this->load->model('subscribe_model','subscribe');

    $data=array();

    $this->form_validation->set_message('is_unique', 'E-Mail นี้มีการลงทะเบียนแล้ว');
    $this->form_validation->set_message('valid_email', 'กรุณากรอก E-Mail เท่านั้น');
    $this->form_validation->set_message('required', 'กรุณากรอก E-Mail');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[subscribe.email]');
    if ($this->form_validation->run() == TRUE) {
        $result=$this->subscribe->insert();
        if($result==1){
          $data['result']='บันทึกข้อมูล';
        }else {
          $data['result']='ไม่สมารถบันทึกข้อมูล';
        }
    }

    $this->load->view('subscribe',$data);

  }



}
