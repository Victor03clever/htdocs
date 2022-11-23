<?php

namespace App\controllers;


class UsersController extends BaseController
{
    public function index() {
        echo "Metodo index";
    }    

    public function create() {
        echo "Metodo create";
    }

    public function other($id,$name) {
        echo "id: $id, nome: $name";
    }
}
