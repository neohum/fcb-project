<?php
declare(strict_types = 1);



$data['select_url']    = explode('/',$_SERVER["REQUEST_URI"]);


$refresh_prevent        = '';

$data['grade'] = '';
$data['class'] = '';
$data['name'] = '';
$data['memory'] = '';
$data['ipv41'] = '';
$data['ipv42'] = '';
$data['ipv43'] = '';
$data['ipv44'] = '';
$data['com_name'] = '';
$data['year'] = '';
$data['service_id'] = $data['select_url'][3];





  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){

    $data['grade'] = $_POST['grade'];
    $data['class'] = $_POST['class'];
    $data['memory'] = $_POST['memory'];
    $data['ipv41'] = $_POST['ipv41'];
    $data['ipv42'] = $_POST['ipv42'];
    $data['ipv43'] = $_POST['ipv43'];
    $data['ipv44'] = $_POST['ipv44'];
    $data['com_name'] = $_POST['com_name'];
    $data['year'] = date('Y');
    $data['service_id'];
  

    redirect('check_send/'.$data['service_id'].'/'.$data['grade'].'/'.$data['class'].'/'.$data['memory'].'/'.$data['ipv41'] .'/'.$data['ipv42'] .'/'.$data['ipv43'] .'/'.$data['ipv44'] .'/'.$data['com_name'].'/'.$data['year']);
}

$data['alls'] = $cms->getCheck()->getAll($data['service_id']);




echo $twig->render('check.html', $data);