<?php
global $routers;
global $base_url;

$base_url = getenv('BASE_URL') ? getenv('BASE_URL') : 'http://localhost/cheaptaxi/';
define('BASE_URL',$base_url);
define('AUTH_SESSION_KEY',getenv('AUTH_SESSION_KEY')? getenv('AUTH_SESSION_KEY'): 'AUTH_USER');

$routers = [
    ['path'=>'/','controller'=>'HomeController:index','method'=>'get'],

    ['path'=>'/painel/cliente','controller'=>'PainelController:index','method'=>'get'],

    ['path'=>'/painel/administrativo','controller'=>'PainelController:index','method'=>'get'],
    ['path'=>'/painel/administrativo/usuarios','controller'=>'PainelController:user','method'=>'get'],

    ['path'=>'/painel/administrativo/motoristas','controller'=>'PainelController:motoristas','method'=>'get'],
    
    ['path'=>'/login','controller'=>'HomeController:login','method'=>'get'],
    ['path'=>'/criarconta','controller'=>'HomeController:register','method'=>'get'],
    ['path'=>'/sair','controller'=>'Auth:logout','method'=>'get'],
    ['path'=>'/login','controller'=>'Auth:login','method'=>'post'],


    ['path'=>'/usuarios/adicionar','controller'=>'User:store','method'=>'post'],
    ['path'=>'/usuarios/remover/{id}','controller'=>'User:delete','method'=>'get'],

    ['path'=>'/motoristas/adicionar','controller'=>'Motorista:store','method'=>'post'],
    ['path'=>'/motoristas/remover/{id}','controller'=>'Motorista:delete','method'=>'get'],
];
