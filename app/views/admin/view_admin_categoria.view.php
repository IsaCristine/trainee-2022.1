<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Categorias</title>

    <!--CSS-->
    <link rel="stylesheet" href="../../../public/css/view_admin_categoria.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">

        <div class="title display-3">Categorias</div>

        <div class="row row-cols-1 row-cols-sm-2 justify-content-around mb-4">

            <div class="col">

                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#NewCategoryModal" data-bs-whatever="@mdo">
                  <i class="bi bi-plus"></i>
                </button>
                
            </div>

            <div class="col">
                <div class="search-area">
                    
                    <form method="GET" action="" class="search-form">

                        <input type="text" class="form-control input-search" name="search" placeholder="Pesquisar categoria">
                        <button type="submit" class="btn btn-primary ms-3">
                          <i class="bi bi-search"></i>
                        </button>

                    </form>

                </div>
            </div>

        </div>


        <!-- MODAL DE ADICIONAR CATEGORIA -->
        <div class="modal fade" id="NewCategoryModal" tabindex="-1" aria-labelledby="NewCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <form method="POST" action="">

                    <div class="mb-3">
                      <label for="category-name" class="col-form-label">Nome:</label>
                      <input type="text" class="form-control" id="category-name" name="category_name">
                    </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
                  <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>

                   </form>

              </div>             
            </div>
        </div>

        <div class="table-responsive">

            <div class="table-wrapper">

                <table class="table table-striped table-bordered table-hover">


                    <thead>
                    <tr>

                        <th style="width: 40%" scope="col">Nome</th>
                        <th style="width: 15%" scope="col">Ações</th>

                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    foreach ($list_categories as $category){
                        ?>

                        <tr>

                            <td><?= $category['nome'] ?></td>

                            <td style="text-align: center">

                                <div class="table-buttons">
                                    <button class="btn btn-secondary view" data-bs-toggle="modal"
                                            data-bs-target="#<?= $category['nome'] ?>ViewModal">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#<?= $category['nome'] ?>EditModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="btn btn-danger delete" data-bs-toggle="modal"
                                            data-bs-target="#<?= $category['nome'] ?>DeleteModal">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>

                                <!-- MODAL VIEW -->
                                <div class="modal fade" id="<?= $category['nome'] ?>ViewModal" tabindex="-1"
                                     aria-labelledby="<?= $category['nome'] ?>ViewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h5 class="modal-title" id="exampleModalLabel">Informações da Categoria
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>

                                            </div>

                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">

                                                        <label for="category-name"
                                                               class="col-form-label d-flex justify-content-start">Nome:</label>
                                                        <input type="text" class="form-control" id="category-name"
                                                               value="<?= $category['nome'] ?>" readonly>

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

                                <div class="modal fade" id="<?= $category['nome'] ?>EditModal" tabindex="-1"
                                     aria-labelledby="<?= $category['nome'] ?>EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>

                                            </div>

                                            <form method="POST" action="editarCategoria">

                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="category-name"
                                                               class="col-form-label d-flex justify-content-start">Nome:</label>
                                                        <input type="hidden" name="id" value="<?= $category['nome'] ?>">
                                                        <input type="text" class="form-control" id="category-name"
                                                               name="category-name" value="<?= $category['nome'] ?>">
                                                    </div>



                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Editar</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!--MODAL DELETE-->

                                <div class="modal fade" id="<?= $category['nome'] ?>DeleteModal" tabindex="-1"
                                     aria-labelledby="<?= $category['nome'] ?>DeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Excluir Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>

                                            <form method="POST" action="excluirCategoria">
                                                <div class="modal-body">


                                                    <div class="mb-3 mt-3">
                                                        <p class="justify-content-start">Tem certeza que deseja excluir
                                                            a categoria <span
                                                                    class="category-name"><?= $category['nome']?></span> ?
                                                        </p>
                                                        <input type="hidden" name="id" value="<?= $category['nome'] ?>">
                                                    </div>

                                                </div>

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

                        </tr>

                    <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
            <!-- PAGINACAO: -->
            <nav aria-label="..." class="pag">
                <ul class="pagination">

                    <?php if($current_page > 1){ ?>
                        <li class="page-item">
                            <a class="page-link" href="Admin-Categorias?page=<?= $current_page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                    <?php } ?>

                    <?php for($previous_page = $current_page - $quantity_links; $previous_page < $current_page; $previous_page++){
                        if($previous_page > 0) {
                            ?>
                            <li class="page-item " aria-current="page">
                                <a class="page-link" href="Admin-Categorias?page=<?=$previous_page?>"><?=$previous_page?></a>
                            </li>

                        <?php       }
                    }
                    ?>

                    <li class="page-item active"><a class="page-link"><?=$current_page?></a></li>

                    <?php for($next_page = $current_page + 1; $next_page <= $current_page + $quantity_links; $next_page++){
                        if($next_page <= $page_quantity){
                            ?>
                            <li class="page-item " aria-current="page">
                                <a class="page-link" href="Admin-Categorias?page=<?=$next_page?>"><?=$next_page?></a>
                            </li>

                        <?php        }
                    }
                    ?>

                    <?php if($current_page < $page_quantity){ ?>
                        <li class="page-item">
                            <a class="page-link" href="Admin-Categorias?page=<?= $current_page + 1?>">Next</a>
                        </li>
                    <?php } ?>

                </ul>
            </nav>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>