<?php

namespace App\controllers;

class BaseController
{
    public function view ($view, $data=array()){
        extract($data);
        $file = dirname(__DIR__,1).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR.$view.".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
