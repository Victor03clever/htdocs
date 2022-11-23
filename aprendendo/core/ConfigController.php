<?php

namespace Core;


class ConfigController
{
    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlMetodo;

    public function __construct()
    {
        
        if (!empty($this->url)) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL );
            $this->urlConjunto = explode("/", $this->url);
            var_dump($this->urlConjunto);
           if ((isset($this->urlConjunto[0]))){
             
                 $this->urlController=$this->urlConjunto[0];
                $this->urlMetodo = "index";
                
        }else{
            $this->urlController="erro";
            $this->urlMetodo="index";
        }
        } else {
            $this->urlController = "home";
            $this->urlMetodo = "index";
        }
        // echo "Controller: {$this->urlController} - Metodo: {$this->urlMetodo}";
        //$urlcontroller=ucwords($this->urlController);
       
        }
    public function carregar()
    {
       
        echo "\\App\\Controllers\\" . $this->urlController . "<br>";
        $classe  = "\\App\\Controllers\\" . $this->urlController;
        $classecarr = new $classe;
        $classecarr->index();
    }
}
