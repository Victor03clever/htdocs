<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(getenv('BASE_URL'));
$router->namespace('App\\controllers');
foreach ($routers as $key => $value) {
    $method = $value['method'];  
    $router->$method($value['path'],$value['controller']);
}

foreach ($helpers as $key => $value) {
    $helper = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'app' 
    . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . str_replace('.php','',$value).'.php';
    if (file_exists($helper)) require_once $helper;
}

$router->dispatch();