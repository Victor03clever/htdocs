<?php
use App\repository\Category;
use App\utils\Resources;


$router->post('/admin/createcategory', function($data){
    logged();
    $category = new Category();
    $category->create($_POST);
    setFlash("success",'<div class="alert alert-success"> Categoria '. $_POST['nome'] .' adicionado com sucesso!</div>');
    return Resources::redirect('/'.APP_NAME.'/admin/createcategory');
});

?>