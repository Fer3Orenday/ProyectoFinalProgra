<?php

$mensaje = 'Tu Ticket de Compra es: \r\n'; 

$array_num = count($_SESSION['productos']);
for ($i = 0; $i < $array_num; $i++){
   
    $con = 'select * from productos where idProd='.$_SESSION['productos'][$i];
    //echo "<script>alert(".$con.")</script>";
    $resultado = $conexion->query($con);
    while ($fila = $resultado->fetch_assoc()) {
       $existencia=$fila['existencia'];
       $idprod=$fila['idProd'];
       if($idprod>0){
           $sql=$conexion->query("UPDATE productos set existencia=$existencia-1 where idProd=$idprod");
       }
        echo '
        <div class="row">
        <div class="col"><p>'.$fila['idProd'].'</p></div>
        <div class="col"><p>'.$fila['nombre'].'</p></div>
        <div class="col"><p>'.$_SESSION['precios'][$i].'</p></div>
       </div>';

       $mensaje .= $fila['idProd'] ."\r";
       $mensaje .= $fila['nombre']. "\r";
       $mensaje .= $_SESSION['precio'][$i]. "\r\n";

    }
}

$mail = $_SESSION['mail'];

$total = $_SESSION['total'];
$IVA = $total * 1.16;
if(!empty($_SESSION['desc'])){
    $descuento = $IVA-($IVA*$_SESSION['desc']);
    $envio= $descuento+$_SESSION['envio'];
    $mensaje .= "Con descuento " . $descuento . " \r\n";
}else{
    $envio= $IVA+$_SESSION['envio'];
}
if($_SESSION['oxxo'] == 1){
    $tipo = "OXXO";
}else{
    $tipo = "TARJETA";
}

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html;charset=UTF-8";

$mensaje .= "Su total es: " . $total . ",\r\n";
$mensaje .= "Con IVA: " . $IVA . " \r\n";
$mensaje .= "Con Envio: " . $_SESSION['desc']. "\r\n";
$mensaje .= "Pago con: " . $tipo . "\r\n";

$para = 'wweemi@hotmail.com';
$asunto = 'contacto';

//mail($para, $asunto, utf8_decode($mensaje));
//$msg2= 'Seran atendidos a la brevevad Gracias Por ser parte de la comunidad';
mail($mail, $asunto, utf8_decode($mensaje), $header);

header("Location:inicio.php");
?>