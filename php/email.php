<?php
$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$mail = $_POST['email'];
$mensaje = $_POST['msg'];

echo $nombre;

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['msg'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'wweemi@hotmail.com';
$asunto = 'contacto';

mail($para, $asunto, utf8_decode($mensaje));
$msg2= 'Seran atendidos a la brevevad Gracias Por ser parte de la comunidad';
mail($mail, $asunto, utf8_decode($msg2), $header);

header("Location:ContactoJ.php");
?>