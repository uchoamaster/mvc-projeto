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

        $token = LoginHandler::verifyUsuario($usuario, $senha);
        if($token){
            $_SESSION['Token'] = $token;
            $this->redirect('/');
        }else{
            $_SESSION['flash'] = 'usuário ou senha não conferem.';
            $this->redirect('/login');
            }
       }else {
            $this->redirect('/login');
       }
    }

    public function signup(){
        $this->render('signup');
    }

    public function signupAction(){
        $usuario = filter_input(INPUT_POST, 'Usuario');
        $senha = filter_input(INPUT_POST, 'Senha');
       

                
            if(LoginHandler::usuarioExists($usuario) === false) {
                $token =  LoginHandler::addUsuario($usuario, $senha);
                $_SESSION['Token'] = $token;
                $this->redirect('/');
            }else {
                $_SESSION['flash'] = 'Usuário  já cadastrado!';
                $this->redirect('/signup');
            }
        }
    }