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
    <!-- FAVICON  -->
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
</head>

<body>

    <!-------------------- ENCABEZADO PARTE1 ----------------->

<!-------------------- ENCABEZADO PARTE1 ----------------->


<nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  padding-left: 400px; ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="opcionesM2 opcion1">
                    <a class="nav-link active" aria-current="page" href="#">hola</a>

                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">-</a>
                </li>


                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">Acerca de</a>
                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">-</a>
                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">Iniciar Sesión</a>
                </li>
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
                    <img class="logo" src="../imagenes/logoShop.png" alt="">
                    <div>
                        <img onmouseover="showCart(this)" class="cart" src="../imagenes/cart.png" alt="">
                        <p class="count-product">0</p>
                    </div>
                    <div class="cart-products" id="products-id">
                        <p class="close-btn" onclick="closeBtn()">X</p>
                        <h3>Mi carrito</h3>
                        <div class="card-items">
                            
                        </div>
                        <h2>Total: <strong class="price-total">0</strong> $</h2>
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