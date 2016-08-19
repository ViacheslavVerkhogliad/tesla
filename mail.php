<?php

$frm_name  = "Youname"
$recepient = "vkgroupcompany@gmail.com";
$sitename  = "Tesla";
$subject   = "new question or comment \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["message"]);
$message = "E-mail: $email \n Name: $name \n Phone: $phone \n Message: $message";
mail($recepient, $subject, $message,
    "From: $frm_name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html;
     charset=\"utf-8\"");
