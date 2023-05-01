<?php

class Conexao
{
    private $host = "motty.db.elephantsql.com";
    private $dbname = "lhdhzpvu";
    private $user = "lhdhzpvu";
    private $password = "ARDSC1q3fKwWQbnYT3AwIfDLaihcw8D_";
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
