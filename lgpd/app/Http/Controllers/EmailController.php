<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";

class EmailController {

    public function email(REQUEST $request) {

        //dd($_POST);
        //envia
        if(isset($request->nome)) {
            $nome = $request->nome;
        }
        if(isset($request->telefone)) {
            $telefone = $request->telefone;
        }
        if(isset($request->celular)) {
            $celular = $request->celular;
        }
        if(isset($request->email)) {
            $email = $request->email;
        }
        if(isset($request->cep)) {
            $cep = $request->cep;
        }
        if(isset($request->estado)) {
            $estado = $request->estado;
        }
        if(isset($request->cidade)) {
            $cidade = $request->cidade;
        }
        if(isset($request->acao)) {
            $acao = $request->acao;
        }
        if(isset($request->setor)) {
            $setor = $request->setor;
        }
        if(isset($request->tentativas)) {
            $tentativas = $request->tentativas;
        }
        if(isset($request->prefere)) {
            $prefere = $request->prefere;
        }
        if(isset($request->feedback)) {
            $feedback = $request->feedback;
        }
        $mail = new PHPMailer(true);

        try {
            //Instantiation and passing `true` enables exceptions
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->IsSMTP();
            $mail->Host = "smtp.mailtrap.io";
            $mail->SMTPAuth = true;
            $mail->Username = '1a061f0ba2c79c';
            $mail->Password = '2667756caaa8ac';
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;
            //$mail->SMTPDebug = 1;
            //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
            $mail->setFrom ('from@example.com', 'Mailer');
            $mail->AddAddress('joe@example.net', 'Joe User');
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = "Teste de Envio"; //Assunto
            $mail->Body = "<h1 style='text-align: center;'>Este é um E-mail teste com as informações</h1>  <br>  <br>  <p style='text-align: center;'>O cliente cliente tentou contato em data às horário na intenção de ação com o setor setor. Seguem seus dados para contato.</p>  <br>  <br>  <h4>Dados Pessoais:</h4>  <p>Nome: $nome</p>  <br>  <h4>Dados para Contato:</h4>  <p>Telefone: $telefone</p>  <p>Celular: $celular</p>  <p>E-mail: $email</p>  <br>  <h4>Endereço:</h4>  <p>CEP: $cep</p>  <p>Estado: $estado</p>  <p>Cidade: $cidade</p>  <br>  <h4>Intenções:</h4>  <p>Ação: $acao</p>  <p>Setor: $setor</p>  <p>Tentativa de contato: $tentativas</p>  <br>  <h4>Preferências:</h4>  <p>Prefere ser contatado via: $prefere</p>  <br>  <h4>Mensagem:</h4>  <pre>$feedback</pre>"; //body
            $mail->AltBody = "Este é um E-mail teste com as informações\n\n O cliente cliente tentou contato em data às horário na intenção de ação com o setor setor. Seguem seus dados para contato.\n\n Dados Pessoais:\n Nome: $nome\n\n Dados para Contato:\n Telefone: $telefone\n Celular: $celular\n E-mail: $email\n\n Endereço:\nCEP: $cep\n Estado: $estado\n Cidade: $cidade\n\n Intenções:\n Ação: $acao\n Setor: $setor\n Tentativa de contato: $tentativas\n\n Preferências:\n Prefere ser contatado via: $prefere\n Mensagem: $feedback";
            
            $mail->Send(); //Envia o Email

            echo 'Email enviado com sucesso!';

        } catch (Exception $e) {

            echo 'Erro: Email não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}';

        }

    }

}

?>