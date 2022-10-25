<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
 <br>
 <br>
 <br>
 <br>

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

         
        </form>

        <a class="boton-celeste" href="hdatosF.php">Siguiente</a>
        <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    </main>

    <?php incluirTemplate('footer');?>