<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}

require 'includes/app.php';

$db = conectarDB();

// consultar
$query = "SELECT * FROM propiedades WHERE cod_propiedad = ${id}";

//obtener resultados
$resultado = mysqli_query($db, $query);

if(!$resultado->num_rows){
    header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);




 incluirTemplate('header');
 ?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Ubicación: <?php echo $propiedad['ubicacion']; ?></h1>


        <p></p>
        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad ">
            
        <p>Tamaño: <?php echo $propiedad['tamano']; ?></p>
        <p class="precio">Precio: $<?php echo $propiedad['precio']; ?></p>
          

            <?php echo $propiedad['descripcion']; ?>


        </div>
    </main>

    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>