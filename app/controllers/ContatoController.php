<?php

namespace App\Controllers;

class ContatoController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_contato.view.php';
    }
}