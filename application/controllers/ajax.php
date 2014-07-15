<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Ajax extends CI_Controller {
// check email
  public function check_email() {
// Тут мы получаем переданные нам данные из предыдущего файла
    $userLogin = $this->input->post('email_address');
    $this->load->model('admin_model');
    $check_mail= $this->admin_model->check_email($userLogin);
    $returnText = '';
    // Делаем простую проверку, замените на свою
    if($userLogin == $check_mail[0]->email_address){
      $returnText = '<span style="color:#1e6cff;">Email address is correct</span>';
    } else {
      $returnText = '<span style="color:red;">Email address is not correct</span>';
    }
    // Возвращаем ответ
    echo $returnText;

  }


  /**
   * Check client on input blur
   */
  public function check_client() {
    $title = $this->input->post('title');
    $this->load->model('admin_model');
    $check_title= $this->admin_model->verify_client($title);
    $result = array();
    if($title === $check_title[0]['title']){
      $result['result'] ='"'.$title.'"'. ' is already registered';
    }
    else {
      $result['result'] = null;
    }

    echo json_encode($result);

  }


  /**
   * Success modal
   */

  public function success() {
    $result =  $_POST['result'];
    $url = base_url();
    $status = array("URL"=>$url, "RESULT"=>$result);
    echo json_encode ($status) ;
  }


  /**
   * Check online status
   */

  public function check_online() {

    $query = $this->db->get('users');
   $result= $query->result_array();

    if($result){
      $status=array();
      foreach($result as $ok=>$ov) {
        array_push($status, $ov);
      }
      $status['status'] =$status;
    }else{
      $status['result'] = false;
    }
    echo json_encode ($status);
  }



  public function addclient() {
    $result = array();
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Company title', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone number', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('city', 'City', 'trim|required');
    $this->form_validation->set_rules('country', 'Country', 'trim|required');
    if ($this->form_validation->run() !== false) {
      $this->load->model('admin_model');
      $query = $this->admin_model->create_client();
      if ($query){  //&& any other condition
        $result['title'] = $_POST['title'];
        $result['email'] = $_POST['email'];
        $result['description'] = $_POST['description'];
        $result['url'] = $_POST['url'];
        $result['phone'] = $_POST['phone'];
        $result['title'] = $_POST['address'];
        $result['index'] = $_POST['index'];
        $result['city'] = $_POST['city'];
        $result['country'] = $_POST['country'];
        $result['curator'] = $_POST['curator'];
        $result['error'] = 0;
        $result['result'] = "<ul><li> Company ".$_POST['title']."</li><li> Email ".$_POST['email']."</li><li> Description ".substr($_POST['description'],1,50)."</li><li> URL ".$_POST['url']."</li><li> Phone ".$_POST['phone']."</li><li> Address ".$_POST['address']."</li><li> Index ".$_POST['index']."</li><li> City ".$_POST['city']."</li><li>Country ".$_POST['country']."</li></ul><div>Was successfully created</div>";
      }
      else {
        $result['error'] = 1;
        $result['result'] = 'Error in Database';
      }
    }
    else {
      $result['error'] = 1;
      $result['result'] = validation_errors();
    }


    echo json_encode($result); //At the end of the function.

  }


    function do_upload() {
        $this->load->model('files_model');
        $status = "";
        $msg = "";
        $file_element_name = 'userfile';
        if (empty($_POST['user_id'])) {
            $status = "error";
            $msg = "Something wrong...";
        }

        if ($status != "error") {
            $config['upload_path'] = './uploads/avatar';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else {
                $data = $this->upload->data();
                $file_id = $this->files_model->insert_avatar($data['file_name'], $_POST['user_id']);
                if($file_id) {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }
}


