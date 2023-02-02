<?php
namespace App\Http\Controllers;
use FFI\Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use RealRashid\SweetAlert\Facades\Alert;


//*Classe que reúne todos os métodos para envio de email//
class EmailController
{
    public function email()
    {
        dd($_POST);
                    
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); 
        $mail->Host = "mail.tenbrasil.com.br"; 
        //$mail->SMTPDebug = 1;
        $mail->Port = 465; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'contato@tenbrasil.com.br'; 
        $mail->Password = ''; 
        $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
        $mail->From = "contato@tenbrasil.com.br"; //Remetente, colocar email da ten ?
        $mail->AddAddress('dev6@tenbrasil.com.br', 'Contato'); //Destinatário
        $mail->IsHTML(true); 
        $mail->CharSet = 'UTF-8'; 
        $mail->Subject = "dsadadasdassda"; //Assunto
        $mail->Body = "dsadsadsa";
        dd($mail);
        $enviado = $mail->Send(); //Envia o Email

         
        if ($enviado) 
        { 
            Alert::success('E-mail enviado!', 'Em breve entraremos em contato');
            return redirect()->back();
        } else { 
            Alert::error('Erro ao enviar o e-mail');
            return redirect()->back();
        } 

    }


    }