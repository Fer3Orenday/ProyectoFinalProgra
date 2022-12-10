<?php
    if(!empty($_POST["recordar"])){     #cookies fijadas
        setcookie("name",$_POST['usuario'],time()+3600);
        setcookie("pass",$_POST['pass'],time()+3600);
        echo "cookies fijadas <a href='login.php'>volver al login </a>";
        header("../inicio.php");
    }else{                              #cookies no fijadas
        setcookie("name","");
        setcookie("pass","");
        echo "cookies no fijadas <a href='login.php'>volver al login </a>";
        header("../inicio.php");
    }
?>