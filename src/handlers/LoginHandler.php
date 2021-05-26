<?php
namespace src\handlers;

use \src\models\Usuario;

class LoginHandler {
    
    public static function checkLogin(){
        if(!empty($_SESSION['Token'])) {
            $token = $_SESSION['Token'];
            $data = Usuario::select()->where('Token',$token)->one();
          
            if(!empty($data) > 0) {
                $loggedUser = new Usuario();
                $loggedUser->Usuario = $data['Usuario'];
                $loggedUser->Senha = $data['Senha'];
                return $loggedUser;
                 
            }

        }
        // print_r($data);
        return false;
    }

    public static function verifyLogin($usuario, $senha){

        $user = Usuario::select()->where('Usuario', $usuario)->one();
        if($user){
            if(password_verify($senha , $user['Senha'])) {
               $token = md5(time().rand(0,9999).time());
                Usuario::update()
                    ->set('Token' , $token)
                    ->where('Usuario', $usuario)
                ->execute();

               return $token;
            }
        }else {
            return false;
        }
    }

    public static function emailExists($usuario) {
        $user = Usuario::select()->where('Usuario', $usuario)->one();
        return $user ? true : false;
    }

    public static function addUser($nome, $senha){
        $hash = password_hash($senha, 'PASSWORD_DEFAULT');
        $token =  md5(time().rand(0,9999).time());

        Usuario::insert([
            'Senha'=> $hash,
            'Nome'=>$nome,
            'Token'=> $token
        ])->execute();

        return $token;
    }


}

