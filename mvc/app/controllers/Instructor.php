<?php

namespace App\controllers;

use App\models\Instructor as ModelsInstructor;

class Instructor
{
    public function store()
    {

        $instructor = new ModelsInstructor();
        $verify = $instructor->store($_POST);
        if ($verify) {
            setFlash('message','<div class="alert alert-success">Tutor registrado com sucesso!</div>');
            return redirect('cadastros');
        }
        setFlash('message','<div class="alert alert-danger">Erro ao registrar tutor!</div>');
        return redirect('cadastros');
    }
}