<?php 
declare(strict_types = 1);

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {                   // If form submitted
    $admin_email = $_POST['admin_email'];                         
    $admin_pw = $_POST['admin_pw'];

    $email = "schoolworks@nate.com";
    $password = "sw1004!@";

    if ($admin_email == $email && $admin_pw == $password) {
        
        $data['$admin_email'] = $admin_email;
        $data['$admin_pw'] = $admin_pw;

        redirect('schoolworks_dashboard/', $data);

  
    } else {
        $error = '아이디 또는 비밀번호가 틀렸습니다.';
    }
}


echo $twig->render('schoolworks.html', $data);