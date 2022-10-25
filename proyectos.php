<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2> Proyectos financiados por CEMPRODECA </h2>

            <?php

                $limite = 10;
                include 'includes/templates/anuncio_proyecto.php';
            ?>            
        
    </main>

    <?php incluirTemplate('footer');?>