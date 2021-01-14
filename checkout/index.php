<?php
// SDK de Mercado Pago
require __DIR__ .  './../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-5518087831558824-121820-a46e4ea35982569b534acaf3bd1c7dab-689693018');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Qualificame';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();

//curl -X POST -H "Content-Type: application/json" -H "Authorization: Bearer TEST-3475855272084855-121718-65ec8ab04293274efa66d4b35d245492-13179847" "https://api.mercadopago.com/users/test_user" -d "{'site_id':'MLM'}"
//{"id":689693018,"nickname":"TETE5749301","password":"qatest2691","site_status":"active","email":"test_user_45661783@testuser.com"} ***VENDEDOR TEST-5518087831558824-121820-a46e4ea35982569b534acaf3bd1c7dab-689693018
//{"id":689695129,"nickname":"TETE9328426","password":"qatest6826","site_status":"active","email":"test_user_60351606@testuser.com"} ***COMPRADOR

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Qualificame | Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assets/form/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/form/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/form/css/jquery-ui.css">
    <link rel="stylesheet" href="./assets/form/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/form/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../assets/form/css/aos.css">

    <link rel="stylesheet" href="../assets/form/css/style.css">

    <link rel="stylesheet" href="../assets/css/personalizadoA.css">
    <link rel="stylesheet" href="../assets/css/personalizadoB.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  </head>
  <body>

  <div class="site-wrap">
    <!-- ***** INICIO HEADER ***** -->
    <header class="header-area header-sticky background-header-about">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="../index.php" class="logo">
                <img src="../assets/images/logoQu.png" alt="" class="" id="logoIndico-about" style="height: 80px;">
              </a>
              <!-- ***** Logo End ***** -->

            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** FIN HEADER ***** -->

    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Datos</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">País <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">Seleccione su país</option>
                  <option value="2">México</option>
                  <option value="3">Estados Unidos</option>
                  <option value="4">Canadá</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Empresa </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calle y número">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Ciudad <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_city" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Código Postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Confirmación Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address_2" name="c_email_address_2">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Teléfono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" >
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Orden</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                        <td>$250.00</td>
                      </tr>
                      <tr>
                        <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                        <td>$100.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                        <td class="text-black">$350.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                      </tr>
                    </tbody>
                  </table>



                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">MercadoPago</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Realice su pago directamente a nuestra cuenta de MercadoPago. Para solicitar su factura, por favor envíe sus datos completos al correo ventas@gpoindico.com.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Proceder al pago</button>
                    <script
                      src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                      data-preference-id="<?php echo $preference->id; ?>">
                    </script>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

    <!-- ***** Footer ***** -->
    <footer class="gradientQualificame">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <div class="left-text-content">
              <p>Copyright &copy; 2021 Grupo Indico.
            </div>
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="right-text-content">
              <ul class="social-icons">
                <li>
                  <p>Visita nuestras redes</p>
                </li>
                <li><a target="_blank" rel="nofollow" class="fbColor" href="https://www.facebook.com/pages/category/Science--Technology---Engineering/Indico-Credencializaci%C3%B3n-101610451294718/"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5217711297137&text=¡Hola!%20quiero%20obtener%20información%20acerca%20de%20sus%20productos" class="waColor"><i class="fa fa-whatsapp"></i></a></li>
                <li><a target="_blank" rel="nofollow" href="https://www.instagram.com/indico_mx/" class="igColor"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FIN FOOTER -->
  </div>

  <script src="../assets/form/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/form/js/jquery-ui.js"></script>
  <script src="../assets/form/js/popper.min.js"></script>
  <script src="../assets/form/js/bootstrap.min.js"></script>
  <script src="../assets/form/js/owl.carousel.min.js"></script>
  <script src="../assets/form/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/form/js/aos.js"></script>

  <script src="../assets/form/js/main.js"></script>

  </body>
</html>
