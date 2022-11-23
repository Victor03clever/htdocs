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
            return redirect('cadastros');
        }
        setFlash('message','<div class="alert alert-danger">Erro ao registrar aluno!</div>');
        return redirect('cadastros');
    }

    public function delete($id)
    {
        $student = new ModelsStudent();
        $verify = $student->find($id['id']);
        if (!empty($verify)) {
            $student->delete($id['id']);
            setFlash('message','<div class="alert alert-success">Aluno apagado com sucesso!</div>');
            return redirect('alunos');
        }
        setFlash('message','<div class="alert alert-danger">Erro ao apagar aluno!</div>');
        return redirect('alunos');
    }
}