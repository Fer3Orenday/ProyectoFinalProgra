<?php
session_start();
?>
<!DOCTYPE html>
 <style>
 body{
        margin:30px;
        color:brown;
        font-size:26px;
    }    
</style>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "<br> Murieron las variables de sesion";

// destroy the session
session_destroy();
echo "<br> Murio la sesion ";
header('Location: ../inicio.php');
?>

</body>
</html>