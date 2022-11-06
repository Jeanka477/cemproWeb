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


    $email =  mysqli_real_escape_string( $db, $_POST['email']);
    $password =  mysqli_real_escape_string( $db, $_POST['password']);


    


    // asignar files hacia una variable 

   


    if(!$nombre_curso){
        $errores[] = "Debes agregar un email al usuario";
    }

    if(!$descripcion){
        $errores[] = "El usuario debe tener una contraseña";
    }

    



 // insertar en la base de datos 
 $query =" INSERT INTO usuarios ( email, password)  
 VALUES('$email', '$password')";

 //echo $query;   cod_proyecto, '$cod_proyecto',

 $resultado = mysqli_query($db, $query);
 if($resultado){
    header('location: /admin?resultado=1');
 }

    }


   

    



require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br><br><br><br>
<main class="contenedor seccion">
    <h1>Crear</h1>   
    
    
    <a href="/admin/usuarios"  class="formulario aling text-left">Volver</a> <br>

<br>


<?php foreach($errores as $error):?>
    <div class="alerta error">
    <?php echo $error; ?>
    </div>

   
    <?php endforeach; ?>



    <form   method="POST" action="/admin/usuarios/crear.php" enctype="multipart/form-data">
        <fieldset class="form-control w-25 aling text-center">
            <legend>Informacion general</legend>
            <label for="nombre_curso">Email:</label>
            <input class="form-control w-25 aling text-center" class="" type="email" id="email" name="email" value="<?php echo $email; ?>">
            <br>
           
            <label for="imagen_curso">Contraseña:</label>
            <input class="form-control w-25 aling text-center" type="password" id="password"  name="password" >
            <br>
           <br>

            
<br>
        
        </fieldset>


        <input  type="submit" value="Crear Usuario" class="boton bton-ver-propiedades">
    </form>



</main>


<link href="/BizPage/assets/css/style.css" rel="stylesheet">
<?php
    incluirTemplate('footer');
?>