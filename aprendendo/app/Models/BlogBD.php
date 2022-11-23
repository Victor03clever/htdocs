<?php

namespace App\Models;

class BlogBD extends conn
{
    private object $conn;
    public function buscar_BD()
    {
        $this->conn = $this->connection();
        $curso = "SELECT * FROM produtos";
        $resul_curso = $this->conn->prepare($curso);
        $resul_curso->execute();
        $retorno = $resul_curso->fetchAll();
        return $retorno;
    }
}
