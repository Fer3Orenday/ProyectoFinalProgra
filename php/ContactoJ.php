<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="../css/estilosContacto.css">
    <link rel="stylesheet" href="../css/font/awesome.css">

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>

<?php
    include_once("encabezado.php");
    ?>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>CONTACTANOS</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> emyssby@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +52(449)902-8665</p>
            </section>
        </section>

        <form action="email.php" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="name">Nombres *</label>
                <input type="text" id="names">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje"></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

    <?php
    include_once("pieDePagina.php");
    ?>

</body>
</html>
