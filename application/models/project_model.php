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

    /**
     * Update projects
     * @param $id
     * @param $title
     */

    public function updateProject($id,$title,$desc) {
        $data = array(
            'title' => $title,
            'description' => $desc,
            'date_edited' => time()
        );
        $this->db->where('pid', $id);
        $this->db->update('project', $data);
    }

    /**
     * Get projects
     * @return mixed
     */

    public function get_projects() {
        $query = $this
            ->db
            ->get('project');
        return $query->result_array();
    }

    /**
     * Count projects
     * @return mixed
     */

    public function countProjects() {
        $query = $this->db->get('project');
        return  $query->num_rows();
    }

    /**
     * Create Event
     * @param $uid
     * @param $title
     * @param $text
     * @return mixed
     */

    public function createEvent($uid,$title,$text) {

        $data = array (
            'uid' => $uid,
            'title' => $title,
            'text' => $text
        );
        $insert = $this->db->insert('events', $data);
        return $insert;
    }

    /**
     * Get last record from event
     * @return mixed
     */


    public function readEvent() {
        $query = $this
            ->db
            ->get('events');
        return $query->last_row();
    }

}

