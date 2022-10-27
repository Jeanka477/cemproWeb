<?php

require 'includes/app.php';
$db =conectarDB();

 incluirTemplate('header');


 $errores = [];

 $monto_solicitar = '';
 $nombre_cliente = '';
 $fecha_nac = '';
 $edad = '';
 $escolaridad = '';
 $estado_civil = '';
 $num_matrimonios = '';
 $cedula = '';
 $profesion = '';
 $direccion = '';

 if ($_SERVER['REQUEST_METHOD'] ==='POST'){


  $monto_solicitar =  mysqli_real_escape_string( $db, $_POST['monto_solicitar']);
  $nombre_cliente =  mysqli_real_escape_string( $db, $_POST['nombre_cliente']);
  $fecha_nac =  mysqli_real_escape_string( $db, $_POST['fecha_nac']);
  $edad =  mysqli_real_escape_string( $db, $_POST['edad']);
  $escolaridad =  mysqli_real_escape_string( $db, $_POST['escolaridad']);
  $estado_civil =  mysqli_real_escape_string( $db, $_POST['estado_civil']);
  $num_matrimonios =  mysqli_real_escape_string( $db, $_POST['num_matrimonios']);
  $cedula =  mysqli_real_escape_string( $db, $_POST['cedula']);
  $profesion =  mysqli_real_escape_string( $db, $_POST['profesion']);
  $direccion =  mysqli_real_escape_string( $db, $_POST['direccion']);

  if(empty($errores)){
// insertar en la base de datos 
$query =" INSERT INTO formularios_hipoteca (monto_solicitar, nombre_cliente, fecha_nac, edad, escolaridad, estado_civil, num_matrimonios, 
cedula, profesion, direccion, provincia, canton, telefono, otro_telefono, companero, lugar_trabajo,
familiar_ext, direc_fam, tel_familiar, nombre_emp, direc_emp, tipo_actividad, num_emp, servicio, motivo_origen, 
dinero_inicial, local_propio, prop_local, tel_prop, uso_local, pago_alquier, clientes, cant_clientes, mes_bueno, ultimo_mes,


nombre_fiador, apellido1_fiador, apellido2_fiador, cedula_fiador, trabajo_fiador, tel_fiador, direc_fiador, salarioB_fiador)  


VALUES('$monto_solicitar', '$nombre_cliente', '$fecha_nac', '$edad', '$escolaridad', '$estado_civil', '$num_matrimonios', 
'$cedula', '$profesion', '$direccion', '$provincia', '$canton', '$telefono', '$otro_telefono', '$companero', '$lugar_trabajo', 
'$familiar_ext', '$direc_fam', '$tel_familiar', '$nombre_emp', '$direc_emp', '$tipo_actividad', '$num_emp', '$servicio', '$motivo_origen',
'$dinero_inicial', '$local_propio', '$prop_local', '$tel_prop', '$uso_local', '$pago_alquier', '$clientes', '$cant_clientes', '$mes_bueno', '$ultimo_mes',


'$nombre_fiador', '$apellido1_fiador', '$apellido2_fiador', '$cedula_fiador', '$trabajo_fiador', '$tel_fiador', '$direc_fiador', '$salarioB_fiador')";



// , provincia, canton, telefono, otro_telefono, companero, lugar_trabajo, 
// familiar_ext, direc_fam, tel_familiar, nombre_emp, direc_emp, tipo_actividad, num_emp, servicio, motivo_origen, 
// dinero_inicial, local_propio, prop_local, tel_prop, uso_local, pago_alquier, clientes, cant_clientes, mes_bueno, ultimo_mes,
// nombre_fiador, apellido1_fiador, apellido2_fiador, cedula_fiador, trabajo_fiador, tel_fiador, direc_fiador, salarioB_fiador

// , '$provincia', '$canton', '$telefono', '$otro_telefono', '$companero', '$lugar_trabajo', 
// '$familiar_ext', '$direc_fam', '$tel_familiar', '$nombre_emp', '$direc_emp', '$tipo_actividad', '$num_emp', '$servicio', '$motivo_origen',
// '$dinero_inicial', '$local_propio', '$prop_local', '$tel_prop', '$uso_local', '$pago_alquier', '$clientes', '$cant_clientes', '$mes_bueno', '$ultimo_mes',
// '$nombre_fiador', '$apellido1_fiador', '$apellido2_fiador', '$cedula_fiador', '$trabajo_fiador', '$tel_fiador', '$direc_fiador', '$salarioB_fiador'

//echo $query;   cod_proyecto, '$cod_proyecto',

$resultado = mysqli_query($db, $query);
if($resultado){
  header('location: /admin?resultado=1');
              }

        }  
 }

 ?>

