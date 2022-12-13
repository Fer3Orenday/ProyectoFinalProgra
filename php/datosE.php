<?php 
session_start();

$envio = $_POST['envio'];

//$_SESSION['cupo'] = $cupon;
$_SESSION['envio'] = $envio;

echo '<script type="text/javascript">
window.location.href = "notaFinal.php";
</script>'
?>