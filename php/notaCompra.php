<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota de Compra</title>

    <link rel="stylesheet" href="../css/notaCompra.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<br>
    
    <div class="container" id="cj">
        <div class="row">
            <div class="col">
                <h1>Nota de Compra</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Nombre:</p>
            </div>
            <div class="col">
                <p><?php echo $_SESSION['name'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Domicilio:</p>
            </div>
            <div class="col">
                <p><?php echo $_SESSION['addres'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Total: </p>
            </div>
            <div class="col">
                <p><?php echo $_SESSION['total']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="notaCompra.php">
                    <input type="button" id="nt">
                </form>
            </div>
        </div>
    </div>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>