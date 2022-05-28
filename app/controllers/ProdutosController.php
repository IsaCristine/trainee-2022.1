<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use Exception;

class ProdutosController
{

    public function showProdutos()
    {
        $produtos = App::get("database")->selectProdutos();
        include __DIR__ . '/../views/admin/view_admin_produto.view.php';
    }

    public function createProduto()
    {
        
        $product = [
            "nome" => filter_input(INPUT_POST, "product_name", FILTER_SANITIZE_STRING),
            "valor" => filter_input(INPUT_POST, "product_value", FILTER_SANITIZE_STRING),
            "descricao" => filter_input(INPUT_POST, "product_description", FILTER_SANITIZE_STRING),
            "categoria_id" => filter_input(INPUT_POST, "product_categoria_id", FILTER_SANITIZE_STRING)

        ];
        $create = App::get("database")->insertProduto($product);

        header("location:Admin-Produtos");
    }

    public function editProduto()
    {

        $product = [
            "nome" => filter_input(INPUT_POST, "product_name", FILTER_SANITIZE_STRING),
            "valor" => filter_input(INPUT_POST, "product_value", FILTER_SANITIZE_STRING),
            "descricao" => filter_input(INPUT_POST, "product_description", FILTER_SANITIZE_STRING),
            "categoria_id" => filter_input(INPUT_POST, "product_categoria_id", FILTER_SANITIZE_STRING),
            "id" => $_POST['id']
        ];

        
        $edit = App::get("database")->editProduto($product);
        header("location:Admin-Produtos");
        
    }

    public function deleteProduto()
    {

        $id = $_POST['id'];

        $delete = App::get("database")->deleteProduto($id);

        header("location:Admin-Produtos");
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