<br><br><br><br>


    <main class="contenedor seccion">
        




        <h2>Formulario para solicitud de prestamos</h2>
       <?php foreach($errores as $error):?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>

   
          <?php endforeach; ?>


        <form class="formulario" method="POST" action="DatosP.php" enctype="multipart/form-data">


            <!--Datos personales-->
         <fieldset class="datos-personales">
            
             <legend>Datos personales</legend>

             <label for="Monto">Monto a solicitar</label>
             <input type="number"  id="Monto" placeholder="Monto en colones" name="monto_solicitar" value="<?php echo $monto_solicitar; ?>" >
             <br>

             <label for="nombre_cliente">Nombre</label>
             <input type="text" placeholder="Tu nombre" id="nombre_cliente" name="nombre_cliente" value="<?php echo $nombre_cliente; ?>" >


             <label for="fecha_nac" >
             <br>">Fecha de nacimiento</label>
             <input type="date" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha_nac; ?>">
             <br>


             <label for="edad">Edad</label>
             <input type="number"  id="edad" name="edad" min="10" max="100" value="<?php echo $edad; ?>"> 
             
            
             <label for="escolaridad">Escolaridad</label>
             <select id="escolaridad" name="escolaridad">
                <option value=""selected>Seleccione</option>
                <option value="Primaria incompleta">Primaria incompleta</option>
                <option value="Primaria completa" >Primaria completa</option>
                <option value="Secundaria incompleta">Secundaria incompleta</option>
                <option value="Secundaria completa">Secundaria completa</option>
                <option value="Universidad incompleta" >Universidad incompleta</option>
                <option value="Universidad completa" >Universidad completa</option>
              </select>


              <br>
              <label for="estado_civil">Estado civil</label>
             <select name="estado_civil" id="estado_civil">
                <option value=""selected>Seleccione</option>
                <option value="Soltero" >Soltero</option>
                <option value="Casado" >Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value=">Union libre">Union libre</option>
              </select>

              <label for="num_matrimonios">Números de Matrimonios</label>
             <input type="number"  id="num_matrimonios" min="0" max="20" name="num_matrimonios" value="<?php echo $num_matrimonios; ?>"> 

             <label for="cedula">Cedula</label>
             <input type="text" placeholder="Tu cedula" id="cedula" name="cedula" value="<?php echo $cedula; ?>">

             <label for="profesion">Profesión u oficio</label>
             <input type="text" placeholder="Tu profesion" id="profesion" name="profesion" value="<?php echo $profesion; ?>">

             <br>
            

              
             <legend>Direccion exacta</legend>
             <textarea id="direccion"  name="direccion"placeholder="Escriba una direccion "cols="80" rows="5" ><?php echo $direcccion; ?></textarea>
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

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos Familiares</legend>
            <label for="nombreconyugue">Nombre del conyugue o compañer@</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre de su pareja" id="nombreconyugue">
            <br>

            <label  for="trabajo">Lugar de trabajo</label>
           
            <input class="form-control w-25 aling text-center" type="text" placeholder="Lugar donde labora" id="trabajo">

            <label for="telefono">Telefono</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="telefono">
            <br>

            <label for="nombre-familiar">Nombre de familiar que no vive con usted:</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Nombre Completo" id="nombre-familiar">
            <br>
            
            <label for="direccion">Dirección</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Dirección exacta" id="direccion">

            <label for="telefono">Telefono</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="telefono">
        </fieldset>


          <!--Datos de la micro empresa-->
          <fieldset class="datos-familiares">
            <legend>Datos de la microempresa</legend>


            <label for="nombre">Nombre de la microempresa</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre" id="nombre">  
            <br>

            <label for="direccion">Dirección</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Dirección exacta" id="direccion">
            <br>

            <label>Que tipo de Actividad realiza:</label>
            <br>
            <textarea name="textarea" rows="3" cols="80" placeholder="Escriba la actividad que realiza su microempresa"></textarea>

            <br>
            <label for="nEmpleados">Números de empleados</label>
             <input class="form-control w-25 aling text-center type=" type="number"  id="empleados"> 
             <br>

             <label for="actividadRealizada">Que produce, vendeo servicio brinda:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Servicio brindado" id="nombre">  
            <br>
           
            <label for="motivoActividad">Motivo de inicio de la actividad:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="motivoActividad" id="motivoActividad">  

            <label for="motivoActividad">¿Hace cuanto?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Hace cuanto se realiza la actividad" id="motivoActividad"> 
            <br>

            <label for="motivoActividad">¿Con cuánto Dinero inicio?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Hace cuanto se realiza la actividad" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿Con cuánto Dinero inicio?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Escriba el monto" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿El local donde realiza la actividad es propio?:</label>
            <input  type="checkbox" name="peliculas"> SI
            <input type="checkbox" name="deportes"> NO
            <br>
            <br>
            <label for="motivoActividad">¿A nombre de quien está el local?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre del propietario" id="motivoActividad">

            <label for="telefono">Telefono</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="telefono">
            <br>

         <label for="motivoActividad">¿Hace cuanto utiliza el local?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Aproximado en días, meses o años." id="motivoActividad">

            <label for="motivoActividad">¿Cuánto paga de alquiler?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="motivoActividad">
            <br>

            <label for="motivoActividad">¿Quiénes son sus clientes?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Ejem agricultores" id="motivoActividad">
            <br>
            <label for="motivoActividad">Número de clientes:</label>
            <input class="form-control w-25 aling text-center" type="number"  id="empleados"> 
            <br>

            <label for="motivoActividad">¿Cuánto vende o recupera?:</label>
            <label for="motivoActividad">¿Meses buenos?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="motivoActividad">

            <label for="motivoActividad">¿Meses malos?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="motivoActividad">
            
            <label for="motivoActividad">¿Último mes?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="motivoActividad">
         </fieldset>



         <!--Datos hipoteca-->
         <fieldset class="datos-familiares">
            <legend>Datos de la Hipoteca </legend>


            <label for="nombreconyugue">Número de finca</label>
            <input class="form-control w-25 aling text-center" type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Numero de plano </label>
            <input class="form-control w-25 aling text-center" type="text"  id="nombreconyugue">
            <br>
            
            <label for="nombreconyugue">Tiene Hipoteca en primer grado?</label>
            <input class="form-control w-25 aling text-center" type="text"  id="nombreconyugue">
            <br>

            <label for="nombreconyugue">Direccion exacta de la propiedad </label>
            <input class="form-control w-25 aling text-center" type="text"  id="nombreconyugue">
            <br>

            <label for="trabajo">Tiene Construcciones?</label>
            <input  type="checkbox" name="construc"> SI
            <input type="checkbox" name="construc"> NO
          </fieldset>
          <input   class="btn btn-primary" type="submit" value="Enviar formulario" >
        </form>
<br>
       
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>