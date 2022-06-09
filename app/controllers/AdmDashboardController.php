<?php

namespace App\Controllers;

class AdmDashboardController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/admin/view_dashboard_administrativa.view.php';
    }
}