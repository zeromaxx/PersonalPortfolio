<?php

$name = $_POST["name"];
$email = 'zero@yahoo.com';
$message = $_POST["message"];
$subject = "Hello World";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "finalproject20001@gmail.com";
$mail->Password = "lmnanzdhnmlnzzpl";

$mail->setFrom($email, $name);
$mail->addAddress("zeromixer2010@yahoo.com", "Aris");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
