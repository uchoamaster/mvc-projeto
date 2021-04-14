<?php
use core\Router;

$router = new Router();

//rotas
$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');


//acesso
$router->get('/login', 'HomeController@login');