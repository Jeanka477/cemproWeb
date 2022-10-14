<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos Familiares</legend>
            <label for="nombreconyugue">Nombre del conyugue o compañer@</label>
            <input type="text" placeholder="Nombre de su pareja" id="nombreconyugue">
            <br>

            <label for="trabajo">Lugar de trabajo</label>
            <input type="text" placeholder="Lugar donde labora" id="trabajo">

            <label for="telefono">Telefono</label>
            <input type="text" placeholder="Telefono" id="telefono">
            <br>

            <label for="nombre-familiar">Nombre de familiar que no vive con usted:</label>
            <input type="text" placeholder="Nombre Completo" id="nombre-familiar">
            <br>
            
            <label for="direccion">Dirección</label>
            <input type="text" placeholder="Dirección exacta" id="direccion">

            <label for="telefono">Telefono</label>
            <input type="text" placeholder="Telefono" id="telefono">



        
        </form>

        <a class="boton-celeste" href="hdatosMicro.php">Siguiente</a>
    </main>

    <?php incluirTemplate('footer');?>