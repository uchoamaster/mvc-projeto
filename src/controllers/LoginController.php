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
       $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
       $senha = filter_input(INPUT_POST, 'senha');

       if($email  && $senha ){

        $token = LoginHandler::verifyLogin($email, $senha);
        if($token){
            $_SESSION['token'] = $token;
            //  print_r($_POST);
            $this->$this->redirect('/');
        }else{
            $_SESSION['flash'] = 'E-mail ou senha não conferem.';
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
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');
        $birthdate = filter_input(INPUT_POST, 'birthdate');

        if ($nome && $email  && $senha && $birthdate) {
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
                
            if(LoginHandler::emailExists($email) === false) {
                $token =  LoginHandler::addUser($nome, $email, $senha, $birthdate);
                $_SESSION['token'] = $token;
                // print_r($_POST);
                $this->redirect('/');
            }else {
                $_SESSION['flash'] = 'E-mail já cadastrado!';
                $this->redirect('/signup');
            }
        }else {
                $this->redirect('/signup');
        }
    }

}