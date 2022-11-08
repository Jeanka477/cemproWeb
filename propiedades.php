<?php 

require 'includes/app.php';

  incluirTemplate('header');
 ?>
<body>
  


<br><br><br><br>


 <main class="contenedor seccion" >
 <header class="section-header wow fadeInUp imagen-historia">
    <div style=" background: linear-gradient(rgba(0, 142, 99, 0.1), rgba(0, 0, 0, 0.1)), url(BizPage/assets/img/call-to-action-bg.jpg) fixed center center;  background-size:cover; background-repeat: no-repeat ">
    <br>
    <br><br><br><br><br><br><br><br>  <br><br><br> 
    <h3 style="color: white">Propiedades en Venta </h3>

    </header>
    

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