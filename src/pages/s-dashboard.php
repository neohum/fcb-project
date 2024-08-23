<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];

$data['studentname'] = $_SESSION['studentname'];
$data['classname'] = $_SESSION['classname'];
$data['studentnumber'] = $_SESSION['studentnumber'];

$data['checklists'] = $cms->getFcb()->getCheckList($data['classname'], $data['studentname']);




echo $twig->render('s-dashboard.html', $data);