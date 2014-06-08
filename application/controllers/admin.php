<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin extends CI_Controller {

  public function index() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email_address', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

    if ($this->form_validation->run() !== false) {
      $this->load->model('admin_model');
      $this->admin_model->verify_user('roman.dobrynin@gmail.com', 'qwerty');

    }


    $this->load->view('login_view');
  }
}
