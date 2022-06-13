<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


class ContatoController
{
    public function getPage():void
    {
        require __DIR__ . '/../views/site/view_contato.view.php';
    }


    public function sendEmail()
    {
        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $nome = $_POST['name'];

        $email = $_POST['email'];

        $assunto = $_POST['subject'];

        $mensagem = $_POST['message'];

        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'noreplybuyin@gmail.com';
        $mail->Password = 'mzzxktdkvtzdlhka';
        $mail->Port = 587;

        $mail->setFrom('noreplybuyin@gmail.com');
        $mail->addAddress('noreplybuyin@gmail.com');
        $mail->addReplyTo($email,$nome);

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;

        if(!$mail->send()) {
            echo "<script>alert('Mensagem não enviada');</script>";
            echo '<script>alert(Erro inesperado);</script>';
            echo $mail->ErrorInfo;
            // header('Location:Contato'); 
        } 
        
        else {
            echo "<script>alert('Mensagem enviada');</script>";
            header("Location:Contato");
        }
    }
}