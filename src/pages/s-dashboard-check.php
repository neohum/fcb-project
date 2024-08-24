<?php 
declare(strict_types=1);

error_reporting(E_ALL&~E_WARNING);
date_default_timezone_set('Asia/Seoul');

$data = [];

$data['studentname'] = $_SESSION['studentname'];
$data['classname'] = $_SESSION['classname'];
$data['studentnumber'] =$_SESSION['studentnumber'];

$classTotal = $cms->getFcb()->getClassTotal($_SESSION['classname']);
$value = 0;
foreach ($classTotal as $key => $value) {
  $value;
}


if ($value - $data['studentnumber'] == 0) {
  $data['next_student1'] = 1;
  $data['next_student2'] = 2;
} else if ($value - $data['studentnumber'] == 1) {
  $data['next_student1'] = $data['studentnumber'] + 1;
  $data['next_student2'] = 1;
} else {
  $data['next_student1'] = (int)$_SESSION['studentnumber'] + 1;
  $data['next_student2'] = (int)$_SESSION['studentnumber'] + 2;
}



$data['checklists'] = $cms->getFcb()->getCheckList($data['classname'], $data['studentname']);
$data['class_total'] = $cms->getFcb()->getClassTotal($data['classname']);

$data['next_student1s'] = $cms->getFcb()->getSubjectInfo($data['classname'], $data['next_student1'], date("Y-m-d"));
$data['next_student2s'] = $cms->getFcb()->getSubjectInfo2($data['classname'], $data['next_student2'], date("Y-m-d"));




echo $twig->render('s-dashboard-check.html', $data);