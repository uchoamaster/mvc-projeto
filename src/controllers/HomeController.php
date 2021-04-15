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

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    //acesso
    public function login() {
    $this->render('login');
}

}

