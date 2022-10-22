<?php 
//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();

//Validacion del formulario

$errores = [];

// $cod_curso = '';
$nombre_curso = '';
$descripcion = '';
$estado = '';


if ($_SERVER['REQUEST_METHOD'] ==='POST'){


    $nombre_curso =  mysqli_real_escape_string( $db, $_POST['nombre_curso']);
    $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);
    $estado =  mysqli_real_escape_string( $db, $_POST['estado']);

    


    // asignar files hacia una variable 

    $imagen_curso = $_FILES['imagen_curso'];
   


    if(!$nombre_curso){
        $errores[] = "Debes agregar nombre al proyecto";
    }

    if(!$descripcion){
        $errores[] = "El proyecto debe tener una ubicacion";
    }
    if(!$estado){
        $errores[] = "Debe agregar una fecha de inicio";
    }

   if(!$imagen_curso['name']){
       $errores[] = 'Es obligatorio poner una imagen';
   }


    //Tamano de las imagenes 
    $medida = 1000 * 1000;
    if ($imagen_curso['size'] > $medida ){
       $errores[] = 'La imagen es muy pesada';
    }

    


    if(empty($errores)){

        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){

            mkdir($carpetaImagenes);
        }


        // Renombramiento de imagenes 

        $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
        move_uploaded_file($imagen_curso['tmp_name'], $carpetaImagenes  . $nombreImagen );
      



 // insertar en la base de datos 
 $query =" INSERT INTO curso (nombre_curso, imagen_curso, descripcion, estado)  
 VALUES('$nombre_curso','$nombreImagen', '$descripcion', '$estado')";

 //echo $query;   cod_proyecto, '$cod_proyecto',

 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin?resultado=1');
 }

    }


   
}
    



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>   
    
    
    <a href="/admin/cursos" class="boton bton-ver-propiedades">Volver</a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>



    <form class="formulario" method="POST" action="/admin/cursos/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>
            <label for="nombre_curso">Nombre:</label>
            <input type="text" id="nombre_curso" name="nombre_curso" value="<?php echo $nombre_curso; ?>">
            <br>
           
            <label for="imagen_curso">Imagen:</label>
            <input type="file" id="imagen_curso" accept="image.jpeg, image/png" name="imagen_curso" >
            <br>
            <label for="estado" >Estado:</label>
        <input type="text" id="estado" name="estado" value="<?php echo $estado; ?>">
<br>

            
<br>
        <label for="descripcion">Descripcion</label >
        <br>
        <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion del curso "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>

        </fieldset>


        <input type="submit" value="Crear Proyecto" class="boton bton-ver-propiedades">
    </form>



</main>


<?php
    incluirTemplate('footer');
?>