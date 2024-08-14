<?php 
declare(strict_types = 1);

$data['select_url']    = explode('/',$_SERVER["REQUEST_URI"]);


$data['service_name'] = substr(($data['select_url'][3]), 15, 11);




if ($data['service_name'] == "schoolwork") {
        redirect('schoolworks/', []);

    } else {
        
    }

$data = [];

$data['repairs'] = $cms->getService()->getReapairAll();
$data['printers'] = $cms->getService()->getPrinterAll();
$data['crepairs'] = $cms->getService()->getCreapairAll();
$data['toilets'] = $cms->getService()->getToiletAll();
$data['scis'] = $cms->getService()->getSciAll();


echo $twig->render('schoolworks_dashboard.html', $data);