<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
<br><br><br><br>
    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">


            <!--Datos personales-->
         <fieldset class="datos-personales">
            
             <legend>Datos personales</legend>

             <label for="Monto">Monto a solicitar</label>
             <input type="number"  id="Monto" placeholder="Monto en colones" >
             <br>

             <label for="nombre">Nombre</label>
             <input type="text" placeholder="Tu nombre" id="nombre">


             <label for="id">Fecha de nacimiento</label>
             <input type="date" id="id">
             <br>


             <label for="edad">Edad</label>
             <input type="number"  id="edad" min="10" max="100"> 
             
            
             <label for="escolaridad">Escolaridad</label>
             <select name="select" id="escolaridad">
                <option value="value1"selected>Seleccione</option>
                <option value="value2" >Primaria incompleta</option>
                <option value="value2" >Primaria completa</option>
                <option value="value3">Secundaria incompleta</option>
                <option value="value3">Secundaria completa</option>
                <option value="value2" >Universidad incompleta</option>
                <option value="value2" >Universidad completa</option>
              </select>


              <br>
              <label for="estadoCivil">Estado civil</label>
             <select name="estadoCivil" id="estadoCivil">
                <option value="value1"selected>Seleccione</option>
                <option value="value2" >Soltero</option>
                <option value="value2" >Casado</option>
                <option value="value3">Divorciado</option>
                <option value="value3">Union libre</option>
              </select>

              <label for="matrimonio">Números de Matrimonios</label>
             <input type="number"  id="matrimonio" min="0" max="20"> 

             <label for="cedula">Cedula</label>
             <input type="text" placeholder="Tu cedula" id="cedula">

             <label for="cedula">Profesión u oficio</label>
             <input type="text" placeholder="Tu cedula" id="cedula">

             <br>
            

              
             <legend>Direccion exacta</legend>
             <textarea name="textarea" rows="5" cols="80">Escriba la dirección exacta de su domicilio</textarea>
            <br>


            <label for="nombre">Cantón</label>
            <input type="text" placeholder="Tu nombre" id="nombre">


            <label for="Provincia">Provincia</label>
            <select name="select" id="provincia">
                <option value="value1"selected>Seleccione</option>
                <option value="value2" >San José</option>
                <option value="value2" >Heredia</option>
                <option value="value3" >Alajuela</option>
                <option value="value3" >Guanacaste</option>
                <option value="value2" >Puntarenas</option>
                <option value="value2" >Limón</option>
                <option value="value2" >Cartago </option>
              </select>


            <label for="nombre">Telefono propio</label>
            <input type="text" placeholder="Tu nombre" id="nombre">


            <label for="nombre">Otro contacto</label>
            <input type="text" placeholder="Tu nombre" id="nombre">   
         </fieldset>

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



         </fieldset>

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
            <textarea name="textarea" rows="5" cols="80" placeholder="Escriba la actividad que realiza su microempresa"></textarea>

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

        <aclass="btn btn-primary" href="#">Enviar formulario</a>
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>