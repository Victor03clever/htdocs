<?php

namespace App\controllers;

use App\models\User;

class HomeController
{

    public function index()
    {
        $user = new User();
        $users = $user->all();
        return view('index',compact('users'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function user()
    {
        return view('usuarios');
    }
}
