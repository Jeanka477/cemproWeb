<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}

require 'includes/app.php';

$db = conectarDB();

// consultar
$query = "SELECT * FROM curso WHERE cod_curso = ${id}";

//obtener resultados
$resultado = mysqli_query($db, $query);

if(!$resultado->num_rows){
    header('Location: /');
}

$curso = mysqli_fetch_assoc($resultado);




 incluirTemplate('header');
 ?>


    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $curso['nombre_curso']; ?></h1>

        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $curso['imagen_curso']; ?>" alt="Imagen del curso">
        </picture>

        <div class="resumen-curso ">

            <p class="estado">Estado: <?php echo $curso['estado']; ?></p>


            <?php echo $curso['descripcion']; ?>


        </div>
    </main>

    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>