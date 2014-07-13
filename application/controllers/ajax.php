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
    $result =  $_POST['result'];

    $status = array(
      "URL"=>$url,
      "RESULT"=>$result);
    echo json_encode ($status) ;
  }

}


