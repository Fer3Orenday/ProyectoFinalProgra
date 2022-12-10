<?php
    include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <style>
        .imagen:hover {filter: opacity(.5);}
    </style>
</head>
<body style="background: rgb(98, 98, 234);">     
    <?php
$sql = 'select * from productos';
$resultado = $conexion -> query($sql);
        $numPro = 0;
    ?>
    <script> var array=[];</script>
    <?php
        $proxfi=3;$con=0;$tot=0;
        echo "<div class='card-group'>";
        while( $fila = $resultado ->  fetch_assoc()){
            
            $imagen = $fila['imagen'];
            $producto = $fila['nombre'];
            $precio = $fila['precio'];
            //echo $con;
            if($con==$proxfi){
                $con=-1;
                //echo "salto";
                echo "</div>";
                echo "<div class='card-group'>";
            }
            
    ?>
        <script>
        array.push("<?php echo $producto ?>");
        
        </script>
        <div class="card p-3,p-3 mb-2 bg-secondary text-white" class="" >
            <img src="../imagenes/<?php echo $imagen ?>" class="card-img-top, imagen" style=""alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
                <p class="card-text"><?php echo $fila['descripcion']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $fila['existencia']; ?></li>
                <li class="list-group-item"> 
                 <?php
                 $total=0;
                   if(rand(1,100)<50){
                        echo"<p style='color: blue; text-decoration:line-through; font-weight: bold;font-weight: 900;font-size: xx-large;'>";
                        echo $fila['precio']." </p>";
                        $des=rand(10,30);
                        $total=$fila['precio']*((100-$des)/100);
                        echo "<p>OFERTA DEL ".$des."%  EL NUEVO PRECIO ES: ".$total;
                    }else{
                        $total=$fila['precio'];
                    echo"<p >";
                    echo $fila['precio']." </p>";
                   }
                 ?>
                
                </li>
                <li class="list-group-item"><?php echo $fila['categoria']; ?></li>
            </ul>
            <div class="card-body">
                <button id="<?php echo $numPro ?>" name="<?php echo $total ?>" onclick="agregar(this.id,this.name)">
                    <img class="img-fluid" src="../imagenes/carrito.jpg" alt="" width="100" height="100">
                </button>
            </div>
        </div>
    <?php
            $numPro = $numPro+1;
            $con++;
            $tot++;
        }//fin while
        if($tot%$proxfi==0){
            echo "</div>";

        }
    ?>

    <script>
        console.log(array);    
        var carrito=[], ine=0;
        function agregar(id, precio){
            var indice = parseInt(id);
            carrito[ine]=array[indice]+" precio: "+precio;
            ine++;
            console.log(`Elegiste ${array[indice]}`);  
            console.log("el precio es "+precio);     
            console.log("total de cosas: "+carrito);
        }
        
    </script>
<a href="../index.php" style="color: red;">VOLVER A ABC</a>

</body>
</html>