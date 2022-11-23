<?php

namespace App\models;

class Instructor extends Model
{
    protected $table = 'Tutor';
    protected $primary_key = 'idTutor';

    public function store()
    {
        $data1 = [
            'nome' => $_POST['nome'],
            'especialidade' => $_POST['especialidade'],
            'contacto' => $_POST['contacto'],
            'email' => $_POST['email'],
            'endereco' => $_POST['endereco'],
        ];

        $data2 = [
            'login' => $_POST['login'],
            'senha' => password_hash('1234',PASSWORD_DEFAULT),
            'nivel' => 1,
        ];

        $user = new User();
        $user->create($data2);

        $this->query("SELECT Usuarios.idUsuarios FROM Usuarios ORDER BY idUsuarios DESC LIMIT 1");
        $idUsuarios = $this->result();

        $data1['Usuarios_idUsuarios'] = $idUsuarios['idUsuarios'];
        $instructor = new Instructor();
        return $instructor->create($data1);
        
    }
}