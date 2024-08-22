<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];

$data['studentname'] = $_SESSION['studentname'];
$data['classname'] = $_SESSION['classname'];

$data['checklists'] = $cms->getFcb()->getCheckList($data['classname'], $data['studentname']);
$data['class_total'] = $cms->getFcb()->getClassTotal($data['classname']);
$data['studentnumber'] = $cms->getFcb()->getStudentNumber($data['classname'], $data['studentname']);
//$data['end_number1'] = $cms->getFcb()->getEndNumber1($data['classname'], $data['studentnumber']);
//$data['end_number2'] = $cms->getFcb()->getEndNumber2($data['classname'], $data['studentnumber']);
if ($data['studentnumber'] == $data['end_number1'] - 1) {
  $data['next_student1'] = $cms->getFcb()->getNextStudent1($data['classname'], $data['studentname']);
//  $data['next_student2'] = $cms->getFcb()->getFirstStudent($data['classname'], $data['studentname']);
} else if ($data['studentnumber'] == $data['class_total']) {
//  $data['next_student1'] = $cms->getFcb()->getFirstStudent($data['classname'], $data['studentname']);
 // $data['next_student2'] = $cms->getFcb()->getSecondStudent($data['classname'], $data['studentname']);
} else {
  $data['next_student1'] = implode(",", $cms->getFcb()->getNextStudent1($data['classname'], 3));

  $data['next_student2'] = implode(",", $cms->getFcb()->getNextStudent2($data['classname'], 4));
 
}

$data['next_student_info1s'] = $cms->getFcb()->getNextStudentName1($data['classname'], "홍삼동");


$data['next_student_info2s'] = $cms->getFcb()->getNextStudentName2($data['classname'], "홍사동");




echo $twig->render('s-dashboard-check.html', $data);