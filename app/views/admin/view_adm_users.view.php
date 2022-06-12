<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/view_adm_users.css">
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
    <title>Admin - Usuários</title>
</head>


<body>

    <div class="sidebar-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/app/views/includes" . "/sidebar.php"); ?>
    </div>

    <div class="container">

        <div class="title display-3" style="font-weight: 400;">Usuários</div>

        <div class="row row-cols-1 row-cols-sm-2 justify-content-around mb-4">

            <div class="col-3">
                <button type="button" class="btn btn-secondary add" data-bs-toggle="modal"
                    data-bs-target="#NewUserModal" data-bs-whatever="@mdo">

                    <i class="bi bi-plus"></i>

                </button>
            </div>

            <div class="col-9">
                <div class="search-area">

                    <form method="GET" action="" class="search-form">

                        <input type="text" class="form-control input-search" name="search"
                            placeholder="Pesquisar usuário">
                        <button type="submit" class="btn btn-primary ms-3">
                            <i class="bi bi-search"></i>
                        </button>

                    </form>

                </div>
            </div>

        </div>

        <!-- MODAL PARA ADICIONAR USUÁRIO -->
        <div class="modal fade" id="NewUserModal" tabindex="-1" aria-labelledby="NewUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <form method="POST" action="adicionarUsuario">

                            <div class="mb-3">
                                <label for="user_name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="user_name" name="user_name">
                            </div>

                            <div class="mb-3">
                                <label for="user_email" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="user_email" name="user_email">
                            </div>

                            <div class="mb-3">
                                <label for="user_password" class="col-form-label">Senha:</label>
                                <input type="text" class="form-control" id="user_password" name="user_password">
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

                        <th style="width: 40%" scope="col" class="col-name">Nome</th>
                        <th style="width: 40%" scope="col" class="col-email">E-mail</th>
                        <th style="width: 20%" scope="col" class="col-actions">Ações</th>

                    </tr>
                </thead>

                <tbody>

                    <?php foreach($usuarios as $usuario): ?>

                    <tr>
                        <td class="name"><?= $usuario['nome'] ?></td>
                        <td class="email"><?= $usuario['email'] ?></td>
                        <td style="text-align: center">

                            <div class="table-buttons">
                                <button class="btn btn-secondary view" data-bs-toggle="modal"
                                    data-bs-target="#<?= $usuario['nome'] ?>ViewModal">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#<?= $usuario['nome'] ?>EditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#<?= $usuario['nome'] ?>DeleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <!-- MODAL VIEW -->
                            <div class="modal fade" id="<?= $usuario['nome'] ?>ViewModal" tabindex="-1"
                                aria-labelledby="<?= $usuario['nome'] ?>ViewModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">Informações do Usuário</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">

                                                    <label for="user_name"
                                                        class="col-form-label d-flex justify-content-start">Nome:</label>
                                                    <input type="text" class="form-control" id="user_name"
                                                        value="<?= $usuario['nome'] ?>" readonly>
                                                    <label for="user_email"
                                                        class="col-form-label d-flex justify-content-start">E-mail:</label>
                                                    <input type="text" class="form-control" id="user_mail"
                                                        value="<?= $usuario['email'] ?>" readonly>
                                                    <label for="user_password"
                                                        class="col-form-label d-flex justify-content-start">Senha:</label>
                                                    <input type="text" class="form-control" id="user_password"
                                                        value="<?= $usuario['senha'] ?>" readonly>

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

                            <div class="modal fade" id="<?= $usuario['nome'] ?>EditModal" tabindex="-1"
                                aria-labelledby="<?= $usuario['nome'] ?>EditModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body">

                                            <form method="POST" action="editarUsuario">

                                                <div class="mb-3">
                                                    <label for="user_name"
                                                        class="col-form-label d-flex justify-content-start">Nome:</label>
                                                    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                                                    <input type="text" class="form-control" id="user_name"
                                                        name="user_name" value="<?= $usuario['nome'] ?>">

                                                    <label for="user_email"
                                                        class="col-form-label d-flex justify-content-start">E-mail:</label>
                                                    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                                                    <input type="text" class="form-control" id="user_email"
                                                        name="user_email" value="<?= $usuario['email'] ?>">

                                                    <label for="user_password"
                                                        class="col-form-label d-flex justify-content-start">Senha:</label>
                                                    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                                                    <input type="text" class="form-control" id="user_password"
                                                        name="user_password" value="<?= $usuario['senha'] ?>">
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

                            <div class="modal fade" id="<?= $usuario['nome'] ?>DeleteModal" tabindex="-1"
                                aria-labelledby="<?= $usuario['nome'] ?>DeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="POST" action="excluirUsuario">

                                                <div class="mb-3 mt-3">
                                                    <p class="justify-content-start">Tem certeza que deseja excluir o
                                                        usuário <span class="user_name"><?= $usuario['nome'] ?></span> ?
                                                    </p>
                                                    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
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

                    <?php endforeach; ?>

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