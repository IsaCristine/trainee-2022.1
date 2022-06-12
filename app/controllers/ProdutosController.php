<?php

namespace App\Controllers;

class ProdutosController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_produtos.view.php';
    }
}