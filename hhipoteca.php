<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos de la Hipoteca </legend>


            <label for="nombreconyugue">Número de finca</label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Numero de plano </label>
            <input type="text"  id="nombreconyugue">
            <br>

            
            <label for="nombreconyugue">Tiene Hipoteca en primer grado?</label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Direccion exacta de la propiedad </label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="trabajo">Tiene Construcciones?</label>
            <input type="text" id="trabajo">
         
        </form>

        <a class="boton-celeste" href="#">Enviar formulario</a>
    </main>

    <?php incluirTemplate('footer');?>