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
        <h1>Nombre de la propiedad<?php echo $propiedad['nom_propiedad']; ?></h1>

        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad ">
            <p class="precio">Precio $<?php echo $propiedad['precio']; ?></p>
          

            <?php echo $propiedad['descripcion']; ?>


        </div>
    </main>

    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>