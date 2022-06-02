<?php

namespace App\Controllers;

use App\Core\App;

class Pagination
{
    public function get_current_page():int
    {
        // pega a pagina atual pela url.
        $get_current_page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);

        // se nao tiver a pagina na url, set para valor 1 (página 1)
        $page = (!empty($get_current_page)) ? $get_current_page : 1;

        return $page;
    }

    //lista dos produtos a serem exibidos na pagina.
    public function list_page_products($table_name, $item_number, $results_per_page):array
    {
        $products = App::get("database")->list_page_products($table_name, $item_number, $results_per_page);
        return $products;
    }

    public function quantity_pages($results_per_page, $table_name):int
    {
        $quantity_pages = App::get("database")->quantity_pages($results_per_page, $table_name);
        return $quantity_pages;
    }
}