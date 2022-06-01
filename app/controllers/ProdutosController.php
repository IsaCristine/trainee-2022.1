<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosController
{
    public function getPage():void
    {
        // quantidade de produtos exibida na pagina;
        $results_per_page = 12;

        // numero do primeiro item a ser exibido na pagina para pegar no banco;
        $item_number = ($results_per_page * $this->get_current_page()) - $results_per_page;

        $list_products = $this->list_page_products($item_number, $results_per_page);
        $page_quantity = $this->quantity_pages($results_per_page);

        //quantidade de links na paginação;
        $quantity_links = 2;

        require __DIR__ . '/../views/site/view_produtos.view.php';
    }

    public function get_current_page():int
    {
        // pega a pagina atual pela url.
        $get_current_page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);

        // se nao tiver a pagina na url, set para valor 1 (página 1)
        $page = (!empty($get_current_page)) ? $get_current_page : 1;

        return $page;
    }

    //lista dos produtos a serem exibidos na pagina.
    public function list_page_products($item_number, $results_per_page):array
    {
        $products = App::get("database")->list_page_products($item_number, $results_per_page);
        return $products;
    }

    public function quantity_pages($results_per_page):int
    {
        $quantity_pages = App::get("database")->quantity_pages($results_per_page);
        return $quantity_pages;
    }
}
