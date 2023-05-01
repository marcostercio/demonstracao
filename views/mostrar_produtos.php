  <nav class="navbar navbar-expand-md bg-dark navbar-dark  text-center">
      <div class="col-md-12 text-center">
          <a class="navbar-brand container" href="#">Produtos</a>
      </div>
  </nav>
  <div class="container mt-5">
      <!-- Barra de navegação -->

      <div class="row">
          <?php foreach ($produtos as $produto) : ?>

              <div class="col-md-4 mt-4">
                  <div class="card">
                      <?php if (!isset($produto['img'])) { ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="390" height="150" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                              <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                              <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                          </svg>
                      <?php } else  echo '<img src="' . $produto["img"] . '" />' ?>

                      <div class="card-body">
                          <p class="card-text"> <?= isset($produto['tpnome']) ? $produto['tpnome'] : "Categoria não informada"; ?></p>
                          <h5 class="card-title"><?= isset($produto['pnome']) ? $produto['pnome'] : "sem nome"; ?> </h5>
                          <p class="card-text"><?= isset($produto['desc']) ? $produto['desc'] : "sem descrição"; ?></p>
                          <p class="card-text"> <?= isset($produto['preco']) ? "<span style='font-weight:bold;'>R$</span> " . $produto['preco'] : "Preço nao informado"; ?></p>
                          <form method="post" action="controllers\RotasController.php?page=comprar">
                              <input style="display:none;" type="input" id="comprar" name="comprar" min="1" max="50">
                              <input style="display:none;" type="input" value="<?=$produto['tpnome'] ?>" id="tpnome" name="tpnome">
                              <input style="display:none;" type="input" value="<?=$produto['pnome'] ?> " id="pnome" name="pnome">
                              <input style="display:none;" type="input" value="<?=$produto['pid'] ?>" id="idproduto" name="produtoid">
                              <input style="display:none;" type="input" value="<?=$produto['preco'] ?>" id="preco" name="preco">
                              <input type="number" id="quantidade" value="1" name="quantidade" min="1" max="50">

                              <button type="submit" class="btn btn-primary">Comprar</button>
                          </form>
                      </div>
                  </div>
              </div>

          <?php endforeach; ?>

      </div>
  </div>