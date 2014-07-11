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

  public function update_member($id) {
    $data = array (
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'phone' => $this->input->post('phone'),
      'email_address' => $this->input->post('email_address'),
      'skype_address' => $this->input->post('skype_address'),
      'facebook_address' => $this->input->post('facebook_address'),
      'linkedin_address' => $this->input->post('facebook_address'),
      'date_edited' => $this->input->post('date_edited'),
    );
    $this->db->where('id', $id);
    $update = $this->db->update('users', $data);
    return $update;
  }

  public function insert_member_phone($id) {
    $phone_array = $this->input->post('add_phone');
    $update = array();
    foreach ($phone_array as $phone) {
      $data = array(
        'id' => $id,
        'phone' => $phone,
      );
      $update = $this->db->insert('users_phones', $data);
    }
    return $update;
  }


  public function get_user($username) {
    $query = $this
      ->db
    ->where('email_address', $username)
      ->get('users');
    return $query->result_array();
  }

  public function get_user_id($id) {
    $query = $this
      ->db
      ->where('id', $id)
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
