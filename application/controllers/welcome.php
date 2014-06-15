<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Welcome extends CI_Controller {

  public function __construct() {
    session_start();
    parent::__construct();

    if(!isset($_SESSION['username'])) {
      redirect('admin');
    }
  }


  public function index() {
    $this->load->view('welcome_message');
  }
}
