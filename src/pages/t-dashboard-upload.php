<?php 
declare(strict_types=1);
error_reporting(E_ALL);

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


$data = [];

$data['className1'] = explode('/', $_SERVER['REQUEST_URI']);
$data['className'] = ($data['className1'][3]);
$data['className'] = (string)$data['className'];
$cms->getFcb()->setClassName($data['className']);


// if(!empty($_FILES['file'])){
//     $targetDir = '../uploads/';
//     $filename = basename($_FILES['file']['name']);
//     $targetFilePath = $targetDir.$filename;
//     if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
//         echo 'File Uploaded';
//     }
// }

$classname1 = $data['className'];


// if(!empty($_FILES['file'])){
//     $targetDir = '../uploads/';
//     $filename = basename($_FILES['file']['name']);
//     $targetFilePath = $targetDir.$filename;
//     if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
//         echo 'File Uploaded';
//     }
    
// }



echo $twig->render('t-dashboard-upload.html', $data);