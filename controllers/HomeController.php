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
                case "news":
                    $this->viewNews();
                break;
                case "parceiro":
                    $this->viewParceiro();
                break;
                case "email":
                    $this->envioEmail();
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
            $from = (isset($_POST['from'])) ? $_POST['from']: "";
            $toemail = (isset($_POST['toemail'])) ? $_POST['toemail']: "";
            $subject = (isset($_POST['subject'])) ? $_POST['subject']: "";
            $nomeContato = (isset($_POST['sobrenome'])) ? ($_POST['nome']." ".$_POST['sobrenome']) : $_POST['nome'];
            $empresaContato = (isset($_POST['empresa'])) ? $_POST['empresa']: "";
            $mailContato = (isset($_POST['email'])) ? $_POST['email']: "";
            $cargoContato = (isset($_POST['cargo'])) ? $_POST['cargo']: "";
            $telefoneContato = (isset($_POST['telefone'])) ? $_POST['telefone']: "";
            $tecatual = (isset($_POST['tecatual'])) ? $_POST['tecatual']: "";
            $numberAgents = (isset($_POST['numberAgents'])) ? $_POST['numberAgents']: "";
            $industry = (isset($_POST['industry'])) ? $_POST['industry']: "";
            $expecnegocio = (isset($_POST['expecnegocio'])) ? $_POST['expecnegocio']: "";
            $excpecacordo = (isset($_POST['excpecacordo'])) ? $_POST['excpecacordo']: "";
            $notes = (isset($_POST['notes'])) ? $_POST['notes']: "";
            $nomerep = (isset($_POST['sobrenomerep'])) ? ($_POST['nomerep']." ".$_POST['sobrenomerep']) : $_POST['nomerep'];
            $emailrep = (isset($_POST['emailrep'])) ? $_POST['emailrep']: "";
            $telefonerep = (isset($_POST['telefonerep'])) ? $_POST['telefonerep']: "";
            $mensagemContato = (isset($_POST['message'])) ? $_POST['message']: "";

            $db = new Email();
            
            switch ($from) {
                case "contato@nuveto.com.br":
                    $nameFrom = 'Contato - Nuveto';
                    $origem = "Contato";
                    $message = "<img src='cid:logo-nuveto' style=' width: 200px;height: auto;' alt='Logo Nuveto'><br><br><h1 style='color: darkred;'>Recebemos uma mensagem no site!</h1><br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>Mensagem:</strong> $mensagemContato<br><br><div style='background-color: #242f36;width: 100%;height: 3rem;'></div>";
                    $messagePlain = "==> Recebemos uma mensagem no site! Nome: $nomeContato ======== E-mail:  $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato ======== Mensagem:$mensagemContato";
                break;
                case "newsletter@nuveto.com.br":
                    $nameFrom = 'Newsletter - Nuveto';
                    $origem = "Newsletter";
                    $message = "<img src='cid:logo-nuveto' style=' width: 200px;height: auto;' alt='Logo Nuveto'><br><br><h1 style='color: darkred;'>Inscrição na Newsletter!</h1><br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br><br><div style='background-color: #242f36;width: 100%;height: 3rem;'></div>";
                    $messagePlain = "==> Inscrição na Newsletter! Nome: $nomeContato ======== E-mail:  $mailContato";
                break;
                case "oportunidade@nuveto.com.br":
                    $nameFrom = 'Oportunidade - Nuveto';
                    $origem = "Oportunidade";
                    $message = "<img src='cid:logo-nuveto' style=' width: 200px;height: auto;' alt='Logo Nuveto'><br><br><h1 style='color: darkred;'>Oportunidade de Parceiro!</h1><br><br><strong>Nome:</strong> $nomeContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Cargo:</strong> $cargoContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Tecnologia Atual:</strong> $tecatual<br/><strong>Número de Representantes:</strong> $numberAgents<br/><strong>Setor:</strong> $industry<br/><strong>Expectativa de tamanho do Negócio:</strong> $expecnegocio<br/><strong>Expectativa de Finalização do Acordo:</strong> $excpecacordo<br/><strong>Notas sobre a oportunidade:</strong> $notes<br/><strong>Nome Representante:</strong> $nomerep<br/><strong>Telefone Representante:</strong> $telefonerep<br/><strong>Email Representante:</strong> $emailrep<br><br><div style='background-color: #242f36;width: 100%;height: 3rem;'></div>";
                    $messagePlain = "==> Oportunidade de Parceiro! Nome: $nomeContato ========= Empresa: $empresaContato ========= E-mail: $mailContato ========= Cargo: $cargoContato ========= Telefone: $telefoneContato ========= Tecnologia Atual: $tecatual ========= Número de Representantes: $numberAgents ========= Setor: $industry ========= Expectativa de tamanho do Negócio: $expecnegocio ========= Expectativa de Finalização do Acordo: $excpecacordo ========= Notas sobre a oportunidade: $notes ========= Nome Representante: $nomerep ========= Telefone Representante: $telefonerep ========= Email Representante: $emailrep";
                    $_SESSION['parceiro'] = ["nomeContato"=>$nomeContato,"empresaContato"=>$empresaContato,"mailContato"=>$mailContato,"cargoContato"=>$cargoContato,"telefoneContato"=>$telefoneContato,"tecatual"=>$tecatual,"numberAgents"=>$numberAgents,"industry"=>$industry,"expecnegocio"=>$expecnegocio,"excpecacordo"=>$excpecacordo,"notes"=>$notes,"nomerep"=>$nomerep,"telefonerep"=>$telefonerep,"emailrep"=>$emailrep];
                break;
                case "confirmacao@nuveto.com.br":
                    $nameFrom = 'Oportunidade - Nuveto';
                    $origem = "Confirmação";
                    $message = "<img src='cid:logo-nuveto' style=' width: 200px;height: auto;' alt='Logo Nuveto'><br><br><h1 style='color: darkred;'>Registro de Oportunidade | Nuveto</h1><br><br><p>Obrigado por registrar sua oportunidade de negócio em nome da Nuveto.</p><br><p>Estamos te enviando esse email para confirmar a sua solicitação!</p><br><p>Em breve um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo. Seguem abaixo os dados da sua solicitação:</p><br><br><strong>Nome:</strong> $nomeContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Cargo:</strong> $cargoContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Tecnologia Atual:</strong> $tecatual<br/><strong>Posições de Atendimento:</strong> $numberAgents<br/><strong>Setor:</strong> $industry<br/><strong>Valor estimado:</strong> $expecnegocio<br/><strong>Data estimada do Fechamento:</strong> $excpecacordo<br/><strong>Notas sobre a oportunidade:</strong> $notes<br/><strong>Nome Representante:</strong> $nomerep<br/><strong>Telefone Representante:</strong> $telefonerep<br/><strong>Email Representante:</strong> $emailrep<br/><br><p>Se você tiver dúvidas, pode nos contatar através do email <a style='color: darkred;' href='mailto:oportunidade@nuveto.com.br'>oportunidade@nuveto.com.br</a></p><div style='background-color: #242f36;width: 100%;height: 3rem;'></div>";
                    $messagePlain = "Registro de Oportunidade | Nuveto
                    Obrigado por registrar sua oportunidade de negócio em nome da Nuveto.
                    Estamos te enviando esse email para confirmar a sua solicitação! Em breve um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo.
                    Seguem abaixo os dados da sua solicitação:
                    
                    Nome: $nomeContato
                    Empresa: $empresaContato
                    E-mail: $mailContato
                    Cargo: $cargoContato
                    Telefone: $telefoneContato
                    Tecnologia Atual: $tecatual
                    Posições de Atendimento: $numberAgents
                    Setor: $industry
                    Valor estimado: $expecnegocio
                    Data estimada do Fechamento: $excpecacordo
                    Notas sobre a oportunidade: $notes
                    Nome Representante: $nomerep
                    Telefone Representante: $telefonerep
                    Email Representante: $emailrep
                    
                    Se você tiver dúvidas, pode nos contatar através do email oportunidade@nuveto.com.br";
                break;
            }

            $mail = new PHPMailer(true);
            
            try {
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->IsSMTP();
                $mail->Host = 'relay-hosting.secureserver.net';
                $mail->SMTPAuth = false;

                $mail->setFrom($from, $nameFrom);
                $mail->addAddress($toemail);
                $mail->AddEmbeddedImage('views/img/Logo Nuveto 2.jpg',"logo-nuveto","logo-nuveto");

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
                    case "confirmacao@nuveto.com.br":
                        $db->confirmaparceiro($nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$nomerep,$emailrep,$telefonerep,true,$mailresult);
                    break;
                }
            }catch (Exception $e) {
                $_SESSION['ErrorInfo'] = $mail->ErrorInfo;
                $db->falha($origem,$nomeContato,$empresaContato,$mailContato,$cargoContato,$telefoneContato,$tecatual,$numberAgents,$industry,$expecnegocio,$excpecacordo,$notes,$mensagemContato,$nomerep,$emailrep,$telefonerep,false,$_SESSION['ErrorInfo']);
            }

            switch ($from) {
                case "contato@nuveto.com.br":
                    echo "<script>window.location.href = '/?#contato';</script>";
                break;
                case "newsletter@nuveto.com.br":
                    echo "<script>window.location.href = '/?news';</script>";
                break;
                case "oportunidade@nuveto.com.br":
                    echo "<script>window.location.href = '/?parceiro';</script>";
                break;
                case "confirmacao@nuveto.com.br":
                    unset($_SESSION['parceiro']);
                    unset($_SESSION['mailresult']);
                    unset($_SESSION['ErrorInfo']);
                    echo "<script>window.location.href = '/?parceiro';</script>";
                break;
            }
        }
    }
?>