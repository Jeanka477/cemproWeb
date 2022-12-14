<?php

require 'includes/app.php';

//  incluirTemplate('header', $inicio = true);
//  include 'header.php';
 ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CEMPRODECA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/BizPage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/BizPage/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <a href="/">
                   <!-- <img src="build/img/logo.svg" alt="Logotipo de cemprodeca">-->

                   <img loading="lazy" src="BizPage/assets/img/CEMPRODECA.png" alt="anincio" class="logoCemprodeca">
                </a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
            <li class="dropdown"><a href="#"><span>Solicitar Cr??dito</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="../../requisitoHipoteca.php">Por Hipoteca</a></li>
                  <li><a href="../../RequisitoFiador.php">Por Fiador</a></li>
                  </li>
                </ul>
              </li>
              
              <li><a class="nav-link scrollto" href="propiedades.php">Propiedades</a></li>
              <li><a class="nav-link scrollto" href="proyectos.php">Proyectos</a></li>
              <li><a class="nav-link scrollto " href="cursos.php">Cursos</a></li>
              
              <li><a class="nav-link  " href="login.php">Iniciar Sesi??n</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- <div class="carousel-item active" style="background-image: url(/BizPage/assets/img/hero-carousel/1.jpg)"> -->
          <div class="carousel-item active" style="background-image: url(BizPage/assets/img/CemproWebInicio.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Somos Profesionales</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="historia.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Nuestra Historia</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(BizPage/assets/img/milpa.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Apoyamos todo tipo de emprendimiento</h2>
                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(BizPage/assets/img/apicultura.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Apicultura</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(BizPage/assets/img/naranjal.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">C??tricos</h2>
                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(BizPage/assets/img/FOTOhojancha.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Hojancha</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <!-- <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="bi bi-briefcase"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-card-checklist"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="bi bi-binoculars"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section>End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Sobre nosotros</h3>
          <p>Durante a??os nos hemos caracterizado por apyoyar el desarrollo de peque??os y medianos emprendedores.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
               <img src="BizPage/assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestra Misi??n</a></h2>
              <p>
              Promover el desarrollo sostenible de la regi??n, por medio de los peque??os y medianos micro-empresarios rurales, desarrollando iniciativas que posibiliten los encadenamientos y la complementariedad productividad que est??n en armon??a con el medio ambiente, la participaci??n democr??tica y con enfoque de g??nero.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
               <img src="BizPage/assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestro Plan</a></h2>
              <p>
              Ayudar a toda aquel emprendedor que superarse pero no cuenta con los recursos necesarios para lograrlo.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
               <img src="BizPage/assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestra Visi??n</a></h2>
              <p>
              Ser una organizaci??n l??der, s??lida y sostenible y con el compromiso de sus asociados y clientes en la promoci??n del desarrollo social de los peque??os y medianos productores y empresarios rurales de la regi??n, por medio del desarrollo de servicios de cr??ditos, capacitaci??n y asistencia t??cnica y mercadeo.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p>En CEMPRODECA nos preocupamos por nuestros clientes y asociados. Por esta raz??n contamos con una variedad de facilidades y oportunidades para brindarle a nuestros clientes una mejor oportunidad de superarse.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Apoyo a la comunidad</a></h4>
            <p class="description">Nos caracterizamos por estar invlucrados con aquellos proyectos de peque??os y medianos emprendedores.</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-cash"></i></div>
            <h4 class="title"><a href="">Cr??ditos</a></h4>
            <p class="description">Contamos con opciones de cr??ditos. Acceda a ellos de una manera sencilla y con un bajo porcentaje de intereses.</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Cursos</a></h4>
            <p class="description">Servimos como mediador entre todas aquellas personas que deseen adquirir nuevos conocimientos y las organizaciones que ofrecen la oportunidad de aprendizaje.</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>Propiedades en Venta</h3>
        <p></p>
        <a class="cta-btn" href="propiedades.php">Ver Todas las Propiedades</a>
      </div>
    </section>
    
    <br>
    <br>

    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>Proyectos Financiados</h3>
        <a class="cta-btn" href="proyectos.php">Ver Todos los Proyectos</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

        <div class="facts-img">
         <img src="BizPage/assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section>End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 1</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 3</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 2</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 2</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 2</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 3</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 1</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 3</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
             <img src="BizPage/assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 1</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section>End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="BizPage/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                 <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                 <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div>End testimonial item -->
<!-- 
            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="BizPage/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                 <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                 <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="BizPage/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                 <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                 <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div>End testimonial item -->
<!-- 
            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="BizPage/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                 <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                 <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div>End testimonial item -->
<!-- 
            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="BizPage/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                 <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                 <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div>End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Team</h3>
          <p>Estudiantes encargados del desarrollo de la plataforma</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
             <img src="BizPage/assets/img/Jeank.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jean Carlos Quir??s</h4>
                  <span>Desarrollador</span>
                  <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
             <img src="BizPage/assets/img/arianaa.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ariana P??rez</h4>
                  <span>Desarrollador</span>
                  <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
             <img src="BizPage/assets/img/kerlyn.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kerlin Carranza</h4>
                  <span>Desarrollador</span>
                  <div class="social">
                    <a href="https://api.whatsapp.com/send/?phone=%2B50685842149&text&type=phone_number&app_absent=0"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.facebook.com/kerlyn.carranza.1/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/kerlyn_cs20/"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
             <img src="BizPage/assets/img/jorgee.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jorge Villalobos</h4>
                  <span>Desarrollador</span>
                  <div class="social">
                    <a href="https://api.whatsapp.com/send/?phone=%2B50684807024&text&type=phone_number&app_absent=0"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100012694808945"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/jorge_v26/"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Cont??ctenos</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Direcci??n</h3>
              <address>200 metros este de la Municipalidad de Hojancha</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>N??mero de Tel??fono</h3>
              <p><a href="tel:+155895548855">+506 2659 9038</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">cemprodeca@gmail.com</a></p>
            </div>
          </div>

        </div>





        <!-- ESTO ES EL FORMULARIO -->

        <!-- <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>CemproWeb</h3>
            <p>Plataforma digital web desarrollada por estudiantes de la Universidad Nacional de Costa Rica en la carrera de Ingenier??a de Sistemas de la Informaci??n, para la organizacion Centro de Promoci??n y Desarrollo Campesino CEMPRODECA.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Partes de la p??gina</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Cont??ctenos</h4>
            <p>
            Provincia de Guanacaste<br>
              Hojancha 51101<br>
              Costa Rica <br>
              <strong>Tel??fono:</strong> +506 2659 9038<br>
              <strong>Correo:</strong> cemprodeca@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/profile.php?id=100063784601391" class="facebook"><i class="bi bi-facebook"></i></a>
              <!-- <a href="https://api.whatsapp.com/send/?phone=%2B50688557250&text&type=phone_number&app_absent=0" class="instagram"><i class="bi bi-whatsapp"></i></a> -->
              
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Ubicaci??n</h4>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4792.96789994426!2d-85.41782338316608!3d10.05850659033916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fbb6c05e6dc73%3A0xb0b0e349b2990a84!2sCEMPRODECA%20Hojancha!5e1!3m2!1ses-419!2scr!4v1667517170218!5m2!1ses-419!2scr"
               width="350" height="250" 
              style="border-radius:3%;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>CemproWeb</strong>. Todos los Derechos Reservados
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Desarrollado por <a href="#">Universidad Nacional de Costa Rica</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="BizPage/assets/vendor/purecounter/purecounter.js"></script>
  <script src="BizPage/assets/vendor/aos/aos.js"></script>
  <script src="BizPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="BizPage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="BizPage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="BizPage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="BizPage/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="BizPage/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="BizPage/assets/js/main.js"></script>

</body>