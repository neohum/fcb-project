<?php
declare(strict_types = 1);                                           // Use strict types
//$data['articles']    = $cms->getArticle()->getAll(true, null, null, 6); // Get latest article summaries
$data = [];//$data['navigation']  = $cms->getCategory()->getAll();         // Get categories


// $data['service_name'] = 'repair';
// $data['result'] = explode('/', $_SERVER['REQUEST_URI']);
// $data['service_name'] = $data['result'][2];
// $data['service_id'] = $data['result'][3];

 // If form has been submitted



echo $twig->render('check_request_page.html', $data);                             // Render Twig template[']