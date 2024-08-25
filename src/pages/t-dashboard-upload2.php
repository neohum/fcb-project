<?php 
declare(strict_types=1);
error_reporting(E_ALL);







$data['className'] = $_SESSION['classname'];

$data['error'] = $_SESSION['errorForAddClass'];
//$data['error'];






// if(!empty($_FILES['file'])){
//     $targetDir = '../uploads/';
//     $filename = basename($_FILES['file']['name']);
//     $targetFilePath = $targetDir.$filename;
//     if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
//         echo 'File Uploaded';
//     }
    
// }



echo $twig->render('t-dashboard-upload2.html', $data);