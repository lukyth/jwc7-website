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

  public function index()
  {
    $this->load->helper(array('form','html'));
    $this->load->model('Register_Model','register');
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
      $this->load->helper(array('form','html'));
      $this->load->library('form_validation');
      $this->load->model('Register_Model','register');
      $this->load->model('Homework_Model','homework');
      $user_id =$this->facebook->getUser();
      if(!$this->register->checkRegister($user_id)){
        redirect('register', 'refresh');
      }
      $data=array();

      $this->form_validation->set_message('required', 'กรุณากรอก %s');
      $rulesform=array(
              array(
                     'field'   => 'inputName',
                     'label'   => 'Name',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputNickname',
                     'label'   => 'Nickname',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputSex',
                     'label'   => 'Sex',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputNational_ID',
                     'label'   => 'National ID',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputSchool',
                     'label'   => 'School',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputGrade',
                     'label'   => 'Grade',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputPhone',
                     'label'   => 'Phone',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputAddress',
                     'label'   => 'Address',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputProvince',
                     'label'   => 'Province',
                     'rules'   => 'trim|required'
              ),
              array(
                     'field'   => 'inputPostalCode',
                     'label'   => 'Postal Code',
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
          $form_register_data=array(
              'profilePic'=>$this->input->post('inputProfilePic'),
              'registerType'=>$this->input->post('inputRegisterType'),
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
              'registerDate'=>date('Y-m-d H:i:s', time()),
              //'parentPhone'=>$this->input->post('input'),
              'status'=>'Homework_Submitted',
              'sizeshirt'=>$this->input->post('inputSizeShirt'),
          );
          $form_homework_data=array(
              'q1'=>$this->input->post('inputQ1'),
              'q2'=>$this->input->post('inputQ2'),
              'q3'=>$this->input->post('inputQ3'),
              'q4'=>$this->input->post('inputQ4'),
          );



          $data['result']='SAVE';
          $this->Register_Model->update($form_register_data,$user_id);
          $this->Homework_Model->update( $form_homework_data,$user_id);
      }

      $this->load->view('register/step1',$data);



  }



}
