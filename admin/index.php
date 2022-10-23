<?php 

require '../includes/funciones.php';
$auth = estarAutenticado();


if (!$auth){
    header('Location: /');
}





   

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/proyectos/index.php"> Crear un proyecto</a>
            </div>
            <br>

            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/propiedades/index.php">Publicar una propiedad</a>
            </div>
            <br>
            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/cursos/index.php"> Agregar un curso</a>
            </div>

    <table class= "propiedades">  
        <thead>
<?php

    incluirTemplate('footer');
    ?>