<?php
namespace src\controllers;

use \core\Controller;

use \handlers\LoginHandler;
use src\handlers\LoginHandler as HandlersLoginHandler;

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

        $token = HandlersLoginHandler::verifyLogin($email, $senha);
        if($token){
            $_SESSION['token'] = $token;
            $this->$this->redirect('/');
        }else{
            $_SESSION['flash'] = 'E-mail ou senha não conferem.';
            $this->redirect('/login');
        }
       }else {
            $this->redirect('/login');
       }
    }

    public function signup(){

    }

}