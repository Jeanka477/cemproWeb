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
 $nombre_fiador = '';
 $apellido1_fiador = '';
 $apellido2_fiador = '';
 $cedula_fiador = '';
 $trabajo_fiador = '';
 $tel_fiador = '';
 $direc_fiador = '';
 $salarioB_fiador = '';
 $salarioL_fiador = '';

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
  $nombre_fiador = mysqli_real_escape_string( $db, $_POST['nombre_fiador']);
  $apellido1_fiador = mysqli_real_escape_string( $db, $_POST['apellido1_fiador']);
  $apellido2_fiador = mysqli_real_escape_string( $db, $_POST['apellido2_fiador']);
  $cedula_fiador = mysqli_real_escape_string( $db, $_POST['cedula_fiador']);
  $trabajo_fiador = mysqli_real_escape_string( $db, $_POST['trabajo_fiador']);
  $tel_fiador = mysqli_real_escape_string( $db, $_POST['tel_fiador']);
  $direc_fiador = mysqli_real_escape_string( $db, $_POST['direc_fiador']);
  $salarioB_fiador = mysqli_real_escape_string( $db, $_POST['salarioB_fiador']);
  $salarioL_fiador = mysqli_real_escape_string( $db, $_POST['salarioL_fiador']);

  if(empty($errores)){
// insertar en la base de datos 
$query =" INSERT INTO formularios_fiador (monto_solicitar, nombre_cliente, fecha_nac, edad, escolaridad, estado_civil, num_matrimonios, 
cedula, profesion, direccion, provincia, canton, telefono, otro_telefono, companero, lugar_trabajo,
familiar_ext, direc_fam, tel_familiar, nombre_emp, direc_emp, tipo_actividad, num_emp, servicio, motivo_origen, fecha_inicio,
dinero_inicial, local_propio, prop_local, tel_prop, uso_local, pago_alquier, clientes, cant_clientes, mes_bueno, mes_malos, ultimo_mes,

nombre_fiador, apellido1_fiador, apellido2_fiador, cedula_fiador, trabajo_fiador, tel_fiador, direc_fiador, salarioB_fiador, salarioL_fiador)  


VALUES('$monto_solicitar', '$nombre_cliente', '$fecha_nac', '$edad', '$escolaridad', '$estado_civil', '$num_matrimonios', 
'$cedula', '$profesion', '$direccion', '$provincia', '$canton', '$telefono', '$otro_telefono', '$companero', '$lugar_trabajo', 
'$familiar_ext', '$direc_fam', '$tel_familiar', '$nombre_emp', '$direc_emp', '$tipo_actividad', '$num_emp', '$servicio', '$motivo_origen', '$fecha_inicio',
'$dinero_inicial', '$local_propio', '$prop_local', '$tel_prop', '$uso_local', '$pago_alquier', '$clientes', '$cant_clientes', '$mes_bueno', '$mes_malos', '$ultimo_mes',

'$nombre_fiador', '$apellido1_fiador', '$apellido2_fiador', '$cedula_fiador', '$trabajo_fiador', '$tel_fiador', '$direc_fiador', '$salarioB_fiador', '$salarioL_fiador')";



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
                <option value=">Union libre">Union libre</option>
              </select>

              <label for="num_matrimonios">N??meros de Matrimonios</label>
             <input class="form-control w-25 aling text-center" type="number"  id="num_matrimonios" min="0" max="20" name="num_matrimonios" value="<?php echo $num_matrimonios; ?>"> 

             <label for="cedula">Cedula</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu cedula" id="cedula" name="cedula" value="<?php echo $cedula; ?>">

             <label for="profesion">Profesi??n u oficio</label>
             <input class="form-control w-25 aling text-center" type="text" placeholder="Tu profesion" id="profesion" name="profesion" value="<?php echo $profesion; ?>">

             <br>
            

              
             <legend>Direccion exacta</legend>
             <textarea id="direccion"  name="direccion"placeholder="Escriba una direccion "cols="80" rows="5" ><?php echo $direccion; ?></textarea>
            <br>



