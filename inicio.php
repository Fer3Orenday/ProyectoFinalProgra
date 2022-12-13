<?php session_start();
    $_SESSION['productos'] = array();
    $_SESSION['total']=0;
    $_SESSION['cuantos']=0;
    $_SESSION['precios']=array();
    include("php/conexion.php");
    $con="SELECT idProd  from productos;";
    $resultado = $conexion->query($con);
    while ($fila = $resultado->fetch_assoc()) {
        //echo $fila['idProd']."</br>";
        $de=0;
        if(rand(0,100)<50){
            //descuento
           $de=rand(10,25);

        }else{
            //no descuento
            $de=0;
        }
        $sql="UPDATE productos SET descuento=".$de." where idProd=".$fila['idProd'];
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
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.png">
    <!-- LINK bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- link estilos -->
    <link rel="stylesheet" href="./css/estilosEncabezado.css">
    <link rel="stylesheet" href="./css/estilosImagen.css">
    <link rel="stylesheet" href="./css/estilosPagInicio.css">
    <link rel="stylesheet" href="./css/carusel.css">
    <link rel="stylesheet" href="./css/estilosSuscribirse.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- link fonts -->
    <link rel="icon" type="image/x-icon" href="/imagenes/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/25e2610697.js" crossorigin="anonymous"></script>
    <script src="./js/carrusel.js"></script>
    

    <style>
            scroll-container {
            margin: 0 auto;
            text-align: center;
            display: block;
            width: 100%;
            height: 200px;
            overflow-y: scroll;
            scroll-behavior: smooth;
            }

    </style>



</head>



<body style="background-color: rgb(253, 253, 246);">

<nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  padding-left: 500px; ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <?php 
                    if(empty($_SESSION['usuario'])){
            ?>
                        <li class='opcionesM2'>
                        <a  style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='php/login.php'>Iniciar Sesion</a></li>

                        <li class='opcionesM2'>
                        <a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='php/register.php'>Registrarse</a></li>
                <?php       
                    } else {
                ?>
                        <li class='opcionesM2' style='padding-right:200px;'><p style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='#'>Bienvenido <?php echo $_SESSION['usuario']?></p> </li>
                <?php    }
                ?>
                <li class="opcionesM2 opcion1">
                    <a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class="nav-link active" aria-current="page" href="php/acercaDe.php">Acerca De</a>
                </li>
                <?php
                    if (!empty($_SESSION['usuario'])) {
                ?>
              <li class="opcionesM2"><a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class="nav-link active" href="php/terminar.php">Cerrar Sesion</a></li>
              <?php
                }
              ?>
            </ul>
    </nav>


    <!-------------------- ENCABEZADO PARTE 2 ----------------->
    <header style="position: sticky ; top: 0px; z-index: 1000;">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(171, 171, 218); position: sticky; ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./imagenes/logo.png" alt="" width="40%" height="30%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px;" class="nav-link active" aria-current="page" href="./inicio.php">Inicio</a>
                        </li>
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px;" class="nav-link active" aria-current="page" href="./php/tienda.php">Tienda</a>
                        </li>
 
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px;" class="nav-link active" aria-current="page" href="php/ContactoJ.php">Contáctanos</a>
                        </li>
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px; padding-right: 200px;" class="nav-link active" aria-current="page" href="./php/preg-frecuentes.php">Ayuda</a>
                        </li>

                    </ul>
                   
                        <div class="header-section container">
                        
                            <div>
                                <img onmouseover="showCart(this)"  style="width: 100px;" class="cart" src="./imagenes/cart.png" alt="">
                                <p class="count-product">0</p>
                            </div>
                            <div class="cart-products" id="products-id">
                            <scroll-container>
                            <scroll-page>
                                <p class="close-btn" onclick="closeBtn()">X</p>
                                <h3>Mi carrito</h3>
                                
                                        <div class="card-items">
                                            
                                        </div>
                                   
                                <h2>Total: <strong class="price-total">0</strong> $</h2>
                                </scroll-page>
                                </scroll-container>
                            </div>
                        </div>
                    
                </div>
            </div>
        </nav>
    </header>
    <!-------------------- ENCABEZADO PARTE 3 ----------------->

    <nav class="navbar navbar-expand " class="encabezado" style="background-color:rgb(217, 217, 235); position: sticky;">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="opcionesM2 opcion2">
                    <a style="font-family: 'Concert One', cursive; font-size: 20px;" class="nav-link active" aria-current="page" href="#" style="padding-left: 800px;">¡Nuevos lanzamientos cada dia!</a>
                </li>
            </ul>
    </nav>









</body>

</html>

<!-- VIDEO DE INICIO  -->

<video width="100%" controls>
    <source src="./imagenes/video.mp4" type="video/mp4">

    Your browser does not support HTML video.
</video>


<table class="table" style="width: 100%; text-align: center;">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        <tr>

            <td><img src="./imgsInicio/fondoFut.jpg" alt="" style="width:100% ;" class="img3 "></td>

            <td class="seleccion" style="padding-top: 160px ; background-image: url(./imgsInicio/fondoVerde.webp);">
                Apoya a tu seleccion favorita con los mejores tenis!

                La mejor temporada ya esta aqui.
            </td>
        </tr>


    </tbody>
</table>

<table class="table" style="width: 100%; text-align: center;">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="./imgsInicio/tenis11.jpg" alt="" style="width:100% ;" class="img4"></td>

            <td>
                <img src="./imgsInicio/tenis2.jpg" alt="" style="width:100% ;" class="img4">
            </td>

            <td><img src="./imgsInicio/tenis5.webp" alt="" style="width:100% ;" class="img4"></td>

            <td><img src="./imgsInicio/tenis4.jpg" alt="" style="width:100% ;" class="img4"></td>
        </tr>


    </tbody>
</table>


<div style="background-image: url('./imgsInicio/fondoNavidad.jpg');">
    <h1 class="fondNavidad">
        <br>
        Para esta navidad
        <br>
        Regala Drokey
        <br>
            <p>
  <a class="btn btn-primary" data-toggle="collapse" href="php/cupon.php" role="button" aria-expanded="false" aria-controls="collapseExample">
    Obtener codigo de cupon
  </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

    </h1>
</div>
<br>

<div>
    <h3 style="font-family: 'Concert One', cursive;">¿Para quién compras?</h3>
</div>


<table style="width: 100%; text-align: center;">
    <tbody>
        <tr>
            <td style="background-image: url('./imgsInicio/rosa.webp');"><img src="./imgsInicio/mujer.jpg" alt="" style="width:70% ;"></td>

            <td style="background-image: url('./imgsInicio/azul.jpg');">
                <img src="./imgsInicio/hombre.jpg" alt="" style="width:70% ;">
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td><a class="btn btn-primary" href="#" role="button">Mujer</a></td>
            <td><a class="btn btn-primary" href="#" role="button">Hombre</a></td>
        </tr>
    </tbody>
</table>
<br>
<br>

<div style="background-image: url('./imgsInicio/fondoSus.jpg');">
    <h2 class="fondNavidad">
        !Se parte de nuestro club!
    </h2>
    <section class="widget widget_blog_subscription option-b">
        <form action="suscribirsemail.php" method="post" accept-charset="utf-8" id="subscribe-blog">
            <p>Subscribete y Ten Felices Fiestas</p>
            <p>
                <input type="text" name="email" style="width: 95%; padding: 1px 2px" placeholder="Ingresa tu Correo" value="" id="subscribe-field">
            </p>
            <p>
                <input type="submit" value="Suscribirse">
            </p>

        </form>
        <br>
        <br>
    </section>
    <br>
</div>

<br>
<br>





<!-- 3 IMAGENES  -->
<div class="card-group">
    <div class="card">
        <img src="./imagenes/img1.jpg" class="card-img-top imagen2 img4" alt="...">
        <div class="card-body">
            <p class="card-text imgss">Seguridad en cada paso</p>

        </div>
    </div>
    <div class="card">
        <img src="./imagenes/img2.webp" class="card-img-top imagen2 img4" alt="...">
        <div class="card-body">
            <p class="card-text imgss">Todo para mejorar tu rendimiento.</p>

        </div>
    </div>
    <div class="card">
        <img src="./imagenes/img3.jpg" class="card-img-top imagen2 img4" alt="...">
        <div class="card-body">
            <p class="card-text imgss">Los tenis del momento</p>

        </div>
    </div>
</div>
<br>

<!--Carrusel-->

 <div id="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imagenes/a1.jpeg" class="d-block w-100" alt="..." width=50%;>
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/a2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/a4.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <!-- End of .container -->




<!-- PIE DE PAGINA -->

<?php
include './php/pieDepagina.php';

?>

<!-- End of .container -->
</body>

</html>