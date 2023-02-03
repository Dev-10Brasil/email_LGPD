<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";

class EmailController {

    public function email(REQUEST $request) {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $secret = "6Lcsi04kAAAAALRdQ6kJRR1Dnuvq940DAGhJ2jbJ";
            $response = $_POST["g-recaptcha-response"];
            $remoteip = $_SERVER["REMOTE_ADDR"];
            $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
            
            $result = json_decode($url, TRUE);

            if ($result["success"] == 1) {

                //dd($_POST);
                //envia
                if (isset($request->nome)) {
                    $nome = $request->nome;
                } else {
                    header('location: /');
                    exit;
                }
                
                if (isset($request->telefone)) {
                    $telefone = $request->telefone;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->celular)) {
                    $celular = $request->celular;
                } else {
                    $celular = '';
                }
                
                if (isset($request->email)) {
                    $email = $request->email;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->cep)) {
                    $cep = $request->cep;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->estado)) {
                    $estado = $request->estado;
                } else {
                header('location: /');
                exit;
                }

                if (isset($request->cidade)) {
                    $cidade = $request->cidade;
                } else {
                header('location: /');
                exit;
                }

                if (isset($request->acao)) {
                    $acao = $request->acao;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->setor)) {
                    $setor = $request->setor;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->tentativas)) {
                    $tentativas = $request->tentativas;
                } else {
                    header('location: /');
                    exit;
                }

                if (isset($request->prefere)) {
                    $prefere = $request->prefere;
                } else {
                    header('location: /');
                    exit;
                }


                if (isset($request->feedback)) {
                    $feedback = $request->feedback;
                } else {
                    header('location: /');
                    exit;
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
                    $mail->setFrom('from@example.com', 'Mailer');
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

            } else {
                header('location: /');
                exit;
            }

        }

    }

}

?>