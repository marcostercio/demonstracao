<?php


class TipoProduto
{
    private $id;
    private $nome;
    private $imposto;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getImposto()
    {
        return $this->imposto;
    }

    public function setImposto($imposto)
    {
        $this->imposto = $imposto;
    }

    public function salvar()
    {
        $conexao = (new Conexao())->getConexao();
        $sql = "INSERT INTO tipos (nome, imposto) VALUES (:nome,:imposto)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":imposto", $this->imposto);
        $stmt->execute();
    }

    public static function listar()
    {
        $conexao = (new Conexao())->getConexao();
        $sql = "SELECT * FROM tipos";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function buscaTipo($id)
    {
        $conexao = (new Conexao())->getConexao();
        $sql = "SELECT nome FROM tipos Where id=$id";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
