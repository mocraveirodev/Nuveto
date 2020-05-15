<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'views/PHPMailer/src/Exception.php';
    require 'views/PHPMailer/src/PHPMailer.php';
    require 'views/PHPMailer/src/SMTP.php';

    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome();
                break;
                case "contato":
                    $this->envioContato();
                break;
            }
        }

        private function viewHome(){
            include "views/home.php";
        }

        private function envioContato(){
            if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
                $hostname = strtolower($_SERVER["COMPUTERNAME"]);
            } else {
                $hostname = `hostname`;
                $hostnamearray = explode('.', $hostname);
                $hostname = $hostnamearray[0];
            }

            $from = "marketing@nuveto.com.br";
            $toemail = "marketing@nuveto.com.br";
            $subject = "Contato Site | Nuveto";
            $mailContato = $_POST['email']; 
            $nomeContato = $_POST['nome'];
            $telefoneContato = $_POST['telefone'];
            $empresaContato = $_POST['empresa'];
            $mensagemContato = $_POST['message'];
            $message = "Recebemos uma mensagem no site <br/><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>Mensagem:</strong><br/><br/>$mensagemContato";
            $messagePlain = "Recebemos uma mensagem no site! Nome: $nomeContato ======== E-mail:  $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato ======== Mensagem:$mensagemContato";
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->IsSMTP();
                if ( strpos($hostname, 'cpnl') === FALSE )
                    $mail->Host = 'relay-hosting.secureserver.net';
                else
                    $mail->Host = 'localhost';
                $mail->SMTPAuth = false;

                $mail->setFrom($from, 'Contato - Nuveto');
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

            header('Location:/home');
        }
    }
?>