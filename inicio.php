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
    <link rel="stylesheet" href="./css/estilosEncabezado.css">
    <link rel="stylesheet" href="./css/estilosImagen.css">
    <!-- link fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/25e2610697.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(253, 253, 246);">

    <!-------------------- ENCABEZADO PARTE1 ----------------->


    <nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="opcionesM2 opcion1">
                    <a class="nav-link active" aria-current="page" href="#">hola</a>

                </li>

                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">-</a>
                </li>


                <li class="opcionesM2">
                    <a class="nav-link active" aria-current="page" href="#">hola</a>
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
                    <img src="./imagenes/logo.png" alt="" width="40%" height="30%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" text-align: center;>
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

                    <form class="d-flex" style="text-align: center; padding-left: 30px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <a href="https://www.facebook.com/"><i style="color: black; padding-left: 33px;" class="fa-solid fa-cart-shopping fa-3x "></i></a>
                </div>
            </div>
        </nav>
    </header>

    <!-------------------- ENCABEZADO PARTE 3 ----------------->

    <nav class="navbar navbar-expand " class="encabezado" style="background-color:rgb(217, 217, 235); position: sticky;">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="opcionesM2 opcion2">
                    <a class="nav-link active" aria-current="page" href="#">¡Nuevos lanzamientos cada dia!</a>
                </li>
            </ul>
    </nav>



    <!-- VIDEO DE INICIOO -->
    
        <video width="100%"  controls>
            <source src="./imagenes/video.mp4" type="video/mp4">

            Your browser does not support HTML video.
        </video>
    

    <!-- 3 IMAGENES  -->
    <div class="card-group">
        <div class="card">
            <img src="./imagenes/img1.jpg" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./imagenes/img2.webp" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./imagenes/img3.jpg" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>








</body>

</html>