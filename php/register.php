<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php include('encabezado.php');?>
<form style="width: 50%; margin-left: 25%" method="post" action="#" name="register" id="register">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
            <input required type="text" name="fullname" id="fullname"  class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input required type="email" name="email" id="email"  class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
            <input required type="text" name="username" id="username"  class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input required type="password" type="password" name="password" id="password" class="form-control" required>
            <label for="exampleInputPassword1" class="form-label">Confirma la contraseña </label>
            <input required type="password" type="password" name="password1" id="password1" class="form-control" required>
        </div>
        <div id="alerta">

        </div>
        <button type="submit" class="btn btn-primary" name="reg_user">Registrarse</button>
        <p class="small fw-bold mt-2 pt-1 mb-0">Volver a  <a href="login.php"
                                    class="link-danger">Login</a></p>
        <br>
                       
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/checkpass.js"></script>
    <?php
        include('pieDePagina.php');
    ?>
</body>