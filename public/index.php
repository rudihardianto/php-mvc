<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ruquds\PhpMvc\App\Router;
use Ruquds\PhpMvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::run();

// $path = "/index";

// if (isset($_SERVER['PATH_INFO'])) {
//     $path = $_SERVER['PATH_INFO'];
// }

// require __DIR__ . "/../app/View" . $path . ".php";