<?php

namespace App\Controllers;
use App\Core\App;

session_start();
class AdmDashboardController
{
    public function getPage():void
    {

        if(isset($_SESSION["userId"])){
            $user = $this->getUser();
            require __DIR__ . '/../views/admin/view_dashboard_administrativa.view.php';
        }
        else{
            header("Location:Home");
        }

    }
    public function getUser()
    {
        return App::get("database")->getUserById($_SESSION["userId"]);
    }
}