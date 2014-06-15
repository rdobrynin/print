<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin extends CI_Controller {

  function __construct() {
    parent::__construct();
    session_start();
  }

  public function index() {

    if(isset($_SESSION['username'])) {
      redirect('welcome');
    }

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email_address', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

    if ($this->form_validation->run() !== false) {
      $this->load->model('admin_model');
     $res = $this
       ->admin_model
       ->verify_user(
         $this->input->post('email_address'),
         $this->input->post('password'));
      if($res !== false) {
//person has account
        $_SESSION['username'] = $this->input->post('email_address');
        redirect('welcome');
      }
      else {
        echo 'Wrong password';
      }
    }
    $this->load->view('login_view');
  }

// logout and session destroy

  function logout() {
    session_destroy();
    $this->load->view('login_view');
  }
}
