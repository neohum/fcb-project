<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data['id'] = $_POST['id'];


  $data['student'] = $cms->getStudent()->deleteStudent($data['id']);
  redirect('t-dashboard-student-manage');
}


