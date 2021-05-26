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
    //    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

       $usuario = filter_input(INPUT_POST, 'Usuario');
       $senha = filter_input(INPUT_POST, 'Senha');

       if($usuario  && $senha ){

        $token = LoginHandler::verifyLogin($usuario, $senha);
        if($token){
            $_SESSION['Token'] = $token;
            //  print_r($_POST);
            $this->redirect('/');
        }else{
            $_SESSION['flash'] = 'usuário ou senha não conferem.';
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
        $usuario = filter_input(INPUT_POST, 'Usuario');
        $senha = filter_input(INPUT_POST, 'Senha');
       

                
            if(LoginHandler::emailExists($usuario) === false) {
                $token =  LoginHandler::addUser($usuario, $senha);
                $_SESSION['Token'] = $token;
                $this->redirect('/');
            }else {
                $_SESSION['flash'] = 'E-mail já cadastrado!';
                $this->redirect('/signup');
            }
        }
    }