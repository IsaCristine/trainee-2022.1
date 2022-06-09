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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
    <title>ADM - Produtos</title>
</head>

<body>

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

                        <form method="POST" action="salvarProduto">

                            <div class="mb-3">
                                <label for="product_name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name">
                            </div>

                            <div class="mb-3">
                                <label for="product_category" class="col-form-label">Categoria:</label>
                                <input type="text" class="form-control" id="product_category" name="product_category">
                            </div>

                            <div class="mb-3">
                                <label for="product_description" class="col-form-label">Descrição:</label>
                                <input type="text" class="form-control" id="product_description"
                                    name="product_description">
                            </div>

                            <div class="mb-3">
                                <label for="product_value" class="col-form-label">Preço:</label>
                                <input type="text" class="form-control" id="product_value" name="product_value">
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
                        <td>Revista em Quadrinhos</td>
                        <td style="text-align: center">

                            <div class="table-buttons">
                                <button class="btn btn-secondary view" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>ViewModal">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>EditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>DeleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <!-- MODAL VIEW -->
                            <div class="modal fade" id="<?= $produto['nome'] ?>ViewModal" tabindex="-1"
                                aria-labelledby="<?= $produto['nome'] ?>ViewModalLabel" aria-hidden="true">
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
                                                        value="Revista em quadrinhos" readonly>
                                                    <label for="product_description"
                                                        class="col-form-label d-flex justify-content-start">Descrição:</label>
                                                    <input type="text" class="form-control" id="product_description"
                                                        value="<?= $produto['descricao'] ?>" readonly>
                                                    <label for="product_value"
                                                        class="col-form-label d-flex justify-content-start">Preço:</label>
                                                    <input type="text" class="form-control" id="product_value"
                                                        value="<?= $produto['valor'] ?>" readonly>

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

                            <div class="modal fade" id="<?= $produto['nome'] ?>EditModal" tabindex="-1"
                                aria-labelledby="<?= $produto['nome'] ?>EditModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body">

                                            <form method="POST" action="editarProduto">

                                                <div class="mb-3">
                                                    <label for="user-name"
                                                        class="col-form-label d-flex justify-content-start">Nome:</label>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="text" class="form-control" id="product_name"
                                                        value="<?= $produto['nome'] ?>">

                                                    <label for="user-mail"
                                                        class="col-form-label d-flex justify-content-start">Categoria:</label>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="text" class="form-control" id="product_name"
                                                        value="Revista em quadrinhos">

                                                    <label for="user-password"
                                                        class="col-form-label d-flex justify-content-start">Descrição:</label>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="text" class="form-control" id="product_name"
                                                        value="<?= $produto['descricao'] ?>">

                                                    <label for="user-password"
                                                        class="col-form-label d-flex justify-content-start">Preço:</label>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="text" class="form-control" id="product_name"
                                                        value="<?= $produto['valor'] ?>">

                                                </div>

                                            </form>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Editar</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--MODAL DELETE-->

                            <div class="modal fade" id="<?= $produto['nome'] ?>DeleteModal" tabindex="-1"
                                aria-labelledby="<?= $produto['nome'] ?>DeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Produto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form method="POST" action="excluirProduto">
                                            <div class="modal-body">
                                                <form>

                                                    <div class="mb-3 mt-3">
                                                        <p class="justify-content-start">Tem certeza que deseja excluir
                                                            o
                                                            produto?</p>
                                                        <input type="hidden" name="id" value="">
                                                    </div>

                                            </div>

                                    </div>

                                    <div class="d-md-flex justify-content-md-end ajuste-btn">

                                        <div class="d-md-flex justify-content-md-end">
                                            <button type="button" class="btn btn-success add botao-adicionar"
                                                data-bs-toggle="modal"
                                                data-bs-target="#adicionar-produto">Adicionar</button>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger"
                                                    name="delete">Excluir</button>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                        </td>


                        </td>

                    </tr>

                    <tr>
                        <td>Gibi Superman</td>
                        <td>Revista em quadrinhos</td>
                        <td style="text-align: center">

                            <div class="table-buttons">
                                <button class="btn btn-secondary view" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>ViewModal">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>EditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>DeleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                        </td>

                    </tr>

                    <tr>
                        <td>Gibi Spiderman</td>
                        <td>Revista em quadrinhos</td>
                        <td style="text-align: center">

                            <div class="table-buttons">
                                <button class="btn btn-secondary view" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>ViewModal">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>EditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>DeleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                        </td>

                    </tr>

                    <tr>
                        <td>Gibi Superman</td>
                        <td>Revista em quadrinhos</td>
                        <td style="text-align: center">

                            <div class="table-buttons">
                                <button class="btn btn-secondary view" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>ViewModal">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>EditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#<?= $produto['nome'] ?>DeleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                        </td>

                    </tr>

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