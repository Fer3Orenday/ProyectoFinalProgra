<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar contra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <?php
        include('encabezado.php');
    ?>
    <form style="width: 50%; margin-left: 25%" action="login.php" method="post" id="resetpass" name="resetpass">
    <div class="mb-3">
      <div id="checklogin">
      </div>
      <label for="exampleInputEmail1" class="form-label">Usuario</label>
      <input   required name="user" type="text" class="form-control" id="user" aria-describedby="emailHelp">
    </div>
      </div>
      <label for="exampleInputEmail1" class="form-label">Contraseña actual</label>
      <input   required name="pold" type="text" class="form-control" id="pold" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Contraseña nueva</label>
      <input  required name="pnew" type="text" class="form-control" id="pnew" aria-describedby="emailHelp">
    </div>
    <button name="cambio" type="submit" class="btn btn-primary">Cambiar contraseña</button>
    <p class="small fw-bold mt-2 pt-1 mb-0">Volver a <a href="login.php"
                                    class="link-danger">Login</a></p>
        <br>
  </form>
  
  <?php
        include('pieDePagina.php');
    ?>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="../js/resetpass.js"> </script>
