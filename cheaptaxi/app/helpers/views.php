<?php

function view(string $view, array $data = []){
    extract($data);
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $view .'.php';
    if (file_exists($file)) require_once $file;
}

function asset($fileName)
{
    $file = dirname(__FILE__,3) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $fileName;
    if (file_exists($file)) return BASE_URL.'public/'.$fileName;
}

function redirect(string $to)
{
    return header('Location: '.$to);
}