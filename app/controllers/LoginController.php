<?php

namespace App\Controllers;

class LoginController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_login.view.php';
    }
}