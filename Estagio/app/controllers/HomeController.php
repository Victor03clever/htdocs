<?php

namespace App\controllers;

class HomeController extends BaseController{

    public function index() {
        $this->view('home');
    }
}