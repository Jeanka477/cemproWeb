<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2> Cursos </h2>

            <?php

                $limite = 10;
                include 'includes/templates/anuncio_curso.php';
            ?>            
        
    </main>

    <?php incluirTemplate('footer');?>