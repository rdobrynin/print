<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function verify_user() {
    $query = $this
      ->db
      ->where('email_address', 'roman.dobrynin@gmail.com')
      ->where('password', 'Baboza7791')
      ->get('users');
    print_r($query->result_array());
    return $query->result_array();


  }

}
