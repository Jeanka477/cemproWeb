<?php 

require '../../includes/app.php';

use App\Propiedad;





$auth = estarAutenticado();


$db =conectarDB();

//Validacion del formulario
$errores = [];

$precio = '';
$ubicacion = '';
$tamano = '';
$descripcion = '';

if ($_SERVER['REQUEST_METHOD'] ==='POST'){

  


   




   $precio = mysqli_real_escape_string( $db, $_POST['precio']);
   $ubicacion=  mysqli_real_escape_string( $db, $_POST['ubicacion']);
   $tamano=  mysqli_real_escape_string( $db, $_POST['tamano']);
   $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);

    $imagen = $_FILES['imagen'];
   

    // validador de campos 
   
    if(!$precio){
        $errores[] = "Debe agregar un precio para la propiedad";
    }

    if(!$ubicacion){
        $errores[] = "Debe poner dónde se ubica la propiedad";
    }
    if(!$tamano){
        $errores[] = "Debe poner el tamaño en metros cuadrados";
    }
    if(!$descripcion){
        $errores[] = "Debe poner una amplia descripción de la propiedad";
    }
 

   if(!$imagen['name']){
       $errores[] = 'Es obligatorio poner una imagen';
   }

   
    //Tamano de las imagenes 
    $medida = 1000 * 6000;
    if ($imagen['size'] > $medida ){
       $errores[] = 'La imagen es muy pesada';
    }


    if(empty($errores)){

        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){

            mkdir($carpetaImagenes);
        }


        // Renombramiento de imagenes 

        $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes  . $nombreImagen );
      



 // insertar en la base de datos 
 $query =" INSERT INTO propiedades (precio, ubicacion,tamano,imagen, 
 descripcion)  VALUES('$precio', '$ubicacion','$tamano','$nombreImagen' ,'$descripcion')";

 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin/propiedades/crear?resultado=1');
 }

    }


   
}
    


incluirTemplate('header');
?>
<br>
<br>
<br>
<br>

<main class="contenedor seccion">
    <h1>Crear</h1>   
    
    
    <a href="/admin/propiedades" class="btn btn-success">Volver </a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>


    <form  class="formulario aling text-left" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general</legend>

            <label for="precio">Precio de la propiedad:</label>
            <input  class="form-control w-25 aling text-center" type="number" id="precio" name="precio"  value="<?php echo $precio; ?>">

            <br>
            <label for="ubicacion">Ubicación:</label>
            <input  class="form-control w-25 aling text-center" type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>">
            <br>
            <label for="tamano">Tamaño de la propiedad:</label>
            <input  class="form-control w-25 aling text-center" type="number" id="tamano" name="tamano"  value="<?php echo $tamano; ?>">
            <br>
            <label for="imagen">Imagen:</label>
            <input  class="form-control w-25 aling text-center" type="file" id="imagen" accept="image.jpeg, image/png" name="imagen" >
            <br>
            <label for="descripcion">Descripción</label >
            <br>
            <textarea  class="form-control w-25 aling text-center" id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>
        </fieldset>

<br>
        <input type="submit" value="Crear Propiedad" class="btn btn-primary">


</main>

<link href="/BizPage/assets/css/style.css" rel="stylesheet">
<?php
    incluirTemplate('footer');
?>