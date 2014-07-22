<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin extends CI_Controller {

  function __construct() {
    parent::__construct();
    session_start();
      $this->load->model('admin_model');
  }

  public function index() {

    if(isset($_SESSION['username'])) {
      redirect('dashboard');
    }

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

    if ($this->form_validation->run() !== false) {
     $res = $this
       ->admin_model
       ->verify_user(
         $this->input->post('email'),
         $this->input->post('password'));
      if($res !== FALSE) {
        $this->admin_model->online_status($res->id);
//person has account
        $_SESSION['username'] = $res->id;
        redirect('dashboard');
      }
      else {
          $this->load->view('login/head_view');
          $this->load->view('login/error_view');
          $this->load->view('login/login_view');
          $this->load->view('login/footer_view');
      }
    }
      else {
          $this->load->view('login/head_view');
          $this->load->view('login/login_view');
          $this->load->view('login/footer_view');
      }
  }

// logout and session destroy
  function logout() {
    $id=$this->admin_model->get_user_id($_SESSION['username']);
    $this->admin_model->offline_status($id[0]['id']);
    session_destroy();
    redirect(base_url());
  }

  function signup() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('password_signup', 'Password', 'trim|required|min_length[4]|md5');
    $this->form_validation->set_rules('password_signup_2', 'Password', 'trim|required|matches[password_signup]');
      $this->load->model('admin_model');

      $email_post = $this->input->post('email');
      $verify_email = $this->admin_model->verify_new_user($email_post );

      if ($verify_email !== TRUE) {
          if ($this->form_validation->run() !== FALSE) {
              if ($query = $this->admin_model->create_member()) {
                  $this->load->view('login/head_view');
                  $this->load->view('login/invite_view');
                  $this->load->view('login/footer_view');
              }
          }
          else {
              $this->load->view('login/signup_view');
          }
      }
      else {
          $this->load->view('login/signup_view');
      }
  }

//  forgot password or username
  function forgot() {
    session_destroy();
      $this->load->view('login/head_view');
    $this->load->view('login/forgot_view');
      $this->load->view('login/footer_view');
  }
}

