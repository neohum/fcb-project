<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];
// echo $_POST['score1'];
// echo $_POST['subjectname1'];

// echo $_POST['studentnumber'];
// echo $_POST['studentname'];

// die();



if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "CheckBox") {
  $data['score2'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  echo "test";
  $cms->getFcb()->setSubjectCheckBox2($data['score2'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "5CheckBox") {
  $data['score2'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms->getFcb()->setSubjectCheckBox2($data['score2'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "3CheckBox") {
  $data['score2'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms->getFcb()->setSubjectCheckBox2($data['score2'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' AND $_POST['subjectname1'] == "Writing" ) {
  $data['score2'] = $_POST['score1'];
  $data['studentnumber'] = $_POST['studentnumber'];
  $data['studentname'] = $_POST['studentname'];
  $data['created_at'] = $_POST['created_at'];
  $cms->getFcb()->setSubjectCheckBox2($data['score2'], $data['studentnumber'], $data['studentname'], $data['created_at']);
  redirect('s-dashboard-check');
}
