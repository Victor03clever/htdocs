<?php

namespace App\controllers;

use App\models\User as AppUser;

class User 
{

    public function store () 
    {
        $user = new AppUser();
        $data = $_POST;
        $data['password'] = password_hash('0000',PASSWORD_DEFAULT);
        $data['admin'] = 1;
        $verify = $user->create($data);
        if ($verify) {
            setFlash("message",'<div class="alert alert-success">Conta criada com sucesso!</div>');
            return redirect(BASE_URL."painel/administrativo/usuarios");
        } else {
            setFlash("message",'<div class="alert alert-danger">Erro ao criar a conta!</div>');
            return redirect(BASE_URL."painel/administrativo/usuarios");
        }

    }
    
    public function delete($id)
    {
        $user = new AppUser();
        if (!empty($user->find($id['id']))){
            $user->delete($id['id']);
            setFlash("message",'<div class="alert alert-success">Removido com sucesso!</div>');
            return redirect(BASE_URL."painel/administrativo/usuarios");
        }
        setFlash("message",'<div class="alert alert-danger">Erro ao remover o usuario!</div>');
        return redirect(BASE_URL."painel/administrativo/usuarios");
    }
}