<?php 
declare(strict_types = 1);
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$data['select_url']    = explode('/',$_SERVER["REQUEST_URI"]);
$data['service_id'] = $data['select_url'][3];

$data['alls'] = $cms->getCheck()->getAll($data['service_id']);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

foreach ($data['alls'] as $key => $value) {
    $sheet->setCellValue('A'.($key+1), $value['grade']);
    $sheet->setCellValue('B'.($key+1), $value['class']);
    $sheet->setCellValue('C'.($key+1), $value['memory']);
    $sheet->setCellValue('D'.($key+1), $value['ipv4']);
    $sheet->setCellValue('E'.($key+1), $value['com_name']);
    $sheet->setCellValue('F'.($key+1), $value['year']);
    $sheet->getStyle('F')->getNumberFormat();
}

$filename = 'check_'.$data['service_id'].'.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'"');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

redirect('check/'.$data['service_id']);