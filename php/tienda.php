<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    <style>
        .imagen:hover {filter: opacity(.5);}
        .imagen{
            width: 300px;
            height: 300px;
        }
        .tiendaa{
            font-family: 'Dangrek', cursive;
            font-size: 20px; padding-left: 20px;
            background-color: rgb(217, 217, 235);

        }
    </style>
</head>
<body>
<?php
session_start();
include_once("conexion.php");
if (isset($_REQUEST['cam'])){
    //echo $_POST['id'];
    $con = 'select * from productos where idProd="'.$_POST['id'].'"';  
    $resultado = $conexion->query($con);
    $exi=0;$cexi=0;
    while ($fila = $resultado->fetch_assoc()) {
        $exi=$fila['existencia'];
    }
    foreach($_SESSION['productos'] as $valor){
        if($valor==$_POST['id']){
            $cexi++;
        }
    }
    if($exi>$cexi){
        $_SESSION['cuantos']++;
        array_push($_SESSION['productos'],$_POST['id']);
        array_push($_SESSION['precios'],$_POST['precio']);
        $_SESSION['total']+=$_POST['precio'];
    }else{
        echo "<script> alert('existencia sobre pasada'); </script>";
    }


      
    

}  
if(empty($_SESSION['usuario'])) {
    include_once("encabezado.php");
}else{
    if($_SESSION['usuario']=="Admin"){
        include_once("encabezadoAdmin.php");
    }else{
        include_once("encabezado.php");
    }
}

  
  
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <select name="muestra"  >
                <option style="font-family: 'Dangrek', cursive; font-size: 20px; padding-left: 20px; background-color: rgb(217, 217, 235);" value="todos">todos</option>
                <?php
                $con="SELECT categoria from productos GROUP by categoria";
                $resultado = $conexion->query($con);
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option  class='tiendaa' value=".$fila["categoria"].">".$fila["categoria"]."</option>";          
                }
                ?> 
        </select>  
        <input style="background-color: rgb(171, 171, 218) ; padding-left: 5px; padding-right: 5px; border-radius: 20px;" type="submit" value="Buscar">
</form>
<section class="container">
        <div class="products">
            <?php
                
                if(!isset($_POST['muestra'])){
                    $con = 'select * from productos ';
                }else{
                    if($_POST['muestra']=="todos"){
                        $con = 'select * from productos ';
                    }else{
                        $con = 'select * from productos where categoria="'.$_POST['muestra'].'"';
                    }
                    
                }
                $resultado = $conexion->query($con);
                while ($fila = $resultado->fetch_assoc()) {
                    $sql = 'select descuento from productos where idProd='.$fila['idProd'];
                    $hola = $conexionaux->query($sql);
                    //echo $sql;
                    while ($fil = $hola->fetch_assoc()) {
                    if($fil['descuento']==0){
                        echo '
                        <form action="'.$_SERVER["PHP_SELF"].'" method="post"  enctype="multipart/form-data">
                           <div class="carts">
                                <div>
                                    <input type="hidden" name="id" id="id" placeholder="id" value="'.$fila['idProd'].'"  >
                                    <input type="hidden" name="precio" id="precio" placeholder="precio" value="'.$fila['precio'].'"  >
                                    <img class="imagen" src="../imagenes/'.$fila["imagen"].'" alt="">
                                    <p><span>'.$fila["precio"].'</span>$</p>
                                </div>
                                <p class="title"> NOMBRE: '.$fila["nombre"]." </br> DESCRIPCION: ".$fila["descripcion"]."</br>  EXISTENCIA:".$fila["existencia"].'</p>
                                <button type="submit" name="cam" class="btn btn-success">/ (agregar al carrito)</button>
                                
                            </div>
                         </form>   
                       
                           ';
                    }else{
                        $descuento=$fil['descuento'];
                        $resta=($fila['precio']*$descuento)/100;
                        $nuevo_precio=$fila['precio']-$resta;
                        echo '
                        <form action="'.$_SERVER["PHP_SELF"].'" method="post"  enctype="multipart/form-data">
                           <div class="carts">
                                <div>
                                    <input type="hidden" name="id" id="id" placeholder="id" value="'.$fila['idProd'].'"  >
                                    <input type="hidden" name="precio" id="precio" placeholder="precio" value="'.$nuevo_precio.'"  >
                                    <img class="imagen" src="../imagenes/'.$fila["imagen"].'" alt="">
                                    <p><span>'."Precio Antes: ".$fila["precio"]."<br>Precio Nuevo: ".$nuevo_precio.'</span>$</p>
                                </div>
                                <p class="title"> NOMBRE: '.$fila["nombre"]." </br> DESCRIPCION: ".$fila["descripcion"]."</br>  EXISTENCIA:".$fila["existencia"].'</p>
                                <button type="submit" name="cam" class="btn btn-success">/ (agregar al carrito)</button>
                                
                            </div>
                         </form>   
                       
                           ';

                    }
                }
                    
                       
                }
            ?> 
        </div>
    </section>
    <script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }

    </script>
    
    
</body>

</html>