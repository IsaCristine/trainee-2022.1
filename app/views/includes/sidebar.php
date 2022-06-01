<header>
    <nav class="navbar navbar-light bg-light shadow">
        <div class="container-fluid">

            <div class="border-button">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon menu-button"></span>
                </button>
            </div>

            <div class="offcanvas offcanvas-start bg-sidebar" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

                <div class="d-flex flex-column p-3 text-white sidebar-area bg-sidebar">

                    <div class="offcanvas-header ps-0">

                        <h5 class="offcanvas-title">Bell Comics - Admin</h5>
                        <i class="bi bi-x-lg close-button" data-bs-dismiss="offcanvas" aria-label="Close"></i>

                    </div>

                    <hr>
                    <div class="offcanvas-body ps-0 mb-auto">

                        <ul class="nav flex-column mb-auto">

                            <li class="nav-item link mb-4">
                                <a href="" class="disable-link ms-3">

                                    <i class="bi bi-clipboard-data icon"></i>

                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item link mb-4">
                                <a href="" class="disable-link ms-3">

                                    <i class="bi bi-box-seam icon"></i>

                                    <span>Produtos</span>
                                </a>
                            </li>

                            <li class="nav-item link mb-4">
                                <a href="" class="disable-link ms-3">

                                    <i class="bi bi-collection icon"></i>

                                    <span>Categoria</span>
                                </a>
                            </li>

                            <li class="nav-item link mb-4">
                                <a href="" class="disable-link ms-3 mb-5">

                                    <i class="bi bi-people icon"></i>

                                    <span>Usuários</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <hr>

                    <div class="sidebar-bottom">

                        <div class="btn-group dropup bg-sidebar">

                            <button type="button" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="admin-sidebar-logo" src="../../../public/img/Macacode.jpg">
                                <strong class="admin-username text-white">USERNAME</strong>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">

                                <li>

                                        <span data-bs-dismiss="offcanvas" aria-label="Close">
                                            <button class="dropdown-item text-white logout-link" data-bs-toggle="modal" data-bs-target="#editModal">
                                                Editar
                                            </button>
                                        </span>

                                </li>

                                <li>

                                    <a class="dropdown-item text-white logout-link" href=""> <span class=" me-auto"> Logout </span><i class="bi bi-box-arrow-right logout-icon"></i></a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <form method="POST" action="">
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" value="Username">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="usermail@email.com"></input>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-form-label">Senha:</label>
                                    <input type="password" class="form-control" name="password" id="password"></input>
                                </div>

                                <div class="card mb-3 area-img">
                                    <div class="card-header">
                                        Imagem
                                    </div>

                                    <label for="image" id="card-label">
                                        <img src="../../../public/img/Macacode.jpg" class="edit-img">
                                    </label>

                                    <div class="card-body">
                                        <input type="file" name="image" accept="image/*" class="form-control" id="image">
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
                                <input type="submit" name="submit" class="btn btn-primary" value="Editar">

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </nav>

</header>
