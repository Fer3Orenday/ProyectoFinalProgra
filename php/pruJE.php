<?php ;
include_once("conexion.php");
include_once("encabezadoAdmin.php");
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <title>Grafica por Talla</title>
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





<body style="background-color: #EADBD8;">


  <?php

  $con = new mysqli('localhost', 'root', '', 'tienda');
  $query = $con->query("
    SELECT nombre, talla FROM productos;
  ");

  foreach ($query as $data) {
    $month[] = $data['nombre'];
    $amount[] = $data['talla'];
  }


  ?>




  <div style="width: 1100px; padding-left: 240px; padding-top: 100px; font-family: 'Dangrek', cursive;">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // === include 'setup' then 'config' above ===
    const labels = <?php echo json_encode($month) ?>;
    const data = {
      labels: labels,
      datasets: [{
        label: 'Tallas por Producto',
        data: <?php echo json_encode($amount) ?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          '#F9E79F'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          '#F9E79F'
        ],
        borderWidth: 1
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    };

    var myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>

<br>
<br>


  <?php
  include 'pieDePagina.php';
  ?>

</body>

</html>