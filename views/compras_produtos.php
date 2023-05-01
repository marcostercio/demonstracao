<nav class="navbar navbar-expand-md bg-dark navbar-dark  text-center">
    <div class="col-md-12 text-center">
        <a class="navbar-brand container" href="#">Venda</a>
    </div>
</nav>
<div class="container">
    <div class="row">

    </div>
    <div class="col-md-12">
        <h2>Compras</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Preco/Quantidade</th>
                    <th scope="col">Imposto</th>
                    <th scope="col">Imposto/Quantidade</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($compras as $compra) : ?>
                    <tr>
                        <td><?= $compra['vnomeproduto'] ?></td>
                        <td><?= $compra['tnome'] ?></td>
                        <td><?= $compra['vquantidade'] ?></td>
                        <td><?= $compra['ppreco'] ?></td>
                        <td><?= $compra['ppreco']* $compra['vquantidade']?></td>
                        <td><?= $compra['timposto'] ?></td>
                        <td><?= $compra['timposto'] * $compra['vquantidade'] ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>