<?php
namespace App\Controllers;

Class Blog extends BaseController {
    private array $dados;
    public function index(){
        
        $bd= new \App\Models\BlogBD();
        $this->dados['produtos'] = $bd-> buscar_BD();
        return $this->view("Blog", $this ->dados);
    }
}
