<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Dashboard_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  /**
   * Help block on/off
   * @param $email
   * @return bool
   */
  public function settings_help($email, $input) {
    $data = array(
      'email_address' => $email,
      'helpblock' =>  $input
    );

    $this->db->where('email_address', $email);
    $update =$this->db->update('users', $data);
    return $update;


  }
}
