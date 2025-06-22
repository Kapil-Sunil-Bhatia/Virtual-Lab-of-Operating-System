<?php
require 'class.phpmailer.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 25;
$mail->Host ='localhost';
$mail->IsHTML(true);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";

//Sender Info
$mail->From = "";
$mail->FromName = "K J Somaiya Institute of Technology";
