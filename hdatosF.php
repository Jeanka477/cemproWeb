<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
<br><br><br><br>
    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos Familiares</legend>
            <label for="nombreconyugue">Nombre del conyugue o compañer@</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre de su pareja" id="nombreconyugue">
            <br>

            <label  for="trabajo">Lugar de trabajo</label>
           
            <input class="form-control w-25 aling text-center type="text" placeholder="Lugar donde labora" id="trabajo">

            <label for="telefono">Telefono</label>
            <input  class="form-control w-25 aling text-center type="text" placeholder="Telefono" id="telefono">
            <br>

            <label for="nombre-familiar">Nombre de familiar que no vive con usted:</label>
            <input  class="form-control w-25 aling text-center type="text" placeholder="Nombre Completo" id="nombre-familiar">
            <br>
            
            <label for="direccion">Dirección</label>
            <input  class="form-control w-25 aling text-center type="text" placeholder="Dirección exacta" id="direccion">

            <label for="telefono">Telefono</label>
            <input  class="form-control w-25 aling text-center type="text" placeholder="Telefono" id="telefono">



        
        </form>
<br>
        <a class="btn btn-primary" href="hdatosMicro.php">Siguiente</a>
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>