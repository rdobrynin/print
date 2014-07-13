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
    $returnText = '';
    if($title !== $check_title[0]['title']){
      $returnText = '<span style="color:#1e6cff;">Company address is not taken</span>';
    } else {
      var_dump($title);
      $returnText = '<span style="color:red;">This company already registered</span>';

    }
    // Возвращаем ответ
    print $returnText;

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


  public function addclient() {
    $result = array();

    $this->load->model('admin_model');
    $query = $this->admin_model->create_client();
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Company title', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone number', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('city', 'City', 'trim|required');
    $this->form_validation->set_rules('country', 'Country', 'trim|required');



    if ($this->form_validation->run() !== false) {

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
      }
      else {
        $result['error'] = 1;
      }

    }

    else {
      $result['error'] = validation_errors();
    }


    echo json_encode($result); //At the end of the function.

  }

}


