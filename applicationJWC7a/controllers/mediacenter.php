<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mediacenter extends CI_Controller {

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
    $this->load->helper(array('html'));
    $this->load->view('mediacenter');
  }



}
