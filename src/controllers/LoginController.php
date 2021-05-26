<?php
namespace src\controllers;

use \core\Controller;


use src\handlers\LoginHandler;

class LoginController extends Controller {

    public function signin() {
        $flash = '';    
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';

        }
        $this->render('login', [
            'flash' => $flash
        ]);
    }
    
    public function signinAction(){
       $usuario = filter_input(INPUT_POST, 'Usuario');
       $senha = filter_input(INPUT_POST, 'Senha');

       if($usuario  && $senha ){

        $token = LoginHandler::verifyLogin($usuario, $senha);
        if($token){
            $_SESSION['token'] = $token;
            //  print_r($_POST);
            $this->redirect('/');
        }else{
            $_SESSION['flash'] = 'Usuário ou Senha não conferem.';
            $this->redirect('/login');
            //  print_r($_POST);
            }
       }else {
            $this->redirect('/login');
            print_r($_POST);
       }
    }

    public function signup(){
        $this->render('signup');
    }

    public function signupAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $usuario = filter_input(INPUT_POST, 'Usuario');
        $senha = filter_input(INPUT_POST, 'Senha');
        $birthdate = filter_input(INPUT_POST, 'birthdate');

        if ($nome && $usuario  && $senha && $birthdate) {
            $birthdate = explode('/', $birthdate);
            if(count($birthdate) != 3){
                $_SESSION['flash'] = 'Data de nascimento inválida!';
                $this->redirect('/signup');
            }

            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
            if(strtotime($birthdate) === false) {
                $_SESSION['flash'] =  'Data de nascimento inválida!';
                $this->redirect('/signup');
            } 
                
            if(LoginHandler::emailExists($usuario) === false) {
                $token =  LoginHandler::addUser($nome, $usuario, $senha, $birthdate);
                $_SESSION['token'] = $token;
                // print_r($_POST);
                $this->redirect('/');
            }else {
                $_SESSION['flash'] = 'Usuário já cadastrado!';
                $this->redirect('/signup');
            }
        }else {
                $this->redirect('/signup');
        }
    }

}