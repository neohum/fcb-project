<?php
declare(strict_types = 1);                               // Use strict types
if (!defined('APP_ROOT')) define('APP_ROOT', dirname(__FILE__, 2));                 // Application root


require APP_ROOT . '/src/functions.php';                 // Functions
require APP_ROOT . '/config/config.php';                 // Configuration data
require APP_ROOT . '/vendor/autoload.php';               // Autoload libraries

if (DEV === false) {                                     // If not in development
    set_exception_handler('handle_exception');           // Set exception handler
    set_error_handler('handle_error');                   // Set error handler
    register_shutdown_function('handle_shutdown');       // Set shutdown handler
}

$cms = new PhpBook\CMS\CMS($dsn, $username, $password); // Create CMS object
unset($dsn, $username, $password);                       // Remove database config data

$twig_options['cache'] = APP_ROOT . '/var/cache';        // Path to Twig cache folder
$twig_options['debug'] = DEV;                            // If dev mode, turn debug on

$loader = new Twig\Loader\FilesystemLoader(APP_ROOT . '/templates'); // Twig loader
$twig   = new Twig\Environment($loader, $twig_options);  // Twig environment
$twig->addGlobal('doc_root', DOC_ROOT);                  // Document root

                          // Create session
                  // Add session to Twig global
$session = $cms->getSession();                            // Create session
$twig->addGlobal('session', $session);                   // Add session to Twig global
if (DEV === true) {                                      // If in development
    $twig->addExtension(new \Twig\Extension\DebugExtension()); // Add Twig debug extension
}