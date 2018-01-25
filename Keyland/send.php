<?php 

$recepient = "Alizequeen@yandex.ru";
$sitename = "Keyland";

$name = trim($_POST["fn"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $email \nText: $text"; 

$pagetitle = "New message from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset =\"utf-8\"\n From: $recepient");
