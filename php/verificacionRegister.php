<?php
include("conexion.php");

if(isset($_POST['password']) && isset($_POST['username'])&&isset($_POST['fullname']) && isset($_POST['email'])&& isset($_POST['password1']) ){
    if($_POST['password'] == $_POST['password1']){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $fullname=$_POST['fullname'];
        #verificamos las pass
        $sql=$conexion->query("insert into user (nombreUsuario,correo,contrasena,nombreCompleto,estado)
        value ('$username','$email','$password','$fullname',1);");
        #echo "registro exitoso";
        echo "<script> window.location.href='login.php' </script>";
    }else{
        echo "<div class='alert alert-warning' role='alert'>
                        Las contraseñas no coinciden
                      </div>";
    }
    
}   
?>