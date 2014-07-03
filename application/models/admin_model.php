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
      ->where('password', md5($password))
    ->limit('1')
      ->get('users');
    if ($query->num_rows > 0) {
      return $query->row();
    }
    else {
      return FALSE;
    }
  }

  public function check_email($email) {
    $query = $this
      ->db
      ->where('email_address', $email)
      ->limit('1')
      ->get('users');
    if ($query->num_rows > 0) {
      return $query->result();
    }
    else {
      error_reporting(0);
      return FALSE;
    }
  }


  public function create_member() {
    $new_member_insert_data = array (
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email_address' => $this->input->post('email_address_signup'),
      'password' => $this->input->post('password_signup'),
      'role' => $this->input->post('role_signup')
    );
    $insert = $this->db->insert('users', $new_member_insert_data);
    return $insert;
  }

  public function get_user($username) {
    $query = $this
      ->db
    ->where('email_address', $username)
      ->get('users');
    return $query->result_array();
  }

  public function get_users() {
    $query = $this
      ->db
      ->get('users');
    return $query->result_array();
  }

  public function get_roles() {
    $query = $this
      ->db
      ->get('roles');
    return $query->result_array();
  }
}
