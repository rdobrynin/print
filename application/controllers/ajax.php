<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Ajax extends CI_Controller {
// check email
  public function check_email() {
// Тут мы получаем переданные нам данные из предыдущего файла
    $userLogin = $this->input->post('email_address');


    $this->load->model('admin_model');
    $news= $this->admin_model->check_email($userLogin);

//    $check_email = $check->email_address;

    // Создаём переменную куда будем записывать результат работы
    // потом мы его вернём обратно яваскрипту
    $returnText = '';

    // Делаем простую проверку, замените на свою
    if($userLogin == $news[0]->email_address){
      $returnText = '<span style="color:#1e6cff;">Email address is correct</span>';
    } else {
      $returnText = '<span style="color:red;">Email address is not correct</span>';
    }

    // Возвращаем ответ
    echo $returnText;

  }

}


