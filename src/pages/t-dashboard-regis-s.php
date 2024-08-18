<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);

$data = [];



$data['className1'] = explode('/', $_SERVER['REQUEST_URI']);
$data['className'] = ($data['className1'][3]);




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        unset($_SESSION['userid']);
        redirect('t-admin/');
}

echo $twig->render('t-dashboard-regis-s.html', $data);