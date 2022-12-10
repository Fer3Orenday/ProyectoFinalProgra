<?php

$img = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la cominudad</h1>
    <h2>Aqui tienes un codigo de descuento</h2>
    <img src="https://files.000webhost.com//public_html/imagenescontacto/emi.png" alt="">
</body>
</html>';

$mail = $_POST['email'];

$img = '<h1> Gracias Por Formar Parte de nuestra Comunidad</h1>';
$img .= '<h2> Aqui tienes un Cupon de Descuento: </h2>';
$img .= '<h3 style="color:red"> NUEVOUS15 </h3>';

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html;charset=UTF-8";

$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'wweemi@hotmail.com';
$asunto = 'contacto';

mail($para, $asunto, utf8_decode($mensaje));
mail($mail, $asunto, utf8_decode($img), $header);

header("Location:Suscripcion.php");
?>