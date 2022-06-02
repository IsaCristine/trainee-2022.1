<?php

namespace App\Controllers;

class CategoriasController extends ProdutosController
{
    public function showCategorias()
    {

        //paginação //
        $results_per_page = 10;

        $current_page = $this->get_current_page();

        $item_number = ($results_per_page * $current_page) - $results_per_page;

        $list_categories = $this->list_page_products("categorias",$item_number, $results_per_page);
        $page_quantity = $this->quantity_pages($results_per_page,"categorias");

        $quantity_links = 2;

        //fim paginação//
        include __DIR__ . '/../views/admin/view_admin_categoria.view.php';
    }
}