<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-relay.gmail.com;smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vocacionesdelpilar@gmail.com';                 // SMTP username
    $mail->Password = 'MadreEsperanza';                           // SMTP password
    $mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vocacionesdelpilar@gmail.com', 'Mailer');
    $mail->addAddress('vocacionesdelpilar@gmail.com', 'Mailer');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Enviado desde Misioneras del Pilar';
    $mail->Body    = 'Misioneras <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'ok';
} catch (Exception $e) {
    echo 'error ', $mail->ErrorInfo;
}