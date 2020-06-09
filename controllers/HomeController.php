<?php
    session_start();

    include_once "models/Email.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome();
                break;
                case "email":
                    $this->envioEmail();
                break;
                case "news":
                    $this->viewNews();
                break;
            }
        }

        private function viewHome(){
            include "views/home.php";
        }
        private function viewNews(){
            include "views/news.php";
        }

        private function envioEmail(){
            $from = $_POST['from'];
            $toemail = $_POST['toemail'];
            $subject = $_POST['subject'];
            $mailContato = $_POST['email']; 
            $nomeContato = $_POST['nome'];
            $telefoneContato = $_POST['telefone'];
            $empresaContato = $_POST['empresa'];
            $mensagemContato = $_POST['message'];

            if($_POST['from'] == "contato@nuveto.com.br"){
                $nameFrom = 'Contato - Nuveto';
                $message = "==> Recebemos uma mensagem no site!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>Mensagem:</strong><br/><br/>$mensagemContato";
                $messagePlain = "==> Recebemos uma mensagem no site! Nome: $nomeContato ======== E-mail:  $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato ======== Mensagem:$mensagemContato";
            }

            if($_POST['from'] == "newsletter@nuveto.com.br"){
                $nameFrom = 'Newsletter - Nuveto';
                $message = "==> Inscrição na Newsletter!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/>";
                $messagePlain = "==> Inscrição na Newsletter! Nome: $nomeContato ======== E-mail:  $mailContato";
            }

            $mail = new PHPMailer(true);
            
            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->IsSMTP();
                $mail->Host = 'relay-hosting.secureserver.net';
                $mail->SMTPAuth = false;

                $mail->setFrom($from, $nameFrom);
                $mail->addAddress($toemail);

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $messagePlain;

                $mailresult = $mail->Send();

                $_SESSION['mailresult'] = $mailresult;
            }catch (Exception $e) {
                $_SESSION['ErrorInfo'] = $mail->ErrorInfo;
            }

            if($_SESSION['mailresult']){
                $db = new Email();
                $db->logEnvio($nomeContato,$mailContato,$telefoneContato,$empresaContato,$mensagemContato,true,$mailresult);
            }

            if($_SESSION['ErrorInfo']){
                $db = new Email();
                $db->logEnvio($nomeContato,$mailContato,$telefoneContato,$empresaContato,$mensagemContato,false,$_SESSION['ErrorInfo']);
            }

            $mail->clearAddresses();
            $mail->clearAttachments();
            $mail->ClearAllRecipients();

            ($_POST['from'] == "contato@nuveto.com.br") ? header('Location:/?#contato') : header('Location:/?news');
        }
    }
?>