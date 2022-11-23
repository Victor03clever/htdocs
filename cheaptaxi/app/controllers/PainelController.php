<?php

namespace App\controllers;

use App\models\Motorista;
use App\models\User;

class PainelController
{
    public function __construct()
    {
        logged();
    }
    public function index()
    {
        $page = 'index';
        return view("painel/layouts/app",compact('page'));
    }

    public function user ()
    {
        $page = 'user';
        $user = new User();
        $users = $user->all();
        return view("painel/layouts/app",compact('page','users'));
    }

    public function motoristas ()
    {
        $page = 'motorita';
        $motorita = new Motorista();
        $motoristas = $motorita->all();
        return view("painel/layouts/app",compact('page','motoristas'));
    }

    
}