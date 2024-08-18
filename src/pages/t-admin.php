<?php
declare(strict_types=1);


$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['userid']) || empty($_POST['password'])) {
    $data['errors'] = '아이디와 비밀번호를 입력해주세요.';
    echo "<script>alert('아이디와 비밀번호를 입력해주세요.');</script>";
    redirect('t-admin/');
    exit();
  }
  $data['userid'] = $_POST['userid'];
  $data['password'] = $_POST['password'];

  $data['userid2'] = $cms->getFcb()->getId($data['userid']);
  $data['password2'] = $cms->getFcb()->getPass($data['password']);
  $member['userName'] = $data['userid2']['userid'];
  $member['userPw'] = $data['password2']['password'];
  $cms->getSession()->create($member);


  if ($data['userid2']['userid'] == $_POST['userid'] && $data['password2']['password'] == $_POST['password']) {
    
    $member['userName'] = $_POST['userid'];
    $member['passWd'] =   $_POST['password'];

    redirect('t-dashboard');
    
    } else {
    
     $data['errors'] = '아이디가 존재하지 않거나 비밀번호가 일치하지 않습니다.';
    redirect('t-admin/');
  }
} 


echo $twig->render('t-admin.html', $data);