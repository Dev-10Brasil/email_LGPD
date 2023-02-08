<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use RealRashid\SweetAlert\Facades\Alert;

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
                    header('location: /ERRO_a');
                    exit;
                }
                
                if (isset($request->telefone)) {
                    $telefone = $request->telefone;
                } else {
                    header('location: /ERRO_b');
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
                    header('location: /ERRO_c');
                    exit;
                }

                if (isset($request->cep)) {
                    $cep = $request->cep;
                } else {
                    header('location: /ERRO_d');
                    exit;
                }

                if (isset($request->estado)) {
                    $estado = $request->estado;
                } else {
                    header('location: /ERRO_e');
                    exit;
                }

                if (isset($request->cidade)) {
                    $cidade = $request->cidade;
                } else {
                    header('location: /ERRO_f');
                    exit;
                }

                if (isset($request->acao)) {
                    $acao = $request->acao;
                } else {
                    header('location: /ERRO_g');
                    exit;
                }

                if (isset($request->setor)) {
                    $setor = $request->setor;
                } else {
                    header('location: /ERRO_h');
                    exit;
                }

                if (isset($request->tentativas)) {
                    $tentativas = $request->tentativas;
                } else {
                    header('location: /ERRO_i');
                    exit;
                }

                if (isset($request->prefere)) {
                    $prefere = $request->prefere;
                } else {
                    header('location: /ERRO_j');
                    exit;
                }

                if (isset($request->feedback)) {
                    $feedback = $request->feedback;
                } else {
                    header('location: /ERRO_k');
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
                    $mail->setFrom('SAC@tenbrasil.com', 'Mailer');
                    $mail->AddAddress('SAC_LGPD@tenbrasil.net', 'Joe User');
                    $mail->isHTML(true);
                    $mail->AddEmbeddedImage('img/logo_cabecalho.png', 'logo_ref');
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = "Mensagem sobre uso de dados LGPD"; //Assunto
                    $mail->Body = "<div style='padding: 40px;'><div style='text-align: center;'><img src='cid:logo_ref' style='width: 20%; min-width: 200px;'></div><br><br><p style='text-align: center;'>O cliente $nome tentou contato na intenção de $acao com o setor $setor. Seguem seus dados para contato:</p><br><br><h3 style='text-decoration: underline;'>Dados Pessoais:</h3><p>Nome: $nome</p><br><h3 style='text-decoration: underline;'>Dados para Contato:</h3><p>Telefone: $telefone</p><p>Celular: $celular</p><p>E-mail: $email</p><br><h3 style='text-decoration: underline;'>Endereço:</h3><p>CEP: $cep</p><p>Estado: $estado</p><p>Cidade: $cidade</p><br><h3 style='text-decoration: underline;'>Intenções:</h3><p>Ação: $acao</p><p>Setor: $setor</p><p>Tentativa de contato: $tentativas</p><br><h3 style='text-decoration: underline;'>Preferências:</h3><p>Prefere ser contatado via: $prefere</p><br><h3 style='text-decoration: underline;'>Mensagem:</h3><pre>$feedback</pre></div>"; //body
                    $mail->AltBody = "O cliente $nome tentou contato na intenção de $acao com o setor $setor. Seguem seus dados para contato:\n\nDados Pessoais:\nNome: $nome\n\nDados para Contato:\nTelefone: $telefone\nCelular: $celular\nE-mail: $email\n\nEndereço:\nCEP: $cep\nEstado: $estado\nCidade: $cidade\n\nIntenções:\nAção: $acao\nSetor: $setor\nTentativa de contato: $tentativas\n\nPreferências:\nPrefere ser contatado via: $prefere\nMensagem: $feedback";

                    $mail->Send(); //Envia o Email

                    $mail->setFrom('SAC@tenbrasil.com', 'Mailer');
                    $mail->AddAddress($email, 'Joe User');
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = "Recebemos a sua mensagem!"; //Assunto
                    $mail->Body = "<div style='padding: 40px;'><div style='text-align: center;'><img src='cid:logo_ref' style='width: 20%; min-width: 200px;'></div><br/><p style='text-align: center;'>Olá $nome!</p><p style='text-align: center;'>Venho, por meio desta mensagem, dizer-te que recebemos a tua mensagem e, assim que possível, entraremos em contato.</p><p style='text-align: center;'>Em nome de toda a equipe Ten Brasil, eu gostaria de enfatizar que nós levamos nosso trabalho muito a sério e nos importamos muito com você. Posso garantir que estamos seguindo todas as diretrizes da LGPD (Lei Geral de Proteção de Dados) e tomando todos os cuidados para garantir a tua privacidade e a segurança dos teus dados pessoais.</p><p style='text-align: center;'>Caso queiras mais detalhes, eles estarão disponíveis no arquivo em anexo.</p><p style='text-align: center;'>Caso tenhas alguma dúvida ou queira se informar sobre como estamos tratando os teus dados, não hesite em perguntar.</p><p style='text-align: center;'>Somos muito gratos pela sua confiança.</p><br/><br/><br/><p style='text-align: center;'>Atenciosamente: Ten Brasil LTDA</p></div>"; //body
                    $mail->AltBody = "Ten Brasil\n\nOlá $nome!\n\nVenho, por meio desta mensagem, dizer-te que recebemos a tua mensagem e, assim que possível, entraremos em contato.\nEm nome de toda a equipe Ten Brasil, eu gostaria de enfatizar que nós levamos nosso trabalho muito a sério e nos importamos muito com você. Posso garantir que estamos seguindo todas as diretrizes da LGPD (Lei Geral de Proteção de Dados) e tomando todos os cuidados para garantir a tua privacidade e a segurança dos teus dados pessoais.\nCaso queiras mais detalhes, eles estarão disponíveis no arquivo em anexo.\nCaso tenhas alguma dúvida ou queira se informar sobre como estamos tratando os teus dados, não hesite em perguntar.\nSomos muito gratos pela sua confiança.\n\n\nAtenciosamente: Ten Brasil LTDA";
                
                    $mail->Send(); //Envia o Email

                    header('location: /SEND');
                    exit;

                } catch (Exception $e) {

                    header('location: /ERROR');
                    exit;

                }
               

            } else {

                header('location: /ERRO_Mr.Robot');
                exit;
                
            }

        }

    }

}

?>