<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <title>Qualificame | Planes</title>

  <!--CSS-->
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <link rel="stylesheet" href="../assets/css/personalizadoA.css">
  <!--<link rel="stylesheet" href="assets/css/personalizadoB.css">-->
  <link rel="stylesheet" id="cutsomEstilos" href="">
  <link rel="stylesheet" href="../assets/css/owl-carousel.css">
  <link rel="stylesheet" href="../assets/css/lightbox.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript">
    var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
    var condition = iOS;
    var bandera;
    if (condition) {
      bandera = 1;
      document.getElementById('cutsomEstilos').href = '../assets/css/personalizadoiOs.css';
    } else {
      bandera = 2;
      document.getElementById('cutsomEstilos').href = '../assets/css/personalizadoB.css';
    }
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link type="image/x-icon" href="../assets/images/imgIndico/iconoindicoB.ico" rel="shortcut icon" /> <!-- EL FAVICON <-->
  </-->
</head>

<body>

  <!-- ***** Preloader *****-->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Fin Preloader ***** -->


  <!-- ***** INICIO HEADER ***** -->
  <header class="header-area header-sticky background-header-about">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="../index.html" class="logo">
              <img src="../assets/images/logoQu.png" alt="" class="" id="logoIndico-about" style="height: 80px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="../index.html#top" class="active">Inicio</a></li>
              <li class="scroll-to-section"><a href="../planes/index.html">Planes</a></li>
              <li class="scroll-to-section"><a href="../index.html#contact-us">Contacto</a></li>

            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** FIN HEADER ***** -->

  <!-- ***** About Area Starts ***** -->
  <section class="section gradientGrisAzul2" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="left-text-content tm_paracenter mod-img-mobile">
            <div class="section-heading " style="margin-top:50px;">
              <h2 style="color: white;">¡Es hora de introducir su negocio al programa!</h2>
              <br>
            </div>
            <img src="../assets/images/horus_safes_school.png" alt="">
            <div class="section-heading " style="margin-top:50px;">
              <h2 style="color: white;">¡Seleccione alguno de los planes que tenemos para su compañía!</h2>
              <br>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
          <div class="features-item">
            <div class="features-content tm_paracenter">
              <h4>Starter</h4>
              <div class="service-item" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="../assets/images/imgIndico/iconoindico1.1.png" alt="">
                <h4>1 kiosco por $299 / mes</h4>
              </div>
              <div class="features-icon" style="margin-bottom: 10px;">
                  <img src="../assets/images/photograph.png" alt="" style="width:30%; margin: auto; display:block;">
              </div>
              <a href="" class="main-stroked-button">Ordenar11</a>
              <script
                src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                data-preference-id="<?php echo $preference->id; ?>">
              </script>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
          <div class="features-item">

            <div class="features-content tm_paracenter">
              <h4>Micro</h4>
              <div class="service-item" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="../assets/images/imgIndico/iconoindico1.1.png" alt="">
                <h4>2 kioscos por $499 / mes</h4>
              </div>
              <div class="features-icon" style="margin-bottom: 10px;">
                  <img src="../assets/images/credit-card.png" alt="" style="width:30%; margin: auto; display:block;">
              </div>
              <a href="" class="main-stroked-button">Ordenar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">
          <div class="features-item">

            <div class="features-content tm_paracenter">
              <h4>PYME</h4>

              <div class="service-item" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="../assets/images/imgIndico/iconoindico1.1.png" alt="">
                <h4>4 kioscos por $950 / mes</h4>
              </div>
              <div class="features-icon" style="margin-bottom: 10px;">
                  <img src="../assets/images/scan.png" alt="" style="width:30%; margin: auto; display:block;">
              </div>
              <a href="" class="main-stroked-button">Ordenar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
          <div class="features-item">

            <div class="features-content tm_paracenter">
              <h4>Corporativo</h4>
              <div class="service-item" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="../assets/images/imgIndico/iconoindico1.1.png" alt="">
                <h4>5 kioscos por $999 / mes</h4>
              </div>
              <div class="features-icon" style="margin-bottom: 10px;">
                  <img src="../assets/images/scan.png" alt="" style="width:30%; margin: auto; display:block;">
              </div>
              <a href="" class="main-stroked-button">Ordenar</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ***** About Area Ends ***** -->

  <!-- ***** Footer ***** -->
  <footer class="gradientQualificame">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="left-text-content">
            <p>Copyright &copy; 2020 Grupo Indico.
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

  <!-- jQuery -->
  <script src="../assets/js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap -->
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/scrollreveal.min.js"></script>
  <script src="../assets/js/waypoints.min.js"></script>
  <script src="../assets/js/jquery.counterup.min.js"></script>
  <script src="../assets/js/imgfix.min.js"></script>
  <script src="../assets/js/slick.js"></script>
  <script src="../assets/js/lightbox.js"></script>
  <script src="../assets/js/isotope.js"></script>

  <!-- Global Init -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>
