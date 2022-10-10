<?php 


//Validar la URL por ID válido

$cod_propiedad = $_GET['cod_propiedad'];
$cod_propiedad = filter_var($cod_propiedad, FILTER_VALIDATE_INT);
if(!$cod_propiedad ){
    header('Location: /admin');
}
//var_dump($cod_propiedad);



//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();




//Obtener los datos de la propiedad 
$consulta = "SELECT * FROM propiedades WHERE cod_propiedad = ${cod_propiedad}";

$resultado = mysqli_query($db, $consulta);
$prpiedad = mysqli_fetch_assoc($resultado);




//Validacion del formulario



$errores = [];

$precio =$prpiedad ['precio'];
$ubicacion =$prpiedad ['ubicacion'];
$tamano = $prpiedad ['tamano'];
$descripcion = $prpiedad ['descripcion'];
$errores = [];


if ($_SERVER['REQUEST_METHOD'] ==='POST'){ 


    $precio = mysqli_real_escape_string( $db, $_POST['precio']);
    $ubicacion =  mysqli_real_escape_string( $db, $_POST['ubicacion']);
    $tamano  =  mysqli_real_escape_string( $db, $_POST['tamano']);
    $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);
  


    // asignar files hacia una variable 

    $imagen = $_FILES['imagen'];
   

  
    if(!$precio){
        $errores[] = "Debe agregar un precio para la propiedad";
    }

    if(!$ubicacion){
        $errores[] = "Debe agregar una ubicacion";
    }
    if(!$tamano){
        $errores[] = "Agrega un tamaño en metros cuadrados";
    }
    if(!$descripcion){
        $errores[] = "Agrega una descripción";
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

        $nombreImagen ="";

       if($imagen['name']){
       //Eliminamos la imagen que subimos antes
       unlink($carpetaImagenes . $prpiedad['imagen']);
       // Renombramiento de imagenes 
       
       $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
       move_uploaded_file($imagen['tmp_name'], $carpetaImagenes  . $nombreImagen );
      
       }else{
        $nombreImagen = $prpiedad['imagen'];
       }

       

      



 // insertar en la base de datos 
 $query =" UPDATE propiedades SET precio = '${precio}', ubicacion = '${ubicacion}',tamano = '${tamano}', imagen = '${nombreImagen}' WHERE cod_propiedad  = ${cod_propiedad}";


 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin?resultado=2');
 }
    }   
        }
    



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar</h1>   
    
    
    <a href="/admin" class="boton bton-ver-propiedades">Volver</a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>



 
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="precio">Precio de la propiedad:</label>
            <input type="number" id="precio" name="precio"  value="<?php echo $precio; ?>">

            <br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>">
            <br>
            <label for="tamano">Tamaño de la propiedad:</label>
            <input type="number" id="tamano" name="tamano"  value="<?php echo $tamano; ?>">
            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image.jpeg, image/png" name="imagen" >
            <br>
            <label for="descripcion">Descripcion</label >
            <br>
            <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>
        </fieldset>


        <input type="submit" value="Actualizar Propiedad" class="boton bton-ver-propiedades">


</main>


<?php
    incluirTemplate('footer');
?>