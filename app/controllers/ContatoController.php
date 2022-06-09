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

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'testetraineephp@gmail.com';
        $mail->Password = 'Bcomics123';
        $mail->Port = 587;
        
        $mail->setFrom('testetraineephp@gmail.com', 'Destinatario');
        $mail->addAddress('testetraineephp@gmail.com', 'Remetente');

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;

        if(!$mail->send()) {
            echo "<script>alert('Mensagem não enviada');</script>";
            echo '<script>alert(Erro inesperado);</script>';
            header('Location: /contato');;
        } 
        
        else {
            echo "<script>alert('Mensagem enviada');</script>";
            return view('site/contato');
        }
    }
}