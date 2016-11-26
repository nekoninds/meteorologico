<?php
require 'vendor/autoload.php';


$from = new SendGrid\Email(null, "test@example.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "mumo.crls@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = "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";
echo $apiKey;
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
?>
