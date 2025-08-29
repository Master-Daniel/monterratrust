<?php

require_once('core/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;

// $mail = new PHPMailer(true);

// $mail->isSMTP();
// $mail->Host       = "mail.elitecodec.com.ng;lim114.truehost.cloud";
// $mail->SMTPAuth   = true;
// $mail->Username   = "no-reply@spinvantage.com";
// $mail->Password   = "jLm3tpJBt0Tr";
// $mail->SMTPSecure = 'tls';
// $mail->Port       = 587;
// $mail->SMTPDebug    = 3;

// $mail->setFrom('no-reply@spinvantage.com', 'SpinVantage');
// $mail->addAddress('engrdanywiss@gmail.com');

// // Email content
// $mail->isHTML(false);
// $mail->Subject = 'Email Verification';
// $mail->Body    = "Hello word";

// if (!$mail->send()) {
//     echo "Message could not be sent Mailer Error: " . $mail->ErrorInfo;
// } else {
//     echo "Message has been sent";
// }

$mail = new PHPMailer;
$mail->SMTPDebug = 3; // Enable verbose debug output

$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = "mail.spinvantage.com"; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = "no-reply@spinvantage.com"; // SMTP username
$mail->Password = "_BTZ&0?Xz1C="; // SMTP password
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, ssl also accepted
$mail->Port = 465; // TCP port to connect to (or 25 for non-secure)

$mail->setFrom("no-reply@spinvantage.com", 'Mailer');
$mail->addAddress('engrdanywiss@gmail.com', 'Joe User'); 
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

