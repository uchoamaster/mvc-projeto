<?php
namespace src\controllers;

use \core\Controller;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
       
    }

    public function addAction(){

        $codigo = filter_input(INPUT_POST, 'codigo');
        $uf = filter_input(INPUT_POST, 'uf');
        $nome = filter_input(INPUT_POST, 'nome');
    
    }

}

