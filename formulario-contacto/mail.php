<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;



function sendMail($subject, $body, $email, $name, $html)
{

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '53a6c9f3ae40b1';
    $phpmailer->Password = '0cf39e10733401';

    //Recipients
    $phpmailer->setFrom('contact@miempresa.com', 'Mi Empresa');
    $phpmailer->addAddress($email, $name);     //Add a recipient

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = 'Here is the subject';
    $phpmailer->Body    = $body;

    //Mandar correo

    $phpmailer->send();

}
