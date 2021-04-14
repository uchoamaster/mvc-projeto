<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'Carlos';
        $this->render('home',['nome'=>$nome]);
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

