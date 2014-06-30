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


  public function index() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $this->load->view('dashboard', $data);
  }

  function projects() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user($_SESSION['username']);
    $this->load->view('projects_view', $data);
  }

}
