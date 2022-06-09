<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;


class ContatoController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_contato.view.php';
    }

    public function contato(){

        return view('/site/contato');
    }

    public function sendEmail()
    {

        $nome = $_POST['nome'];

        $email = $_POST['email'];

        $assunto = $_POST['assunto'];

        $mensagem = $_POST['mensagem'];

        $mail = new PHPMailer();
        
    }
}