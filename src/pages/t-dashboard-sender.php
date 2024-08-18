<?php 
declare(strict_types=1);
error_reporting(E_ALL);



use PhpOffice\PhpSpreadsheet\IOFactory;




if(!empty($_FILES['file'])){
    $targetDir = '../uploads/';
    $filename = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir.$filename;
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
        echo 'File Uploaded';
    }
    $spreadsheet = IOFactory::load($targetFilePath);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();
    $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
    $data = [];
    foreach ($sheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
        $rowIndex = $row->getRowIndex();
        $data[$rowIndex] = [];
        foreach ($cellIterator as $cell) {
            $data[$rowIndex][] = $cell->getValue();
        }
        
        $cms->getFcb()->insert($data[$rowIndex][0], $data[$rowIndex][1], $data[$rowIndex][2]);
        $cms->getFcb()->setSubject($data[$rowIndex][0], $data[$rowIndex][2]);
    }
}


redirect('t-dashboard-upload');