<?php 

require 'includes/app.php';

//   incluirTemplate('header');
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
 <body style="background-color: #b5ffe545">


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
            <li class="dropdown"><a href="#"><span>Solicitar Crédito</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="../../requisitoHipoteca.php">Por Hipoteca</a></li>
                  <li><a href="../../RequisitoFiador.php">Por Fiador</a></li>
                  </li>
                </ul>
              </li>
              
              <li><a class="nav-link scrollto" href="propiedades.php">Propiedades</a></li>
              <li><a class="nav-link scrollto" href="proyectos.php">Proyectos</a></li>
              <li><a class="nav-link scrollto " href="cursos.php">Cursos</a></li>
              
              <li><a class="nav-link  " href="login.php">Iniciar Sesión</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->





 <br><br><br><br><br><br>

 
    <h2> Propiedades a la venta </h2>

    <main class="contenedor seccion" >


        <section class="contenedor-propiedades contenedor seccion">
            






        

            <?php

        $limite = 10;
        include 'includes/templates/anuncios.php';
            ?>














    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


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






    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>