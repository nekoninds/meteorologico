<?php
require 'vendor/autoload.php';
if ($_SERVER['ŔEQUEST_METHOD'] == 'POST')
{
$from = new SendGrid\Email(null, "echo $_POST["email"];");
$subject = "envio desde contacto";
$to = new SendGrid\Email(null, "hector.m.rm@hotmail.com");
$content = new SendGrid\Content("text/plain", "echo $_POST["msj"];");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = "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";
$sg = new \SendGrid($apiKey);
$sg->client->mail()->send()->post($mail);

echo "<script>
	alert('correo enviado');
	window.location.href='contact.php';
	</script>";
}
?>
