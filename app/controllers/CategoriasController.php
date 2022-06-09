<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use Exception;

class CategoriasController
{

    public function showCategorias()
    {
        $categorias = App::get("database")->selectCategorias();
        include __DIR__ . '/../views/admin/view_admin_categoria.view.php';
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