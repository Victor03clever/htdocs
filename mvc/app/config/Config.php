<?php
global $routers;
global $base_url;

$base_url = getenv('BASE_URL')? getenv('BASE_URL'):'http://localhost/mvc/';
define('BASE_URL',$base_url);
define('AUTH_SESSION_KEY',getenv('AUTH_SESSION_KEY')? getenv('AUTH_SESSION_KEY'): 'AUTH_USER');

$routers = [
    ['path'=>'/','controller'=>'PageAuthController:index','method'=>'get'],
    ['path'=>'/','controller'=>'UserController:login','method'=>'post'],


    ['path'=>'/home','controller'=>'HomeController:home','method'=>'get'],
    ['path'=>'/cadastros','controller'=>'HomeController:register','method'=>'get'],
    ['path'=>'/alunos','controller'=>'HomeController:students','method'=>'get'],


    ['path'=>'/alunos/adicionar','controller'=>'Student:store','method'=>'post'],
    ['path'=>'/alunos/remover/{id}','controller'=>'Student:delete','method'=>'get'],


    ['path'=>'/tutores/adicionar','controller'=>'Instructor:store','method'=>'post'],

    ['path'=>'/cursos/adicionar','controller'=>'Course:store','method'=>'post'],


    ['path'=>'/sair','controller'=>'UserController:logout','method'=>'get'],
    ['path'=>'/cadastro','controller'=>'PageAuthController:register','method'=>'get'],
    ['path'=>'/cadastro','controller'=>'UserController:store','method'=>'post'],
];
