<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

  public function __construct() {
    session_start();
    parent::__construct();
      $this->load->model('admin_model');
      $this->load->model('dashboard_model');
      $this->load->model('files_model');
      $this->lang->load('russian', 'russian');
      $data['avatar'] = $this->admin_model->get_user_id($_SESSION['username']);
    if(!isset($_SESSION['username'])) {
      redirect('admin');
    }
  }

  /**
   * DASHBOARD PAGE
   */

  public function index() {
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view', $data);
    $this->load->view('templates/sidebar_view', $data);

    $this->load->view('templates/dashboard_view', $data);
    $this->load->view('templates/footer_view');
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * PROJECTS PAGE
   */

  function projects() {
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
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
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $new_users = $this->admin_model->get_new_users();
    $data['new_users'] = $new_users;
    $data['count_new_users'] = count($new_users);
    $data['roles'] = $this->admin_model->get_roles();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    if ($data['user'][0]['role'] == 5) {
      $this->load->view('templates/users_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
    elseif($data['user'][0]['role'] == 1 OR $data['user'][0]['role'] == 2 OR $data['user'][0]['role'] == 3 OR $data['user'][0]['role'] == 4) {
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
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
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

      $data['avatar'] = $this->admin_model->check_email('roman.dobrynin@gmail.com');
    $this->load->view('templates/test_view',$data);
  }

  /**
   * Clients
   */

  function clients() {
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['roles'] = $this->admin_model->get_roles();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
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
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);

      if($data['user'][0]['role']==5 OR $data['user'][0]['role']==4 ) {
          $this->load->view('templates/head_view');
          if($data['user'][0]['helpblock']==1) {
              $this->load->view('templates/help_block_view');
          }
          $this->load->view('templates/addclient_view', $data);
          $this->load->view('templates/settings_view', $data);
      }
      else {
         redirect(base_url().'error');
      }

  }

  /**
   * deleteclient
   */

  function delete_client() {
    $cid=$this->input->post('cid');
    if(!empty($cid)) {
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
      $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
      $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
      $data['users'] = $this->admin_model->get_users();
      $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
      if($data['user'][0]['role']==5 OR $data['user'][0]['role']==4 ) {
    if ($this->form_validation->run() !== FALSE) {
      $title = $this->admin_model->verify_client($this->input->post('title'));
     if($title) {
       $this->load->view('templates/head_view');
       if($data['user'][0]['helpblock']==1) {
         $this->load->view('templates/help_block_view');
       }
       $this->load->view('templates/addclient_view', $data);
       $this->load->view('templates/settings_view', $data);
     }
      else {
        if($query=$this->admin_model->create_client()) {
          $data['response'] = 'Company creating...';
          $data['result'] = 'clients';
          $this->load->view('templates/head_view');
          if($data['user'][0]['helpblock']==1) {
            $this->load->view('templates/help_block_view');
          }
          $this->load->view('templates/success_view', $data);
          $this->load->view('templates/settings_view', $data);

        }
      }
    }
    else {
      $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
      $data['users'] = $this->admin_model->get_users();
      $this->load->view('templates/head_view');
      if($data['user'][0]['helpblock']==1) {
        $this->load->view('templates/help_block_view');
      }
      $this->load->view('templates/addclient_view', $data);
      $this->load->view('templates/settings_view', $data);
    }
      }
      else {
          redirect(base_url().'error');
      }
  }

  /**
   * Team view
   */

  function team() {
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
      $users = $this->admin_model->get_users();
    $data['users'] = $this->admin_model->get_users();
      $data['avatars'] = $this->admin_model->get_avatars();
      foreach($users as $uv) {
                  $data['avatars']['test'][]=$uv['id'];
                  $data['avatars']['test'][]=$uv['status'];
                  $data['avatars']['test'][]=$uv['first_name'];
      }
      $this->load->view('templates/head_view');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
    $this->load->view('templates/navtop_view', $data);
    $this->load->view('templates/sidebar_view', $data);

    $this->load->view('templates/team_view', $data);
    $this->load->view('templates/footer_view');
    $this->load->view('templates/settings_view', $data);
  }


  /**
   * Profile view
   */

  function profile() {
      $data['client'] = $this->admin_model->get_own_client($_SESSION['username']);
    $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
    $data['phones'] = $this->admin_model->get_phones($_SESSION['username']);
    $data['emails'] = $this->admin_model->get_emails($_SESSION['username']);
    $data['users'] = $this->admin_model->get_users();
    $roles = $this->admin_model->get_roles();
    $data['avatar'] = $this->admin_model->get_avatar($_SESSION['username']);
    $this->load->view('templates/head_view');
    if($data['user'][0]['helpblock']==1) {
      $this->load->view('templates/help_block_view');
    }
      foreach ($roles as $rk=>$rv) {
          $roles_array[$rv['rid']] = $rv['title'];

      }
    $data['roles']= $roles_array;
    $this->load->view('templates/profile_view', $data);
    $this->load->view('templates/settings_view', $data);
  }

  /**
   * Update profile
   */

  function update_profile() {
      $this->load->model('admin_model');
//      delete additional emails
      $email_del = $this->input->post('del_email');
      if (!empty($email_del[0])) {
          foreach ($email_del as $v) {
              $this->admin_model->delete_member_email($v);
          }
      }
//      delete additionals phones
      $phone_del = $this->input->post('del_phone');
      if (!empty($phone_del[0])) {
          foreach ($phone_del as $v) {
              $this->admin_model->delete_member_phone($v);
          }
      }

    $first = $this->input->post('first_name');
    $last = $this->input->post('last_name');
    if ($first == FALSE && $last == FALSE) {
      $this->error();
    }
    else {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[3]');

      $this->load->model('admin_model');
      $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
      $id = $data['user'][0]['id'];
      if ($this->form_validation->run() !== FALSE) {
        $this->load->model('admin_model');
        $phone_add = $this->input->post('add_phone');
        $email_add = $this->input->post('add_email');

        if (!empty($phone_add[0])) {
          if ($query = $this->admin_model->insert_member_phone($id) && $query = $this->admin_model->update_member($id)) {

          }
          $data['response'] = 'Profile successfully updated';
          $data['result'] = 'profile';
          $this->load->view('templates/success_view', $data);
        }
          elseif (!empty($email_add[0])) {
              if ($query = $this->admin_model->insert_member_email($id) && $query = $this->admin_model->update_member($id)) {

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
        $data['user'] = $this->admin_model->get_user_id($_SESSION['username']);
        $data['users'] = $this->admin_model->get_users();
        $this->load->view('templates/head_view');
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
