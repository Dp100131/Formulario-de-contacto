<?php

require("../vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = true){

    // COnfiguración inicial del servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'danielandrespintoortega21212@gmail.com';
    $phpmailer->Password = 'jvvyvoumxmhebtbt';

    //Añadiendo destinatarios
    $phpmailer->setFrom('danielandrespintoortega21212@gmail.com', 'Daniel Pinto');
    $phpmailer->addAddress($email, $name);

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //Mandar el correo
    $phpmailer->send();

}

?>