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

 $provincia = '';
 $canton = '';
 $telefono = '';
 $otro_telefono = '';
 $companero = '';
 $lugar_trabajo = '';
 $familiar_ext = '';
 $direc_fam = '';
 $tel_familiar = '';
 $nombre_emp = '';
 $direc_emp = '';
 $tipo_actividad = '';
 $num_emp = '';
 $servicio = '';
 $motivo_origen = '';
 $fecha_inicio = '';
 $dinero_inicial = '';
 $local_propio = '';
 $prop_local = '';
 $tel_prop = '';
 $uso_local = '';
 $pago_alquier = '';
 $clientes = '';
 $cant_clientes = '';
 $mes_bueno = '';
 $mes_malos = '';
 $ultimo_mes = '';
 $numero_finca = '';
 $numero_plano = '';
 $hipoteca_primerGrado = '';
 $direc_propiedad = '';
 $construcciones = '';

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

  $provincia = mysqli_real_escape_string( $db, $_POST['provincia']);
  $canton = mysqli_real_escape_string( $db, $_POST['canton']);
  $telefono = mysqli_real_escape_string( $db, $_POST['telefono']);
  $otro_telefono = mysqli_real_escape_string( $db, $_POST['otro_telefono']);
  $companero = mysqli_real_escape_string( $db, $_POST['companero']);
  $lugar_trabajo = mysqli_real_escape_string( $db, $_POST['lugar_trabajo']);
  $familiar_ext = mysqli_real_escape_string( $db, $_POST['familiar_ext']);
  $direc_fam = mysqli_real_escape_string( $db, $_POST['direc_fam']);
  $tel_familiar = mysqli_real_escape_string( $db, $_POST['tel_familiar']);
  $nombre_emp = mysqli_real_escape_string( $db, $_POST['nombre_emp']);
  $direc_emp = mysqli_real_escape_string( $db, $_POST['direc_emp']);
  $tipo_actividad = mysqli_real_escape_string( $db, $_POST['tipo_actividad']);
  $num_emp = mysqli_real_escape_string( $db, $_POST['num_emp']);
  $servicio = mysqli_real_escape_string( $db, $_POST['servicio']);
  $motivo_origen = mysqli_real_escape_string( $db, $_POST['motivo_origen']);
  $fecha_inicio = mysqli_real_escape_string( $db, $_POST['fecha_inicio']);
  $dinero_inicial = mysqli_real_escape_string( $db, $_POST['dinero_inicial']);
  $local_propio = mysqli_real_escape_string( $db, $_POST['local_propio']);
  $prop_local = mysqli_real_escape_string( $db, $_POST['prop_local']);
  $tel_prop = mysqli_real_escape_string( $db, $_POST['tel_prop']);
  $uso_local = mysqli_real_escape_string( $db, $_POST['uso_local']);
  $pago_alquier = mysqli_real_escape_string( $db, $_POST['pago_alquier']);
  $clientes = mysqli_real_escape_string( $db, $_POST['clientes']);
  $cant_clientes = mysqli_real_escape_string( $db, $_POST['cant_clientes']);
  $mes_bueno = mysqli_real_escape_string( $db, $_POST['mes_bueno']);
  $mes_malos = mysqli_real_escape_string( $db, $_POST['mes_malos']);
  $ultimo_mes = mysqli_real_escape_string( $db, $_POST['ultimo_mes']);
  $numero_finca = mysqli_real_escape_string( $db, $_POST['numero_finca']);
  $numero_plano = mysqli_real_escape_string( $db, $_POST['numero_plano']);
  $hipoteca_primerGrado = mysqli_real_escape_string( $db, $_POST['hipoteca_primerGrado']);
  $direc_propiedad = mysqli_real_escape_string( $db, $_POST['direc_propiedad']);
  $construcciones = mysqli_real_escape_string( $db, $_POST['construcciones']);

  if(empty($errores)){
// insertar en la base de datos 
$query =" INSERT INTO formularios_hipoteca (monto_solicitar, nombre_cliente, fecha_nac, edad, escolaridad, estado_civil, num_matrimonios, 
cedula, profesion, direccion, provincia, canton, telefono, otro_telefono, companero, lugar_trabajo,
familiar_ext, direc_fam, tel_familiar, nombre_emp, direc_emp, tipo_actividad, num_emp, servicio, motivo_origen, fecha_inicio,
dinero_inicial, local_propio, prop_local, tel_prop, uso_local, pago_alquier, clientes, cant_clientes, mes_bueno, mes_malos, ultimo_mes,

numero_finca, numero_plano, hipoteca_primerGrado, direc_propiedad, construcciones)  


