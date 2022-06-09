<?php

namespace App\Controllers;

class HomeController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_home.view.php';
    }
}