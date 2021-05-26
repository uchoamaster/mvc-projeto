<?php
namespace src\handlers;

use \src\models\User;

class LoginHandler {
    
    public static function checkLogin(){
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $data = User::select()->where('token',$token)->one();
          
            if(!empty($data) > 0) {
                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->nome = $data['nome'];
                $loggedUser->email = $data['email'];
                return $loggedUser;
                 
            }

        }
        // print_r($data);
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

    public static function emailExists($email) {
        $user = User::select()->where('email', $email)->one();
        return $user ? true : false;
    }

    public static function addUser($nome, $email, $senha, $birthdate){
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token =  md5(time().rand(0,9999).time());

        User::insert([
            'email'=> $email,
            'senha'=> $hash,
            'nome'=>$nome,
            'data_aniversario'=> $birthdate,
            'token'=> $token
        ])->execute();

        return $token;
    }


}

