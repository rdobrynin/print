<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Task_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }


    /**
     * Get types of tasks
     * @return mixed
     */

    public function getTaskTypes() {
        $query = $this
            ->db
            ->get('task_type');
        return $query->result_array();
    }

    /**
     * Get types of tasks
     * @return mixed
     */

    public function updateTaskType($id,$title) {
        $data = array(
            'title' =>  $title
        );

        $this->db->where('id', $id);
        $update =$this->db->update('task_type', $data);
        return $update;
    }




    /**
     * get users();
     * @return mixed
     */

    public function get_imps() {
        $query = $this
            ->db
            ->where('role', '2')
            ->get('users');
        return $query->result_array();
    }


}


