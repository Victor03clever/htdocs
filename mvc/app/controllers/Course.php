<?php

namespace App\controllers;

use App\models\Course as ModelsCourse;

class Course 
{
    public function store()
    {
        $course = new ModelsCourse();
        $verify = $course->create($_POST);
        // var_dump($verify);die;
        if ($verify) {
            setFlash('message','<div class="alert alert-success">Curso registrado com sucesso!</div>');
        }else {
            setFlash('message','<div class="alert alert-danger">Erro ao registrar curso!</div>');
        }
        return redirect('cadastros');
    }
}