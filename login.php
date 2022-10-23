<?php 


//incluye el header
require 'includes/app.php';
 $db = conectarDB();
//Autenticar el usuario

$errores = [];
if ($_SERVER['REQUEST_METHOD']==='POST'){

   // echo "<pre>";
    //var_dump($_POST);
   // echo "</pre>";

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password =mysqli_real_escape_string($db, $_POST['password']);

    if(!$email){
        $errores[] = "El email es obligatorio o no es valido";
    }

    if(!$password){
        $errores[] = "El password es obligatorio";
    }

    if(empty($errores)){
    //Revisar si el usuario existe
    $query = "SELECT * FROM usuarios WHERE email = '${email}'";
    $resultado = mysqli_query($db, $query);
  

    if ($resultado->num_rows){
        //Revisar si el password es correcto
        $usuario = mysqli_fetch_assoc($resultado);


        //var_dump($usuario);

        //Verificar si el pasword es correcto
        $auth = password_verify($password, $usuario['password']);
       
        if($auth){
            //El usuario esta autenticado
            session_start();

            //llenar el arreglo de la sesión
            $_SESSION['usuario'] = $usuario['email'];
            $_SESSION['login'] = true;


            header('Location: /admin');


          
           

        }else{
            $errores[] = 'El password es incorrecto';
        }

    }else{
        $errores[] = "El usuario no existe";
    }
    

}

}

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>    



    <?php foreach($errores as $error):?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
        <?php endforeach; ?>



    <form method="POST" class="formulario">
        <fieldset class="login">


            <label for="email">Email</label>
            <input class="input" type="email" name="email" placeholder="Tu Email" id="email">

            <label for="password">Password</label>
            <input class="input" type="password" name="password" placeholder="Tu Password" id="password" >

            <br>
        <input type="submit" value="Iniciar Sesión" class="boton-login" >

        </fieldset>

       
    </form>
</main>

<?php
    incluirTemplate('footer');
?>