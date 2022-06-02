<?php

namespace App\Controllers;

class UsuariosController extends Pagination
{
    public function show()
    {

        $results_per_page = 10;

        $current_page = $this->get_current_page();

        $item_number = ($results_per_page * $current_page) - $results_per_page;

        $list_users = $this->list_page_products("usuarios",$item_number, $results_per_page);
        $page_quantity = $this->quantity_pages($results_per_page,"usuarios");

        $quantity_links = 2;

        include __DIR__ . '/../views/admin/view_adm_users.view.php';

        //return viewAdm('view_adm_users', compact('usuarios'));
    }

}