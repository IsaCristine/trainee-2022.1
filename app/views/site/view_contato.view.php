<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="../../../public/css/view_contato.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="navbar-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/navbar.php"); ?>
    </div>

    <div class="pagina-contato">
        <section id="top-content">

            <h1>Contato</h1>

            <div class="linhas">
                <hr>
            </div>

            <h2>Envie uma mensagem</h2>

            <h5 class="our-info">
                <i class="fa fa-envelope"></i>
                <span>contato@bellcomics.com</span>
                <br>
                <i class="fa fa-instagram"></i>
                <span>bell.comics</span>
                <br>
                <i class="fa fa-phone"></i>
                <span>(32) 9876-5432</span>
            </h5>

            <form method="POST" action="envio" id="form">

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome aqui">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Seu texto aqui">
                </div>

                <div class="form-group">
                    <label for="message">Mensagem*</label>
                    <br>
                    <textarea rows="4" id="message" name="message" required class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-light">Enviar</button>

            </form>

        </section>


        <section id="bottom-content">

            <div class="bottom-text">
                <p>Rua Santos da Silva, 987</p>
                <p>Juiz de Fora, MG, 12345-678</p>
            </div>

            <div class="mapa">

                <iframe id="gmap_canvas" class="embed-responsive-item" class="d-block mx-auto mx-md-0"
                    src="https://maps.google.com/maps?q=ufjf&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"></iframe>

            </div>

        </section>

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