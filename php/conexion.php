<?php
###Conexion a la base de datos
 $servidor='localhost:33065';
 $cuenta='root';
 $password='';
 $bd='usuario';
  
 //conexion a la base de datos
 $conexion = new mysqli($servidor,$cuenta,$password,$bd);

 if ($conexion->connect_errno){
      die('Error en la conexion');
 }
?>