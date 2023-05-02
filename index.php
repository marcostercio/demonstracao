<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de demonstração</title>
    <link rel="stylesheet" href="public/assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link href="public/assets/estilo.css" rel="stylesheet">
    <script src="public/assets/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ajaxStart(function() {
            // Exibe o spinner
            $('.spinner-border').show(500);
        });

        $(document).ajaxStop(function() {
            // Oculta o spinner
            $('.spinner-border').hide(500);
        });
        // $(document).ready(function() {

        //     // carrega o conteúdo inicial
        //     $('#content').load('controllers/RotasController.php?page=home');

        //     // navegação com AJAX
        //     $('a').click(function(e) {
        //         e.preventDefault();
        //         var page = $(this).attr('href');
        //         $('#content').load('controllers/RotasController.php?page=' + page);
        //     });


        // });

        $(document).ready(function() {
            $('#mostrardiv').click(function() {

                $('#minhadiv').slideToggle(100);
            });

        });
    </script>
</head>


<?php
session_start();
if (isset($_SESSION['mensagem'])) {
?>
    <div class="alert alert-secondary">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Successo!</strong> <?= $_SESSION['mensagem'] ?>
    </div>



<?php
    // limpa a variável de sessão
    unset($_SESSION['mensagem']);
}
?>

<body>
    <div class="d-flex justify-content-center">
        <div class="spinner-border"></div>
    </div>
    <nav class="navbar  navbar-expand-lg navbar" style=" background-color: #e3f2fd;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="home">

                Sistema de demonstração
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar">Cadastrar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compras">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                    <li style="position: relative; width: 300px;">
                        <a class="nav-link" id="mostrardiv" href="home">Login</a>


                        <div class="row justify-content-center" id="minhadiv" style="position: absolute; display:none; top:50px; z-index: 2000;">
                            <div class="col-md-4 col-lg-10">
                                <div class="card">
                                    <div class="card-body">

                                        <?php if (!isset($_SESSION['nome'])) { ?>

                                            <h3 class="card-title text-center mb-3">Login</h3>
                                            <form method="post" action="./controllers/RotasController.php?page=login">
                                                <div class="form-group">
                                                    <label for="login">Usuário</label>
                                                    <input type="text" name="login" class="form-control" id="login" placeholder="Digite seu usuário">
                                                </div>
                                                <div class="form-group">
                                                    <label for="senha">Senha</label>
                                                    <input type="senha" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block mt-4">Entrar</button>
                                            </form>'
                                        <?php } else echo "Bem vindo <b>" . $_SESSION['nome'] . "</b><br> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
  <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
</svg><a href='compras'>  Compras</a> <br><a href='logout'>Sair</a><br>" ?>

                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
            </li>
    </nav>
    </ul>
    </div>
    </div>

    <div id="content" style="min-height:1600px;"><?php include 'controllers/ProdutoController.php';  $produtoController=new ProdutoController();
		$content = $produtoController->listarProduto();?></div>


    <footer class="bg-dark text-light py-3 ">

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">Sistema de demonstração - SPA</p>
                <p class="mb-0">Desenvolvido por <a href="https://github.com/marcostercio">Marcos Tércio</a></p>
            </div>
        </div>
    </footer>


    <script src="public/assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>