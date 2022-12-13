<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'tienda';
$conexion = new mysqli($servidor,$cuenta,$password,$bd);
$conexionaux = new mysqli($servidor,$cuenta,$password,$bd);
if ($conexion->connect_errno) {
  die('Error en la conexion');
}



?>