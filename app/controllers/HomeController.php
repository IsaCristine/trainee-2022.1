<?php

namespace App\Controllers;

use App\Libs\Pagination;

class HomeController extends Pagination
{
    public function getPage():void
    {
        $produtos = $this->list_products(0,8);
        require __DIR__ . '/../views/site/view_home.view.php';
    }
}