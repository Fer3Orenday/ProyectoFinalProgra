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
        <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">

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
                <li class="opcionesM2">
                    <a style="font-size: 20px;
    font-family: 'Concert One', cursive;" class="nav-link active" aria-current="page" href="../inicio.php">Inicio</a>
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


    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <!------------FORMULARIO----------------->
                    <form action="coockies.php" method="post" name="loginn" id="loginn">
                    <div id="checklogin">
        
                    </div>
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center fw-bold mx-3 mb-0">Bienvenido</h3>
                        </div>

                        <!-- Ususario -->
                        <div class="form-outline mb-4">
                            <input type="text" name="usuario" id="usuario" class="form-control form-control-lg"
                                placeholder="Introduce tu nombre usuario" value="<?php if (isset($_COOKIE["name"])) {
                                    echo $_COOKIE["name"];
                                } ?>" required />
                            <label class="form-label" for="form3Example3">Nombre de usuario</label>
                        </div>

                        <!-- Password -->
                        <div class="form-outline mb-3">
                            <input type="password" name="pass" id="pass" class="form-control form-control-lg"
                                placeholder="Introduce tu contraseña" value="<?php if (isset($_COOKIE["pass"])) {
                                    echo $_COOKIE["pass"];
                                } ?>" required />
                            <label class="form-label" for="form3Example4">Contraseña</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="recordar"
                                checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Guardar cookies</label>
                        </div>
                        <div class=" d-flex  text-center text-lg-start mt-4 pt-2 flex-row justify-content-between">
                            <div style="margin-right:20px">
                                <button type="submit" name="btn-ingresar" value="enviar" class="btn btn-primary btn-lg"
                                    id="btn" style="padding-left: 2.5rem; padding-right: 2.5rem;"
                                    disabled>Ingresar</button>
                            </div>
                            <br>
                            <p class="small fw-bold mt-2 pt-1 mb-0">No tienes cuenta? <a href="register.php"
                                    class="link-danger">Registrate</a></p>
                            <br>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Olvido su contraseña <a href="cambiarcontra.php"
                                    class="link-prymary">Recuperar</a></p>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Change pass <a href="resetpass.php"
                            class="link-prymary">Cambiar contraseña</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper" >
            <div class="captcha-area">
                <div class="captcha-img">
                    <img src="../imagenes/captcha-bg.gif" alt="Captch Background">
                    <span class="captcha"></span>
                </div>
                <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
            </div>
            <form action="#" class="input-area">
                <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>
                <button class="check-btn">Check</button>
            </form>
            <div class="status-text">

            </div>
        </div>
        </div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5
        bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
        </div>
        <!-- Copyright -->
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/app2.js"></script>
    <?php
        include('pieDePagina.php');
    ?>

</body>

</html>