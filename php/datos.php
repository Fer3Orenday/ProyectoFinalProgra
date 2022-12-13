<?php

session_start();

$name = $_POST['first-name'];
$mensaje = $_POST['streetaddress'];
$mail = $_POST['email'];
$cupon = $_POST['cupon'];

$_SESSION['name'] = $name;
$_SESSION['addres'] = $mensaje;
$_SESSION['mail'] = $mail;
$_SESSION['cupo'] = $cupon;

if($_SESSION['cupo'] == "029488921219"){
    $_SESSION['desc'] = 0.20;
}
if($_SESSION['cupo'] == "19030758021102"){
    $_SESSION['desc'] = 0.25;
}
if($_SESSION['cupo'] == "NUEVOU50"){
    $desc =  0.50;
    $_SESSION['desc'] = $desc;
}


echo '<script type="text/javascript">
window.location.href = "metodopago.php";
</script>'
//header("Location: Tarjeta.php");
?>