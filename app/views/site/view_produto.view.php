<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/view_produto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../public/js/scripts.js"></script>
    <title>Produto</title>
</head>



<body>

    <div class="navbar-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/navbar.php"); ?>
    </div>

    <div class="container-flex">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <ul class="caminho">
                    <li><a href="Home">Home</a></li>
                    <li>></li>
                    <li><a href="Produtos">Produtos</a></li>
                    <li>></li>
                    <li><?=$produto["categoria"]?></li>
                    <li>></li>
                    <li><?=$produto["nome"]?></a></li>
                </ul>

                <div class="card">

                    <div class="product-media">
                        <img src="<?= 'data:image/jpg;base64, ' .base64_encode($produto['imagem']) ?>">
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="product-info-title">
                    <h2><?= $produto["nome"] ?></h2>
                </div>

                <div class="card">

                    <div class="card-body">

                        <div class="product-info">

                            <div class="product-info-price">
                                <h2 class="mt-1">
                                    <span>R$<?= $produto["valor"] ?></span>
                                </h2>
                            </div>

                            <hr>

                            <?php if($produto["categoria"] == 'Roupa'){?>
                                <div class="product-size">

                                    <h4 style="font-size: 1.25rem">Tamanho</h4>

                                    <div class="size-buttons">
                                        <button class="btn btn-light btn-outline-dark" data-toggle="tooltip">P</button>
                                        <button class="btn btn-light btn-outline-dark" data-toggle="tooltip">M</button>
                                        <button class="btn btn-light btn-outline-dark" data-toggle="tooltip">G</button>
                                        <button class="btn btn-light btn-outline-dark" data-toggle="tooltip">GG</button>
                                        <button class="btn btn-light btn-outline-dark" data-toggle="tooltip">XG</button>
                                    </div>

                                </div>
                            <?php } ?>

                            <button id="chart" class="btn btn-dark mr-1" title="" data-original-title="Add to cart">
                                <span class="text-uppercase"><?= $produto["categoria"] ?></span>
                            </button>

                            <h3 class="box-title mt-4">Informações do produto</h3>
                            <ul class="list-unstyled">
                                <?php foreach($arr as $info): ?>
                                <li>
                                    <i class="fa fa-check text-success"></i>
                                    <?= $info ?>
                                </li>
                                <?php endforeach ?>
                            </ul>

                            <h4 style="font-size: 1.25rem" class="mt-4">
                                Descrição

                                <div class="botao">
                                    <span id="mais" onclick="openDesc()">+</span>
                                </div>

                            </h4>

                            <div id="description" class="description">
                                <p style="font-size: 1rem"><?= $produto["descricao"]?></p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>