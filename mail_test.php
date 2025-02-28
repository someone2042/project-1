<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mehdaoui200309@gmail.com';
    $mail->Password = 'flkjkjljwayhzssa';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom('mehdaoui200309@gmail.com', 'Mohamed');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->isHTML(true);
    $mail->Subject = 'Test Email via PHPMailer';
    $mail->Body = 'Ceci est un test d\'envoi d\'e-mail via PHPMailer avec SMTP.';
    $mail->send();
    echo 'E-mail envoyé avec succès !';
} catch (Exception $e) {
    echo "L'e-mail n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
}
