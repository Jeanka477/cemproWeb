<?php 

require '../cemproWeb2/includes/app.php';
$db =conectarDB();


$errores = [];

// $cod_curso = '';
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


  // asignar files hacia una variable 

 


  if(empty($errores)){

// insertar en la base de datos 
$query =" INSERT INTO formularios_fiador (monto_solicitar, nombre_cliente, fecha_nac, edad, escolaridad, estado_civil, num_matrimonios, 
cedula, profesion, direccion)  


VALUES('$monto_solicitar', '$nombre_cliente', '$fecha_nac', '$edad', '$escolaridad', '$estado_civil', '$num_matrimonios', 
'$cedula', '$profesion', '$direccion')";



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

            <!-- <label for="Provincia">Provincia</label>
            <select name="select" id="provincia">
                <option value="value"selected>Seleccione</option>
                <option value="value" >San José</option>
                <option value="value" >Heredia</option>
                <option value="value" >Alajuela</option>
                <option value="value" >Guanacaste</option>
                <option value="value" >Puntarenas</option>
                <option value="value" >Limón</option>
                <option value="value" >Cartago </option>
              </select>

            <label for="canton">Cantón</label>
            <input type="text" placeholder="Tu canton" id="canton" name="canton" value="<?php  $canton; ?>">


            
            <label for="nombre">Telefono propio</label>
            <input type="text" placeholder="Tu nombre" id="nombre">


            <label for="nombre">Otro contacto</label>
            <input type="text" placeholder="Tu nombre" id="nombre">    -->
         </fieldset>

         <input type="submit" value="Crear formulario" class="boton bton-ver-propiedades">
        </form>

        

        <!-- <a class="boton-celeste" href="hdatosF.php">Siguiente</a> -->
    </main>

    <?php incluirTemplate('footer');
    ?>