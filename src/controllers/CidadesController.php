<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cidade;
class CidadesController extends Controller {

    public function add() {
        $this->render('add');
       
    }

    public function addAction(){

        $codigo = filter_input(INPUT_POST, 'codigo');
        $uf = filter_input(INPUT_POST, 'uf');
        $nome = filter_input(INPUT_POST, 'nome');

        if($codigo && $uf && $nome){
            $data = Cidade::select()->where('codigo', $codigo)->execute();

            if(count($data) === 0) {
                //insere
                Cidade::insert([
                    'codigo' => $codigo,
                    'uf' => $uf,
                    'nome' => $nome
                ])->execute();
                //redirect para /
                $this->redirect('/');
               
            }

        }
        //redirect para /novacidade
        $this->redirect('/novacidade');
    }

}

