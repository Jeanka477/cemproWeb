<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
<br><br><br><br>
    <main class="contenedor seccion">
        

        <h2>Formulario para solicitud de prestamos</h2>
        <form class="formulario">


            <!--Datos personales-->
         <fieldset class="datos-personales ">
            
             <legend>Datos personales</legend>

             <label for="Monto">Monto a solicitar</label>
             <input class="form-control w-25 aling " type="number"  id="Monto" placeholder="Monto en colones" >
            
             <label for="nombre">Nombre</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre">


             <label for="id">Fecha de nacimiento</label>
             <input  class="form-control w-25 aling text-center"type="date" id="id">
          


             <label for="edad">Edad</label>
             <input class="form-control w-25 aling text-center" type="number"  id="edad" min="10" max="100"> 
             
            
             <label " for="escolaridad">Escolaridad</label>
             <select class="form-control w-25 aling text-center" name="select" id="escolaridad">
                <option value="value1"selected>Seleccione</option>
                <option value="value2" >Primaria incompleta</option>
                <option value="value2" >Primaria completa</option>
                <option value="value3">Secundaria incompleta</option>
                <option value="value3">Secundaria completa</option>
                <option value="value2" >Universidad incompleta</option>
                <option value="value2" >Universidad completa</option>
              </select>


          
              <label for="estadoCivil">Estado civil</label>
             <select class="form-control w-25 aling text-center" name="estadoCivil" id="estadoCivil">
                <option value="value1"selected>Seleccione</option>
                <option value="value2" >Soltero</option>
                <option value="value2" >Casado</option>
                <option value="value3">Divorciado</option>
                <option value="value3">Union libre</option>
              </select>

              <label for="matrimonio">Números de Matrimonios</label>
             <input class="form-control w-25 aling text-center" type="number"  id="matrimonio" min="0" max="20"> 

             <label for="cedula">Cedula</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu cedula" id="cedula">

             <label for="cedula">Profesión u oficio</label>
             <input class="form-control w-25 aling text-center"type="text" placeholder="Tu cedula" id="cedula">

             <br>
            

              
             <legend>Direccion exacta</legend>
             <textarea class="form-control w-25 aling text-center" name="textarea" rows="5" cols="80">Escriba la dirección exacta de su domicilio</textarea>
            <br>


            <label for="nombre">Cantón</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre">


            <label for="Provincia">Provincia</label>
            <select class="form-control w-25 aling text-center" name="select" id="provincia">
                <option class="form-control w-25 aling text-center" value="value1"selected>Seleccione</option>
                <option value="value2" >San José</option>
                <option value="value2" >Heredia</option>
                <option value="value3" >Alajuela</option>
                <option value="value3" >Guanacaste</option>
                <option value="value2" >Puntarenas</option>
                <option value="value2" >Limón</option>
                <option value="value2" >Cartago </option>
              </select>


            <label for="nombre">Telefono propio</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre">


            <label for="nombre">Otro contacto</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre">   
         </fieldset>

         
        </form>
<br>
        <a class="btn btn-primary" href="hdatosF.php">Siguiente</a>
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>