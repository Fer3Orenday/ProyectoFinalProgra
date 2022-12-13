<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <link rel="stylesheet" href="../css/estilosPago.css">
</head>
<body>
    
    <div class="modal">
        <div class="modal__container">
          <div class="modal__content">
            <h2>Informacion de Tarjeta</h2>
    
            <form action="opciones.php" method="post">
              <ul class="form-list">
                <li class="form-list__row">
                  <label>Nombre</label>
                  <input type="text" name="" required="" />
                </li>
                <li class="form-list__row">
                  <label>Numero de Tarjeta</label>
                  <div id="input--cc" class="creditcard-icon">
                    <input type="text" name="cc_number" required="" />
                  </div>
                </li>
                <li class="form-list__row form-list__row--inline">
                  <div>
                    <label>Fecha</label>
                    <div class="form-list__input-inline">
                      <input type="text" name="cc_month" placeholder="MM"  minlength="2" maxlength="2"  />
                      <input type="text" name="cc_year" placeholder="YY"  minlength="2" maxlength="2" required="" />
                    </div>
                  </div>
                  <div>
                    <label>
                      CVC
                    </label>
                    <input type="text" name="cc_cvc" placeholder="123" minlength="3" maxlength="4" required="" />
                  </div>
                </li>
                <li class="form-list__row form-list__row--agree">
                  <label>
                    <input type="checkbox" name="save_cc" checked="checked">
                    Guardar tu Tarjeta
                  </label>
                </li>
                <li>
                  <button type="submit" class="button">Pagar</button>
                </li>
              </ul>
            </form>
          </div> <!-- END: .modal__content -->
        </div> <!-- END: .modal__container -->
      </div> <!-- END: .modal -->

</body>
</html>