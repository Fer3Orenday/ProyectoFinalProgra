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
                while ($fila = $resultado->fetch_assoc()) {
                    if(rand(0, 100)>50){
                        echo '
                       <div class="carts">
                            <div>
                                <img class="imagen" src="../imagenes/'.$fila["imagen"].'" alt="">
                                <p><span>'.$fila["precio"].'</span>$</p>
                            </div>
                            <p class="title"> NOMBRE: '.$fila["nombre"]." </br> DESCRIPCION: ".$fila["descripcion"]."</br>  EXISTENCIA:".$fila["existencia"].'</p>
                            <a href="" data-id="'.$i.'" class="btn-add-cart">add to cart</a>
                        </div>    
                       ';
                    }else{
                        $des=rand(10, 25);
                        $nuevo=($des*$fila["precio"])/100;
                        $pre=$fila["precio"]-$nuevo;
                        
                        echo '
                        <div class="carts">
                             <div>
                                 <img class="imagen" src="../imagenes/'.$fila["imagen"].'" alt="">
                                 <p><span>'.$pre.'</span>$</p>
                             </div>
                             <p class="title"> NOMBRE: '.$fila["nombre"]." </br> DESCRIPCION: ".$fila["descripcion"]."</br> DESCUENTO:".$des." </br>  PRECIO:".$fila["precio"]." </br>  NUEVO PRECIO:".$pre."</br>  EXISTENCIA:".$fila["existencia"].'</p>
                             <a href="" data-id="'.$i.'" class="btn-add-cart">add to cart</a>
                         </div>    
                        ';
                    }
                    $i++;
                       
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
    <script src="../js/custom.js" ></script>
</body>

</html>