VALUES('$monto_solicitar', '$nombre_cliente', '$fecha_nac', '$edad', '$escolaridad', '$estado_civil', '$num_matrimonios', 
'$cedula', '$profesion', '$direccion', '$provincia', '$canton', '$telefono', '$otro_telefono', '$companero', '$lugar_trabajo', 
'$familiar_ext', '$direc_fam', '$tel_familiar', '$nombre_emp', '$direc_emp', '$tipo_actividad', '$num_emp', '$servicio', '$motivo_origen', '$fecha_inicio',
'$dinero_inicial', '$local_propio', '$prop_local', '$tel_prop', '$uso_local', '$pago_alquier', '$clientes', '$cant_clientes', '$mes_bueno', '$mes_malos', '$ultimo_mes',

'$numero_finca', '$numero_plano', '$hipoteca_primerGrado', '$direc_propiedad', '$construcciones')";


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
        




        <h2>Formulario para solicitud de préstamos</h2>
       <?php foreach($errores as $error):?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>

   
          <?php endforeach; ?>


        <form class="formulario" method="POST" action="hdatosP.php" enctype="multipart/form-data">


            <!--Datos personales-->
         <fieldset class="datos-personales">
            
             <legend>Datos personales</legend>

             <label for="Monto">Monto a solicitar</label>
             <input class="form-control w-25 aling text-center" type="number"  id="Monto" placeholder="Monto en colones" name="monto_solicitar" value="<?php echo $monto_solicitar; ?>" >
             <br>

             <label for="nombre_cliente">Nombre</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre_cliente" name="nombre_cliente" value="<?php echo $nombre_cliente; ?>" >


             <label for="fecha_nac" >
             <br>Fecha de nacimiento</label>
             <input class="form-control w-25 aling text-center" type="date" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha_nac; ?>">
             <br>


             <label for="edad">Edad</label>
             <input class="form-control w-25 aling text-center" type="number"  id="edad" name="edad" min="10" max="100" value="<?php echo $edad; ?>"> 
             
            
             <label for="escolaridad">Escolaridad</label>
             <select class="form-control w-25 aling text-center"  id="escolaridad" name="escolaridad">
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
             <select class="form-control w-25 aling text-center"  name="estado_civil" id="estado_civil">
                <option value=""selected>Seleccione</option>
                <option value="Soltero" >Soltero</option>
                <option value="Casado" >Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value=">Union libre">Unión libre</option>
              </select>

              <label for="num_matrimonios">Números de Matrimonios</label>
             <input class="form-control w-25 aling text-center" type="number"  id="num_matrimonios" min="0" max="20" name="num_matrimonios" value="<?php echo $num_matrimonios; ?>"> 

             <label for="cedula">Cédula</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu cedula" id="cedula" name="cedula" value="<?php echo $cedula; ?>">

             <label for="profesion">Profesión u oficio</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu profesion" id="profesion" name="profesion" value="<?php echo $profesion; ?>">

             <br>
            

              
             <legend>Dirección exacta</legend>
             <textarea id="direccion"  name="direccion"placeholder="Escriba una direccion "cols="80" rows="5" ><?php echo $direccion; ?></textarea>
            <br>



