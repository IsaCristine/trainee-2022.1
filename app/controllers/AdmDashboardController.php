<?php

namespace App\Controllers;
session_start();
class AdmDashboardController
{
    public function getPage():void
    {   
    
        if(isset($_SESSION["userId"])){
        
            require __DIR__ . '/../views/admin/view_dashboard_administrativa.view.php';
        }
        else{
            header("Location:Home");
        }

    }
}