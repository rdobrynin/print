<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Project_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }


    /**
     * Create new project
     * @param $title
     * @param $desc
     * @param $owner_id
     * @return mixed
     */

    public function create_project($title,$desc,$uid) {
        $data = array (
            'title' => $title,
            'description' => $desc,
            'owner' => $uid
        );
        $insert = $this->db->insert('project', $data);
        return $insert;
    }
}


