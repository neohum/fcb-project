<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];





$data['className1'] = rand(111, 999);
$data['className2'] = rand(111, 999);
$data['className3'] = rand(111, 999);
$data['className4'] = $data['className1']." /".$data['className2']."/ ".$data['className3'];
$data['className5'] = $data['className1'].$data['className2'].$data['className3'];
$data['className'] = (string)$data['className5'];

$_SESSION['classTotal'] = $cms->getFcb()->getClassTotal($data['className']);
$_SESSION['classname'] = $data['className'];




echo $twig->render('t-dashboard-make-s.html', $data);