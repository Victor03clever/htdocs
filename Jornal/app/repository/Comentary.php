<?php

namespace App\repository;

class Comentary extends Repository
{
    protected $table = 'comentarios';
	protected $primary_key = 'id_coment';

    public function getComentarys($id_post)
    {
        $this->query("SELECT * FROM comentarios INNER JOIN usuarios ON usuarios.id_usuarios=comentarios.usuarios_id_usuarios WHERE comentarios.postagens_id_postagens=$id_post");
        return $this->results();
    }
}