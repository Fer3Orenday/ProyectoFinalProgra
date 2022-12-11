<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .imagen:hover {filter: opacity(.5);}
        .imagen{
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
<?php
  include_once("encabezado.php");
  include_once("conexion.php");
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <select name="muestra" id="">
                <option value="todos">todos</option>
                <?php
                $con="SELECT categoria from productos GROUP by categoria";
                $resultado = $conexion->query($con);
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option  value=".$fila["categoria"].">".$fila["categoria"]."</option>";          
                }
                ?> 
        </select>  
        <input type="submit" value="Buscar">
</form>
<section class="container">
        <div class="products">
            <?php
                if (isset($_REQUEST['cam'])){
                    //echo $_POST['id'];
                    array_push($_SESSION['productos'],$_POST['id']);
                    array_push($_SESSION['precios'],$_POST['precio']);
                    $_SESSION['total']+=$_POST['precio'];
                    //var_dump($_SESSION['productos']);
                    //echo "<br>";
                    //var_dump($_SESSION['precios']);
                    //echo "<br>";
                    //echo $_SESSION['total'];
                }  
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
                $i=0;
                /*
                $_SESSION['productos'] = array();
$_SESSION['total'];
$_SESSION['precios']=array();
                 */
                //print_r($_SESSION['productos']);
                //print_r($_SESSION['precios']);
                //echo $_SESSION['total'];
                while ($fila = $resultado->fetch_assoc()) {
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