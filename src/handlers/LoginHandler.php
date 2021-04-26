<?php
namespace src\handlers;

use \src\models\User;

class LoginHandler {
    
    public static function checkLogin(){
        if(!empty($_SESSION['token'])) {

            $token = $_SESSION['token'];
            
            $data = User::select()->where('token',$token)->execute();
            if(count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->email = $data['email'];
                $loggedUser->nome = $data['nome'];

                return $loggedUser;
            }

        }

        return false;
    }

    public static function verifyLogin($email, $senha){

        $user = User::select()->where('email', $email)->one();
        if($user){
            if(password_verify($senha , $user['senha'])) {
               $token = md5(time().rand(0,9999).time());
                User::update()
                    ->set('token' , $token)
                    ->where('email', $email)
                ->execute();

               return $token;
            }
        }else {
            return false;
        }
    }

}

