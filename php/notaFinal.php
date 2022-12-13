<?php 
session_start();
include('encabezado.php');
$total = $_SESSION['total'];
?>
<?php
include("conexion.php");
//$tipoenvio=$_POST['envio'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago en Oxxo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha484-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosC.css">


</head>
<body>

    <br><br><br><br>
    
    <div class="container" id="cr">
        <div class="row">
            <div class="col" id="logo">
                <img src="1280px-Oxxo_Logo.png" alt="" width="40%">
            </div>
                <h3>Ticket de Pago <p><?php echo $_SESSION['usuario']?></p></h3>
            
        </div>
        <br>
       <div class="row">
       <div class="row">
                         <div class="col"><h4>Id del producto</h4></div>
                         <div class="col"><h4>Nombre producto</h4></div>
                         <div class="col"><h4>Precio del Producto</h4></div>
                        </div>;
            <?php
                 $array_num = count($_SESSION['productos']);
                 for ($i = 0; $i < $array_num; $i++){
                    
                     $con = 'select * from productos where idProd='.$_SESSION['productos'][$i];
                     //echo "<script>alert(".$con.")</script>";
                     $resultado = $conexion->query($con);
                     while ($fila = $resultado->fetch_assoc()) {
                        $existencia=$fila['existencia'];
                        $idprod=$fila['idProd'];
                        if($idprod>0){
                            $sql=$conexion->query("UPDATE productos set existencia=$existencia-1 where idProd=$idprod");
                        }
                         echo '
                         <div class="row">
                         <div class="col"><p>'.$fila['idProd'].'</p></div>
                         <div class="col"><p>'.$fila['nombre'].'</p></div>
                         <div class="col"><p>'.$_SESSION['precios'][$i].'</p></div>
                        </div>';
                     }
                 }
            ?>
       </div>



       <div class="row">
            <div class="col" ><h4>Total:</h4></div>
            <div class="col"><p><?php echo '$'.$total.'mx';?></p></div>
       </div>
       <?php $total *= 1.16;?>
       <div class="row">
            <div class="col"><h4>iva 16%</h4></div>
            <div class="col"><p><?php echo '$'.$total.' mx';?></p></div>
       </div>
       <?php 

                 //$total = $total-($total*$_SESSION['desc']);

            if(!empty($_SESSION['desc'])){

                $total = $total-($total*$_SESSION['desc']);
                
                echo '<div class="row">
                <div class="col"><h4>Descuento de :</h4></div>
                <div class="col"><p>'.($_SESSION['desc']*100).'% </p></div>
                </div>
                
                <div class="row">
                <div class="col"><h4>Total a Pagar con Descuento:</h4></div>
                <div class="col"><p> $ '.$total.' mx </p></div>
                </div>';
            }
       ?>
       <div class="row">
            <div class="col" ><h4>Gastos de envio:</h4></div>
            <div class="col"><p><?php echo '$'.$_SESSION['envio'].'mx';?></p></div>
       </div>
       <?php  
        $total+=$_SESSION['envio'];
        if($_SESSION['oxxo'] == 1){
            $tipo = "OXXO";
            echo "
            
            <img style='width: 500px;'src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Oxxo_Logo.svg/1200px-Oxxo_Logo.svg.png' alt=''>
            <div class='row'>
                <div class='col'><h4>Favor de pasar pagar en :</h4></div>
                
            </div>
            <div class='row'>
            <div class='col'><p>Sucursal Av Lopez mateos</p></div>
                
            </div>
            <div class='row'>
            <div class='col'><p>ti codigo es:</p></div>
                
            </div>
            <div class='row'>
            <div class='col'><img style='width: 300px;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/800px-EAN13.svg.png' alt=''></div>
                
            </div>
                
            
            ";
            
            
        }else{
            $tipo = "TARJETA";
        }

        //$_SESSION['mail'] = $total;

        ?>
       <div class="row">
            <div class="col"><h4>Tipo de pago:</h4></div>
            <div class="col"><p><?php echo $tipo ;?></p></div>
       </div>
       <div class="row">
            <div class="col"><h4>Total a pagar:</h4></div>
            <div class="col"><p><?php echo '$'.$total.' mx';?></p></div>
       </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="notaDeCompra.php"><button>Enviar Correo</button></a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.4/dist/js/bootstrap.bundle.min.js" integrity="sha484-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php 
include('pieDePagina.php');
?>
</body>
</html>