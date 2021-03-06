<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></link>
    <link rel="stylesheet" type="text/css" href="../../../public/css/view_dashboard_administrativa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Bell Comics</title>
</head>
<body>

<div class="sidebar-content">
        <?php
        include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/sidebar.php"); ?>
    </div>

    <div class="page-content">
        <section class="text-h1 container">
            <h1 class="text-center fs-1 mt-5">Gerenciamento</h1>
        </section>
        
        <section class="linhas"><hr></section>
        <div class="container conteiner-ajuste">
            <div class="row row-cols-auto text-center justify-content-center">
                <div class="col">
                    <div class="card card_ajuste border border-primary border-3">
                        <img src="../../../public/img/caminhao.gif" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                            <p class="card-text"></p>
                            <a href="Admin-Produtos" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_ajuste border border-primary border-3">
                        <img src="../../../public/img/lista-de-controle.gif" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Categorias</h5>
                            <p class="card-text"></p>
                            <a href="Admin-Categorias" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_ajuste border border-primary border-3">
                        <img src="../../../public/img/midia-social.gif" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Usu??rios</h5>
                            <p class="card-text"></p>
                            <a href="Admin-Usuarios" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="linhas"><hr></section>
        <form method="POST" action="logout">
            <div class="text-center">
                <button name="logout" type="submit" class="btn btn-danger text-center m-5">Sair</button>
            </div>
        </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>