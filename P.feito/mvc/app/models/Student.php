<?php

namespace App\models;

class Student extends Model
{
    protected $table = 'Aluno';
    protected $primary_key = 'idAluno';

    public function store()
    {
        $dataUser = [
            'login' => $_POST['login'],
            'senha' => password_hash('0000',PASSWORD_DEFAULT)
        ];

        $user = new User();
        $user->create($dataUser);

        $this->query("SELECT Usuarios.idUsuarios FROM Usuarios ORDER BY idUsuarios DESC LIMIT 1");
        $idUsuarios = $this->result();

        $data = [
            'nome' => $_POST['nome'],
            'ano_nasc' => $_POST['ano_nasc'],
            'sexo' => $_POST['sexo'],
            'Encarregado' => $_POST['encarregado'],
            'contacto' => $_POST['contacto'],
            'Morada' => $_POST['morada'],
            'Tutor_IdTutor' => $_POST['Tutor_IdTutor'],
            'Usuarios_idUsuarios' => $idUsuarios['idUsuarios'],
            'Curso_idCurso' => $_POST['Curso_idCurso']
        ];

        $student = new Student();
        return $student -> create($data);
    }
}