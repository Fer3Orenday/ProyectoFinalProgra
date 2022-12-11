
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- LINK bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- link estilos -->
    <link rel="stylesheet" href="../css/estilosEncabezado.css">
    <!-- link fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/25e2610697.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
include ('encabezado.php');
?>

<br>
<br>
<nav class="navbar navbar-expand " class="encabezado" style="background-color:rgb(217, 217, 235); position: sticky;">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="opcionesM2 opcion2">
                    <a class="nav-link active" aria-current="page" href="#">Preguntas Frecuentes</a>
                </li>
            </ul>
    </nav>
<br>
<br>

<div class="row row-cols-1 row-cols-md-3"  >
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;"  style= "background: #CED3F2;">
      <img src="../imagenes/piie.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">¿Que puedo hacer si no me queda mi calzado?</h5>
        <p class="card-text">Tendra que dirigirse al apartado de contactanos para poder cambiar el calzado</p>
      </div>
    </div>
  </div>
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;" style= "background: #F2E8C9;" >
      <img src="../imagenes/roto.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">¿Que hacer cuando el calzado llega dañado?</h5>
        <p class="card-text">Se tedria que comunicar con nosotros, al instante de ver el producto dañado, ya que al hacerse la entrega 
        despues de 6 horas, ya no se podra devolver el producto.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;" style= "background: #D0F2E9;">
      <img src="../imagenes/descu.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Si compre mi calzado en descuento, ¿puedo hacer una devolucion?</h5>
        <p class="card-text">En caso de comprar o adquirir el calzado por medio de descuentos NO se podra hacer ninguna devolucion.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;" style= "background: #FDF9C4;">
      <img src="../imagenes/inter.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">¿Se puede cambiar el calzado por otro?</h5>
        <p class="card-text">NO se permite realizar ningun canje por otro calzado.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;" style= "background: #BFA4A4;">
      <img src="../imagenes/devo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">En caso de quere devolver el calzado, ¿Cuanto tiempo tengo?</h5>
        <p class="card-text">Se cuenta con 4 dias, despues de la llegada del calzado.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4;" style= "background: #EAF2F8;">
    <div class="card h-100;" style= "background: #D39890;">
      <img src="../imagenes/din.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">¿Se puede devolver el dinero, en caso de no querer el calzado?</h5>
        <p class="card-text">Se tendria que examinar este caso, y analizar la causa, pero la tienda se queda con un 5% del dinero;
        Si el calzado se encuentra dañado no se devolvera nada.</p>
      </div>
    </div>
  </div>


</div>


<br>
<br>





<?php

include 'pieDePagina.php';


?>