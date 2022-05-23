<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    //Renderiza a página para listar todos os registros:
    public function index()
    {
        
    }

    //Renderiza a página para exibir um registro:
    public function show()
    {
    
        $usuarios = App::get("database")-> selectUsuarios(); 

        //  include __DIR__ . '/../views/admin/view_adm_users.view.php';
        
        return viewAdm('view_adm_users', compact('usuarios'));
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
        header("location:usuariosAdm");
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
        header("location:usuariosAdm");
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

        header("location:usuariosAdm");
    }
}