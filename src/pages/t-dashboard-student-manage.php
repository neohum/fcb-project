<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];
$data['userid'] = $_SESSION['userName'];



$teacherid = $cms->getStudent()->getTeacher($data['userid']);

$value = 0;
foreach ($teacherid as $key => $value) {
  if ($key == 'classname') {
    $value;
  }
  
}

foreach ($value as $key => $value) {
  $data['classname'] = $value;
}


$data['students'] = $cms->getStudent()->getStudentAll($data['classname']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data['classname'] = $_POST['classname'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];

  $cms->getStudent()->insertStudent($data['classname'], $data['studentnumber'], $data['studentname']);
  redirect('t-dashboard-student-manage');
}


echo $twig->render('t-dashboard-student-manage.html', $data);

