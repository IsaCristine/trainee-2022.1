<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/view_adm_produtos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
          integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <script type="text/javascript" src="../../../public/js/filterInput.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
    <title>ADM - Produtos</title>
</head>

<body>

<div class="sidebar-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/sidebar.php"); ?>
</div>

<div class="container">

    <div class="title display-3" style="font-weight: 400;">Produtos</div>

    <div class="row row-cols-1 row-cols-sm-2 justify-content-around mb-4">

        <div class="col-3">
            <button type="button" class="btn btn-secondary add" data-bs-toggle="modal"
                    data-bs-target="#NewProductModal" data-bs-whatever="@mdo">

                <i class="bi bi-plus"></i>

            </button>
        </div>

        <div class="col-9">
            <div class="search-area">

                <form method="GET" action="" class="search-form">

                    <input type="text" class="form-control input-search" name="search"
                           placeholder="Pesquisar produto">
                    <button type="submit" class="btn btn-primary ms-3">
                        <i class="bi bi-search"></i>
                    </button>

                </form>

            </div>
        </div>

    </div>

    <div class="modal fade" id="NewProductModal" tabindex="-1" aria-labelledby="NewProductModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="salvarProduto" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="product_name" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>

                        <div class="btn-group dropup">

                            <select name="categorias_id" class="btn dropdown-toggle" aria-haspopup="true"
                                    aria-expanded="false">
                                Categoria

                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                    <?php foreach($categorias as $cat){ ?>
                                        <option value="<?= $cat['id']; ?>"><?= $cat['nome']; ?>
                                        </option>
                                    <?php } ?>

                                </ul>

                            </select>

                        </div>

                        <div class="mb-3">
                                <label for="product_info" class="col-form-label">Informações:</label>
                                <br>
                                <div class="info-area">
                                    <textarea class="form-control" id="product_info" name="product_info" rows="4"
                                        cols="50" style="resize: none;"></textarea>
                                </div>
                        </div>


                            <div class="mb-3">
                                <label for="product_description" class="col-form-label">Descrição:</label>
                                <input type="text" class="form-control" id="product_description"
                                    name="product_description">
                            </div>
                            
                            <div class="mb-3">
                                <label for="product_value" class="col-form-label">Preço:</label>
                                <input type="text" class="form-control" id="product_value" name="product_value"
                                    onkeypress="filterInput(event)">
                            </div>


                        <div class="mb-3">
                            <label for="image" class="col-form-label">Imagem: </label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>

                </form>

            </div>
        </div>
    </div>


    <div class="table-responsive">

        <table class="table table-striped table-bordered table-hover">

            <thead>
            <tr>

                <th style="width: 40%" scope="col" class="col">Produto</th>
                <th style="width: 40%" scope="col" class="col">Categoria</th>
                <th style="width: 20%" scope="col" class="col-actions">Ações</th>

            </tr>
            </thead>

            <tbody>

            <?php foreach ($produtos as $produto){ ?>

            <tr>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['categoria'] ?></td>
                <td style="text-align: center">

                    <div class="table-buttons">
                        <button class="btn btn-secondary view" data-bs-toggle="modal"
                                data-bs-target="#ViewModal<?= $produto['id'] ?>">
                            <i class="bi bi-eye"></i>
                        </button>

                        <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#EditModal<?= $produto['id'] ?>">
                            <i class="bi bi-pencil"></i>
                        </button>

                        <button class="btn btn-danger delete" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal<?= $produto['id'] ?>">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>

                    <!-- MODAL VIEW -->
                    <div class="modal fade" id="ViewModal<?= $produto['id'] ?>" tabindex="-1"
                                aria-labelledby="ViewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Informações do Produto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>

                                </div>

                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">

                                            <label for="product_name"
                                                   class="col-form-label d-flex justify-content-start">Nome:</label>
                                            <input type="text" class="form-control" id="product_name"
                                                   value="<?= $produto['nome'] ?>" readonly>

                                            <label for="product_category"
                                                   class="col-form-label d-flex justify-content-start">Categoria:</label>
                                            <input type="text" class="form-control" id="product_category"
                                                   value="<?= $produto['categoria'] ?>" readonly>

                                            <label for="product_info"
                                                class="col-form-label">Informações:
                                            </label>
                                            <br>
                                            <div class="info-area">
                                                <textarea class="form-control" id="product_info"
                                                    name="product_info" rows="4" cols="50" style="resize: none;"
                                                    readonly><?= $produto['info'] ?></textarea>
                                            </div>

                                            <label for="product_description"
                                                   class="col-form-label d-flex justify-content-start">Descrição:</label>
                                            <input type="text" class="form-control" id="product_description"
                                                   value="<?= $produto['descricao'] ?>" readonly>

                                            <label for="product_value"
                                                   class="col-form-label d-flex justify-content-start">Preço:</label>
                                            <input type="text" class="form-control" id="product_value"
                                                   value="<?= $produto['valor'] ?>" readonly>

                                            <div class="mb-3 mt-3">
                                                <div class="card areaImagem">
                                                    <div class="card-header">Imagem:</div>

                                                    <div class="card-body">
                                                        <img class="cardImagem"
                                                             src="<?= 'data:image/jpg;base64, ' .base64_encode($produto['imagem']) ?>">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </form>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--MODAL EDIT -->

                    <div class="modal fade" id="EditModal<?= $produto['id'] ?>" tabindex="-1"
                                aria-labelledby="EditModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>

                                </div>

                                <div class="modal-body">

                                    <form method="POST" action="editarProduto" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="product_name"
                                                   class="col-form-label d-flex justify-content-start">Nome:</label>
                                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                            <input type="text" class="form-control" id="product_name"
                                                   name="product_name" value="<?= $produto['nome'] ?>">
                                        </div>


                                        <div class="btn-group">

                                                <select name="categorias_id" class="btn dropdown-toggle"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Categoria:

                                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                                    <?php foreach($categorias as $cat){ ?>
                                                        <option value="<?= $cat['id']; ?>"
                                                            <?php if($cat['nome'] === $produto['categoria']) echo "selected" ?>>
                                                            <?= $cat['nome']; ?>
                                                        </option>
                                                    <?php } ?>

                                                </ul>

                                            </select>

                                        </div>

                                        <div class="mb-3">
                                                    <label for="product_info"
                                                        class="col-form-label">Informações:</label>
                                                    <br>
                                                    <div class="info-area">
                                                        <textarea class="form-control" id="product_info"
                                                            name="product_info" rows="4" cols="50"
                                                            style="resize: none;"><?= $produto['info'] ?></textarea>
                                                    </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product_description"
                                                   class="col-form-label d-flex justify-content-start">Descrição:</label>
                                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                            <input type="text" class="form-control" id="product_description"
                                                   name="product_description" value="<?= $produto['descricao'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product_value"
                                                   class="col-form-label d-flex justify-content-start">Preço:</label>
                                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                            <input type="text" class="form-control" id="product_value"
                                                   name="product_value" value="<?= $produto['valor'] ?>" onkeypress="filterInput(event)">
                                        </div>

                                        <div class="mb-3">
                                            <div class="card areaImagem">
                                                <div class="card-header">Imagem:</div>
                                                <label for="image" class="col-form-label">
                                                    <img class="cardImagem"
                                                         src="<?= 'data:image/jpg;base64, ' .base64_encode($produto['imagem']) ?>">
                                                </label>

                                                <div class="card-body">
                                                    <input type="file" id="image" name="image" accept="image/*"
                                                           class="form-control">
                                                </div>

                                            </div>

                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    </form>
                    <!--MODAL DELETE-->

                    <div class="modal fade" id="DeleteModal<?= $produto['id'] ?>" tabindex="-1"
                                aria-labelledby="DeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excluir Produto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <form method="POST" action="excluirProduto">

                                        <div class="mb-3 mt-3">
                                            <p class="justify-content-start">Tem certeza que deseja excluir o
                                                produto <span
                                                        class="product_name"><?= $produto['nome'] ?></span> ?
                                            </p>
                                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger" name="delete">Excluir</button>
                                </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </td>


                </td>

            </tr>

            <tr>


                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>


</html>