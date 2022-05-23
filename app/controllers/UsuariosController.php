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