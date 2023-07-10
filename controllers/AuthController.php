<?php

require_once '../models/Conexao.php';
require_once '../models/Usuario.php';

class AuthController


{
    public function login()
    {
        if (isset($_POST['login']) and isset($_POST['senha'])) {
            $user = new Usuario();
           $userData = $user->EncontrarUsuario($_POST['login'], $_POST['senha']);

            if ($userData) {
                session_start();
                $_SESSION['id'] = $userData[0]["id"];
                $_SESSION['nome'] = $userData[0]["nome"];
                $_SESSION['mensagem'] = "Login efetuado com sucesso!";
            } else {
                session_start();
                $_SESSION['mensagem'] = "Dados incorretos!";
            }
            header('Location:/');
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        header('Location:/');
        $_SESSION['mensagem'] = "Você foi desconectado!";
        
       
       
    }
    
}
