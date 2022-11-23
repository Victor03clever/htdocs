<?php

// session start é um metodo nativo do php que permite o uso se sessão na nossa aplicação
session_start();

require_once __DIR__ . "/bootstrap.php";

use CoffeeCode\Router\Router;
use App\repository\Category;
use App\repository\Comentary;
use App\repository\Post;
use App\repository\User;
use App\utils\Resources;

/**
 * Esta class Router que foi estânciada na variavel $router é responsável por fazer
 * O sistema de roteamento da aplicação
 */
$router = new Router(URL_BASE);

$router->group(null);

$router->get('/', function($data){
    $post = new Post();
    $page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
    $data['posts'] = $post->getPosts($page,5,true);
    $data['postsRight'] = $post->getPosts($page,3);
    $data['postsDestaq'] = $post->getPosts(1,1,true);
    return Resources::view("index",$data);
});

/**
 * Rota responsável por carregar a pagina de pastagem individual.
 */
$router->get('/postagem/{id}', function($data){
    $post = new Post();
    $comentary = new Comentary();
    $post = $post->find($data['id']);
    $comentarys = $comentary->getComentarys($data['id']);
    return Resources::view("single-post",compact('post','comentarys'));
});


/**
 * Rota Responsável por adicionar um comentario em uma postagem
 */
$router->post('/postagem/{id}', function($data){
    $comentary = new Comentary();
    $id = $data['id'];
    $data = [
        'conteudo' => $_POST['conteudo'],
        'postagens_id_postagens' => $id,
        'usuarios_id_usuarios' => $_SESSION[LOGIN]['id_usuarios']
    ];
    $comentary->create($data);
    return Resources::redirect('/'.APP_NAME.'/postagem/'.$id);
});

/**
 * Rota Responsável por fazer login de usuario normal
 */
$router->post('/usuario/login', function($data){
    verifyAuth();
    $user = new User();
    $auth = $user->loginUserClient($_POST["email"],$_POST["senha"]);
    if ( $auth ) {
        setFlash("message",'<div class="alert alert-success">Logado com sucesso!</div>');
        return Resources::redirect('/'.APP_NAME.'/');
    } else {
        setFlash("message",'<div class="alert alert-danger">Não foi possivel realizar a autenticação!</div>');
        return Resources::redirect('/'.APP_NAME);
    }
});
/*
* METODOS OU ROUTAS PARA LOGIN OU LOGOUT(SAIR DO SISTEMA)
*/

require_once 'router-login.php';

/*
* ROUTAS PARA CRUD (Pagina Administrador)
* CRUD -> CREATE, READ, UPDATE, DELETE
* Essas rotas estão definidas para requisições
* do tipo POST ou seja requisições usando metodo POST
*/

/**
 * Routas para usuarios
 * */

require_once 'router-user.php';

/**
 * Routas para as categorias
 * */

require_once 'router-category.php';


/**
 * Routas para as postagens
 * */

require_once 'router-post.php';


/**
 * Routa (ou metodo) para carregar as paginas adminsitrativas 
 * */


$router->group("/admin");
$router->get('/{page}', function($data){
    logged(); // o metodo logged verifica se o usuario eta logado
    $post = new Post();
    $category = new Category();
    $user = new User();
    $data["categorias"] = $category->all();
    $data['posts'] =  $post->findAll();
    $data['users'] = $user->all();
    return Resources::view("admin/template",$data);
});






$router->dispatch();


if ($router->error()) {
    var_dump($router->error());
}