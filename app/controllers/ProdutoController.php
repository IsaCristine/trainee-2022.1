<?php

namespace App\Controllers;

class ProdutoController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_produto.view.php';
    }
}