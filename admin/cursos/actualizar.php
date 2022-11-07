<?php 


//Validar la URL por ID válido

$cod_curso = $_GET['cod_curso'];
$cod_curso = filter_var($cod_curso, FILTER_VALIDATE_INT);
if(!$cod_curso ){
    header('Location: /admin');
}
//var_dump($cod_curso);



//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();




//Obtener los datos de la propiedad 
$consulta = "SELECT * FROM curso WHERE cod_curso = ${cod_curso}";

$resultado = mysqli_query($db, $consulta);
$curso = mysqli_fetch_assoc($resultado);




//Validacion del formulario



$errores = [];


$nombre_curso =$curso ['nombre_curso'];
$descripcion =$curso ['descripcion'];
$estado = $curso ['estado'];
$errores = [];



if ($_SERVER['REQUEST_METHOD'] ==='POST'){ 




 
    $nombre_curso =  mysqli_real_escape_string( $db, $_POST['nombre_curso']);
    $descripcion  =  mysqli_real_escape_string( $db, $_POST['descripcion']);
    $estado =  mysqli_real_escape_string( $db, $_POST['estado']);


    // asignar files hacia una variable 

    $imagen_curso = $_FILES['imagen_curso'];
   

   

  
    if(!$cod_curso){
        $errores[] = "Debes agregar un codigo al curso";
    }

    if(!$nombre_curso){
        $errores[] = "Debe agregar nombre al curso";
    }

    if(!$descripcion){
        $errores[] = "El curso debe tener una descripción";
    }
    if(!$estado){
        $errores[] = "Debe agregar un estado";
    }
    //Tamano de las imagenes 
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida ){
       $errores[] = 'La imagen es muy pesada';
    }



    if(empty($errores)){

        $carpetaImagenes = '../../imagenes/';

       if(!is_dir($carpetaImagenes)){

           mkdir($carpetaImagenes);
        }

        $nombreImagen ="";

       if($imagen_curso['name']){
       //Eliminamos la imagen que subimos antes
       unlink($carpetaImagenes . $curso['imagen_curso']);
       // Renombramiento de imagenes 
       
       $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
       move_uploaded_file($imagen_curso['tmp_name'], $carpetaImagenes  . $nombreImagen );
      
       }else{
        $nombreImagen = $curso['imagen_curso'];
       }

       

      



 // insertar en la base de datos 
 $query =" UPDATE curso SET nombre_curso = '${nombre_curso}', imagen_curso = '${nombreImagen}',descripcion = '${descripcion}', estado = '${estado}'  WHERE cod_curso  = ${cod_curso}";


 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin/cursos/crear?resultado=2');
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
    <h1>Actualizar</h1>   
    
    
    <a href="/admin" class="btn btn-success">Volver</a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>

 
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
        <legend>Informacion general</legend>

<br>
<label for="nombre_curso">Nombre:</label>
<input type="text" id="nombre_curso" name="nombre_curso" value="<?php echo $nombre_curso; ?>">
<br>
<br>
<label for="imagen_curso">Imagen:</label>
<input type="file" id="imagen_curso" accept="image.jpeg, image/png" name="imagen_curso" >
<br>

<label for="estado">Estado:</label >
<input type="number" id="estado" name="estado" value="<?php echo $estado; ?>" >

<br>
<label for="descripcion">Descripcion</label >
<br>
<textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion del curso "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>

        </fieldset>

               
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Curso" class="boton bton-ver-propiedades">

</main>


<?php

    incluirTemplate('footer');
?>
<link href="/BizPage/assets/css/style.css" rel="stylesheet">