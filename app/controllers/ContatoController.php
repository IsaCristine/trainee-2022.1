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


    public function sendEmail()
    {

        $nome = $_POST['name'];

        $email = $_POST['email'];

        $assunto = $_POST['subject'];

        $mensagem = $_POST['message'];

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPDebug=2;
        $mail->mailer='smtp';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 587;
        $mail->isHTML(true);
        $mail->Username = 'testetraineephp@gmail.com';
        $mail->Password = 'Bcomics123';
        
        $mail->setFrom($email, 'Destinatario');
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;
        $mail->AddAddress('testetraineephp@gmail.com', 'Remetente');


        if(!$mail->send()) {
            echo "<script>alert('Mensagem não enviada');</script>";
            echo '<script>alert(Erro inesperado);</script>';
            echo $mail->ErrorInfo;
            // header('Location:Contato'); 
        } 
        
        else {
            echo "<script>alert('Mensagem enviada');</script>";
            return view('site/Contato');
        }
    }
}