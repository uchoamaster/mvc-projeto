<?php
use core\Router;

$router = new Router();

//rotas
$router->get('/', 'HomeController@index');
$router->get('/favoritos', 'HomeController@favoritos');
$router->get('/perfil', 'HomeController@perfil');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/novacidade', 'UsuariosController@add');



//acesso
$router->get('/login', 'HomeController@login');