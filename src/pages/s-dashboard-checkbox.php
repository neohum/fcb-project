<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "CheckBox" ) {
  $data['score'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms -> getFcb() -> setSubjectCheckBox($data['score'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "5CheckBox") {
  $data['score'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms -> getFcb() -> setSubjectCheckBox($data['score'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "3CheckBox") {
  $data['score'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms -> getFcb() -> setSubjectCheckBox($data['score'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "Writing") {
  $data['score'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms -> getFcb() -> setSubjectCheckBox($data['score'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}
