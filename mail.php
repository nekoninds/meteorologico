<?php
require 'vendor/autoload.php';


$from = new SendGrid\Email(null, "support@tlaloc.com");
$subject = "Cambio de Temperatura";
$to = new SendGrid\Email(null, "hector.m.rm@hotmail.com");
$content = new SendGrid\Content("text/plain", "Cambio la temperatura de Colima de 28 grados a un chingo");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = "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";
$sg = new \SendGrid($apiKey);
$sg->client->mail()->send()->post($mail);
?>
