<?php
require_once "conexao.php";
class Usuario
{
    private $pdo;

    public function __construct()
    {
    }

    public function EncontrarUsuario($login, $senha)
    {
        $conexao = (new Conexao())->getConexao();
        $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :login and senha = :senha");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
