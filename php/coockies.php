<?php
    if(!empty($_POST["recordar"])){     #cookies fijadas
        setcookie("name",$_POST['usuario'],time()+3600);
        setcookie("pass",$_POST['pass'],time()+3600);
?>
        <script type="text/javascript">
        //Redireccionamiento tras 5 segundos
        setTimeout( function() { window.location.href = "../inicio.php"; }, 5 );
        </script>
<?php 
    }else{                              #cookies no fijadas
        setcookie("name","");
        setcookie("pass","");
        ?>
        <script type="text/javascript">
        //Redireccionamiento tras 5 segundos
        setTimeout( function() { window.location.href = "../inicio.php"; }, 5 );
        </script>
        <?php 
    }
?>