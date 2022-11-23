<?php

namespace App\controllers;

use App\models\Student as ModelsStudent;

class Student 
{
    public function store()
    {
        $student = new ModelsStudent();
        $verify = $student->store();
        if ($verify) {
            setFlash('message','<div class="alert alert-success">Aluno registrado com sucesso!</div>');
            return redirect('alunos');
        }
        setFlash('message','<div class="alert alert-danger">Erro ao registrar aluno!</div>');
        return redirect('alunos');
    }
}