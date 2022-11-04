<?php

require 'includes/app.php';

incluirTemplate('header');
 ?>
  <body style="background-color: #b5ffe545">
<br>
<br>
<br>
<br>
<br>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2> Proyectos financiados por CEMPRODECA </h2>

            <?php

                $limite = 10;
                include 'includes/templates/anuncio_proyecto.php';
            ?>            
        
    </main>
  </body>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>