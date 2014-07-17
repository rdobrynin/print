<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Help extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('admin_model');

    }

    public function index() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/information_view');
    }

    public function profile() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/profile_view');
    }

    public function manage_projects() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/projects_view');
    }

    public function manage_tasks() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/tasks_view');
    }
    public function clients() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/client_view');
    }


    public function users() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/persons_view');
    }

    public function persons() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/persons_view');
    }

    public function comments() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/comments_view');
    }

    public function reports() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/reports_view');
    }

    public function charts() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/charts_view');
    }

    public function team() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/team_view');
    }

    public function notifications() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/notification_view');
    }

    public function faq() {
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        if ($data['user'][0]['helpblock'] == 1) {
            $this->load->view('templates/help_block_view');
        }
        $this->load->view('help/persons_view');
    }


}

