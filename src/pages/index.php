<?php
declare(strict_types = 1);                                           // Use strict types
//$data['articles']    = $cms->getArticle()->getAll(true, null, null, 6); // Get latest article summaries
$data = [];//$data['navigation']  = $cms->getCategory()->getAll();         // Get categories


//echo "<meta http-equiv='refresh' content='0; url=https://schoolworks.kr'>";


echo $twig->render('index.html', $data);                             // Render Twig template