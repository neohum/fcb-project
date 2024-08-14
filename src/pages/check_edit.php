<?php
declare(strict_types = 1);



$data   = [];
$want   = "완료";



$data['select_url']    = explode('/',$_SERVER["REQUEST_URI"]);

//print_r($data['select_url']);
$data['service_name']= (string)$data['select_url'][3];
$data['service_id']  = (int)$data['select_url'][4];
$data['selected_id'] = (int)$data['select_url'][5];
// Use strict types


//if ($_SERVER['REQUEST_METHOD'] == 'POST') {   

                
      $data['result'] = $cms->getRepair()->updateState('repair', $data['service_id'], $want, $data['selected_id']);
    
redirect('repair_request/' . $data['service_id']); // Redirect to correct URL
//echo $twig->render('repair_edit.html', $data);                             // Render Twig template
//redirect("www" . $data['service_name'] . "/" . $data['service_id']); // Redirect to correct URL                      