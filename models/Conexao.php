<?php

class Conexao
{
    private $host = "localhost";
    private $dbname = "demonstracao";
    private $user = "marcos";
    private $password = "123456";
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            exit;
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}
