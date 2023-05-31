<?php
   $name="karthik";
   $email="karthikkarthi3815@gmail.com";
   $subject="its just sample";
   $messege="Hii guys,I send mail using php";

   require "vendor/autoload.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;

   $mail=new PHPMailer(true);

   $mail->SMTPDebug=SMTP::DEBUG_SERVER;

   $mail->isSMTP();
   $mail->SMTPAuth=true;
   
   $mail->host="smtp.example.com";
   $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
   $mail->port=587;

   $mail->username="karthik767666@gmail.com";
   $mail->$PassWord="Karthik@2002";

   $mail->setFrom($email,$name);
   $mail->addAddress("karthikkarthi3815@gmail.com","kar");

   $mail->subject=$subject;
   $mail->body=$messege;

   $mail->send();

   echo("email sent");
?>