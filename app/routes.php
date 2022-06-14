<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/




//Rotas Usuários
$router->get('usuariosAdm', 'UsuariosController@show');
//Fim Usuários



//Rotas Produtos
$router->get('Admin-Produtos', 'AdmProdutosController@showProdutos');
$router->post('salvarProduto', 'AdmProdutosController@createProduto');
$router->post('editarProduto', 'AdmProdutosController@editProduto');
$router->post('excluirProduto', 'AdmProdutosController@deleteProduto');
//Fim Produtos



//Rotas Categorias
$router->get('Admin-Categorias', 'CategoriasController@showCategorias');
//Fim Categorias



//Rotas Home

$router->get('Home','HomeController@getPage');

//Fim Home



//Rotas Quem Somos

$router->get('Quem-somos','QuemSomosController@getPage');

//Fim Quem Somos



//Rotas Contato

$router->get('Contato','ContatoController@getPage');

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