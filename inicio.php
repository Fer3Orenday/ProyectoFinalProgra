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
    <link rel="stylesheet" href="./css/estilosPagInicio.css">
    <!-- link fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/25e2610697.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(253, 253, 246);">

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
                    <img src="./imagenes/logo.png" alt="" width="40%" height="30%">
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
                            <a class="nav-link active" aria-current="page" href="contactanos.html">Contáctanos</a>
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
                    <a class="nav-link active" aria-current="page" href="#" style="padding-left: 430px;">¡Nuevos lanzamientos cada dia!</a>
                </li>
            </ul>
    </nav>







    <!-- VIDEO DE INICIO  -->

    <video width="100%" controls>
        <source src="./imagenes/video.mp4" type="video/mp4">

        Your browser does not support HTML video.
    </video>


    <!-- 3 IMAGENES  -->
    <div class="card-group">
        <div class="card">
            <img src="./imagenes/img1.jpg" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <p class="card-text imgss">Seguridad en cada paso</p>

            </div>
        </div>
        <div class="card">
            <img src="./imagenes/img2.webp" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <p class="card-text imgss">Todo para mejorar tu rendimiento.</p>

            </div>
        </div>
        <div class="card">
            <img src="./imagenes/img3.jpg" class="card-img-top imagen2" alt="...">
            <div class="card-body">
                <p class="card-text imgss">Los tenis del momento</p>

            </div>
        </div>
    </div>
    <br>

    <div style="background-image: url('./imgsInicio/fondoNavidad.jpg');" >
        <h1 class="fondNavidad">
            <br>
            Para esta navidad 
            <br>
            Regala Drokey
            <br>
            <br>
         
        </h1>
    </div>


    <!-- PIE DE PAGINA -->

    <div>
        <!-- Footer -->
        <footer class="text-center text-lg-start text-black" style="background-color:  rgb(171, 171, 218)">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Drokey
                            </h6>
                            <p>
                                Siendo la mejor compañia de tienda deportiva desde 2014, brindamos
                                la mejor calidad en nuestros productos. Siempre acompañandote a donde
                                vayas.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Sucursales</h6>
                            <p>
                                <a class="text-black">España</a>
                            </p>
                            <p>
                                <a class="text-black">México</a>
                            </p>
                            <p>
                                <a class="text-black">Argentina</a>
                            </p>
                            <p>
                                <a class="text-black">Dubai</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                            <p><i class="fas fa-home mr-3"></i> Aguascalientes, Mexico CP 20298</p>
                            <p><i class="fas fa-envelope mr-3"></i> drokey@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 52 449 98 78 65</p>
                            <p><i class="fas fa-print mr-3"></i> + 52 449 763 65 24</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Siguenos</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Company:
                <a class="text-white" href="https://mdbootstrap.com/">Drokey</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->









</body>

</html>