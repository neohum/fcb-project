<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);
date_default_timezone_set('Asia/Seoul');

$data = [];

$data['studentname'] = $_SESSION['studentname'];
$data['classname'] = $_SESSION['classname'];
$data['studentnumber'] = $_SESSION['studentnumber'];

$data['checklists'] = $cms->getFcb()->getCheckList($data['classname'], $data['studentname']);

$data['today'] = date('Y-m-d');


echo $twig->render('s-dashboard.html', $data);