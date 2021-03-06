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

//rotas Controller Home Login
$router->get('/login', 'LoginController@signin'); 
$router->post('/login', 'LoginController@signinAction');
$router->get('/signup', 'LoginController@signup'); 
$router->post('/signup', 'LoginController@signupAction'); 



//rotas Controller Cidade
$router->get('/add', 'CidadesController@add');
$router->post('/novacidade', 'CidadesController@addAction');
$router->get('/novacidade', 'CidadesController@novacidade');

$router->get('/novacidade/editar/{codigo}', 'CidadesController@edit');
$router->post('/novacidade/editar/{codigo}', 'CidadesController@editAction');
$router->get('/novacidade/excluir/{codigo}', 'CidadesController@del');




