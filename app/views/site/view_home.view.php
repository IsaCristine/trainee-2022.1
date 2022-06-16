<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--CSS-->
    <link rel="stylesheet" href="../../../public/css/view_home.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<body data-mdb-perfect-scrollbar='true'>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/navbar.php"); ?>

    <!--INICIO / CARROSSEL COM FOTOS -->

    <section id="area-carousel">

        <div id="carousel" class="container">

            <div id="carousel-with-indicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-with-indicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel-with-indicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel-with-indicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="../../../public/img/3.png" class="d-block w-100 carousel-img"
                            alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="../../../public/img/2.png" class="d-block w-100 carousel-img"
                            alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="../../../public/img/moletom1.png" class="d-block w-100 carousel-img"
                            alt="...">
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--FIM / CARROSSEL COM FOTOS-->


    <!--INICIO / ÚLTIMOS PRODUTOS-->

    <section id="area-products">

        <div class="container">

            <div class="products-title">

                <h2>Novos produtos</h2>

            </div>

            <div class="products">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">

                    <?php foreach($produtos as $produto):?>
                    <div class="col product">
                        <div class="card card-border">

                            <label> 
                                <img src="<?= 'data:image/jpg;base64, ' .base64_encode($produto['imagem']) ?>"  class="product-image">
                            

                                <div class="card-body">
                                    <h5 class="card-title"><?= $produto["nome"] ?></h5>
                                    <p class="card-text"><?= $produto["descricao"] ?></p>
                                    
                                    <form method="GET" action="Produto">
                                        <input type="hidden" name="id" value="<?= $produto["id"] ?>">
                                        <input type="submit" value="ver produto" id="send" class="btn btn-primary">
                                    </form>

                                </div>

                            </label>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </section>

    <!--FIM / ÚLTIMOS PRODUTOS-->


    <!--INICIO / CALL TO ACTION-->

    <section id="area-call-to-actions">

        <div class="container">

            <div class="row row-cols-1 row-cols-lg-2 justify-content-center content">

                <div class="left col d-flex flex-column justify-content-center">
                    <h3 class="call-text">Conheça nosso trabalho e <span>faça um pedido personalizado</span></h3>
                </div>

                <div class="col-lg-3 col-sm-7 d-flex flex-column justify-content-center">
                    <a href="Contato" class="btn btn-warning mb-3 contact-button">Entre em contato</a>
                    <a href="Quem-somos" class="btn btn-light">Quem somos</a>
                </div>

            </div>

        </div>

    </section>

    <!--FIM / CALL TO ACTION-->

    <div class="footer">
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/footer.php"); ?>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>