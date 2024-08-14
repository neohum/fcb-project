<?php 
declare(strict_types=1);
session_start();
if(!isset($_SESSION['userid'])){
    redirect('t-admin/');
}
$data['session'] = $_SESSION['userid'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if($_SESSION['userid']){
        unset($_SESSION['useridd']);
        redirect('t-admin/');
    }
    
}

echo $twig->render('t-dashboard.html', $data);