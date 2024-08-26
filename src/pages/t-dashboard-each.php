<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];
$data['seturl'] = $_SERVER['REQUEST_URI'];
$data['seturl'] = explode('/', $data['seturl']);
$data['studentnumber'] = $data['seturl'][3];
$data['studentname'] = urldecode($data['seturl'][4]);



$data['student_results'] = $cms->getStudent()->getStudentResultAll($data['studentnumber'], $data['studentname']);





if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        unset($_SESSION['userid']);
        redirect('t-admin/');
}

echo $twig->render('t-dashboard-each.html', $data);