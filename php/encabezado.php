<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- LINK bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- link estilos -->
    <link rel="stylesheet" href="../css/estilosEncabezado.css">
    <!-- link fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/25e2610697.js" crossorigin="anonymous"></script>
    <!-- FAVICON  -->
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
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
            scroll-page {
           
           
            }
    </style>
</head>

<body>

    <!-------------------- ENCABEZADO PARTE1 ----------------->

<!-------------------- ENCABEZADO PARTE1 ----------------->


<nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  padding-left: 400px; ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <?php 
                    if(empty($_SESSION['usuario'])){
                        echo "<li class='opcionesM2'>
                        <a class='nav-link active' aria-current='page' href='login.php'>Iniciar Sesion</a></li>";
                    } else {
                        echo "<li class='opcionesM2 style='padding-right:200px;'><p class='nav-link active' aria-current='page' href='#'>Bienvenido ".$_SESSION['usuario']."</p> </li>";
                    }
                ?>
            
                <li class="opcionesM2 opcion1">
<<<<<<< HEAD
                    <a class="nav-link active" aria-current="page" href="AcercaDe.php">Acerca De</a>
                </li>
                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="login.php">Iniciar Sesion</a>
                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="register.php">Registrarse</a>
                </li>
=======
                    <a class="nav-link active" aria-current="page" href="../inicio.php">Inicio</a>

                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">-</a>
                </li>


                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="acercaDe.php">Acerca de</a>
                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">-</a>
                </li>

                <?php
                if (!empty($_SESSION['usuario'])) {
                  
              ?>
              <li class="opcionesM2"><a class="nav-link active" href="./terminar.php">Cerrar Sesion</a></li>
              <?php
                }
              ?>
>>>>>>> 5c3672235ad079e1cf0c3732ec92a3c61d555a0c
            </ul>
    </nav>


    <!-------------------- ENCABEZADO PARTE 2 ----------------->
    <header style="position: sticky ; top: 0px; z-index: 1000;">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(171, 171, 218); position: sticky; ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../imagenes/logo.png" alt="" width="40%" height="30%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Opcion1</a>
                        </li>
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Opcion2</a>
                        </li>
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Opcion3</a>
                        </li>
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
                        </li>
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Contáctanos</a>
                        </li>
                        <li class="opcionesM">
                            <a class="nav-link active" aria-current="page" href="#">Ayuda</a>
                        </li>

                    </ul>
                   
                        <div class="header-section container">
                        
                            <div>
                                <img onmouseover="showCart(this)"  style="width: 100px;" class="cart" src="../imagenes/cart.png" alt="">
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
                    <a class="nav-link active" aria-current="page" href="#" style="padding-left: 430px;">¡Nuevos lanzamientos cada dia!</a>
                </li>
            </ul>
    </nav>






    

</body>

</html>