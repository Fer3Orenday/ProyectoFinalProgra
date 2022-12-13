<?php

session_start();

$C = $_SESSION['mail'];


$img = '<h1> Nota de Compra </h1>';
$img .= '<h2> Aqui tienes tu Nota de Compra </h2>';
$img .= '<h3>  </h3>';

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html;charset=UTF-8";

$mensaje .= "Su e-mail es: " . $C . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'wweemi@hotmail.com';
$asunto = 'contacto';

mail($para, $asunto, utf8_decode($mensaje));
mail($mail, $asunto, utf8_decode($img), $header);

header("Location:Suscripcion.php");
?>