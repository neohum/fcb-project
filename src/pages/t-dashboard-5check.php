<?php 
declare(strict_types=1);
$data = [];

$data['subjectname'] = "5CheckBox";
$_SESSION['classname'] = 962279173;

$data['subjectname2'] = "";

if ( $_SERVER['REQUEST_METHOD'] === 'POST'  ) {
 
  $data['subjectname2'] = $_POST['5check'];
  
} 

$classTotal = $cms->getFcb()->getClassTotal($_SESSION['classname']);

$value = 0;
foreach ($classTotal as $key => $value) {

  $value;
}

$data['studentname'] = [];

$i = 0;
$j = 0;
while ($i <= $value) {
  if ($j == 30){
    break;
  } else {
  $data['studentname'] = $cms->getFcb()->getStudentName($_SESSION['classname'], $j);
    foreach ($data['studentname'] as $key => $value) {
      $cms->getFcb()->setSubjectCheck($data['subjectname'], $j, $data['subjectname2'], $_SESSION['classname'], $value);
      $i++;
      
    }
    $j++;
  }
}
  
  
 

redirect('t-dashboard');
  


