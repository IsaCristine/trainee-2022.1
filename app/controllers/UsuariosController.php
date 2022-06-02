<?php

namespace App\Controllers;

use App\Libs\Pagination;

class UsuariosController extends Pagination
{
    public function show()
    {
        //paginação
        $results_per_page = 10;

        $page_quantity = $this->quantity_pages($results_per_page,"usuarios");

        $current_page = ($this->get_current_page() > $page_quantity || $this->get_current_page() < 1) ? 1
                        : $this->get_current_page();


        $item_number = ($results_per_page * $current_page) - $results_per_page;

        $list_users = $this->list_page_products("usuarios",$item_number, $results_per_page);


        $quantity_links = 2;
        //fim paginação

        include __DIR__ . '/../views/admin/view_adm_users.view.php';

        //return viewAdm('view_adm_users', compact('usuarios'));
    }

}