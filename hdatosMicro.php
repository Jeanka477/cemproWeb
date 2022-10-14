<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">



           <!--Datos de la micro empresa-->
           <fieldset class="datos-familiares">
            <legend>Datos de la microempresa</legend>


            <label for="nombre">Nombre de la microempresa</label>
            <input type="text" placeholder="Nombre" id="nombre">  
            <br>

            <label for="direccion">Dirección</label>
            <input type="text" placeholder="Dirección exacta" id="direccion">
            <br>

            <label>Que tipo de Actividad realiza:</label>
            <br>
            <textarea name="textarea" rows="5" cols="80" placeholder="Escriba la actividad que realiza su microempresa"></textarea>

            <br>
            <label for="nEmpleados">Números de empleados</label>
             <input type="number"  id="empleados"> 
             <br>

             <label for="actividadRealizada">Que produce, vendeo servicio brinda:</label>
            <input type="text" placeholder="Servicio brindado" id="nombre">  
            <br>
           
            <label for="motivoActividad">Motivo de inicio de la actividad:</label>
            <input type="text" placeholder="motivoActividad" id="motivoActividad">  

            <label for="motivoActividad">¿Hace cuanto?:</label>
            <input type="text" placeholder="Hace cuanto se realiza la actividad" id="motivoActividad"> 
            <br>

            <label for="motivoActividad">¿Con cuánto Dinero inicio?:</label>
            <input type="text" placeholder="Hace cuanto se realiza la actividad" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿Con cuánto Dinero inicio?:</label>
            <input type="text" placeholder="Escriba el monto" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿El local donde realiza la actividad es propio?:</label>
            <input type="checkbox" name="peliculas"> SI
            <input type="checkbox" name="deportes"> NO
            <br>
            
            <label for="motivoActividad">¿A nombre de quien está el local?:</label>
            <input type="text" placeholder="Nombre del propietario" id="motivoActividad">

            <label for="telefono">Telefono</label>
            <input type="text" placeholder="Telefono" id="telefono">
            <br>

         <label for="motivoActividad">¿Hace cuanto utiliza el local?:</label>
            <input type="text" placeholder="" id="motivoActividad">

            <label for="motivoActividad">¿Cuánto paga de alquiler?:</label>
            <input type="text" placeholder="Cifra en colones" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿Quiénes son sus clientes?:</label>
            <input type="text" placeholder="Ejem agricultores" id="motivoActividad">
            <br>
            <label for="motivoActividad">Número de clientes:</label>
            <input type="number"  id="empleados"> 
            <br>

            <label for="motivoActividad">¿Cuánto vende o recupera?:</label>
            <label for="motivoActividad">¿Meses buenos?:</label>
            <input type="text" placeholder="Cifra en colones" id="motivoActividad">

            <label for="motivoActividad">¿Meses malos?:</label>
            <input type="text" placeholder="Cifra en colones" id="motivoActividad">
            
            <label for="motivoActividad">¿Último mes?:</label>
            <input type="text" placeholder="Cifra en colones" id="motivoActividad">
         </fieldset>
        </form>

        <a class="boton-celeste" href="hhipoteca.php">Siguiente</a>
    </main>

    <?php incluirTemplate('footer');?>