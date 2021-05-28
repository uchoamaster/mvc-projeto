<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cidade;


use \src\handlers\LoginHandler;
class CidadesController extends Controller {
    private $loggedUsuario;

    public function __construct(){
        $this->loggedUsuario = LoginHandler::checkLogin();
        if($this->loggedUsuario === false){
            $this->redirect('/login');
        }

    }

    public function add() {
        $this->render('add');
       
    }

    public function novacidade() {
        $cidades = Cidade::select()->execute();
        $this->render('novacidade', [
            'cidades'=> $cidades
        ]);
    }

    public function addAction(){

       
        $cod_cidade = filter_input(INPUT_POST, 'Codigo_Cidade');
        $uf = filter_input(INPUT_POST, 'UF');
        $nome = filter_input(INPUT_POST, 'Nome');
        $situacao = filter_input(INPUT_POST, 'Situacao');
       

        if(  $uf && $nome && $situacao ){
            $data = Cidade::select()->where('Codigo_Cidade', $cod_cidade)->execute();

            if(count($data) === 0) {
                //insere
                Cidade::insert([
                    
                    'UF'            => $uf,
                    'Nome'          => $nome,
                    'Situacao'      => $situacao
                
                ])->execute();
                //redirect para / se salvar corretamente no bd
                $this->redirect('/novacidade');
               
            }

        }
        //redirect para /novacidade caso não
        $this->redirect('/add');
    }

    public function edit($args) {
    //    $cidade = Cidade::select()->where('codigo', $args['codigo'])->execute();
    $cidade = Cidade::select()->find($args['Codigo_Cidade'], "Codigo_Cidade");

        //   print_r($cidade);
        $this->render('edit', [
            'cidade' => $cidade
        ]);

    }

    public function editAction($args){
      
        $uf = filter_input(INPUT_POST, 'UF');
        $nome = filter_input(INPUT_POST, 'Nome');
        $situacao = filter_input(INPUT_POST, 'Situacao');

        
        if( $uf && $nome && $situacao ) {
            Cidade::update()
                ->set('UF', $uf)
                ->set('Nome', $nome)
                ->set('Situacao', $situacao)
                ->where('Codigo_Cidade', $args['Codigo_Cidade'])
            ->execute();

            $this->redirect('/novacidade');

        }

        $this->redirect('/novacidade/editar/'.$args['Codigo_Cidade'].'');
    }

    public function del($args){
        Cidade::delete()->where('Codigo_Cidade', $args['Codigo_Cidade'])->execute();
        $this->redirect('/novacidade');
    }

 

}

