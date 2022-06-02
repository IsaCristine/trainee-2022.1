<?php

namespace App\Controllers;

use App\Libs\Pagination;

class ProdutosController extends Pagination
{
    public function getPage():void
    {
        // quantidade de produtos exibida na pagina;
        $results_per_page = 8;

        $page_quantity = $this->quantity_pages($results_per_page,"produto");

        $current_page = ($this->get_current_page() > $page_quantity || $this->get_current_page() < 1) ? 1
            : $this->get_current_page();

        // numero do primeiro item a ser exibido na pagina para pegar no banco;

        $item_number = ($results_per_page * $current_page) - $results_per_page;

        $list_products = $this->list_page_products("produto",$item_number, $results_per_page);

        //quantidade de links na paginação;
        $quantity_links = 2;

        require __DIR__ . '/../views/site/view_produtos.view.php';
    }

}
