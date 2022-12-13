<?php
$_SESSION['intentosLogin']=0;
//include('encabezado.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/estilosEncabezado.css">

    <title>Login</title>
</head>

<body>
<nav class="navbar navbar-expand " class="encabezado" style="background-color: rgb(217, 217, 235);  padding-left: 600px; ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul  class="navbar-nav">
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
    font-family: 'Concert One', cursive;" class='nav-link active' aria-current='page' href='#'>Bienvenido <?php echo $_SESSION['usuario']?></p> </li>
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
                <form action="" method="post">
                    
                <div style="padding: 30px;"class="container">
                <h3>Metodos de pago</h3>

                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                            <a href="datosT.php">
                                <img style="margin: 10px;" src="../imagenes/tarjeta1.png" class="rounded" alt="...">
                            </a>
                            <br>
                            </div>
                        </div>
                        <div class="col">
                        <a href="datosO.php">
                            <img style="margin: 10px;" src="../imagenes/oxoo.png" class="rounded" alt="...">
                        </a>
                        </div>
                    </div>   
                    </div>
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/validacionpago.js"></script>
    <?php
        include('pieDePagina.php');
    ?>

</body>

</html>