<?php
declare(strict_types=1);

session_start();
$data = [];

if(isset($_SESSION['userid'])){
    redirect('t-dashboard/', $data);
} 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $data['userid'] = $_POST['userid'];
  $data['current-password'] = $_POST['current-password'];
  $data['userid'] = $cms->getFcb()->getId($data['userid']);
  $data['password'] = $cms->getFcb()->getPass($data['current-password']);




  if ($data['userid']['userid'] == $_POST['userid']) {


    if ($data['current-password']['current-password'] != $_POST['current-password']) {
      $data['errors'] = '비밀번호가 일치하지 않습니다.';
    } else {
      $data['current-password'];
      redirect('t-dashboard');
    }

  }
  }


echo $twig->render('t-admin.html', $data);