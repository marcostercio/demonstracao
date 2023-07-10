<?php

require_once "../models/Produto.php";
require_once "../models/TipoProduto.php";

class ProdutoController
{
    public function __construct()
    {
        if (isset($_POST['produtos'])) {
            $produto = new Produto();
            $produto->setNome($_POST['nome']);
            $produto->setPreco($_POST['preco']);
            $produto->setTipoId($_POST['tipo_id']);

            // salva o produto no banco de dados
            $produto->salvar();

            // exibe mensagem de sucesso
            session_start();
            $_SESSION['mensagem'] = "Produto salvo com sucesso!";
            header('Location: /');
            exit();
        } else if (isset($_POST['tipos'])) {
            $tipo = new TipoProduto();
            $tipo->setNome($_POST['tipo']);
            $tipo->setImposto($_POST['imposto']);

            // salva o tipo de produto no banco de dados
            $tipo->salvar();

            // exibe mensagem de sucesso
            session_start();
            $_SESSION['mensagem'] = "Tipo de Produto salvo com sucesso!";
            header('Location: /');
            exit();
        }
    }

    public function cadastrarProduto()
    {
        $tipos = (new TipoProduto())->listar();
        require '../views/cadastro_produtos.php';
    }

    public function listarProduto()
    {
        $produtos = (new Produto())->listar();
        require '../views/mostrar_produtos.php';
    }
}
