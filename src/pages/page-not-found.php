<?php
declare(strict_types=1);                                 // Use strict types
http_response_code(404); 

// Set HTTP response code

  // Get categories

echo $twig->render('page-not-found.html');        // Render template
exit;