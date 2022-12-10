<?php
include("conexion.php");
if(isset($_POST['pold'])&&isset($_POST['pnew'])&&isset($_POST['user'])){
    $pold=$_POST['pold'];
    $pnew=$_POST['pnew'];
    $poldmod=md5($pold);
    $user=$_POST['user'];
    #verificamos si usuario y correo son correctos
    $sql=$conexion->query("select * from user where nombreUsuario='$user' and contrasena='$poldmod'");
    if($datos=$sql->fetch_object()){ # si el usuario y pass son correctos te manda a otra pagina
        $sql=$conexion->query("UPDATE user
        SET contrasena = '".md5($pnew)."'
        WHERE nombreUsuario ='".$_POST['user']."' and contrasena='$poldmod'");
        echo "<script> 
        document.resetpass.submit(); 
        </script> ";
    }else{
        echo "<div class='alert alert-danger' role='alert'>
        Ingresa correctamente tus datos
        </div>";
    }
}else{
    die();

}
    ?>