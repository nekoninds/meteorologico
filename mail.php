<?php
require 'vendor/autoload.php';


$from = new SendGrid\Email(null, "<?php echo $_POST["email"]; ?>");
$subject = "Cambio de Temperatura";
$to = new SendGrid\Email(null, "hector.m.rm@hotmail.com");
$content = new SendGrid\Content("text/plain", "<?php echo $_POST["msj"]; ?>");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = "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";
$sg = new \SendGrid($apiKey);
$sg->client->mail()->send()->post($mail);
?>
