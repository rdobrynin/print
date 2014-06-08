<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function verify_user($email, $password) {
    $query = $this
      ->db
      ->where('email_address', $email)
      ->where('password', $password)
      ->get('users');
    if ($query->num_rows > 0) {
      return $query->row();
    }
    else {
      return FALSE;
    }
  }
}
