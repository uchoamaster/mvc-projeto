<?php
namespace src\controllers;

use \core\Controller;

use \src\handlers\LoginHandler;

class HomeController extends Controller {
    //verifica se o usuario esta logado ou nao
    private $loggedUsuario;
//se o usuario nao tiver token registrado ele será redirecionado para a tela de login, auqi com o loginhandler e a função checklogin verificam se o usuario tem o token criado
//caso não tenha ocorre o redirecionamento
    public function __construct(){
        $this->loggedUsuario = LoginHandler::checkLogin();
        if($this->loggedUsuario === false){
            $this->redirect('/login');
        }

    }
    //menu home
    public function index() {
        
        $this->render('home');
    }
//menu perfil
    public function perfil() {
        $this->render('perfil');
    }
//menu favoritos
    public function favoritos() {
        $this->render('favoritos');
    }
//menu cadastros
    public function cadastros() {
        $this->render('cadastros');
    }
//menu cadastro de cidades
    public function cadcidades() {
        $this->render('cad-cidades');
    }
//menu financeiro
    public function financeiro() {
        $this->render('financeiro');
    }
//menu gerencial
    public function gerencial() {
        $this->render('gerencial');
    }
//menu rh
    public function rh() {
        $this->render('rh');
    }
//menu entradas
    public function entradas() {
        $this->render('entradas');
    }
//menu saidas
    public function saidas() {
        $this->render('saidas');
    }
//menu relatorios
    public function relatorios() {
        $this->render('relatorios');
    }
//menu utilitarios
    public function utilitarios() {
        $this->render('utilitarios');
    }
//menu agenda
    public function agendapessoal() {
        $this->render('agenda-pessoal');
    }
//menu ajuda
    public function ajuda() {
        $this->render('ajuda');
    }

    //acesso
    public function login() {
    $this->render('login');
}

}

