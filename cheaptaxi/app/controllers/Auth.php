<?php

namespace App\controllers;

use App\models\User;

class Auth 
{
    public function login()
    {
        $login = trim(strip_tags($_POST['login']));
        $senha = trim(strip_tags($_POST['password']));

        $user = new User();
        $user = $user -> findBy($login,'login');
        if (count($user) > 0) {
            if (password_verify($senha, $user['password']))
            {
                $_SESSION[AUTH_SESSION_KEY] = $user;
                if ($user['admin'] < 1) {
                    setFlash("welcome",'<div class="alert alert-success">Login efectuado com sucesso!</div>');
                    return redirect(BASE_URL."painel/cliente");
                } else {
                    setFlash("welcome",'<div class="alert alert-success">Login efectuado com sucesso!</div>');
                    return redirect(BASE_URL."painel/administrativo");
                }
            }
            setFlash("message",'<div class="alert alert-danger">Não foi possível realizar o login!</div>');
            return redirect(BASE_URL."login");
        }
        setFlash("message",'<div class="alert alert-danger">Não foi possível realizar o login!</div>');
        return redirect(BASE_URL."login");
    }

    public function logout()
    {
        unset($_SESSION[AUTH_SESSION_KEY]);
        return redirect(BASE_URL."login");
    }
}