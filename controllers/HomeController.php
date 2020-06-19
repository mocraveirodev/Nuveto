<?php
    session_start();

    header('Content-Type: text/html; charset=UTF-8');

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
                case "parceiro":
                    $this->viewParceiro();
                break;
                case "emailparceiro":
                    $this->emailParceiro();
                break;
            }
        }

        private function viewHome(){
            include "views/home.php";
        }
        
        private function viewNews(){
            include "views/news.php";
        }

        private function viewParceiro(){
            include "views/parceiro.php";
        }

        private function envioEmail(){
            $from = $_POST['from'];
            $toemail = $_POST['toemail'];
            $subject = $_POST['subject'];
            $nomeContato = $_POST['nome']." ".$_POST['sobrenome'];
            $empresaContato = $_POST['empresa'];
            $mailContato = $_POST['email']; 
            $cargoContato = $_POST['cargo']; 
            $telefoneContato = $_POST['telefone'];
            $tecatual = $_POST['tecatual'];
            $numberAgents = $_POST['numberAgents'];
            $industry = $_POST['industry'];
            $expecnegocio = $_POST['expecnegocio'];
            $excpecacordo = $_POST['excpecacordo'];
            $notes = $_POST['notes'];
            $nomerep = $_POST['nomerep']." ".$_POST['sobrenomerep'];
            $emailrep = $_POST['emailrep'];
            $telefonerep = $_POST['telefonerep'];
            $mensagemContato = $_POST['message'];
            $db = new Email();
            
            switch ($from) {
                case "contato@nuveto.com.br":
                    $nameFrom = 'Contato - Nuveto';
                    $origem = "Contato";
                    $message = "==> Recebemos uma mensagem no site!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>Mensagem:</strong><br/><br/>$mensagemContato";
                    $messagePlain = "==> Recebemos uma mensagem no site! Nome: $nomeContato ======== E-mail:  $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato ======== Mensagem:$mensagemContato";
                    break;
                case "newsletter@nuveto.com.br":
                    $nameFrom = 'Newsletter - Nuveto';
                    $origem = "Newsletter";
                    $message = "==> Inscrição na Newsletter!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/>";
                    $messagePlain = "==> Inscrição na Newsletter! Nome: $nomeContato ======== E-mail:  $mailContato";
                    break;
                case "oportunidade@nuveto.com.br":
                    $nameFrom = 'Oportunidade - Nuveto';
                    $origem = "Oportunidade";
                    $message = "==> Oportunidade de Parceiro!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Cargo:</strong> $cargoContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Tecnologia Atual:</strong> $tecatual<br/><strong>Número de Representantes:</strong> $numberAgents<br/><strong>Setor:</strong> $industry<br/><strong>Expectativa de tamanho do Negócio:</strong> $expecnegocio<br/><strong>Expectativa de Finalização do Acordo:</strong> $excpecacordo<br/><strong>Notas sobre a oportunidade:</strong> $notes<br/><strong>Nome Representante:</strong> $nomerep<br/><strong>Telefone Representante:</strong> $telefonerep<br/><strong>Email Representante:</strong> $emailrep<br/>";
                    $messagePlain = "==> Inscrição na Newsletter! Nome: $nomeContato ======== E-mail:  $mailContato";
                    $_SESSION['parceiro'] = ["nomeContato"=>$nomeContato,"empresaContato"=>$empresaContato,"mailContato"=>$mailContato,"cargoContato"=>$cargoContato,"telefoneContato"=>$telefoneContato,"tecatual"=>$tecatual,"numberAgents"=>$numberAgents,"industry"=>$industry,"expecnegocio"=>$expecnegocio,"excpecacordo"=>$excpecacordo,"notes"=>$notes,"nomerep"=>$nomerep,"telefonerep"=>$telefonerep,"emailrep"=>$emailrep];
                    break;
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
                $mail->CharSet = 'UTF-8';
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $messagePlain;

                $mailresult = $mail->Send();

                $_SESSION['mailresult'] = $mailresult;

                switch ($from) {
                    case "contato@nuveto.com.br":
                        $db->contatos($nomeContato,$mailContato,$telefoneContato,$empresaContato,$mensagemContato,true,$mailresult);
                    break;
                    case "newsletter@nuveto.com.br":
                        $db->newsletter($nomeContato,$mailContato,true,$mailresult);
                    break;
                    case "oportunidade@nuveto.com.br":
                        $db->parceiros($nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$nomerep,$emailrep,$telefonerep,true,$mailresult);
                    break;
                }
            }catch (Exception $e) {
                $_SESSION['ErrorInfo'] = $mail->ErrorInfo;
                $db->falha($origem,$nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$mensagemContato,$nomerep,$emailrep,$telefonerep,false,$_SESSION['ErrorInfo']);
            }

            switch ($from) {
                case "contato@nuveto.com.br":
                    header('Location:/?#contato');
                break;
                case "newsletter@nuveto.com.br":
                    header('Location:/?news');
                break;
                case "oportunidade@nuveto.com.br":
                    header('Location:/?news');
                break;
            }
        }

        private function emailParceiro(){
            $from = $_POST['from'];
            $toemail = $_POST['toemail'];
            $subject = $_POST['subject'];
            $nomeContato = $_POST['nome']." ".$_POST['sobrenome'];
            $empresaContato = $_POST['empresa'];
            $mailContato = $_POST['email']; 
            $cargoContato = $_POST['cargo']; 
            $telefoneContato = $_POST['telefone'];
            $tecatual = $_POST['tecatual'];
            $numberAgents = $_POST['numberAgents'];
            $industry = $_POST['industry'];
            $expecnegocio = $_POST['expecnegocio'];
            $excpecacordo = $_POST['excpecacordo'];
            $notes = $_POST['notes'];
            $nomerep = $_POST['nomerep']." ".$_POST['sobrenomerep'];
            $emailrep = $_POST['emailrep'];
            $telefonerep = $_POST['telefonerep'];
            $mensagemContato = $_POST['message'];
            // $arr = $_SESSION['parceiro'];
            $db = new Email();
            // $oportunidade = $db->recuperaOportunidade($mailContato);

            $mail = new PHPMailer(true);
            
            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->IsSMTP();
                $mail->Host = 'relay-hosting.secureserver.net';
                $mail->SMTPAuth = false;

                $mail->setFrom("oportunidade@nuveto.com.br", 'Oportunidade - Nuveto');
                $mail->addAddress($mailContato);
                $mail->AddEmbeddedImage('views/img/Logo Nuveto 2.jpg',"logo-nuveto","logo-nuveto");

                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Confirmação de Registro de Oportunidade | Nuveto';
                $mail->Body    = "<img src='cid:logo-nuveto' style=' width: 100px;height: auto;' alt='Logo Nuveto'><br><br><h1 style='color: darkred;'>Registro de Oportunidade | Nuveto</h1><br><br><p>Obrigado por registrar sua oportunidade de negócio em nome da Nuveto.</p><br><p>Estamos te enviando esse email para confirmar a sua solicitação!</p><br><p>Em breve um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo. Seguem abaixo os dados da sua solicitação:</p><br><br><strong>Nome:</strong> $nomeContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Cargo:</strong> $cargoContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Tecnologia Atual:</strong> $tecatual<br/><strong>Número de Representantes:</strong> $numberAgents<br/><strong>Setor:</strong> $industry<br/><strong>Expectativa de tamanho do Negócio:</strong> $expecnegocio<br/><strong>Expectativa de Finalização do Acordo:</strong> $excpecacordo<br/><strong>Notas sobre a oportunidade:</strong> $notes<br/><strong>Nome Representante:</strong> $nomerep<br/><strong>Telefone Representante:</strong> $telefonerep<br/><strong>Email Representante:</strong> $emailrep<br/><br><p>Se você tiver dúvidas, pode nos contatar através do email <a style='color: darkred;' href='mailto:oportunidade@nuveto.com.br'>oportunidade@nuveto.com.br</a></p><div style='background-color: #242f36;width: 100%;height: 3rem;'></div>";
                $mail->AltBody = "Registro de Oportunidade | Nuveto
                
                Obrigado por registrar sua oportunidade de negócio em nome da Nuveto.
                Estamos te enviando esse email para confirmar a sua solicitação!
                Em breve um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo. Seguem abaixo os dados da sua solicitação:
                
                Nome: $nomeContato
                Empresa: $empresaContato
                E-mail: $mailContato
                Cargo: $cargoContato
                Telefone: $telefoneContato
                Tecnologia Atual: $tecatual
                Número de Representantes: $numberAgents
                Setor: $industry
                Expectativa de tamanho do Negócio: $expecnegocio
                Expectativa de Finalização do Acordo: $excpecacordo
                Notas sobre a oportunidade: $notes
                Nome Representante: $nomerep
                Telefone Representante: $telefonerep
                Email Representante: $emailrep
                
                Se você tiver dúvidas, pode nos contatar através do email oportunidade@nuveto.com.br";

                $mailresult = $mail->Send();

                $_SESSION['mailresult'] = $mailresult;
                $db->parceiros($nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$nomerep,$emailrep,$telefonerep,true,$mailresult);

                // $db->confirmaparceiro($mailContato,$oportunidade->id_parceiro,$oportunidade->enviado,true,$mailresult);
            }catch (Exception $e) {
                $_SESSION['ErrorInfo'] = $mail->ErrorInfo;
                $db->falha('Confirmação',$nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$mensagemContato,$nomerep,$emailrep,$telefonerep,false,$_SESSION['ErrorInfo']);
            }
            unset($_SESSION['parceiro']);
            header('Location:/?parceiro');
        }
    }
?>