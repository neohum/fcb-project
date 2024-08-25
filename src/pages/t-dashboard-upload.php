<?php 
declare(strict_types=1);
error_reporting(E_ALL);



$data['className'] = $_SESSION['classname'];
$data['getteacher'] = $cms->getFcb()->getToTeacher($_SESSION['userName']);

foreach ($data['getteacher'] as $key => $value) {
  $data['getteacher'] = $value;
}


if ($data['getteacher'] == null) {
  
$data['setteacher'] = $cms->getFcb()->setToTeacher($_SESSION['classname'], $_SESSION['userName']);
  
} else {
  
  $_SESSION['errorForAddClass'] = '이미 반이 생성되었습니다. 이후의 수정은 "우리반 등록 현황"에서 가능합니다.';
  redirect('t-dashboard-upload2');
  
}//$data['error'];


// if(!empty($_FILES['file'])){
//     $targetDir = '../uploads/';
//     $filename = basename($_FILES['file']['name']);
//     $targetFilePath = $targetDir.$filename;
//     if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
//         echo 'File Uploaded';
//     }
// }



echo $twig->render('t-dashboard-upload.html', $data);