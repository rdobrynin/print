<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

if (!function_exists('test')) {
  function show_role($role) {
    $result='none';
    if($role ==4) {
      $result = 'administrator';
    }
    else if($role == 3) {
      $result = 'implementor';
    }
    else if($role == 2) {
      $result = 'manager';
    }
    else if($role == 1) {
      $result = 'customer';
    }
    return $result;
  }
}