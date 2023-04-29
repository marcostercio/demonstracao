<?php

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

switch ($page) {

	case 'home':
		$content = include './views/mostrar_produto.php';
		break;
	case 'contato':
		$content = include './views/contato.php';
		break;
	case 'about':
		$content = '<h1>Sobre nós</h1><p>Este é o conteúdo da página Sobre Nós.</p>';
		break;
	case 'cadastrar':
		$content = include './views/cadastro_produtos.php';
		break;
	case 'venda':
		$content = include './views/venda_produtos.php';
		break;
	default:
		$content = '<h1>Página não encontrada</h1><p>A página solicitada não foi encontrada.</p>';
		break;
}

echo $content;
