<?php 
//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();

//Validacion del formulario
$errores = [];

$precio = '';
$ubicacion = '';
$tamano = '';
$descripcion = '';
$id_administrador = '';



//$errores = [];

//$titulo = '';
//$precio = '';
//$descripcion = '';
//$luz = '';
//$agua = '';
//$vista = '';
//$vendedorId = '';

if ($_SERVER['REQUEST_METHOD'] ==='POST'){


  // echo "<pre>";
   // var_dump($_POST);
    //echo "</pre>";

   // echo "<pre>";
   //var_dump($_FILES);
   // echo "</pre>";

   $precio = mysqli_real_escape_string( $db, $_POST['precio']);
   $ubicacion=  mysqli_real_escape_string( $db, $_POST['ubicacion']);
   $tamano   =  mysqli_real_escape_string( $db, $_POST['tamano ']);
   $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);
   $id_administrador =  mysqli_real_escape_string( $db, $_POST['id_administrador']);

    //$titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
    //$precio =  mysqli_real_escape_string( $db, $_POST['precio']);
    //$descripcion  =  mysqli_real_escape_string( $db, $_POST['descripcion']);
    //$luz =  mysqli_real_escape_string( $db, $_POST['luz']);
    //$agua =  mysqli_real_escape_string( $db, $_POST['agua']);
    //$vista =  mysqli_real_escape_string( $db, $_POST['vista']);
    //$vendedorId =  mysqli_real_escape_string( $db, $_POST['vendedor']);


    // asignar files hacia una variable 

    $imagen = $_FILES['imagen'];
   

    // validador de campos 
   
    if(!$precio){
        $errores[] = "Debes agregar un precio para la propiedad";
    }

    if(!$ubicacion){
        $errores[] = "Debes poner donde se ubica la propiedad";
    }
    //if(!$tamano){
       // $errores[] = "Debes poner el tamano en metros cuadrados";
   // }
    if(!$descripcion){
        $errores[] = "Debes poner una amplia descripcion de la propiedad";
    }
 
    if(!$id_administrador){
        $errores[] = "La propiedad debe de tener administrador";
    }

   if(!$imagen['name']){
       $errores[] = 'Es obligatorio poner una imagen';
   }

   //if(!$titulo){
   // $errores[] = "Debes ponerle un titulo a la propiedad";
//}

//if(!$precio){
  //  $errores[] = "Debes agregar un precio para la propiedad";
//}

//if(!$descripcion){
  //  $errores[] = "La propiedad debe de ser descrita";
//}
//if(!$luz){
  //  $errores[] = "El campo de luz no puede ir vacio";
//}
//if(!$agua){
  //  $errores[] = "El campo de agua no puede ir vacio";
//}
//if(!$vista){
  //  $errores[] = "El campo de Panorama no puede ir vacio";
//}
//if(!$vendedorId){
  //  $errores[] = "La propiedad debe de tener un vendedor";
//}

//if(!$imagen['name']){
  // $errores[] = 'Es obligatorio poner una imagen';
//}


    //Tamano de las imagenes 
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida ){
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
      
       
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes  . $nombreImagen );
      



 // insertar en la base de datos 
 $query =" INSERT INTO propiedades (precio, ubicacion,tamano,imagen, 
 descripcion,id_administrador)  VALUES('$precio', '$ubicacion','$tamano', '$descripcion', '$id_administrador')";



 // insertar en la base de datos 
 //$query =" INSERT INTO propiedades (titulo, precio,imagen, descripcion, 
 //luz, agua, vista, vendedorId)  VALUES('$titulo', '$precio','$nombreImagen', '$descripcion', '$luz', '$agua','$vista','$vendedorId')";
 //echo $query;

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
    
    
    <a href="/admin" class="boton bton-ver-propiedades">Volver</a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>


    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="precio">Precio de la propiedad:</label>
            <input type="number" id="precio" name="precio"  value="<?php echo $precio; ?>">

            <br>
            <label for="ubicacion">Ubicacion:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>">
            <br>
            <label for="tam ano">Tamano de la propiedad:</label>
            <input type="number" id="tam ano" name="tamano"  value="<?php echo $tamano; ?>">
            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image.jpeg, image/png" name="imagen" >
            <br>
            <label for="descripcion">Descripcion</label >
            <br>
            <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>
        </fieldset>


       

        <fieldset>
            <legend>Administrador</legend >
            <select  name="id_administrador">
                <option id="id_administrador" value="1" >Haikel</option>
               
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton bton-ver-propiedades">






  <!--  <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo; ?>">

            <br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>">

            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image.jpeg, image/png" name="imagen" >
            <br>
            <label for="descripcion">Descripcion</label >
            <br>
            <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>
        </fieldset>


        <fieldset>

        <legend>Informacion de la propiedad</legend>

        <label for="luz" >electricidad:</label>
        <input type="text" id="luz" name="luz" value="<?php echo $luz; ?>">
<br>
            <label for="agua">Agua:</label >
            <input type="text" id="agua" name="agua"  value="<?php echo $agua; ?>">
<br>
            <label for="vista">Panorama:</label >
            <input type="text" id="vista" name="vista" value="<?php echo $vista; ?>" >


        </fieldset>

        <fieldset>
            <legend>Vendedor</legend >
            <select  name="vendedor">
                <option id="vendedor" value="1" >CemProdeca</option>
                <option id="vendedor" value="2" >IMAS</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton bton-ver-propiedades">
    </form>

-->

</main>


<?php
    incluirTemplate('footer');
?>