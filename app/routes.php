<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/



//Rotas Usuários

//Fim Usuários



//Rotas Produtos
$router->get('Admin-Produtos', 'AdmProdutosController@showProdutos');
$router->post('salvarProduto', 'AdmProdutosController@createProduto');
$router->post('editarProduto', 'AdmProdutosController@editProduto');
$router->post('excluirProduto', 'AdmProdutosController@deleteProduto');
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