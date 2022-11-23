<?php

namespace App\controllers;

use App\models\Motorista as ModelsMotorista;

class Motorista
{
    public function store () 
    {
        $motorista = new ModelsMotorista();
        $data = $_POST;
        $verify = $motorista->create($data);
        if ($verify) {
            setFlash("message",'<div class="alert alert-success">Motorista adicionado com sucesso!</div>');
            return redirect(BASE_URL."painel/administrativo/motoristas");
        } else {
            setFlash("message",'<div class="alert alert-danger">Erro ao criar a conta!</div>');
            return redirect(BASE_URL."painel/administrativo/motoristas");
        }

    }
    
    public function delete($id)
    {
        $motorista = new ModelsMotorista();
        if (!empty($motorista->find($id['id']))){
            $motorista->delete($id['id']);
            setFlash("message",'<div class="alert alert-success">Removido com sucesso!</div>');
            return redirect(BASE_URL."painel/administrativo/motoristas");
        }
        setFlash("message",'<div class="alert alert-danger">Erro ao remover o usuario!</div>');
        return redirect(BASE_URL."painel/administrativo/motoristas");
    }
}