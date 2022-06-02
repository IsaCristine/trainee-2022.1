<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosController extends Pagination
{
    public function getPage():void
    {
        // quantidade de produtos exibida na pagina;
        $results_per_page = 8;

        $current_page = $this->get_current_page();

        // numero do primeiro item a ser exibido na pagina para pegar no banco;

        $item_number = ($results_per_page * $current_page) - $results_per_page;

        $list_products = $this->list_page_products("produto",$item_number, $results_per_page);
        $page_quantity = $this->quantity_pages($results_per_page,"produto");

        //quantidade de links na paginação;
        $quantity_links = 2;

        require __DIR__ . '/../views/site/view_produtos.view.php';
    }

}
