<?php
 include_once("conexion.php");
 include_once("encabezado.php");
 //eliminar
 if (isset($_REQUEST['Eliminar'])){
    echo" ";
    //echo "elimina".$_POST['username'];
    $imagen="SELECT imagen FROM productos WHERE idProd=".$_POST['username'];
    $resultado=$conexion->query($imagen);
    while ($fila = $resultado->fetch_assoc()) { 
        if(unlink("imagenes/".$fila['imagen'])){
            //echo "sii";
        }
    }
    //unlink('/home/tutsplus/files/tmp.txt')
    $sql = "DELETE FROM productos WHERE idProd=".$_POST['username'];
    //echo $sql;
    $conexion->query($sql);
    if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
              
    }
   }else{
    }
    //agregar
    if (isset($_REQUEST['mas'])){
        //echo "hola";
        $ruta="../imagenes/".$_FILES['imagen']['name'];
        //echo $ruta;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
          $sql = "INSERT INTO productos VALUES(".$_POST["id"].",'".$_POST["nombre"]."','".$_POST["categoria"]."','".$_POST["descripcion"]."',".$_POST["existencia"].",".$_POST["precio"].",'".$_FILES['imagen']['name']."','".$_POST["talla"]."');";
          //echo $sql;
          $conexion->query($sql);
          if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    
          }
    }
    if (isset($_REQUEST['cam'])){
        $imagen=$_POST['imagen'];
        //echo $imagen;
        if(empty($_FILES['imagenes'])){
            $imagen=$_POST['imagen'];
            
        }else{
            //echo "tiene";
            if($_POST['imagen']==$_FILES['imagenes']['name']){
                //echo "no cambia";
                $imagen=$_POST['imagen'];
            }elseif(trim($_FILES['imagenes']['name'])!=""){
                //echo "si cambia";
                $imagen=$_FILES['imagenes']['name'];
                $ruta="imagenes/".$_FILES['imagenes']['name'];
                //echo $ruta;
                move_uploaded_file($_FILES['imagenes']['tmp_name'],$ruta);
                //unlink("imagenes/".$_POST['imagen']);
                
            }
        }
        //echo $imagen;
        $sql="UPDATE productos SET idProd=".$_POST['id'].",nombre='".$_POST['nombre']."',categoria='".$_POST['categoria']."',descripcion='".$_POST['descripcion']."',existencia=".$_POST['existencia'].",precio=".$_POST['precio'].",imagen='".$imagen."',talla='".$_POST['talla']."' where idProd=".$_POST['ido'];
        //echo $sql;
        $fin=$conexion->query($sql);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y carrito</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body style="background-color: rgb(217, 217, 235);">
    <div class="aba">
        <h1>REGISTRO DE PRODUCTOS</h1>
</div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
    <button type="submit" name="agrega" class="btn btn-success">+ (AGREGAR)</button>
    </form>
    <div style=" background-color: rgb(200, 228, 200);" class="formu">
    <?php
     if(isset($_REQUEST['agrega'])){
        echo "<h1>INGRESAR PRODUCTOS</h1>";
        echo '<form action="'.$_SERVER["PHP_SELF"].'" method="post"  class="formulario" enctype="multipart/form-data">
        <input type="text" name="id" id="id" placeholder="id"  required>
        <input type="file" name="imagen" id="imagen" required>
        <input type="text" name="nombre" id="nombre" placeholder="nombre" required>
        <input type="text" name="categoria" id="categoria" placeholder="categoria" required>
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" required>
        <input type="number" name="existencia" id="existencia" placeholder="existencia" required>
        <input type="number" name="precio" id="precio" placeholder="precio" required> 
        <input type="number" name="talla" id="talla" placeholder="talla" required> 
        <br><br>
        <button type="submit" name="mas" class="btn btn-success">+ (subir)</button>
        </form>';
     }elseif(isset($_REQUEST['modifi'])){
        echo "<h1>MODIFICAR PRODUCTOS</h1>";
        $sql="select * from productos where idProd=".$_POST['username'];
        $resultado = $conexion->query($sql);
         while ($fila = $resultado->fetch_assoc()) { 
            
            echo '<form action="'.$_SERVER["PHP_SELF"].'" method="post"  class="formulario" enctype="multipart/form-data">
            <input type="hidden" name="ido" id="ido" placeholder="ido" value="'.$fila['idProd'].'"  required>
            <input type="text" name="id" id="id" placeholder="id" value="'.$fila['idProd'].'"  required>
            <img style="height: 100px; width: 100px;" src="../imagenes/'.$fila["imagen"].'" alt="no se encontro">
            <input type="hidden" name="imagen" id="imagen" value="'.$fila['imagen'].'" >
            <input type="file" name="imagenes" id="imagenes"  >
            <input type="text" name="nombre" id="nombre" placeholder="nombre" value="'.$fila['nombre'].'" required>
            <input type="text" name="categoria" id="categoria" placeholder="categoria" value="'.$fila['categoria'].'" required>
            <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" value="'.$fila['descripcion'].'" required>
            <input type="number" name="existencia" id="existencia" placeholder="existencia" value="'.$fila['existencia'].'" required>
            <input type="number" name="precio" id="precio" placeholder="precio" value="'.$fila['precio'].'" required>
            <input type="number" name="talla" id="talla" placeholder="talla" value="'.$fila['talla'].'" required>
            <button type="submit" name="cam" class="btn btn-success">/ (Cambiar)</button>
            </form>';
         }        
        
     }
    ?>
    </div>
    <div class="busqueda">
        <h1>Barra de busqueda</h1>
        <a href="tienda.php"> ir a tienda</a>  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="id">
            <button type="submit" name="buscar" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    
    <div class="tabla">

            <Table class="tablas">
                <tr>
                    <th>ID</th>
                    <th>IMAGEN</th>
                    <th>NOMBRE</th>
                    <th>CATEGORIA</th>
                    <th>DESCRIPCION</th>
                    <th>EXISTENCIA</th>
                    <th>PRECIO</th>
                    <th>TALLA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
                
                <?php
                   if (isset($_REQUEST['buscar'])&&!empty($_POST['id'])){
                    $sql="select * from productos where idProd=".$_POST['id'];
                    
                   }else{
                     $sql="select * from productos";
                   }
                   $resultado = $conexion->query($sql);
                   if ($resultado->num_rows) {
                    while ($fila = $resultado->fetch_assoc()) { 
                        echo '<tr>';
                        echo '<form action='.$_SERVER["PHP_SELF"]." method='post' id='for'>";
                        echo '<td>' . $fila['idProd'] . '<input type="hidden" name="username" id="username" value='.$fila['idProd'].">" .'</td>';
                        echo '<td>' . "<img style='height: 100px; width: 100px;' src='../imagenes/".$fila['imagen']. "' alt='no se encontro'>".'</td>';
                        echo '<td>' . $fila['nombre'] . '</td>';
                        echo '<td>' . $fila['categoria'] . '</td>';
                        echo '<td>' . $fila['descripcion'] . '</td>';
                        echo '<td>' . $fila['existencia'] . '</td>';
                        echo '<td>' . $fila['precio'] . '</td>';
                        echo '<td>' . $fila['talla'] . '</td>';
                        echo '<td> <button type="submit" name="modifi" class="btn btn-warning"  id='.$fila['idProd'].'>MODIFICAR</button></td>';
                        echo '<td> <button type="submit" name= "Eliminar" class="btn btn-danger" onclick="return valida(event)" id='.$fila['idProd'].'>ELIMINAR</button></td>';
                        echo '</form>';
                        echo '</tr>';
                   }
                   }
                ?>
            </Table>
    </div>
    <?php include_once("pieDePagina.php");?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <script>
         function valida(){
            var res=confirm("Estas seguro que deseas eliminar");

            if(res){
                return true;
            }
            return false;
            
        }
    </script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>