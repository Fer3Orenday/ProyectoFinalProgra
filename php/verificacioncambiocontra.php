<?php
include("conexion.php");
if(isset($_POST['nombre'])&&isset($_POST['email'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['email'];
    #verificamos si usuario y correo son correctos
    $sql=$conexion->query("select * from user where nombreCompleto='$nombre' and correo='$correo'");
    if($datos=$sql->fetch_object()){ # si el usuario y pass son correctos te manda a otra pagina
        echo "<script>  
        document.changepass.submit(); 
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