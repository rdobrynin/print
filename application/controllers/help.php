<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Help extends CI_Controller {

  function __construct() {
    parent::__construct();
    session_start();
      $this->load->model('admin_model');
  }

  public function index() {
    $this->load->view('help/information_view');
  }
    public function profile() {
        $this->load->view('help/profile_view');
    }

    public function manage_projects() {
        $this->load->view('help/projects_view');
    }
    public function manage_tasks() {
        $this->load->view('help/tasks_view');
    }
    public function users() {
        $this->load->view('users/persons_view');
    }
    public function persons() {
        $this->load->view('help/persons_view');
    }
    public function comments() {
        $this->load->view('help/comments_view');
    }
    public function reports() {
        $this->load->view('help/reports_view');
    }
    public function charts() {
        $this->load->view('help/charts_view');
    }
    public function team() {
        $this->load->view('help/team_view');
    }
    public function notification() {
        $this->load->view('notification/persons_view');
    }
    public function faq() {
        $this->load->view('help/persons_view');
    }



}

