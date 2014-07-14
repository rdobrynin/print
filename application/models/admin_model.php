<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  /**
   * Verify user
   * @param $email
   * @param $password
   * @return bool
   */

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

  /**
   * Check email
   * @param $email
   * @return bool
   */

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

  /**
   * Create member
   * @return mixed
   */

  public function create_member() {
    $data = array (
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email_address' => $this->input->post('email_address_signup'),
      'password' => $this->input->post('password_signup'),
      'role' => $this->input->post('role_signup')
    );
    $insert = $this->db->insert('users', $data);
    return $insert;
  }

  /**
   * Create company
   * @return mixed
   */

  public function create_client() {
    $data = array (
      'title' => $this->input->post('title'),
      'description' => $this->input->post('description'),
      'email' => $this->input->post('email'),
      'url' => $this->input->post('url'),
      'phone' => $this->input->post('phone'),
      'address' => $this->input->post('address'),
      'index' => $this->input->post('index'),
      'city' => $this->input->post('city'),
      'country' => $this->input->post('country'),
      'creator' => $this->input->post('curator')
    );
    $insert = $this->db->insert('client', $data);
    return $insert;
  }

  /**
   * Delete company
   * @return mixed
   */

  public function delete_client($cid) {
    $this->db->where('cid', $cid);
    $insert = $this->db->delete('client');
    return $insert;
  }

  /**
   * Update member
   * @param $id
   * @return mixed
   */

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

  /**
   * Change status to online
   * @param $id
   * @return mixed
   */

  public function online_status($id) {
    $data = array (
      'status' => 1
    );
    $this->db->where('id', $id);
    $update = $this->db->update('users', $data);
    return $update;
  }

  /**
   * Change status to offline
   * @param $id
   * @return mixed
   */

  public function offline_status($id) {
    $data = array (
      'status' => 0
    );
    $this->db->where('id', $id);
    $update = $this->db->update('users', $data);
    return $update;
  }



  /**
   * Insert member phone
   * @param $id
   * @return array
   */

  public function insert_member_phone($id) {
    $phone_array = $this->input->post('add_phone');
    $update = array();
    foreach ($phone_array as $phone) {
      $data = array(
        'pid' => $id,
        'phone' => $phone,
      );
      $update = $this->db->insert('users_phones', $data);
    }
    return $update;
  }

  /**
   * get user phones
   * @param $id
   * @return mixed
   */


  public function get_phones($id) {
    $query = $this
      ->db
      ->where('pid', $id)
      ->get('users_phones');
    return $query->result_array();
  }

  /**
   * Verify company title
   * @param $title
   * @return mixed
   */

  public function verify_client($title) {
    $query = $this
      ->db
      ->where('title', $title)
      ->get('client');
    error_reporting(0);
    return $query->result_array();

  }

  /**
   * get user();
   * @param $username
   * @return mixed
   */

  public function get_user($username) {
    $query = $this
      ->db
    ->where('email_address', $username)
      ->get('users');
    return $query->result_array();
  }


  /**
   * get own client ();
   * @param $username
   * @return mixed
   */

  public function get_own_client($id) {
    $query = $this
      ->db
      ->where('creator', $id)
      ->get('client');
    return $query->result_array();
  }

  /**
   * get ID of user
   * @param $id
   * @return mixed
   */

  public function get_user_id($id) {
    $query = $this
      ->db
      ->where('id', $id)
      ->get('users');
    return $query->result_array();
  }



 /**
   * get users();
   * @return mixed
   */

  public function get_users() {
    $query = $this
      ->db
      ->get('users');
    return $query->result_array();
  }

  /**
   * get roles();
   * @return mixed
   */

  public function get_roles() {
    $query = $this
      ->db
      ->get('roles');
    return $query->result_array();
  }
}
