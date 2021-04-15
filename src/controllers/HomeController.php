<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

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

