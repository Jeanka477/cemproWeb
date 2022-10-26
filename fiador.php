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
            <legend>Datos del fiador</legend>
            <label for="nombreconyugue">Nombre del fiador@</label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Primer apellido del fiador</label>
            <input type="text"  id="nombreconyugue">
            <br>

            
            <label for="nombreconyugue">Segundo apellido del fiador</label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Cédula del fiador</label>
            <input type="text"  id="nombreconyugue">
            <br>

            <label for="trabajo">Lugar de trabajo</label>
            <input type="text"  id="trabajo">

            <br>
            <label for="telefono">Telefono</label>
            <input type="text"  id="telefono">

            <br>
            <label for="nombreconyugue">Direccion Exacta </label>
            <input type="text"  id="nombreconyugue">
            <br>
            
            <label for="telefono">Salario Bruto</label>
            <input type="text"  id="telefono">

            <br>
            <label for="telefono">Salario Liquido</label>
            <input type="text"  id="telefono">
            <br>
        </form>

        <aclass="btn btn-primary" href="#">Enviar formulario</a>
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>