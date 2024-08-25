<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data['id'] = $_POST['id'];
  $data['classname'] = $_POST['classname'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];

  $data['students'] = $cms->getStudent()->updateStudent($data['id'], $data['classname'], $data['studentnumber'], $data['studentname']);
  redirect('t-dashboard-student-manage');
}


