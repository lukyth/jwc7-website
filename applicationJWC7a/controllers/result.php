<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
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

    $this->load->view('result', array('data' => $data));
  }
}