<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->





            <label for="Provincia">Provincia</label>
            <select class="form-control w-25 aling text-center" name="provincia" id="provincia">
                <option class="form-control w-25 aling text-center" value=""selected>Seleccione</option>
                <option value="San Jos??" >San Jos??</option>
                <option value="Heredia" >Heredia</option>
                <option value="Alajuela" >Alajuela</option>
                <option value="Guanacaste" >Guanacaste</option>
                <option value="Puntarenas" >Puntarenas</option>
                <option value="Lim??n" >Lim??n</option>
                <option value="Cartago" >Cartago </option>
              </select>


              <label for="canton">Cant??n</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Digite el cant??n" id="canton" name="canton" value="<?php echo $canton; ?>">

            <label for="telefono">Telefono propio</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="nombre" name="telefono" value="<?php echo $telefono; ?>">


            <label for="otro_telefono">Otro contacto</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Tu nombre" id="otro_telefono" name="otro_telefono" value="<?php echo $otro_telefono; ?>">   
         </fieldset>

         <!--Datos familiares-->
         <fieldset class="datos-familiares">
            <legend>Datos Familiares</legend>
            <label for="companero">Nombre del conyugue o compa??er@</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre de su pareja" id="companero" name="companero" value="<?php echo $companero; ?>">
            <br>

            <label  for="lugar_trabajo">Lugar de trabajo</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Lugar donde labora" id="lugar_trabajo" name="lugar_trabajo" value="<?php echo $lugar_trabajo; ?>">

            <label for="tel_familiar">Telefono de familiar</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_familiar" name="tel_familiar" value="<?php echo $tel_familiar; ?>">
            <br>

            <label for="familiar_ext">Nombre de familiar que no vive con usted:</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Nombre Completo" id="familiar_ext" name="familiar_ext" value="<?php echo $familiar_ext; ?>">
            <br>
            
            <label for="direc_fam">Direcci??n</label>
            <br>
            <textarea id="direc_fam"  name="direc_fam"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $direc_fam; ?></textarea>
            <br>
            <label for="tel_familiar">Telefono</label>
            <input  class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_familiar" name="tel_familiar" value="<?php echo $tel_familiar; ?>">
        </fieldset>


          <!--Datos de la micro empresa-->
          <fieldset class="datos-familiares">
            <legend>Datos de la microempresa</legend>


            <label for="nombre_emp">Nombre de la microempresa</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre" id="nombre_emp" name="nombre_emp" value="<?php echo $nombre_emp; ?>">  
            <br>

            <label for="direc_emp">Direcci??n</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Direcci??n exacta" id="direc_emp" name="direc_emp" value="<?php echo $direc_emp; ?>">
            <br>

            <label>Que tipo de Actividad realiza:</label>
            <br>
            <textarea id="tipo_actividad"  name="tipo_actividad"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $tipo_actividad; ?></textarea>

            <br>
            <label for="num_emp">N??meros de empleados</label>
             <input class="form-control w-25 aling text-center type=" type="number"  id="num_emp" name="num_emp" value="<?php echo $num_emp; ?>"> 
             <br>

             <label for="servicio">Que produce, vendeo servicio brinda:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Servicio brindado" id="servicio" name="servicio" value="<?php echo $servicio; ?>">  
            <br>
           
            <label for="motivo_origen">Motivo de inicio de la actividad:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="motivoActividad" id="motivo_origen" name="motivo_origen" value="<?php echo $motivo_origen; ?>">  

            <label for="fecha_inicio">??Hace cuanto?:</label>
            <input class="form-control w-25 aling text-center" type="date" placeholder="Hace cuanto se realiza la actividad" id="fecha_inicio" name="fecha_inicio" value="<?php echo $fecha_inicio; ?>"> 
            <br>

            <label for="dinero_inicial">??Con cu??nto Dinero inicio?:</label>
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
            <label for="prop_local">??A nombre de quien est?? el local?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Nombre del propietario" id="prop_local" name="prop_local" value="<?php echo $prop_local; ?>">

            <label for="tel_prop">Telefono del propietario</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Telefono" id="tel_prop" name="tel_prop" value="<?php echo $tel_prop; ?>">
            <br>

         <label for="uso_local">??Hace cuanto utiliza el local?:</label>
            <input class="form-control w-25 aling text-center" type="date" placeholder="Aproximado en d??as, meses o a??os." id="uso_local" name="uso_local" value="<?php echo $uso_local; ?>">

            <label for="pago_alquier">??Cu??nto paga de alquiler?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Cifra en colones" id="pago_alquier" name="pago_alquier" value="<?php echo $pago_alquier; ?>">
            <br>

            <label for="clientes">??Qui??nes son sus clientes?:</label>
            <input class="form-control w-25 aling text-center" type="text" placeholder="Ejem agricultores" id="clientes" name="clientes" value="<?php echo $clientes; ?>"> 
            <br>
            <label for="cant_clientes">N??mero de clientes:</label>
            <input class="form-control w-25 aling text-center" type="number"  id="cant_clientes" name="cant_clientes" value="<?php echo $cant_clientes; ?>"> 
            <br>

            <label for="motivoActividad">??Cu??nto vende o recupera?:</label>
            <label for="mes_bueno">??Meses buenos?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="mes_bueno" name="mes_bueno" value="<?php echo $mes_bueno; ?>">

            <label for="mes_malos">??Meses malos?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="mes_malos" name="mes_malos" value="<?php echo $mes_malos; ?>">
            
            <label for="ultimo_mes">????ltimo mes?:</label>
            <input class="form-control w-25 aling text-center" type="number" placeholder="Cifra en colones" id="ultimo_mes" name="ultimo_mes" value="<?php echo $ultimo_mes; ?>">
         </fieldset>



         
         <!--Datos fiador-->
         <fieldset class="datos-familiares">
            <legend>Datos del fiador</legend>
            <label for="nombre_fiador">Nombre del fiador</label>
            <input class="form-control w-25 aling text-center" type="text"  id="nombre_fiador" name="nombre_fiador" value="<?php echo $nombre_fiador; ?>">
            <br>

            <label for="apellido1_fiador">Primer apellido del fiador</label>
            <input class="form-control w-25 aling text-center"  type="text"  id="apellido1_fiador" name="apellido1_fiador" value="<?php echo $apellido1_fiador; ?>">
            <br>

            
            <label for="apellido2_fiador">Segundo apellido del fiador</label>
            <input class="form-control w-25 aling text-center"  type="text"  id="apellido2_fiador" name="apellido2_fiador" value="<?php echo $apellido2_fiador; ?>">
            <br>

            <label for="cedula_fiador">C??dula del fiador</label>
            <input class="form-control w-25 aling text-center" type="text"  id="cedula_fiador" name="cedula_fiador" value="<?php echo $cedula_fiador; ?>">
            <br>

            <label for="trabajo_fiador">Lugar de trabajo</label>
            <input class="form-control w-25 aling text-center" type="text"  id="trabajo_fiador" name="trabajo_fiador" value="<?php echo $trabajo_fiador; ?>">

            <br>
            <label for="tel_fiador">Telefono</label>
            <input class="form-control w-25 aling text-center" type="text"  id="tel_fiador" name="tel_fiador" value="<?php echo $tel_fiador; ?>">

            <br>
            <label for="direc_fiador">Direccion Exacta </label>
            <br>
            <textarea id="direc_fiador"  name="direc_fiador"placeholder="Escriba la direccion "cols="80" rows="5" ><?php echo $direc_fiador; ?></textarea>
            <br>
            
            <label for="salarioB_fiador">Salario Bruto</label>
            <input class="form-control w-25 aling text-center" type="text"  id="salarioB_fiador" name="salarioB_fiador" value="<?php echo $direc_salarioB_fiadoremp; ?>">

            <br>
            <label for="salarioL_fiador">Salario Liquido</label>
            <input class="form-control w-25 aling text-center" type="text"  id="salarioL_fiador" name="salarioL_fiador" value="<?php echo $salarioL_fiador; ?>">
            <br>
          </fieldset>
          <input   class="btn btn-primary" type="submit" value="Enviar formulario">
        </form>
<br>
       
    </main>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>