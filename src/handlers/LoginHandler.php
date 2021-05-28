<?php
namespace src\handlers;

use \src\models\Usuario;

class LoginHandler {
    
    public static function checkLogin(){
        //verifica se tem um token para o usuario que está tentando logar , caso nao tenha ele é falso e será rediretionado
        if(!empty($_SESSION['Token'])) {
            $token = $_SESSION['Token'];
            $data = Usuario::select()->where('Token',$token)->one();
          //se achou os dados ou seja se nao estiver em branco e for maior que zero, então sera criado um novo usuario e senha no bando e retornara para a variavel loggedUsuario
            if(!empty($data) > 0) {
                $loggedUsuario = new Usuario();
                $loggedUsuario->Usuario = $data['Usuario'];
                $loggedUsuario->Senha = $data['Senha'];
                return $loggedUsuario;
            }

        }
        // print_r($data);
        return false;
    }
//verificando usuario e senha
    public static function verifyUsuario($usuario, $senha){

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

    public static function usuarioExists($usuario) {
        $user = Usuario::select()->where('Usuario', $usuario)->one();
        return $user ? true : false;
    }

    public static function addUsuario($nome, $senha){
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

