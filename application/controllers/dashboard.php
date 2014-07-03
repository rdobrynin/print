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
    $this->load->view('templates/dashboard_view', $data);
    $this->load->view('templates/profile_view', $data);
  }

  /**
   * PROJECTS PAGE
   */

  function projects() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/projects_view', $data);
    $this->load->view('templates/profile_view', $data);
  }

  /**
   * USERS ADMINISTRATION
   */

  function users() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    if ($data['user'][0]['role'] == 4) {
      $this->load->view('templates/users_view', $data);
      $this->load->view('templates/profile_view', $data);
    }
    elseif($data['user'][0]['role'] == 1) {
      $this->load->view('templates/profile_view', $data);
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
    $this->load->view('templates/comments_view', $data);
  }

  function test() {
    $this->load->view('templates/test_view');
  }

  function clients() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/client_view', $data);
    $this->load->view('templates/profile_view', $data);
  }

  function addclient() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/addclient_view', $data);
    $this->load->view('templates/profile_view', $data);
  }


}
