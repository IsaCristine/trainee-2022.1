<?php

namespace App\Controllers;
session_start();
use App\Core\App;
use App\Core\Database\QueryBuilder;
use Exception;
use App\Libs\Pagination;

class CategoriasController extends Pagination
{

    public function showCategorias()
    {

        if($_SESSION["userId"]){
            $user = $this->getUser();
            $nome = filter_input(INPUT_GET,'search');
            if($nome){
                $categorias = App::get("database")->searchCategoria($nome);
            }else{
                //paginação //
                $results_per_page = 10;

                $page_quantity = $this->quantity_pages($results_per_page,"categorias");

                $current_page = ($this->get_current_page() > $page_quantity || $this->get_current_page() < 1) ? 1
                    : $this->get_current_page();

                $item_number = ($results_per_page * $current_page) - $results_per_page;

                $list_categories = $this->list_page_products("categorias",$item_number, $results_per_page);

                $quantity_links = 2;

                //fim paginação//
                $categorias = $list_categories;
            }
            include __DIR__ . '/../views/admin/view_admin_categoria.view.php';
        }
        else{
            header("Location:Home");
        }
    }

    public function getUser()
    {
        return App::get("database")->getUserById($_SESSION["userId"]);
    }

    public function createCategoria()
    {
        $categoryName = filter_input(INPUT_POST, "category_name", FILTER_SANITIZE_STRING);

        $create = App::get("database")->insertCategoria($categoryName);

        header("location:Admin-Categorias");
    }

    public function editCategoria()
    {
        $categoryName = filter_input(INPUT_POST, "category-name", FILTER_SANITIZE_STRING);

        $id = $_POST['id'];

        $edit = App::get("database")->editCategoria($id, $categoryName);

        header("location:Admin-Categorias");
    }

    public function deleteCategoria()
    {

        $id = $_POST['id'];

        $delete = App::get("database")->deleteCategoria($id);

        header("location:Admin-Categorias");
    }


    //Renderiza a página para exibir um registro:
    public function show()
    {

    }

    //Renderiza a página para criar de um registro:
    public function create()
    {

    }

    //Renderiza a página para armazenar um registro:
    public function store()
    {

    }

    //Renderiza a página para editar um registro:
    public function edit()
    {

    }

    //Renderiza a página para atualizar um registro:
    public function update()
    {

    }

    //Renderiza a página para deletar um registro:
    public function delete()
    {
    }
}