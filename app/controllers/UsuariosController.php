<?php

namespace App\Controllers;
session_start();
use App\Core\App;
use Exception;
use App\Libs\Pagination;

class UsuariosController extends Pagination
{
    //Renderiza a página para listar todos os registros:
    public function index()
    {
    }

    //Renderiza a página para exibir um registro:
    public function show()
    {

        if($_SESSION["userId"]){
            $user = $this->getUser();
                        //paginação
            $results_per_page = 10;

            $page_quantity = $this->quantity_pages($results_per_page,"usuarios");

            $current_page = ($this->get_current_page() > $page_quantity || $this->get_current_page() < 1) ? 1
                            : $this->get_current_page();


            $item_number = ($results_per_page * $current_page) - $results_per_page;

            $list_users = $this->list_page_products("usuarios",$item_number, $results_per_page);


            $quantity_links = 2;
            //fim paginação
            $usuarios = $list_users;
        
            include __DIR__ . '/../views/admin/view_adm_users.view.php';
        }
        else{
            header("Location:Home");
        }

    }

    public function getUser()
    {
        return App::get("database")->getUserById($_SESSION["userId"]);
    }

    //Renderiza a página para criar de um registro:
    public function create()
    {
        $dados = [
            "nome" => filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING),
            "email" => filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_STRING),
            "senha" => filter_input(INPUT_POST, "user_password", FILTER_SANITIZE_STRING)
        ];

        $create = App::get("database")->insertUsuarios($dados);
        header("location:Admin-Usuarios");
    }

    //Renderiza a página para armazenar um registro:
    public function store()
    {

    }

    //Renderiza a página para editar um registro:
    public function edit()
    {
        $dados = [
            "nome" => filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING),
            "email" => filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_STRING),
            "senha" => filter_input(INPUT_POST, "user_password", FILTER_SANITIZE_STRING),
            "id" => $_POST['id']
        ];

        $create = App::get("database")->editUsuario($dados);
        header("location:Admin-Usuarios");
    }

    //Renderiza a página para atualizar um registro:
    public function update()
    {
    }

    //Renderiza a página para deletar um registro:
    public function delete()
    {
        $id = $_POST['id'];

        $delete = App::get("database")->deleteUsuario($id);

        header("location:Admin-Usuarios");
    }

}