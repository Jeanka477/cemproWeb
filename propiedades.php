<?php 

require 'includes/app.php';

//   incluirTemplate('header');
 ?>
 
 <body style="background-color: #b5ffe545">
 <br><br><br><br><br><br>

 
    <h2> Propiedades a la venta </h2>

    <main class="contenedor seccion" >


        <section class="contenedor-propiedades contenedor seccion">
            

            <?php

        $limite = 10;
        include 'includes/templates/anuncios.php';
            ?>

    </main>
</body>
    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>