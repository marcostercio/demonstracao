
<nav class="navbar navbar-expand-md bg-dark navbar-dark  text-center">
    <div class="col-md-12 text-center">
        <a class="navbar-brand container" href="#">Cadastrar Produtos</a>
    </div>
</nav>
<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <h2>Cadastro de produtos</h2>
            <form  method="post"  action="controllers\RotasController.php?page=cadastrar">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="produto">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select name="tipo_id" class="form-select bg-light text-dark  rounded-2">
                        <?php foreach ($dados as $tipo) : ?>
                            <option value="<?= $tipo['id'] ?>"><?= $tipo['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control" id="produto">
                <input name="produtos" style="display:none;"></input>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Cadastro de tipos de produto</h2>
            <form method="post" action="controllers\RotasController.php?page=cadastrar">
                <div class="form-group">
                    <label for="tipoProduto">Tipo de produto</label>
                    <input type="text" name="tipo"  class="form-control" id="tipoProduto">
                </div>
                <div class="form-group">
                    <label for="imposto">Percentual de imposto</label>
                    <input type="number" name="imposto" class="form-control" id="imposto">
                </div>
                <input name="tipos" style="display:none;"></input>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>
