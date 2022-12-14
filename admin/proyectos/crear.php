<?php 
//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();

//Validacion del formulario

$errores = [];

// $cod_proyecto = '';
$nom_proyecto = '';
$ubicacion_proyecto = '';
$fecha_inicio = '';
$fecha_fin = '';
$descripcion = '';
// imagen no lleva $imagen_proyecto = '';


if ($_SERVER['REQUEST_METHOD'] ==='POST'){


  // echo "<pre>";
   // var_dump($_POST);
    //echo "</pre>";

   // echo "<pre>";
   //var_dump($_FILES);
   // echo "</pre>";

   

    // $cod_proyecto = mysqli_real_escape_string( $db, $_POST['cod_proyecto']);
    $nom_proyecto =  mysqli_real_escape_string( $db, $_POST['nom_proyecto']);
    $ubicacion_proyecto  =  mysqli_real_escape_string( $db, $_POST['ubicacion_proyecto']);
    $fecha_inicio =  mysqli_real_escape_string( $db, $_POST['fecha_inicio']);
    $fecha_fin =  mysqli_real_escape_string( $db, $_POST['fecha_fin']);
    $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);


    // asignar files hacia una variable 

    $imagen_proyecto = $_FILES['imagen_proyecto'];
   

    // // validador de campos 
    // if(!$cod_proyecto){
    //     $errores[] = "Debes ponerle un codigo al proyecto";
    // }

    if(!$nom_proyecto){
        $errores[] = "Debes agregar nombre al proyecto";
    }

    if(!$ubicacion_proyecto){
        $errores[] = "El proyecto debe tener una ubicacion";
    }
    if(!$fecha_inicio){
        $errores[] = "Debe agregar una fecha de inicio";
    }
    if(!$fecha_fin){
        $errores[] = "Debe agregar una fecha de final";
    }
    if(!$fecha_fin){
        $errores[] = "Debe agregar una descripcion al proyecto";
    }

   if(!$imagen_proyecto['name']){
       $errores[] = 'Es obligatorio poner una imagen';
   }


    //Tamano de las imagenes 
    $medida = 1000 * 6000;
    if ($imagen_proyecto['size'] > $medida ){
       $errores[] = 'La imagen es muy pesada';
    }

    //echo "<pre>";
   // var_dump($errores);
   // echo "</pre>";
   
    


    if(empty($errores)){

        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){

            mkdir($carpetaImagenes);
        }


        // Renombramiento de imagenes 

        $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
        move_uploaded_file($imagen_proyecto['tmp_name'], $carpetaImagenes  . $nombreImagen );
      



 // insertar en la base de datos 
 $query =" INSERT INTO proyecto ( nom_proyecto, imagen_proyecto,ubicacion_proyecto, fecha_inicio, 
 fecha_fin, descripcion)  VALUES( '$nom_proyecto','$nombreImagen', '$ubicacion_proyecto', '$fecha_inicio', '$fecha_fin','$descripcion')";

 //echo $query;   cod_proyecto, '$cod_proyecto',

 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin/proyectos/crear?resultado=1');
 }

    }


   
}
    



require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br>
<br>
<br>
<br>

<main class="contenedor seccion">
    <h1 style="margin-left: 35%;">Crear un Proyecto</h1>   
    
   
  

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>


<div class="formulario-crear">
    <form class="formulario aling text-left" method="POST" action="/admin/proyectos/crear.php" enctype="multipart/form-data">
        <fieldset class="aling text-left ">
            <legend>Informacion general</legend>
            <br>
            <label for="nom_proyecto">Nombre:</label>
            <input class="form-control  aling text-center" type="text" id="nom_proyecto" name="nom_proyecto" value="<?php echo $nom_proyecto; ?>">
            <br>
            <label for="imagen_proyecto">Imagen:</label>
            <input class="form-control "   type="file" id="imagen_proyecto" accept="image.jpeg, image/png" name="imagen_proyecto" >
            <br>
            <label for="ubicacion_proyecto" >Ubicacion:</label>
        <input type="text" id="ubicacion_proyecto" name="ubicacion_proyecto" value="<?php echo $ubicacion_proyecto; ?>">
            <br>
            <br>
            <label for="fecha_inicio">Fecha de inicio:</label >
            <input class="form-control " type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo $fecha_inicio; ?>" >
            <br>
            <label for="fecha_fin">Fecha de final:</label >
            <input class="form-control " type="date" id="fecha_fin" name="fecha_fin" value="<?php echo $fecha_fin; ?>" >
             <br>
        <label for="descripcion">Descripcion</label >
        <br>
        <textarea  class="form-control "id="descripcion"  name="descripcion"placeholder="Escriba una descripcion del proyecto "
        cols="60" rows="7" ><?php echo $descripcion; ?></textarea>

        </fieldset>

        <br>
        <input   class="btn btn-primary" type="submit" value="Crear Proyecto" class="boton bton-ver-propiedades">

        <a class="btn btn-success" href="/admin/proyectos/crear" class="boton bton-ver-propiedades">Cancelar</a> <br>
    </form>
    </div>


</main>

<link href="/BizPage/assets/css/style.css" rel="stylesheet">
<script src="/bootstrap/js/bootstrap.bundle.js"></script>
<?php

    incluirTemplate('footer');
?> 