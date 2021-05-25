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
                $loggedUser->nome = $data['Nome'];
                $loggedUser->usuario = $data['Usuario'];
                return $loggedUser;
                 
            }

        }
        // print_r($data);
        return false;
    }

    public static function verifyLogin($usuario, $senha){

        $usuario = Usuario::select()->where('Usuario', $usuario)->one();
        if($usuario){
            if(password_verify($senha , $usuario['Senha'])) {
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
        $usuario = Usuario::select()->where('Usuario', $usuario)->one();
        return $usuario ? true : false;
    }

    public static function addUser($usuario, $nome, $senha){
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token =  md5(time().rand(0,9999).time());

        Usuario::insert([
            'Usuario'=> $usuario,
            'Nome'=> $nome,
            'Senha'=>$hash,
            'Token'=> $token
        ])->execute();

        return $token;
    }


}

