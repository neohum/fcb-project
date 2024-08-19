<?php 
declare(strict_types=1);
error_reporting(E_ALL);



var_dump($_POST);






echo $twig->render('t-send-check.html', $data);