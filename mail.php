<?php
require 'lib/mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->SMTPAuth = true;
$mail->Username = 'symerizer@gmail.com';
$mail->Password = 'thefi50cs';
$mail->SMTPSecure = 'ssl';
$mail->FromName = 'SymerWeb.com';
$mail->From = $_POST['address'];
$mail->addAddress('contact@symerweb.com', 'Simon Mercier');
$mail->Subject = $_POST['subject'];
$mail->Body    = 'Nouveau message de la part de : '.$mail->From.' et le message est : '.$_POST['body'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
else
    echo $locale['TXT_MAIL_SENT'];