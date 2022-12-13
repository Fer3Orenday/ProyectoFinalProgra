<?php 
session_start();
include('encabezado.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones de envio</title>
    <link rel="stylesheet" href="../css/estilos.css">
   
</head>
<body>
    <form action="datosE.php" method="POST">
    <div class="container">
    <div style="background-color: rgb(101, 101, 165); border: solid gray 10px;"class="container">
        <h1 style="color: white;">Opciones de envio</h1>
        <h1 style="color: white;">ES GRATIS SI VIVES EN AGUASCALIENTES :)</h1>
        <!-- Example single danger button -->
        <select name="envio" id="envio" style="width:500;" class="btn btn-primary dropdown-toggle container" style="text-align:center;">
            
            <option name="envio" id="envio" value="1500">Fedex sucursales
                <img src="" alt="">
            </option>
            <option name="envio" id="envio" value="2000">Estafeta</option>
            <option name="envio" id="envio" value="0">gratis (compañia de la empresa)</option>
        </select>

        <div>
            <br>
            <br>
        <button type="submit" class="btn btn-primary">Aceptar</button>

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Latin_America_%28orthographic_projection%29.svg/1200px-Latin_America_%28orthographic_projection%29.svg.png" alt="">
        </div>
    </div> 
    </div>
    </form>
    
    <?php include('pieDePagina.php')?>
</body>
</html>