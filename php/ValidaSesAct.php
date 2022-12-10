<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .container{
            
            display: flex;
            align-items: center;
            justify-items: center;
            flex-direction: column; margin-top: 250px;
        }
    </style>
    
</head>

<body style="background-color: background-color: rgb(76, 76, 125);">
    <?php
    if ($_SESSION['usuario'] == "" || $_SESSION['usuario'] == " ") {
    ?>
    <div class="container">
        <h1 style="color: red;">DEBES DE INICIAR SESION ANTES</h1>
        <a class="btn btn-outline-warning" href="login.php" role="button">¡Inicia sesion!</a>
        <!-- <p>Inicio sesion como: <?php$_SESSION["usuario"] ?></p> -->
    </div>
    <?php
    } else {
        // header("Location: PagoCertificado.php",TRUE,301);
        echo '<script type="text/javascript"> window.location.href="#";</script>';
    }
      ?>
</body>

</html>