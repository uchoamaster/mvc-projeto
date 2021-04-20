<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cidade;
class CidadesController extends Controller {

    public function add() {
        $this->render('add');
       
    }

    public function novacidade() {
        $this->render('novacidade');
    }

    public function addAction(){

       
        $uf = filter_input(INPUT_POST, 'uf');
        $nome = filter_input(INPUT_POST, 'nome');

        if( $uf && $nome){
            $data = Cidade::select()->where('nome', $nome)->execute();

            if(count($data) === 0) {
                //insere
                Cidade::insert([
                    'uf' => $uf,
                    'nome' => $nome
                ])->execute();
                //redirect para / se salvar corretamente no bd
                $this->redirect('/');
               
            }

        }
        //redirect para /novacidade caso não
        $this->redirect('/novacidade');
    }

 

}

