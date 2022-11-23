<?php

namespace App\repository;

class Post extends Repository
{
	protected $table = 'postagens';
	protected $primary_key = 'id_postagens';

	public function getPosts($page=1,$itemsPerPage=2,$desc=false)
	{
		$orderBy = $desc ? "ORDER BY id_postagens DESC" : "";
		$start = ($page - 1)*$itemsPerPage;
		$this->query("SELECT SQL_CALC_FOUND_ROWS postagens.*,usuarios.nome as usuario, categoria.nome as categoria, 
		categoria.id_categoria
		FROM postagens, usuarios, categoria 
		WHERE usuarios.id_usuarios=postagens.usuarios_id_usuarios $orderBy LIMIT $start,$itemsPerPage");
		$results = $this->results();
		$this->query("SELECT FOUND_ROWS() AS totalPages;");
		$result = $this->result();
		return [
			'data' => $results,
			'pages' => ceil($result['totalPages'] / $itemsPerPage)
		];
	}
}
