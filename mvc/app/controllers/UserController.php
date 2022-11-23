<?php

namespace App\controllers;

use App\models\User;

class UserController
{
    public function __construct()
    {
        verifyAuth();
    }
    public function store()
    {
        $user = new User();
        $data = $_POST;
        $data['senha'] = password_encripty($_POST['senha']);
        $user = $user->create($data);
        if ($user) {
            return redirect(BASE_URL.'home');
        } else {
            return redirect(BASE_URL);
        }
    }

    public function login()
    {
        $user = new User();
        $user = $user->findBy($_POST['login'],'login');
        if (password_verify_encripty($_POST['senha'],$user[0]['senha'])){
            $_SESSION[AUTH_SESSION_KEY] = $user[0];
            return redirect('home');
        } else {
            return redirect(BASE_URL);
        }
    }
    public function logout()
    {
        unset($_SESSION[AUTH_SESSION_KEY]);
        return redirect(BASE_URL,false);
    }
}