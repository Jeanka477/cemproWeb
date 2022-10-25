<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
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

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>