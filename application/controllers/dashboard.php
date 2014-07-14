<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

  public function __construct() {
    session_start();
    parent::__construct();

    if(!isset($_SESSION['username'])) {
      redirect('admin');
    }
  }


//  function _remap($method) {
//    // $method contains the second segment of your URI
//    switch ($method) {
//      case 'dashboard':
//        $this->index();
//        break;
//      case 'profile':
//        $this->profile();
//        break;
//      case 'update_profile':
//        $this->update_profile();
//        break;
//      case 'comments':
//        $this->comments();
//        break;
//      case 'team':
//        $this->team();
//        break;
//      case 'users':
//        $this->users();
//        break;
//      case 'switch_help':
//        $this->switch_help();
//        break;
//      case 'clients':
//        $this->clients();
//        break;
//      case 'addclient':
//        $this->addclient();
//        break;
//      default:
//        $this->error();
//        break;
//    }
//  }


  /**
   * DASHBOARD PAGE
   */

  public function index() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view', $data);
    $this->load->view('templates/sidebar_view', $data);

    $this->load->view('templates/dashboard_view', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * PROJECTS PAGE
   */

  function projects() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view',$data);
    $this->load->view('templates/sidebar_view', $data);
    $this->load->view('templates/projects_view', $data);
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * USERS ADMINISTRATION
   */

  function users() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    if ($data['user'][0]['role'] == 4) {
      $this->load->view('templates/users_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
    elseif($data['user'][0]['role'] == 1) {
      $this->load->view('templates/settings_view', $data);
    }
    else {
      show_404();
    }
  }

  /**
   * USERS ADMINISTRATION
   */

  function comments() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view',$data);
    $this->load->view('templates/sidebar_view', $data);
    $this->load->view('templates/settings_view', $data);
    $this->load->view('templates/comments_view', $data);
  }

  /**
   * Test temporary
   */

  function test() {
//    $this->load->view('templates/success_view');
  }

  /**
   * Clients
   */

  function clients() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view',$data);
    $this->load->view('templates/sidebar_view', $data);
    $this->load->view('templates/settings_view', $data);
    $this->load->view('templates/client_view', $data);

  }

  /**
   * Add client
   */

  function addclient() {
    $this->load->model('admin_model');
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
//    $data['roles'] = $this->admin_model->get_roles();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/addclient_view', $data);
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * deleteclient
   */

  function delete_client() {
    $cid=$this->input->post('cid');
    if(!empty($cid)) {
      $this->load->model('admin_model');
      $this->admin_model->delete_client($cid);
      $data['response'] = 'Removing company ...';
      $data['result'] = 'clients';
      $this->load->view('templates/success_view', $data);
    }
    else {
      $this->load->view('custom404_view');
    }
  }

  /**
   * switch help block
   */

  function  switch_help() {
    $this->load->model('dashboard_model');
    $data['help'] = $this->dashboard_model->settings_help($_SESSION['username'], $this->input->post('help_block'));
    $url = $this->input->post('input_url');
    redirect(base_url().$url);
  }

  /**
   * Add client form
   */

  function addclient_form() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Company title', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone number', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('city', 'City', 'trim|required');
    $this->form_validation->set_rules('country', 'Country', 'trim|required');
    if ($this->form_validation->run() !== false) {
      $this->load->model('admin_model');
      $title = $this->admin_model->verify_client($this->input->post('title'));
     if($title) {
       $this->load->model('admin_model');
       $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
       $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
       $data['users'] = $this->admin_model->get_users();
//    $data['roles'] = $this->admin_model->get_roles();
       $this->load->view('templates/head');
       if($data['user'][0]['helpblock']==1) {
         $this->load->view('templates/help_block_view');
       }
       $this->load->view('templates/addclient_view', $data);
       $this->load->view('templates/settings_view', $data);
     }
      else {
        if($query=$this->admin_model->create_client()) {
          $this->load->model('admin_model');
          $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
          $data['users'] = $this->admin_model->get_users();
          $data['response'] = 'Company creating...';
          $data['result'] = 'clients';
          $this->load->view('templates/head');
          if($data['user'][0]['helpblock']==1) {
            $this->load->view('templates/help_block_view');
          }
          $this->load->view('templates/success_view', $data);
          $this->load->view('templates/settings_view', $data);

        }
      }
    }
    else {
      $this->load->model('admin_model');
      $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
      $data['users'] = $this->admin_model->get_users();
      $this->load->view('templates/head');
      if($data['user'][0]['helpblock']==1) {
        $this->load->view('templates/help_block_view');
      }
      $this->load->view('templates/addclient_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
  }

  /**
   * Team view
   */

  function team() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view', $data);
    $this->load->view('templates/sidebar_view', $data);

    $this->load->view('templates/team_view', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/settings_view', $data);
  }


  /**
   * Profile view
   */

  function profile() {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['phones'] = $this->admin_model->get_phones($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $this->load->view('templates/head');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/profile_view', $data);
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * Update profile
   */

  function update_profile() {

    $first = $this->input->post('first_name');
    $last = $this->input->post('last_name');
    $email = $this->input->post('email_address');

    if ($first == FALSE && $last == FALSE && $email == FALSE) {
      $this->error();
    }
    else {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
      $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[3]');
      $this->load->model('admin_model');
      $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
      $id = $data['user'][0]['id'];
      if ($this->form_validation->run() !== FALSE) {
        $this->load->model('admin_model');
        $phone_add = $this->input->post('add_phone');
        if (!empty($phone_add[0])) {
          if ($query = $this->admin_model->insert_member_phone($id) && $query = $this->admin_model->update_member($id)) {
            ;
          }
          $data['response'] = 'Profile successfully updated';
          $data['result'] = 'profile';
          $this->load->view('templates/success_view', $data);
        }
        else {
          if ($query = $this->admin_model->update_member($id)) {
            $data['response'] = 'Profile updating ...';
            $data['result'] = 'profile';
            $this->load->view('templates/success_view', $data);
          }
        }

      }
      else {
        $this->load->model('admin_model');
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        $data['users'] = $this->admin_model->get_users();
        $this->load->view('templates/head');
        if ($data['user'][0]['helpblock'] == 1) {
          $this->load->view('templates/help_block_view');
        }
        $this->load->view('templates/profile_view', $data);
        $this->load->view('templates/settings_view', $data);
      }
    }
  }


  function error() {
    $this->load->view('custom404_view');
  }
}
