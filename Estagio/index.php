<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

$request = $_REQUEST;
$controllerDefault = '\\App\\controllers\\HomeController';
if (!empty($request) || isset($request['url'])) {
    $url = explode('/',rtrim($request['url'],'/'));
    if (count($url) === 2) {
        [$controller, $method] = $url;
        array_shift($url);
        array_shift($url);
    } elseif(count($url) > 2) {
        $controller = $url[0];
        $method = $url[1];
        array_shift($url);
        array_shift($url);
    }else {
        $controller = $url[0];
        $method = null;
    }
    $namespace = "\\App\\controllers\\";
    $instance = $namespace.ucfirst($controller)."Controller";
    if (class_exists($instance)) {
        $obj = new $instance();
        
        if ($method===null && method_exists($obj,'index')) {
            return $obj->index();
        }elseif(method_exists($obj,$method)) {
            return call_user_func_array([new $instance,$method],$url);
        }else {
            echo "Page not found!";
        }
    } else {
        echo "Page not found!";
    }
} else {
    $obj = new $controllerDefault();
    $obj->index();
}