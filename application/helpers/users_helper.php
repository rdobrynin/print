<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

if (!function_exists('test')) {
  function test() {
    $query = 'test';
    return $query;
  }
}