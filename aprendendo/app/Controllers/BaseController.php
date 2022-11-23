<?php 
namespace App\Controllers;
class BaseController{

    public function view($string, $data=[]){

        $file= dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . $string . ".php";
        if(file_exists($file)){
            require_once $file;
        } else {
            echo "Arquivo nao encontrado";
        }

    }
}