<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->





            <label for="Provincia">Provincia</label>
            <select class="form-control w-25 aling text-center" name="provincia" id="provincia">
                <option class="form-control w-25 aling text-center" value=""selected>Seleccione</option>
                <option value="San José" >San José</option>
                <option value="Heredia" >Heredia</option>
                <option value="Alajuela" >Alajuela</option>
                <option value="Guanacaste" >Guanacaste</option>
                <option value="Puntarenas" >Puntarenas</option>
                <option value="Limón" >Limón</option>
                <option value="Cartago" >Cartago </option>
              </select>


              <label for="canton">Cantón</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Digite el cantón" id="canton" name="canton" value="<?php echo $canton; ?>">

            <label for="telefono">Teléfono propio</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre" name="telefono" value="<?php echo $telefono; ?>">


            <label for="otro_telefono">Otro contacto</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="otro_telefono" name="otro_telefono" value="<?php echo $otro_telefono; ?>">   
         </fieldset>

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos Familiares</legend>
            <label for="companero">Nombre del cónyugue o compañer@</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre de su pareja" id="companero" name="companero" value="<?php echo $companero; ?>">
            <br>

            <label  for="lugar_trabajo">Lugar de trabajo</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Lugar donde labora" id="lugar_trabajo" name="lugar_trabajo" value="<?php echo $lugar_trabajo; ?>">

            <label for="tel_familiar">Teléfono de familiar</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_familiar" name="tel_familiar" value="<?php echo $tel_familiar; ?>">
            <br>

            <label for="familiar_ext">Nombre de familiar que no vive con usted:</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Nombre Completo" id="familiar_ext" name="familiar_ext" value="<?php echo $familiar_ext; ?>">
            <br>
            
            <label for="direc_fam">Dirección</label>
            <br>
            <textarea id="direc_fam"  name="direc_fam"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $direc_fam; ?></textarea>
            <br>
            <label for="tel_familiar">Teléfono</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_familiar" name="tel_familiar" value="<?php echo $tel_familiar; ?>">
        </fieldset>


          <!--Datos de la micro empresa-->
          <fieldset class="datos-familiares">
            <legend>Datos de la microempresa</legend>


            <label for="nombre_emp">Nombre de la microempresa</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre" id="nombre_emp" name="nombre_emp" value="<?php echo $nombre_emp; ?>">  
            <br>

            <label for="direc_emp">Dirección</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Dirección exacta" id="direc_emp" name="direc_emp" value="<?php echo $direc_emp; ?>">
            <br>

            <label>Qué tipo de actividad realiza:</label>
            <br>
            <textarea id="tipo_actividad"  name="tipo_actividad"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $tipo_actividad; ?></textarea>

            <br>
            <label for="num_emp">Números de empleados</label>
             <input class="form-control w-25 aling text-center type=" type="number"  id="num_emp" name="num_emp" value="<?php echo $num_emp; ?>"> 
             <br>

             <label for="servicio">Qué produce, vende o servicio brinda:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Servicio brindado" id="servicio" name="servicio" value="<?php echo $servicio; ?>">  
            <br>
           
            <label for="motivo_origen">Motivo de inicio de la actividad:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="motivoActividad" id="motivo_origen" name="motivo_origen" value="<?php echo $motivo_origen; ?>">  

            <label for="fecha_inicio">¿Hace cuánto?:</label>
            <input class="form-control w-25 aling text-center" type="date" placeholder="Hace cuanto se realiza la actividad" id="fecha_inicio" name="fecha_inicio" value="<?php echo $fecha_inicio; ?>"> 
            <br>

            <label for="dinero_inicial">¿Con cuánto dinero inició?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="dinero inicial" id="dinero_inicial" name="dinero_inicial" value="<?php echo $dinero_inicial; ?>">
            <br>

            <label for="local_propio">El local es propio?</label>
            <select class="form-control w-25 aling text-center" name="local_propio" id="local_propio">
                <option class="form-control w-25 aling text-center" value=""selected>Seleccione</option>
                <option value="SI" >SI</option>
                <option value="NO" >NO</option>
             </select>
            <br>
            <br>
            <label for="prop_local">¿A nombre de quién está el local?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre del propietario" id="prop_local" name="prop_local" value="<?php echo $prop_local; ?>">

            <label for="tel_prop">Teléfono del propietario</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_prop" name="tel_prop" value="<?php echo $tel_prop; ?>">
            <br>

         <label for="uso_local">¿Hace cuánto utiliza el local?:</label>
            <input class="form-control w-25 aling text-center" type="date" placeholder="Aproximado en días, meses o años." id="uso_local" name="uso_local" value="<?php echo $uso_local; ?>">

            <label for="pago_alquier">¿Cuánto paga de alquiler?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="pago_alquier" name="pago_alquier" value="<?php echo $pago_alquier; ?>">
            <br>

            <label for="clientes">¿Quiénes son sus clientes?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Ejem agricultores" id="clientes" name="clientes" value="<?php echo $clientes; ?>"> 
            <br>
            <label for="cant_clientes">Número de clientes:</label>
            <input class="form-control w-25 aling text-center" type="number"  id="cant_clientes" name="cant_clientes" value="<?php echo $cant_clientes; ?>"> 
            <br>

            <label for="motivoActividad">¿Cuánto vende o recupera?:</label>
            <label for="mes_bueno">¿Meses buenos?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="mes_bueno" name="mes_bueno" value="<?php echo $mes_bueno; ?>">

            <label for="mes_malos">¿Meses malos?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="mes_malos" name="mes_malos" value="<?php echo $mes_malos; ?>">
            
            <label for="ultimo_mes">¿Último mes?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="ultimo_mes" name="ultimo_mes" value="<?php echo $ultimo_mes; ?>">
         </fieldset>



         
         <!--Datos hipoteca-->
         <fieldset class="datos-familiares">
         <legend>Datos de la Hipoteca </legend>
            <label for="numero_finca">Número de finca</label>
            <input class="form-control w-25 aling text-center" type="number"  id="numero_finca" name="numero_finca" value="<?php echo $numero_finca; ?>">
            <br>

            <label for="numero_plano">Número de plano </label>
            <input class="form-control w-25 aling text-center"  type="number"  id="numero_plano" name="numero_plano" value="<?php echo $numero_plano; ?>">
            <br>

            
            <label for="hipoteca_primerGrado">¿Tiene hipoteca en primer grado?</label>
            <select class="form-control w-25 aling text-center" name="hipoteca_primerGrado" id="hipoteca_primerGrado">
                <option class="form-control w-25 aling text-center" value=""selected>Seleccione</option>
                <option value="SI" >SI</option>
                <option value="NO" >NO</option>
             </select>

            <br>
            <label for="direc_propiedad">Dirección Exacta </label>
            <br>
            <textarea id="direc_propiedad"  name="direc_propiedad"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $direc_propiedad; ?></textarea>
            <br>
            
            <label for="construcciones">¿Tiene Construcciones?</label>
            <select class="form-control w-25 aling text-center" name="construcciones" id="construcciones">
                <option class="form-control w-25 aling text-center" value=""selected>Seleccione</option>
                <option value="SI" >SI</option>
                <option value="NO" >NO</option>
             </select>
<br>
          </fieldset>
          <input   class="btn btn-primary" type="submit" value="Enviar formulario">
          
        </form>
<br>
       
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>