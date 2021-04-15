<?php
use core\Router;

$router = new Router();

//rotas Controller Home
$router->get('/', 'HomeController@index');
$router->get('/perfil', 'HomeController@perfil');
$router->get('/favoritos', 'HomeController@favoritos');
$router->get('/cadastros', 'HomeController@cadastros');
$router->get('/cad-cidades', 'HomeController@cadcidades');
$router->get('/financeiro', 'HomeController@financeiro');
$router->get('/gerencial', 'HomeController@gerencial');
$router->get('/rh', 'HomeController@rh');
$router->get('/entradas', 'HomeController@entradas');
$router->get('/saidas', 'HomeController@saidas');
$router->get('/relatorios', 'HomeController@relatorios');
$router->get('/utilitarios', 'HomeController@utilitarios');
$router->get('/agenda-pessoal', 'HomeController@agendapessoal');
$router->get('/ajuda', 'HomeController@ajuda');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
//rotas Controller Home Login
$router->get('/login', 'HomeController@login');
//rotas Controller Usuários
$router->get('/novacidade', 'UsuariosController@add');



