<?php
define('DEV', false);                       // In development or live? Development = true | Live = false
define('DOMAIN', 'http://localhost:8000'); // Domain (used to create links in emails)
define('ROOT_FOLDER', 'www');           // Name of document root folder (e.g. public, content, htdocs)

// DOC_ROOT is created because the download code has several versions of the sample site
// On a live site a single forward slash / would indicate the document root folder
// $this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
// echo $this_folder;
// $parent_folder = dirname($this_folder);
  // $folder_path = $_SERVER['REQUEST_URI'];

  // $folder_root = explode('/', $folder_path);

 
  // if ($folder_root[2] != null && $folder_root[3] != null ) {
  //     define("DOC_ROOT", DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR . $folder_root[2] . DIRECTORY_SEPARATOR . $folder_root[3] . DIRECTORY_SEPARATOR);
  // } else if ($folder_root[1] === 'www') {
  //     define("DOC_ROOT", DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR);
  // }
define("DOC_ROOT", DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR);


//sever management
$admin_mail = 'admin@easyapps.kr';


/// Database settings
$type     = 'mysql';                 // Type of database
$server   = 'localhost';             // Server the database is on
$db       = 'neohum774';             // Name of the database
$port     = '3306';                      // Port is usually 8889 in MAMP and 3306 in XAMPP
$charset  = 'utf8mb4';               // UTF-8 encoding using 4 bytes of data per character
$username = 'neohum774';         // Enter YOUR username here
$password = 'min9610012';         // Enter YOUR password here

// DO NOT CHANGE NEXT LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN

//SMTP server settings
$email_config = [
    'server'      => 'smtp.mail.nate.com',
    'port'        => '587',
    'username'    => 'neohum',
    'password'    => 'natemin9612@@',
    'security'    => 'tls',
    'admin_email' => 'neohum@nate.com',
    'debug'       => (DEV) ? 2 : 0,
];

// $email_config = [
//     'server'      => 'email-smtp.ap-northeast-2.amazonaws.com',
//     'port'        => '25',
//     'username'    => 'AKIATWDBGQ44CMKRFVUM',
//     'password'    => 'BEnL49InnO4FhD00uIcny7XTvCKWUuqN3/l2HRaLOXR+',

//     'security'    => 'tls',
//     'admin_email' => 'neohum@nate.com',
//     'debug'       => (DEV) ? 2 : 0,
// ];

// //mailtrap_test
// 

// File upload settings
define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]); // Allowed file types
define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif',]);       // Allowed file extensions
define('MAX_SIZE', '5242880');                                    // Max file size
// DO NOT EDIT:
define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR); // Image upload folder
