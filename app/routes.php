<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/



//Rotas Usuários

//Fim Usuários



//Rotas Produtos
$router->get('Admin-Produtos', 'ProdutosController@showProdutos');
$router->post('salvarProduto', 'ProdutosController@createProduto');
$router->post('editarProduto', 'ProdutosController@editProduto');
$router->post('excluirProduto', 'ProdutosController@deleteProduto');
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