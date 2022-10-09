<?php 


//Validar la URL por ID válido

$cod_proyecto = $_GET['cod_proyecto'];
$cod_proyecto = filter_var($cod_proyecto, FILTER_VALIDATE_INT);
if(!$cod_proyecto ){
    header('Location: /admin');
}
//var_dump($cod_propiedad);



//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();




//Obtener los datos de la propiedad 
$consulta = "SELECT * FROM proyecto WHERE cod_proyecto = ${cod_proyecto}";

$resultado = mysqli_query($db, $consulta);
$proyecto = mysqli_fetch_assoc($resultado);




//Validacion del formulario



$errores = [];


$nom_proyecto =$proyecto ['nom_proyecto'];
$ubicacion_proyecto =$proyecto ['ubicacion_proyecto'];
$fecha_inicio = $proyecto ['fecha_inicio'];
$fecha_fin = $proyecto ['fecha_fin'];
$fecha_fin =$proyecto ['fecha_fin'];
$descripcion =$proyecto ['descripcion'];
$errores = [];

// $titulo =$prpiedad ['titulo'];
// $precio =$prpiedad ['precio'];
// $descripcion = $prpiedad ['descripcion'];
// $luz = $prpiedad ['luz'];
// $agua =$prpiedad ['agua'];
// $vista = $prpiedad ['vista'];
// $vendedorId =$prpiedad ['vendedorId'];

if ($_SERVER['REQUEST_METHOD'] ==='POST'){ 


  //echo "<pre>";
  // var_dump($_POST);
   // echo "</pre>";
    

   //echo "<pre>";
   //var_dump($_FILES);
    //echo "</pre>";

    // $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
    // $precio =  mysqli_real_escape_string( $db, $_POST['precio']);
    // $descripcion  =  mysqli_real_escape_string( $db, $_POST['descripcion']);
    // $luz =  mysqli_real_escape_string( $db, $_POST['luz']);
    // $agua =  mysqli_real_escape_string( $db, $_POST['agua']);
    // $vista =  mysqli_real_escape_string( $db, $_POST['vista']);
    // $vendedorId =  mysqli_real_escape_string( $db, $_POST['vendedor']);

 
    $nom_proyecto =  mysqli_real_escape_string( $db, $_POST['nom_proyecto']);
    $ubicacion_proyecto  =  mysqli_real_escape_string( $db, $_POST['ubicacion_proyecto']);
    $fecha_inicio =  mysqli_real_escape_string( $db, $_POST['fecha_inicio']);
    $fecha_fin =  mysqli_real_escape_string( $db, $_POST['fecha_fin']);
    $descripcion =  mysqli_real_escape_string( $db, $_POST['descripcion']);
  


    // asignar files hacia una variable 

    $imagen_proyecto = $_FILES['imagen_proyecto'];
   

    // validador de campos 
    // if(!$titulo){
    //     $errores[] = "Debes ponerle un titulo a la propiedad";
    // }

    // if(!$precio){
    //     $errores[] = "Debes agregar un precio para la propiedad";
    // }

    // if(!$descripcion){
    //     $errores[] = "La propiedad debe de ser descrita";
    // }
    // if(!$luz){
    //     $errores[] = "El campo de luz no puede ir vacio";
    // }
    // if(!$agua){
    //     $errores[] = "El campo de agua no puede ir vacio";
    // }
    // if(!$vista){
    //     $errores[] = "El campo de Panorama no puede ir vacio";
    // }
    // if(!$vendedorId){
    //     $errores[] = "La propiedad debe de tener un vendedor";
    // }

  
    if(!$cod_proyecto){
        $errores[] = "Debes ponerle un codigo al proyecto";
    }

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

        $nombreImagen ="";

       if($imagen_proyecto['name']){
       //Eliminamos la imagen que subimos antes
       unlink($carpetaImagenes . $proyecto['imagen_proyecto']);
       // Renombramiento de imagenes 
       
       $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";
      
       
       move_uploaded_file($imagen_proyecto['tmp_name'], $carpetaImagenes  . $nombreImagen );
      
       }else{
        $nombreImagen = $proyecto['imagen_proyecto'];
       }

       

      



 // insertar en la base de datos 
 $query =" UPDATE proyecto SET nom_proyecto = '${nom_proyecto}', imagen_proyecto = '${nombreImagen}',ubicacion_proyecto = '${ubicacion_proyecto}', fecha_inicio = '${fecha_inicio}' , fecha_fin = '${fecha_fin}' , descripcion = '${descripcion}' WHERE cod_proyecto  = ${cod_proyecto}";

// $query =" UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}',imagen = '${nombreImagen}', descripcion = '${descripcion}' , 
// luz = ${luz} , agua = ${agua}, vista = ${vista} , vendedorId = ${vendedorId}  WHERE id = ${id}";

 //echo $query;


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

<label for="cod_proyecto">Codigo:</label>
<input type="number" id="cod_proyecto" name="cod_proyecto" placeholder="Codigo del proyecto" value="<?php echo $cod_proyecto; ?>">

<br>
<label for="nom_proyecto">Nombre:</label>
<input type="text" id="nom_proyecto" name="nom_proyecto" value="<?php echo $nom_proyecto; ?>">
<br>
<br>
<label for="imagen_proyecto">Imagen:</label>
<input type="file" id="imagen_proyecto" accept="image.jpeg, image/png" name="imagen_proyecto" >
<br>
<label for="ubicacion_proyecto" >Ubicacion:</label>
<input type="text" id="ubicacion_proyecto" name="ubicacion_proyecto" value="<?php echo $ubicacion_proyecto; ?>">
<br>

<label for="fecha_inicio">Fecha de inicio:</label >
<input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo $fecha_inicio; ?>" >


<br>

<label for="fecha_fin">Fecha de final:</label >
<input type="date" id="fecha_fin" name="fecha_fin" value="<?php echo $fecha_fin; ?>" >


<br>

<br>
<label for="descripcion">Descripcion</label >
<br>
<textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion del proyecto "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>

        </fieldset>

               
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Proyecto" class="boton bton-ver-propiedades">







    <!-- <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php //echo $titulo; ?>">

            <br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?php //echo $precio; ?>">

            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image.jpeg, image/png" name="imagen" >

            <img src="/imagenes/<?php //echo $imagenPropiedad;?>" class="imagen-Actualizar">
            <br>
            <label for="descripcion">Descripcion</label >
            <br>
            <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10" ><?php echo $descripcion; ?></textarea>
        </fieldset>


        <fieldset>

        <legend>Informacion de la propiedad</legend>

        <label for="luz" >electricidad:</label>
        <input type="text" id="luz" name="luz" value="</ echo $luz; ?>">
<br>
            <label for="agua">Agua:</label >
            <input type="text" id="agua" name="agua"  value="<?php //echo $agua; ?>">
<br>
            <label for="vista">Panorama:</label >
            <input type="text" id="vista" name="vista" value="<?// echo $vista; ?>" >


        </fieldset>

        <fieldset>
            <legend>Vendedor</legend >
            <select  name="vendedor">
                <option id="vendedor" value="1" >CemProdeca</option>
                <option id="vendedor" value="2" >IMAS</option>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar Propiedad" class="boton bton-ver-propiedades">
    </form> -->

</main>


<?php
    incluirTemplate('footer');
?>