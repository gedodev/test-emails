<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

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

$mail->Username = "veganico.info@gmail.com";
$mail->Password = "V3g4N1c0";

$mail->setFrom($email, $name);
$mail->addAddress("gdorta.wd@gmail.com", "German");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");