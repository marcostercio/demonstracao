<?php

use Produto as GlobalProduto;

require_once "Conexao.php";
require_once "Produto.php";
require_once "TipoProduto.php";

class Compras
{
    private $id;
    private $valor_total;
    private $valor_impostos;
    private $usuario_id;
    private $quantidade;
    private $id_produto;
    private $tipo_id;
    private $nome_produto;

    public function getValorTotal()
    {
        return $this->valor_total;
    }

    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;
    }

    public function getValorImpostos()
    {
        return $this->valor_impostos;
    }

    public function setValorImpostos($valor_impostos)
    {
        $this->valor_impostos = $valor_impostos;
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getIdProduto()
    {
        return $this->id_produto;
    }

    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    public function setTipo($tipo_id)
    {
        $this->tipo_id = $tipo_id;
    }
    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }


    public static function listarCompras()
    {
        $conexao = (new Conexao())->getConexao();
        $sql = "SELECT vendas.nome_produto as vnomeproduto, Produtos.preco as ppreco, vendas.quantidade as vquantidade, Tipos.nome as tnome, Tipos.imposto as timposto FROM Vendas LEFT JOIN Produtos ON vendas.id_produto = Produtos.id LEFT JOIN Tipos ON Produtos.tipo_id = Tipos.id WHERE Vendas.usuario_id =:id";
        $stmt = $conexao->prepare($sql);
        session_start();
        $stmt->bindValue(":id", $_SESSION["id"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    function cadastrarCompra($quantidade, $id_produto, $nome_produto)
    {

        try {
            $pdo = (new Conexao())->getConexao();
        } catch (PDOException $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
            exit();
        }
        session_start();
        $usuario_id = $_SESSION['id'];
        // Verifica se já existe alguma quantidade do produto vendido pelo usuário
        $query = "SELECT quantidade FROM vendas WHERE usuario_id = ? AND id_produto = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$usuario_id, $id_produto]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Se já existe, atualiza a quantidade
        if ($result) {
            $nova_quantidade = $result['quantidade'] + $quantidade;
            $query = "UPDATE vendas SET quantidade = ? WHERE usuario_id = ? AND id_produto = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$nova_quantidade, $usuario_id, $id_produto]);
        } else {
            // Caso contrário, insere um novo registro na tabela de vendas
            $query = "INSERT INTO vendas ( usuario_id, quantidade, id_produto, nome_produto)
                      VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$usuario_id, $quantidade, $id_produto, $nome_produto]);
        }

        // Fecha a conexão com o banco de dados
        $pdo = null;
    }
}
