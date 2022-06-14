<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/view_produtos.css">
  

    <title>Produtos</title>
  </head>
  <body>

    <div class="container">

        <!-- CABECALHO -->
        <div class="cabecalho row row-cols-1 row-cols-sm-1 row-cols-md-2">
          <div class="col"><h1 class="titulo">Produtos a venda:</h1></div>
          <div  class="col barra">
            <form class="d-flex ">
              <input class="form-control me-2 campotxt" style="width: 50%" type="search" placeholder="Pesquisar..." aria-label="Search">
              <button class="btn btn-light btn btn-outline-secondary" type="submit">Pesquisar</button>
            </form>
          </div>
        </div>

        <div>
          <hr class="linhas">
        </div>

      <!-- CARDS: -->

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 cardproduto ">
            <?php foreach ($list_products as $product){ ?>
                <div class="col">
                  <div class="card cardestilo">
                    <img class="imgcard" src="<?= 'data:image/jpg;base64, ' .base64_encode($product['imagem']) ?>" class="card-img-top" >
                    <div class="card-body">
                      <div class="categoria">
                        <h5 class="card-title"><?= $product["nome"] ?> </h5>
                      </div class>
                      <h6 class="card-subtitle mb-2 text-muted"><?= $product["valor"] ?>></h6>
                      <p class="card-text"><?= $product["descricao"] ?></p>
                    </div>

                  <form method="GET" action="Produto">
                    <div class="card-footer cardrodape">
                        <input type="hidden" name="id" value="<?= $product["id"]?>">
                        <button type="submit" class="btn btn-primary txtbotao">Saiba Mais</button>
                    </div>
                  </form>

                  </div>
                </div>
            <?php } ?>
        </div>
          <!-- FIM DOS CARDS: -->

          <!-- PAGINACAO: -->
          <nav aria-label="..." class="pag">
            <ul class="pagination">

                <?php if($current_page > 1){ ?>
                      <li class="page-item">
                        <a class="page-link" href="Produtos?page=<?= $current_page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                <?php } ?>

                <?php for($previous_page = $current_page - $quantity_links; $previous_page < $current_page; $previous_page++){
                            if($previous_page > 0) {
                ?>
                                <li class="page-item " aria-current="page">
                                    <a class="page-link" href="Produtos?page=<?=$previous_page?>"><?=$previous_page?></a>
                                </li>

                <?php       }
                        }
                ?>

                <li class="page-item active"><a class="page-link"><?=$current_page?></a></li>

                <?php for($next_page = $current_page + 1; $next_page <= $current_page + $quantity_links; $next_page++){
                            if($next_page <= $page_quantity){
                ?>
                                <li class="page-item " aria-current="page">
                                    <a class="page-link" href="Produtos?page=<?=$next_page?>"><?=$next_page?></a>
                                </li>

                <?php        }
                        }
                ?>

                <?php if($current_page < $page_quantity){ ?>
                      <li class="page-item">
                        <a class="page-link" href="Produtos?page=<?= $current_page + 1?>">Next</a>
                      </li>
                <?php } ?>

            </ul>
          </nav>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>