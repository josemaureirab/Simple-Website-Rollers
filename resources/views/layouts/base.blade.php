<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RollersGroup</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <head>
  <meta charset="utf-8">
  <title>RollersGroup</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('assets/img/fav.ico')}}" rel="icon">
  <link href="{{asset('assets/img/fav.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/animate/animate.min.css" rel="stylesheet')}}">
  <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet')}}">
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/css/style.css" rel="stylesheet')}}">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

@yield('content')
      <!--==========================
      Contact Section
    ============================-->
    <div class="contact" style="background: #f7f7f7;">
      <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contáctanos</h3>
          <p>Respondemos a la brevedad</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>Santiago, Chile</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Celular</h3>
              <p><a href="tel:">+ 56 9 3530 5355</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Correo</h3>
              <p><a href="mailto:contacto@rollers.cl">contacto@rollers.cl</a></p>
            </div>
          </div>

        </div>
      </div>
      </section><!-- #contact -->

      <div class="container">
        <div class="form section-bg wow fadeInUp">
          <form method="POST" action="{{ url('send/email') }}">
            @csrf

            @if(Session::has("success"))
                <div class="alert alert-success">
                    <b>¡Envío exitoso!</b>, se ha realizado el envío, será contactado a la brevedad.
                </div>
            @endif
            <div class="form-row">
              <div class="form-group col-md-6">
                <input 
                id="name"
                name="name"
                type="text"
                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                value="{{ old('name') }}"
                placeholder="Nombre" 
                >
              </div>
              <div class="form-group col-md-6">
                <input 
                id="email"
                name="email"
                type="email"
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                value="{{ old('email') }}" 
                placeholder="Correo" 
                >
              </div>
            </div>
            <div class="form-group">
              <input 
              id="subject"
              name="subject"
              type="text"
              class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" 
              value="{{ old('subject') }}" 
              placeholder="Asunto" 
              >
            </div>
            <div class="form-group">
              <textarea 
              id="message"
              name="message"
              class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" 
              cols="30" 
              rows="5"
              placeholder="Mensaje"
              ></textarea>
            </div>
             <div class="text-center"><button type="submit" style="background: #18d26e;border: 0;margin-bottom: 60px;padding: 10px 30px;color: #fff;transition: 0.4s;cursor: pointer;\}: ;">Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
    </div>
    
    

  </main>


  <!-- Smartsupp Live Chat script -->
<script>
function sendWhatsapp() {
        window.open(
          `https://api.whatsapp.com/send?phone=56935305355`,
          "_blank"
        );
      }
</script>



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Rollers Group</h3>
            <p>Keep Rolling.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces Útiles</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Inicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Nuestros Servicios</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Sobre Nosotros</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terminos de Servicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Politica de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctanos</h4>
            <p>
              Santiago<br>
              Chile <br>
              <strong>Celular:</strong> +569 3530 5355<br>
              <strong>Correo:</strong> contacto@rollers.cl<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/RollersDev/" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/rollers_group/" class="instagram" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Noticias</h4>
            <p>Actualizado con RollersGroup</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Suscríbete">
            </form>
          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>RollersGroup</strong>. Todos los Derechos Reservados
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a class="whatsapp" onclick="sendWhatsapp()"><i class="fab fa-whatsapp"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('assets/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('assets/js/main.js')}}"></script>



</body>

</html>

<style>
.whatsapp{
  position: fixed;
  background: #000;
  color: #25d366 !important;
  padding: 2px 10px 2px 10px;
  font-size: 28px;
  border-radius: 60px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 100000;
}
.whatsapp:focus {
  background: #25d366;
  color: #000;
  outline: none;
}

.whatsapp:hover {
  background: #25d366;
  color: #000 !important;
}
</style>