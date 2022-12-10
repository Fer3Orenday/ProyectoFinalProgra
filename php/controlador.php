<!--------------Valida el login e ingresa---------------------------->
 <?php session_start();
 include("conexion.php");
#session_start();
        if(empty($_POST['usuario']) && empty($_POST['pass'])){
         echo "<div class='alert alert-warning' role='alert'>
                    Los campos estan vacios
                    </div>";
            
        }else{
            $usuario=$_POST['usuario'];
            $pass=$_POST['pass'];
            $passcifrada=md5($pass);
         #verificamos si existe la cuenta
         $sql=$conexion->query("select * from user where nombreUsuario='$usuario'");
         if($datos=$sql->fetch_object()){ # si el usuario no esta bloqueado
                  #veridficamos que la cuenta no este bloqueada
            $sql=$conexion->query("select * from user where nombreUsuario='$usuario' and estado=1" );
            if($datos=$sql->fetch_object()){ # si el usuario no esta bloqueado
                $sql=$conexion->query("select * from user where nombreUsuario='$usuario' and contrasena='$passcifrada' and estado=1" );
                            #verificamos las pass
                if($datos=$sql->fetch_object()){ # si el usuario y pass son correctos
                    #redireccionamos a inicio
                    echo "usuario correcto";
                    $_SESSION['usuario']=$usuario;
                    echo "<script>  
        document.loginn.submit(); 
        </script> ";  

                }else{ #contador para bloquear la cuenta
                    $_SESSION['intentosLogin']=$_SESSION['intentosLogin']+1;

                    if($_SESSION['intentosLogin']==1){
                    echo "<div class='alert alert-danger' role='alert'>
                        Ingresa correctamente tus datos"
                        .$_SESSION['intentosLogin']."
                        </div>";
                    }
                    if($_SESSION['intentosLogin']==2){
                        $sql=$conexion->query("UPDATE user set estado=0 where nombreUsuario='$usuario'" );
                        echo "<div class='alert alert-warning' role='alert'>
                                Solo te queda un intento, si fallas tu cuenta se bloqueara
                            ";
                    }
                        if($_SESSION['intentosLogin']==3){
                            $sql=$conexion->query("UPDATE user set estado=0 where nombreUsuario='$usuario'" );
                            echo "<div class='alert alert-warning' role='alert'>
                                    Tu cuenta ha sido bloqueada
                                    <a href='cambiarcontra.php'> Recuperar cuenta </a>
                                ";
                        }
                    
                }
            }else{  #si la cuenta esta bloqueada muestra este mensaje
                echo "<div class='alert alert-danger' role='alert'>
                        La cuenta esta bloqueada
                        <a href='cambiarcontra.php'> recuperar cuenta </a>
                      </div>";
            }     
         }else{
            echo "<div class='alert alert-warning' role='alert'>
            Esta cuenta no existe
          </div>";
         }

        }
?>
<script>
    function sleep(milliseconds) {
 var start = new Date().getTime();
 for (var i = 0; i < 1e7; i++) {
  if ((new Date().getTime() - start) > milliseconds) {
   break;
  }
 }
}

function demo() {
  console.log('Taking a break...');
  setTimeout(console.log.bind(null, 'Two second later'), 5000);
}
</script>