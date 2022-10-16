<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}

require 'includes/app.php';

$db = conectarDB();

// consultar
$query = "SELECT * FROM proyecto WHERE cod_proyecto = ${id}";

//obtener resultados
$resultado = mysqli_query($db, $query);

if(!$resultado->num_rows){
    header('Location: /');
}

$proyecto = mysqli_fetch_assoc($resultado);




 incluirTemplate('header');
 ?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Nombre del proyecto<?php echo $proyecto['nom_proyecto']; ?></h1>

        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $proyecto['imagen']; ?>" alt="Imagen de la proyecto">
        </picture>

        <div class="resumen-proyecto ">
            <p class="ubicacion">Ubicación: $<?php echo $proyecto['ubicacion']; ?></p>

            <p class="fecha_inicio">Fecha de inicio: <?php echo $proyecto['fecha_inicio']; ?></p>
          
            <p class="fecha_fin">Fecha de finalización: <?php echo $proyecto['fecha_fin']; ?></p>

            <?php echo $proyecto['descripcion']; ?>


        </div>
    </main>

    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>