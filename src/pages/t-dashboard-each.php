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
        unset($_SESSION['userid']);
        redirect('t-admin/');
}

echo $twig->render('t-dashboard-each.html', $data);