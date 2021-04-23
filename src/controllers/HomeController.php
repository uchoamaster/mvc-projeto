<?php
namespace src\controllers;

use \core\Controller;

use \src\handlers\LoginHandler;

class HomeController extends Controller {
    //verifica se o user esta logado ou nao
    private $loggedUser;

    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/login');
        }

    }
    
    public function index() {
        
        $this->render('home');
    }

    public function perfil() {
        $this->render('perfil');
    }

    public function favoritos() {
        $this->render('favoritos');
    }

    public function cadastros() {
        $this->render('cadastros');
    }

    public function cadcidades() {
        $this->render('cad-cidades');
    }

    public function financeiro() {
        $this->render('financeiro');
    }

    public function gerencial() {
        $this->render('gerencial');
    }

    public function rh() {
        $this->render('rh');
    }

    public function entradas() {
        $this->render('entradas');
    }

    public function saidas() {
        $this->render('saidas');
    }

    public function relatorios() {
        $this->render('relatorios');
    }

    public function utilitarios() {
        $this->render('utilitarios');
    }

    public function agendapessoal() {
        $this->render('agenda-pessoal');
    }

    public function ajuda() {
        $this->render('ajuda');
    }

    //acesso
    public function login() {
    $this->render('login');
}

}

