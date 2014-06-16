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

}


