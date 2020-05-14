<?php
    session_start();

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
            // use PHPMailer\PHPMailer\PHPMailer;
            // use PHPMailer\PHPMailer\SMTP;
            // use PHPMailer\PHPMailer\Exception;

            // require 'views/PHPMailer/src/Exception.php';
            // require 'views/PHPMailer/src/PHPMailer.php';
            // require 'views/PHPMailer/src/SMTP.php';
        }
    }
?>