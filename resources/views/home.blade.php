@extends('layouts.base')
@section('content')



  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">RollersGroup</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="{{asset('assets/')}}img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">RollersGroup</a></li>
          <li><a href="#about">Nuestros Servicios</a></li>
          <li><a href="#services">Sobre Nosotros</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <!-- <li><a href="#team">Equipo</a></li> -->
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Brindamos Valor a tu Negocio</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/2.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Valoramos tu Tiempo</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/3.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Máxima Dedicación a Cada Proyecto</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/4.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Proyectos 100% a tu Medida</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/5.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>La Última Tecnología a tu Alcance</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title" style="color:white;">Roller's Quality</h4>
            <p class="description">Software de primer nivel, con los más altos estándares de calidad</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title" style="color:white;">Roller's Time</h4>
            <p class="description">Cumpliendo con responsabilidad, sabemos que cada segundo es vital para tu negocio</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title" style="color:white;">Roller's Love</h4>
            <p class="description">Distinción y dedicación en nuestros proyectos, cada emprendimiento, negocio o idea es única y necesita dejar su huella</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros Servicios</h3>
          <p></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('assets/img/producto1.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2  href="services" class="title" style="color:black;"><a href="#portfolio">Páginas Web</a></h2>
              <p>
              Sitios Web modernos e interactivos. Todo incluido. Nic Chile y Hosting. Llámenos y Cotice.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('assets/img/producto2.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 href="#services" class="title" style="color:black;"><a href="#portfolio">Aplicaciones Web</a></h2>
              <p>
                Aplicaciones Web Autoadministrables con altos estándares de manejo de bases de datos, esencial para el manejo de información.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('assets/img/about-vision.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2  href="#services" class="title" style="color:black;"><a href="#portfolio">E-Commerce</a></h2>
              <p>
              Vende online con boleta electrónica y control stock. Todo lo que necesitas para partir vendiendo online sin complicaciones técnicas.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Sobre Nosotros</h3>
          <center><h4>Somos jóvenes Ingenieros Informáticos de la Universidad de Santiago de Chile. 
          <br>
          Emprendedores y apasionados por la tecnología.
          </h4>
          </center>
          <br>
          <br>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title" style="color:black;">Experiencia</h4>
            <p class="description">Nuestra experiencia se basa en el desarrollo Web para emprendedores y negocios. Desarrollo Web para la gestión de empresas, de manera eficiente con soluciones financieras, contables y administrativas</p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title" style="color:black;">Conocimiento</h4>
            <p class="description">Nuestros Desarrolladores cuentan con vasta experiencia en el manejo de base datos, servidores y diseño web. Especializados en soluciones seguras, eficientes y dinámicas</p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
           <h4 class="title" style="color:black;">Actualidad</h4>
          <p class="description">Estamos siempre a la vanguardia de la tecnología, buscando la forma de avanzar y así tu negocio con nosotros también.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title" style="color:black;">Velocidad</h4>
            <p class="description">Los mejores tiempos de entrega. Sabemos que cada segundo es vital para tu negocio, valoramos tu tiempo sin dejar la calidad de lado</p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title" style="color:black;">Calidad</h4>
            <p class="description">Somos emprendedores al igual que la mayoría de nuestros clientes, comprendemos que cada negocio debe dejar su huella en las personas, que cada proyecto debe ser único y con altos estándares de calidad</p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title" style="color:black;">Equipo</h4>
            <p class="description">Somos un equipo de jóvenes Ingenieros, comprometidos a entregar una solución a su medida, para brindar el máximo valor a tu negocio</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
       <q style="font-style: oblique; color: white;">El mayor riesgo es no correr ningún riesgo. En un mundo que cambia realmente rápido, la única estrategia que te garantiza el fracaso es no correr riesgos</q>
       <p></p>
       <p align="right" class="description">Mark Zuckerberg.-</p>
       </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!-- <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML 5 <i class="val">80%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Bootstrap <i class="val">75%</i></span>
            </div>
          </div>

           <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">VueJS <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">ReactJS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">AngularJS <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Laravel <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Spring Boot <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">MongoDB <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PostgreSQL <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">MySQL <i class="val">100%</i></span>
            </div>
          </div>

           <div class="progress">
            <div class="progress-bar bg-danger" style="back-ground-color: black;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Python <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">C <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">C# <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">C++ <i class="val">100%</i></span>
            </div>
          </div>

           <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Java <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">100%</i></span>
            </div>
          </div>

           <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Swift <i class="val">100%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!--==========================
      Facts Section
    ============================-->
    <!-- <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1231</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5000</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

        <div class="facts-img">
          <img src="{{asset('assets/img/facts-img.png')}}" alt="" class="img-fluid">
        </div>

      </div>
    </section>#facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Portafolio</h3>
        </header>

        {{-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <!-- <li data-filter=".filter-app">App</li> -->
              <li data-filter=".filter-encuesta">Encuesta</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row portfolio-container">


          <div class="col-lg-4 col-md-6 portfolio-item filter-encuesta wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/Logo-msc.jpeg')}}" class="img-fluid img-convenio" alt="" style="min-height: 240px;">
                <a href="{{asset('assets/img/portfolio/Logo-msc.jpeg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="http://mujersocialchile.cl/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="http://mujersocialchile.cl/">Mujer Social Chile</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/evento.jpg')}}" class="img-fluid img-convenio" alt="">
                <a href="{{asset('assets/img/portfolio/evento.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/event">Web para Eventos</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/web3.jpg')}}" class="img-fluid img-convenio" alt="">
                <a href="{{asset('assets/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/ecommerce">Web para Ecommerce</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros Clientes</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="{{asset('assets/img/clients/client-1.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-2.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-3.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-4.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-5.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-6.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-7.png')}}" alt="">
          <img src="{{asset('assets/img/clients/client-8.png')}}" alt="">
        </div>

      </div>
    </section>#clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonios</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/')}}img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>#testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipo</h3>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Guillermo Campos</h4>
                  <div class="social">
                    <a href="https://twitter.com/guillermo141012?lang=es"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/GuilleFernandoo"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/guillermocamposm/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{asset('assets/img/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Omar Carrasco</h4>
                  <div class="social">
                    <a href="https://twitter.com/GoingSoCrazy?s=08"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/ocarrascoe"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('assets/img/team-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jose Maureira</h4>
                  <div class="social">
                    <a href="https://twitter.com/JoseMaureira13?lang=es"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/josemaurei"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{asset('assets/img/team-4.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Eduardo Pailemilla</h4>
                  <div class="social">
                    <a href="https://twitter.com/Edu_790?lang=es"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/eduardo.pailemilla"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/eduardo-pailemilla-1412a8161/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>#team -->


@endsection