<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/



//Rotas Usuários
    $router->get('usuariosAdm', 'UsuariosController@show');
    $router->post('adicionarUsuario', 'UsuariosController@create');
    $router->post('editarUsuario', 'UsuariosController@edit');
    $router->post('excluirUsuario', 'UsuariosController@delete');
//Fim Usuários



//Rotas Produtos
   
//Fim Produtos



//Rotas Categorias

//Fim Categorias



//Rotas Home

//Fim Home



//Rotas Quem Somos

//Fim Quem Somos



//Rotas Contato

//Fim Contato



//Rotas Produto

//Fim Produto



//Rotas Login

//Fim Login

?>