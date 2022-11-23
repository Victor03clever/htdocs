<?php

use App\repository\Post;
use App\utils\Resources;
use App\usecase\Upload;

$router->post('/admin/createposte', function($data){
    logged();
    $post = new Post();

    //var_dump($_POST);die;
    $upload = new Upload();
    $upload::upload();
    
    if ($upload::failUpload() !== null) {
        setFlash("danger",'<div class="alert alert-danger">'.$upload::failUpload().'</div>');
        return Resources::redirect('/'.APP_NAME.'/admin/createposte');
    }
    $image = 'posts/'.$upload::getName();
    $data = [
        "titulo" => $_POST["titulo"],
        "imagem" => $image,
        "conteudo" => $_POST["desc"],
        "categoria_id_categoria" => $_POST["categoria"],
        "usuarios_id_usuarios" => getUser()["id_usuarios"]
    ];
    $result = $post->create($data);
    // var_dump($result);die;

    if ($result){
        return Resources::redirectWithMessage("success",'<div class="alert alert-success">Postagem realizado com sucesso!</div>','/'.APP_NAME."/admin/createposte");
    }
    return Resources::redirectWithMessage("danger",'<div class="alert alert-danger">Falha ao realizar a postagem!</div>','/'.APP_NAME."/admin/createposte");
});

$router->get('/admin/post/delete/{id}',function ($data){
    $path = dirname(__FILE__). DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR;
    $upload = new Upload();
    $post = new Post();
    $file = $path.$post->find($data['id'])['imagem'];
    $upload->removeFile($file);
    $verify = $post->delete($data['id']);
    if ($verify) {
        return Resources::redirectWithMessage("success",'<div class="alert alert-success">Postagem removido com sucesso!</div>','/'.APP_NAME."/admin/createposte");
    } else {
        return Resources::redirectWithMessage("danger",'<div class="alert alert-danger">Falha ao remover a postagem!</div>','/'.APP_NAME."/admin/createposte");
    }
});