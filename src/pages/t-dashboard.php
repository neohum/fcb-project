<?php 
declare(strict_types=1);
error_reporting(E_ALL&~E_WARNING);


$data = [];





echo $twig->render('t-dashboard.html', $data);