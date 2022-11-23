<?php

use App\repository\User;
use App\utils\Resources;

// $router->get('/user', function($data){
//     verifyAuth();
//     return Resources::view("user");
// });


$router->get('/login', function($data){
    verifyAuth();
    return Resources::view("login");
});

$router->get('/logout', function($data){
    $user = new User();
    $user->logout();
    return Resources::redirect('/login');
});


?>