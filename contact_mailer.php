<?php
  require 'vendor/autoload.php';


  $from = new SendGrid\Email(null, $_POST["email"]);
  $subject = "Contacto: " . $_POST["name"];
  $to = new SendGrid\Email(null, "tlaloc.meteorologico@gmail.com");
  $content = new SendGrid\Content("text/plain", $_POST["message"]);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);

  $apiKey = "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";
  $sg = new \SendGrid($apiKey);
  $sg->client->mail()->send()->post($mail);
  
?>
