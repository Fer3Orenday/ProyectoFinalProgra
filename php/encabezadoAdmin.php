<?php 
include_once("conexion.php");
// Variable de sesión en array:
if (isset($_REQUEST['Bo'])){
    //echo $_POST['id'];
    $_SESSION['cuantos']--;
    //print_r($_SESSION['productos']);
    //unset($_SESSION['productos'][$_POST['ids']]);
    //echo "productos antes:";
    //print_r($_SESSION['productos']);
    if (($clave = array_search($_POST['ids'], $_SESSION['productos'])) !== false) {
        unset($_SESSION['productos'][$clave]);
        //echo "productos despues:";
        //print_r($_SESSION['productos']);
    }
    //echo "precio antes:";
    //print_r($_SESSION['precios']);
    if (($clave = array_search($_POST['precios'], $_SESSION['precios'])) !== false) {
        unset($_SESSION['precios'][$clave]);
        //echo "precio despues:";
        //print_r($_SESSION['precios']);
    }
    //unset($_SESSION['precios'][$_POST['precios']]);
    //echo "quito :" .$_POST['precios'];;
    $_SESSION['total']-=$_POST['precios'];
    //array_push($_SESSION['productos'],$_POST['id']);
    //array_push($_SESSION['precios'],$_POST['precio']);
    //$_SESSION['total']+=$_POST['precio'];
} 
//$_SESSION['productos'] = array();
//$_SESSION['total']=0;
//$_SESSION['precios']=array();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
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

<body>

   <!-------------------- ENCABEZADO PARTE1 ----------------->

<!-------------------- ENCABEZADO PARTE1 ----------------->

<nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  padding-left: 600px; ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul style=" font-family: 'Concert One', cursive;  font-size: 20px;" class="navbar-nav">
            <?php 
                    if(empty($_SESSION['usuario'])){
            ?>
                        <li class='opcionesM2'>
                        <a  style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='login.php'>Iniciar Sesion</a></li>

                        <li class='opcionesM2'>
                        <a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='register.php'>Registrarse</a></li>
                <?php       
                    } else {
                ?>
                        <li class='opcionesM2' style='padding-right:200px;'><p style="font-size: 20px;
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='#'>Bienvenido <?php echo $_SESSION['usuario']?></p></li>
                <?php    }
                ?>
                <li class="opcionesM2 opcion1">
                    <a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class="nav-link active" aria-current="page" href="./acercaDe.php">Acerca De</a>
                </li>
                <?php
                    if (!empty($_SESSION['usuario'])) {
                ?>
              <li class="opcionesM2"><a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class="nav-link active" href="./terminar.php">Cerrar Sesion</a></li>
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
                    <img src="../imagenes/logo.png" alt="" width="40%" height="30%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px; " class="nav-link active" aria-current="page" href="../php/produre.php">Aregar productos</a>
                        </li>
                        
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px; padding-left: 20px" class="nav-link active" aria-current="page" href="tienda.php">Tienda</a>
                        </li>
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px; padding-left: 20px " class="nav-link active" aria-current="page" href="pruJ.php">Graficas-talla</a>
                        </li>
                        <li class="opcionesM">
                            <a style="font-family: 'Concert One', cursive; font-size: 25px; padding-left: 20px " class="nav-link active" aria-current="page" href="pruJE.php">Graficas-Exis</a>
                        </li>
                    </ul>
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
    <script>
        
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }
        
       
    </script>





    

</body>

</html>