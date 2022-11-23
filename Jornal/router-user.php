<?php

use App\repository\User;
use App\utils\Resources;

$router->post('/admin/createuser', function($data){
    $user = new User();
    $data = $_POST;
    $data['adm'] = isset($_POST['adm']) ? 1 : 0;
    $user->create($data);
    setFlash('success','<div class="alert alert-success">Usuario '.$_POST['nome'].' cadastrado com sucesso!</div>');
    return Resources::redirect('/'.APP_NAME.'/admin/createuser');
});

$router->post('/criarconta', function($data){
    $user = new User();
    $data = $_POST;
    $data['adm'] = 0;
    $user->create($data);
    setFlash('message','<div class="alert alert-success">Usuario '.$_POST['nome'].' cadastrado com sucesso!</div>');
    return Resources::redirect('/'.APP_NAME.'/');
});

$router->post('/login', function($data){
    verifyAuth();
    $user = new User();
    $auth = $user->login($_POST["email"],$_POST["senha"]);
    if ( $auth ) {
        return Resources::redirect('/'.APP_NAME.'/admin/home');
    } else {
        setFlash("danger",'<div class="alert alert-danger">Não foi possivel realizar a autenticação!</div>');
        return Resources::redirect('/'.APP_NAME.'/login');
    }
});

$router->get('/logout', function($data){
    unset($_SESSION[LOGIN]);
    return Resources::redirect('/'.APP_NAME.'/admin/login');
});

$router->get('/usuario/logout', function($data){
    unset($_SESSION[LOGIN]);
    return Resources::redirect('/'.APP_NAME.'/');
});

?>