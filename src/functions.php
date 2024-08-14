<?php
// UTILITY FUNCTIONS
function is_admin($role)
{
    if ($role !== 'admin') {                                   // If role is not admin
        header('Location: ' . DOC_ROOT);                       // Send to home page
        exit;                                                  // Stop code running
    }
}

function redirect(string $location, array $parameters = [], $response_code = 302)
{
    $qs = $parameters ? '?' . http_build_query($parameters) : '';        // Create query string
    $location = $location . $qs;                                         // Create new path
    header('Location: ' . DOC_ROOT . $location, true, $response_code); // Redirect to new page
    exit;                                                                // Stop code
}

function redirect_to_email(){
    
}

function create_filename(string $filename, string $uploads): string
{
    $basename  = pathinfo($filename, PATHINFO_FILENAME);          // Get basename
    $extension = pathinfo($filename, PATHINFO_EXTENSION);         // Get extension
    $cleanname = preg_replace("/[^A-z0-9]/", "-", $basename);     // Clean basename
    $filename  = $cleanname . '.' . $extension;                   // Destination
    $i         = 0;                                               // Counter
    while (file_exists($uploads . $filename)) {                   // If file exists
        $i        = $i + 1;                                       // Update counter
        $filename = $basename . $i . '.' . $extension;            // New filename
    }
    return $filename;                                             // Return filename
}


function create_seo_name(string $text): string
{
    $text = strtolower($text);                                  // Convert text to lowercase
    $text = trim($text);                                        // Remove spaces from start/end
    if (function_exists('transliterator_transliterate')) {      // If transliterator installed
        $text = transliterator_transliterate('Latin-ASCII', $text); // Transliterate
    }
    $text = preg_replace('/ /', '-', $text);                    // Replace spaces with dashes
    $text = preg_replace('/[^-A-z0-9 ]+/', '', $text);          // Remove if not a dash, A-z or 0-9
    return $text;                                               // Return the SEO name
}

// ERROR AND EXCEPTION HANDLING FUNCTIONS
// Convert errors to exceptions
function handle_error($error_type, $error_message, $error_file, $error_line)
{
    throw new ErrorException($error_message, 0, $error_type, $error_file, $error_line); // Turn into ErrorException
}

// Handle exceptions - log exception and show error message (if server does not send error page listed in .htaccess)
function handle_exception($e)
{
    error_log($e);                        // Log the error
    http_response_code(500);              // Set the http response code
    // echo '<h1>죄송합니다. 찾을 수 없는 페이지입니다. 만약, 이미 서비스 생성이 되어 있을 경우에도 해당 메시지가 뜹니다. 
    //                     <p><a href="/">[홈으로 돌아가기]</a> 본인의 이메일로 서비스 주소가 늦더라도 발송됩니다.
    //                       또는, 이메일로 연락주시면 답변 드리겠습니다.  : schoolworks@nate.com </p>
    //                   </h1>';
    redirect('page-not-found');           // Redirect to error page
}

// Handle fatal errors
function handle_shutdown()
{
    $error = error_get_last();            // Check for error in script
    if ($error !== null) {                // If there was an error next line throws exception
        $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
        handle_exception($e);             // Call exception handler
    }
}