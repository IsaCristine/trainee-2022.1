<?php

namespace App\Controllers;
use App\Core\App;

session_start();

class SidebarController
{
    public function editUser()
    {
        if(!$_FILES["image"]["name"]){
            $user = App::get("database")->getUserById($_SESSION["userId"]);
            $image_content = $user["imagem"];
        } else {
            if (isset($_FILES["image"]["name"])) {
                $image_name = basename($_FILES["image"]["name"]);
                $image_size = $_FILES["image"]["size"];
                $image_type = pathinfo($image_name, PATHINFO_EXTENSION);
                $image = $_FILES["image"]["tmp_name"];

                if (in_array($image_type, array('png', 'jpg', 'gif', 'jpeg'))) {
                    $image_content = file_get_contents($_FILES["image"]["tmp_name"]);
                }
            }
        }


        $user = [
            "id" => $_SESSION["userId"],
            "nome" => filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING),
            "email" => filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL),
            "senha" => filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING),
            "imagem" => $image_content,
        ];

        App::get("database")->editAdmin($user);

        header("Location:Admin");
    }

}