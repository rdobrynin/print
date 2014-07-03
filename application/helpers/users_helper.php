<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

if (!function_exists('test')) {
  function show_role($role) {
    $result='none';
    if($role == 4) {
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

  function task_status($status) {
    $result=0;
    if($status == 4) {
      $result = 'complete';
    }
    else if($status == 3) {
      $result = 'approve';
    }
    else if($status == 2) {
      $result = 'process';
    }
    else if($status == 5) {
      $result = 'overdue';
    }
    else if($status == 1) {
      $result = 'pause';
    }
    return $result;
  }

}