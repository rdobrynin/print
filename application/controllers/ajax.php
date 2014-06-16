<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Ajax extends CI_Controller {


// check email
  public function check_email() {
// Тут мы получаем переданные нам данные из предыдущего файла
    $userLogin = $this->input->post('email_address');

    // Создаём переменную куда будем записывать результат работы
    // потом мы его вернём обратно яваскрипту
    $returnText = '';

    // Делаем простую проверку, замените на свою
    if($userLogin != 'admin'){
      $returnText = '<div sryle="color: red;">Вы ввели неверные данные!</div>';
    } else {
      $returnText = '<strong>Вы успешно прошли авторизацию!</strong>';
    }

    // Возвращаем ответ
    echo $returnText;

  }

}
