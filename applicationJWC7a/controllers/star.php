<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Star extends CI_Controller {

  public function index()
  {
    $this->load->model('Star_model', 'star');

    $data = array();
    $data['male'] = $this->star->getReal('M');
    $data['female'] = $this->star->getReal('F');

    $this->load->helper(array('form', 'url'));
    $this->load->view('star', array('data' => $data));
  }

  public function submit() {

    if( $this->input->server('REQUEST_METHOD') == "GET" ) {
      redirect('star', 'refresh');
      return;
    }

    redirect('star', 'refresh');

  }
}
