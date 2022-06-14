<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------
$router->method('exemple', 'ExempleController@Exemple');
FIM DO EXEMPLO --------------------------------------------------------------------*/




//Rotas Usuários
$router->get('Admin-Usuarios', 'UsuariosController@show');
$router->post('adicionarUsuario', 'UsuariosController@create');
$router->post('editarUsuario', 'UsuariosController@edit');
$router->post('excluirUsuario', 'UsuariosController@delete');
//Fim Usuários



//Rotas Admin Produtos
$router->get('Admin-Produtos', 'AdmProdutosController@showProdutos');
$router->post('salvarProduto', 'AdmProdutosController@createProduto');
$router->post('editarProduto', 'AdmProdutosController@editProduto');
$router->post('excluirProduto', 'AdmProdutosController@deleteProduto');
//Fim Admin Produtos



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

//Fim Contato



//Rotas Produto

$router->get('Produto','ProdutoController@getPage');

//Fim Produto

//Rotas Login

$router->get('Login','LoginController@getPage');
$router->post('logar','LoginController@verificaLogin');
$router->post('logout','LoginController@logout');
$router->get('logout','LoginController@logout');

//Fim Login

//ROTA SIDEBAR_ADMIN

$router->post('Admin-Editar','SidebarController@editUser');

//Rotas Dashboard Adm

$router->get('Admin','AdmDashboardController@getPage');

//Fim Dashboard Adm

//Rotas Produtos

$router->get('Produtos','ProdutosController@getPage');

//Fim Produtos

?>