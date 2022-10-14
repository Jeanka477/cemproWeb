
<?php 

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEMPRODECA</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo  $inicio ? 'inicio': '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                   <!-- <img src="build/img/logo.svg" alt="Logotipo de cemprodeca">-->

                   <img loading="lazy" src="/build/img/CEMPRODECA.png" alt="anincio" class="logoCemprodeca">
                </a>
                <div class="movil-menu">
                    <img src="/build/img/barras.svg " alt="ICono de menu para moviles">
                </div>
                <div class="derecha"> 
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                    
                        <a href="requisitos.php">Solicite su crédito aquí</a>
                        <a href="proyectos.php">Proyectos</a>
                        <a href="propiedades.php">Propiedades</a>
                        <a href="historia.php">Historia</a>
                        <a href="contactenos.php"> Contáctenos</a>
                        <a href="login.php"> Iniciar Sesión</a>
                        <?php if($auth): ?>
                            <a href="cerrar-sesion.php"> Cerrar Sesión</a>

                            <?php endif; ?>

                       </nav>
                </div>

            </div> <!--Termina clase barra-->
           

        </div>
    </header> 

    