<?php
require 'controllers/ProdutoController.php';
require 'controllers/ComprasController.php';
require 'controllers/AuthController.php';



if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}


switch ($page) {

	case 'home':
		$produtoController = new ProdutoController();
		$content = $produtoController->listarProduto();

		break;
	case 'contato':
		$content = include '/views/contato.php';
		break;
	case 'about':
		$content = '<h1>Sobre nós</h1><p>Este é o conteúdo da página Sobre Nós.</p>';
		break;
	case 'cadastrar':
		$produtoController = new ProdutoController();
		$content = $produtoController->cadastrarProduto();
		break;
	case 'comprar':
		$vendaController = new ComprasController();
		$content = $vendaController;
		break;
	case 'compras':
		$vendaController = new ComprasController();
		$content = $vendaController->listarCompras();
	case 'login':
		$authController = new AuthController();
		$content = $authController->login();
		break;
	case 'logout':
		$authController = new AuthController();
		$content = $authController->logout();
		break;
	default:
		$content = '<h1>Página não encontrada</h1><p>A página solicitada não foi encontrada.</p>';
		break;
}
