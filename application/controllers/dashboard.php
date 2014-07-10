<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

  public function __construct() {
    session_start();
    parent::__construct();

    if(!isset($_SESSION['username'])) {
      redirect('admin');
    }
  }

  /**
   * DASHBOARD PAGE
   */

  public function index() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view', $data);
    $this->load->view('templates/sidebar_view');

    $this->load->view('templates/dashboard_view', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * PROJECTS PAGE
   */

  function projects() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/projects_view', $data);
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * USERS ADMINISTRATION
   */

  function users() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    if ($data['user'][0]['role'] == 4) {
      $this->load->view('templates/users_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
    elseif($data['user'][0]['role'] == 1) {
      $this->load->view('templates/settings_view', $data);
    }
    else {
      show_404();
    }
  }

  /**
   * USERS ADMINISTRATION
   */

  function comments() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view',$data);
    $this->load->view('templates/sidebar_view');
    $this->load->view('templates/comments_view', $data);
    $this->load->view('templates/settings_view', $data);
    $this->load->view('templates/footer');
  }

  /**
   * Test temporary
   */

  function test() {
    $this->load->view('templates/test_view');
  }

  /**
   * Clients
   */

  function clients() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view',$data);
    $this->load->view('templates/sidebar_view');
    $this->load->view('templates/client_view', $data);
    $this->load->view('templates/settings_view', $data);
    $this->load->view('templates/footer');
  }

  /**
   * Add client
   */

  function addclient() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
//    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/addclient_view', $data);
    $this->load->view('templates/settings_view', $data);
  }


  function  switch_help() {
    $this->load->model('dashboard_model');
    $data['help'] = $this->dashboard_model->settings_help($_SESSION['username'], $this->input->post('help_block'));
    $url = $this->input->post('input_url');
    redirect(base_url().$url);
  }

  function addclient_form() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('client_title', 'Company title', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('client_email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('client_phone', 'Phone number', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('client_address', 'Address', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('client_city', 'City', 'trim|required');
    $this->form_validation->set_rules('client_country', 'Country', 'trim|required');

    if ($this->form_validation->run() !== false) {
    redirect(base_url());
    }
    else {
      $this->load->model('admin_model');
      $data['user'] = $this->admin_model->get_user($_SESSION['username']);
      $data['users'] = $this->admin_model->get_users();
//    $data['roles'] = $this->admin_model->get_roles();
      $this->load->view('templates/head');
      if($data['user'][0]['helpblock']==1) {
        $this->load->view('templates/help_block_view');
      }
      $this->load->view('templates/addclient_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
//    if ($this->form_validation->run() !== false) {
//      $this->load->model('admin_model');
//      if($query=$this->admin_model->create_member()) {
//        $this->load->view('login/invite_view');
//      }
//    }
//    else {
//      $this->load->view('login/signup_view');
//    }
  }

  function profile() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/profile_view', $data);
    $this->load->view('templates/settings_view', $data);
  }



  function update_profile() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[3]');

    if ($this->form_validation->run() !== false) {
      $this->load->model('admin_model');
      if($query=$this->admin_model->create_member()) {
        $this->load->view('login/invite_view');
      }
    }
    else {
      $this->load->model('admin_model');
      $data['user'] = $this->admin_model->get_user($_SESSION['username']);
      $data['users'] = $this->admin_model->get_users();
      $this->load->view('templates/head');
      if($data['user'][0]['helpblock']==1) {
        $this->load->view('templates/help_block_view');
      }
      $this->load->view('templates/profile_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
  }



}
