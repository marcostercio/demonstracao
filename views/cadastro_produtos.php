<nav class="navbar navbar-expand-md bg-dark navbar-dark  text-center">
    <div class="col-md-12 text-center">
      <a class="navbar-brand container" href="#">Cadastrar Produtos</a>
    </div>
  </nav>
<div class="container">
    <div class="row ">
        <div class="col-md-4">
            <h2>Cadastro de produtos</h2>
            <form>
                <div class="form-group">
                    <label for="produto">Produto</label>
                    <input type="text" class="form-control" id="produto">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" id="tipo">
                        <option>Selecione um tipo</option>
                        <option>Alimento</option>
                        <option>Bebida</option>
                        <option>Limpeza</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Cadastro de tipos de produto</h2>
            <form>
                <div class="form-group">
                    <label for="tipoProduto">Tipo de produto</label>
                    <input type="text" class="form-control" id="tipoProduto">
                </div>
                <div class="form-group">
                    <label for="imposto">Percentual de imposto</label>
                    <input type="number" class="form-control" id="imposto">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>