<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>

    <link rel="stylesheet" href="../css/estiloTarjeta.css">

</head>
<body>
    
  <form>
    <div class="form-container">
      <div class="personal-information">
        <h1>Informacion de Envio</h1>
      </div> 
           
          <input id="column-left" type="text" name="first-name" placeholder="Nombres"/>
          <input id="column-right" type="text" name="last-name" placeholder="Apellidos"/>
         
          <div class="card-wrapper"></div>
      
          <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Domicilio"/>
          <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="Ciudad"/>
          <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="Codigo Postal"/>
          <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Correo"/>
          <input id="input-button" type="submit" value="Enviar"/>
        
    </form>
  </div>

  <script src="js/Tarjeta.js"></script>

</body>
</html>