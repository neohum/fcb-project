<?php
declare(strict_types=1);
session_start();

$data = [];

if (isset($_POST['errors']) ) {
    $data['errors'] = $_POST['errors'];
}
if (isset($_POST['userid']) ) {


    $row = $cms->getFcb()->getId($_POST['userid']);
    if ($row == $_POST['userid']) {
        $data['errors'] = '중복된 아이디가 있습니다.';
        exit();
        } else {
            $data['userid'] = $_POST['userid'];
            $data['current-password'] = $_POST['current-password'];
            $data['password'] = $cms->getFcb()->getPass($data['current-password']);
            $data['login'] = $cms->getFcb()->insertFcb($data['userid'], $data['current-password']);
            $data['success'] = '가입이 완료 되었습니다.';
            echo "<script>alert('가입이 완료 되었습니다.');</script>";
            redirect('t-dashboard/', $data);
        }

    //세션 변수 등록
$_SESSION['userName'] = $data['login'];
$_SESSION['userPw'] = $data['password'];

}
echo $twig->render('t-signin.html', $data);