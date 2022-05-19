<?php

namespace App\Controllers;

class QuemSomosController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_quem_somos.view.php';
    }
}