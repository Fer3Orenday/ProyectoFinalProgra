<?php
session_start();
include("conexion.php");
#################################GENERAMOS LA CONTRASENA#######################################################
    function randomText($length){
        $key="";
        $pattern="123456789abcdefghijklmnopqrstuvwxyz";
        for($i=0;$i<$length;$i++){
            $key .= $pattern[rand(0,35)];
        }
        return $key;
    }
    $captcha=randomText(6);

###########################Cosas para el correo#########################################
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
   
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  
    $mail->isSMTP();                                        
    $mail->Host= 'smtp.gmail.com ';                     
    $mail->SMTPAuth=true;             
    
    $mail->Username= 'gallegoscarolina61@gmail.com';
    $mail->Password= 'fcmeyiqahqhvkhkf'; 
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
    $mail->Port= 587;

    
    $mail->setFrom('gallegoscarolina61@gmail.com', 'Carolina de la peña');
    $mail->addAddress($_POST['email'], 'Carolina de la peña');    
    
    $mail->addCC($_POST['email']);   
    
    $mail->isHTML(true);
    
    $mail->Subject= 'Recibimos tu peticion de cambio de contraseña';
    
    $mail->Body='Si no fuiste tu, alguien te hackio, chale
    en caso de que si hayas sido tu contraseña nueva es:'.$captcha;
    
    $mail->send();
    
    echo 'El correo electronico se ha mandado';
    
    #desbloqueamos cuenta
    $sql=$conexion->query("UPDATE user
    SET estado = 1
    WHERE nombreCompleto ='".$_POST['nombre']."' and correo='".$_POST['email']."'");
    echo "Cuenta desbloqueada";

    #cambiamos password
    $sql=$conexion->query("UPDATE user
    SET contrasena = '".md5($captcha)."'
    WHERE nombreCompleto ='".$_POST['nombre']."' and correo='".$_POST['email']."'");
    echo "modificado correctamente";

    echo "<script type='text/javascript'>
                            window.location.href = 'login.php';
                        </script>";
    
} catch (Exception $e) {
    echo $mail->ErrorInfo;
}