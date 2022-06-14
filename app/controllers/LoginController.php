<?php
namespace App\Controllers;
session_start();
use App\Core\App;

class LoginController
{
    public function getPage():void
    {
        
        if(isset($_SESSION["userId"])){
            if($_SESSION["userId"]){
                header("Location:Admin");
                die();
            }
        }
        require __DIR__ . '/../views/site/view_login.view.php';
        
    }

    public function verificaLogin(){
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        if($email && $senha){
            $verifica = App::get("database")->autenticacao($email, $senha);


            if($verifica["id"]){
                $_SESSION["userId"]= $verifica["id"];

                header("Location:Admin");
                die();
            }
        }
        header("Location:Login");

    }

    public function logout(){
        if(isset($_SESSION["userId"])){
            unset($_SESSION["userId"]);
        }
        header("Location:Home");

    }
}