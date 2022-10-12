<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}


//importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

// consultar
$query = "SELECT * FROM propiedades WHERE cod_propiedad = ${id}";

//obtener resultados
$resultado = mysqli_query($db, $query);

if(!$resultado->num_rows){
    header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);


require 'includes/funciones.php';

 incluirTemplate('header');
 ?>



    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['nom_propiedad']; ?></h1>

        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad ">
            <p class="precio">$<?php echo $propiedad['precio']; ?></p>
          

            <?php echo $propiedad['descripcion']; ?>


        </div>
    </main>

    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>