<?php 

require '../includes/funciones.php';
$auth = estarAutenticado();


if (!$auth){
    header('Location: /');
}





   

incluirTemplate('header');
?>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Administrador de cemproweb</h1>  
<main class="contenedor seccion">
      

    <div class="botones-admin">
                <a class="btn btn-success" href="admin/proyectos/index.php"> Crear un proyecto</a>
            </div>
            <br>

            <br>
            <div class="botones-admin">
                <a class="btn btn-success" href="admin/propiedades/index.php">Publicar una propiedad</a>
            </div>
            <br>
            <br>
            <div class="botones-admin">
                <a class="btn btn-success" href="admin/cursos/index.php"> Agregar un curso</a>
            </div>

    <table class= "propiedades">  
        <thead>
<?php


 
    
    ?>
        <link href="/BizPage/assets/css/style.css" rel="stylesheet">
