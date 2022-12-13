 <?php
    session_start();
    include('encabezado.php');
    $_SESSION['carrito'] = array();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar contra</title>
  <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
 </head>
 <body>
   <!-------------------------FORMULARIO PARA EL CONTACTO-------------------------------->
 <div class="for">
    <br>

    <form style="width: 50%; margin-left: 25%" action="correo.php" method="post" id="changepass" name="changepass">
      <div class="mb-3">
        <h4 class="text-primary">Para recuperar tu cuenta ingresa los datos con los que te registraste</h4>
        <div id="check">
        </div>
        <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
        <input   required name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">correo electonico</label>
        <input  required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <button name="cambio" type="submit" class="btn btn-primary">Cambiar contraseña</button>
      <p class="small fw-bold mt-2 pt-1 mb-0">Volver a  <a href="login.php"
                                    class="link-danger">Login</a></p>
        <br>
    </form>
    
    <br>
  </div>
 <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="../js/app.js"> </script>
 <?php
        include('pieDePagina.php');
    ?>
</body>
 </html>

