<?php

/*EXEMPLO DE ROTA -------------------------------------------------------------------

$router->method('exemple', 'ExempleController@Exemple');

FIM DO EXEMPLO --------------------------------------------------------------------*/



//Rotas Usuários

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