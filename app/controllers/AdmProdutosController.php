<?php

namespace App\Controllers;
session_start();

use App\Core\App;
use App\Core\Database\QueryBuilder;
use Exception;

class AdmProdutosController
{


    public function showProdutos()
    {

        if($_SESSION["userId"]){
            $user = $this->getUser();
            $categorias = App::get('database')->selectCategorias();

            $nome = filter_input(INPUT_GET,'search');
            if($nome){
                $produtos = App::get("database")->pesquisaProdutos($nome);
            }else{
                $produtos = App::get("database")->selectProdutos();
            } 
            include __DIR__ . '/../views/admin/view_adm_produtos.view.php';
        }
        else{
            header("Location:Home");
        }
    }

    public function getUser()
    {
        return App::get("database")->getUserById($_SESSION["userId"]);
    }

    public function createProduto()
    {
        $image_name = basename($_FILES["image"]["name"]);
        $image_size = $_FILES["image"]["size"];
        $image_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $image = $_FILES["image"]["tmp_name"];

        if(in_array($image_type, array('png', 'jpg', 'gif', 'jpeg'))){
            $image_content = file_get_contents($_FILES["image"]["tmp_name"]);
        }

        $product = [
            "nome" => filter_input(INPUT_POST, "product_name", FILTER_SANITIZE_STRING),
            "valor" => filter_input(INPUT_POST, "product_value", FILTER_SANITIZE_STRING),
            "info" => filter_input(INPUT_POST, "product_info", FILTER_SANITIZE_STRING),
            "descricao" => filter_input(INPUT_POST, "product_description", FILTER_SANITIZE_STRING),
            "categorias_id" => $_POST["categorias_id"],
            "imagem" => $image_content

        ];
        /* die(var_dump($product)); */
        $create = App::get("database")->insertProduto($product);

        header("location:Admin-Produtos");
    }

    public function editProduto()
    {
        $image_name = basename($_FILES["image"]["name"]);
        $image_size = $_FILES["image"]["size"];
        $image_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $image = $_FILES["image"]["tmp_name"];

        if(in_array($image_type, array('png', 'jpg', 'gif', 'jpeg'))){
            $image_content = file_get_contents($_FILES["image"]["tmp_name"]);
        }

        $product = [
            "nome" => filter_input(INPUT_POST, "product_name", FILTER_SANITIZE_STRING),
            "valor" => filter_input(INPUT_POST, "product_value", FILTER_SANITIZE_STRING),
            "info" => filter_input(INPUT_POST, "product_info", FILTER_SANITIZE_STRING),
            "descricao" => filter_input(INPUT_POST, "product_description", FILTER_SANITIZE_STRING),
            "categorias_id" => filter_input(INPUT_POST, "categorias_id", FILTER_SANITIZE_STRING),
            "imagem" => $image_content,
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