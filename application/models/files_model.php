<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Files_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

    /**
     * Insert Avatar
     * @param $filename
     * @param $title
     * @param $user_id
     * @return mixed
     */

    public function insert_avatar($filename, $title, $user_id) {
        $data = array (
            'filename' => $filename,
            'title_avatar' => $title,
            'fid'=>$user_id
        );
        $result = $this->db->insert('files', $data);
        return $result;
    }
}
