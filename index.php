<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de demonstração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            // carrega o conteúdo inicial
            $('#content').load('controllers/rotasController.php?page=home');

            // navegação com AJAX
            $('a').click(function(e) {
                e.preventDefault();
                var page = $(this).attr('href');
                $('#content').load('controllers/rotasController.php?page=' + page);
            });

        });
    </script>
</head>

<body>
    <nav class="navbar  navbar-expand-lg navbar" style="background-color: #e3f2fd;">
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
                        <a class="nav-link" href="venda">Vendas Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content" style="min-height:700px;"></div>


    <footer class="bg-dark text-light py-3 ">

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">Sistema de demonstração - SPA</p>
                <p class="mb-0">Desenvolvido por <a href="https://github.com/marcostercio">Marcos Tércio</a></p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>