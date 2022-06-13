<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/




//Rotas Usuários
    $router->get('usuariosAdm', 'UsuariosController@show');
//Fim Usuários



//Rotas Produtos
   
//Fim Produtos



//Rotas Categorias
$router->get('Admin-Categorias', 'CategoriasController@showCategorias');
$router->post('salvarCategoria', 'CategoriasController@createCategoria');
$router->post('editarCategoria', 'CategoriasController@editCategoria');
$router->post('excluirCategoria', 'CategoriasController@deleteCategoria');
//Fim Categorias



//Rotas Home

$router->get('Home','HomeController@getPage');

//Fim Home



//Rotas Quem Somos

$router->get('Quem-somos','QuemSomosController@getPage');

//Fim Quem Somos



//Rotas Contato

$router->get('Contato','ContatoController@getPage');
$router->post('envio','ContatoController@sendEmail');

//Fim Contato



//Rotas Produto

$router->get('Produto','ProdutoController@getPage');

//Fim Produto



//Rotas Login

$router->get('Login','LoginController@getPage');

//Fim Login

//Rotas Dashboard Adm

$router->get('Admin','AdmDashboardController@getPage');

//Fim Dashboard Adm

//Rotas Produtos

$router->get('Produtos','ProdutosController@getPage');

//Fim Produtos

?>