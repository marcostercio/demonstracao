<?php
require_once "conexao.php";

class Produto {
    private $id;
    private $nome;
    private $preco;
    private $tipo_id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getTipo() {
        return $this->tipo_id;
    }

    public function setTipo($tipo_id) {
        $this->tipo_id = $tipo_id;
    }

    public function salvar() {
        $conexao = (new Conexao())->getConexao();
        $sql = "INSERT INTO produtos (nome, preco, tipo_id) VALUES (:nome, :preco, :tipo_id)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":preco", $this->preco);
        $stmt->bindValue(":tipo_id", $this->tipo_id);
        $stmt->execute();
    }

    public static function listar() {
        $conexao = (new Conexao())->getConexao();
        $sql = "SELECT produtos.nome as pnome, tipos.imposto as timposto, produtos.id as pid, produtos.img, produtos.preco, produtos.desc, tipos.nome as tpnome FROM produtos LEFT JOIN tipos ON produtos.tipo_id = tipos.id ";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}