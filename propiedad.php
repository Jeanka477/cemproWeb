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

<br><br><br><br>

    <main >
        <div class="contenido-propiedad">
        <h1>Ubicación: <?php echo $propiedad['ubicacion']; ?></h1>


        <p></p>
        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad ">
            
        <h2>Tamaño: <?php echo $propiedad['tamano']; ?></h2>
        <h2 class="precio">Precio: $<?php echo $propiedad['precio']; ?></h2>
          

            <?php echo $propiedad['descripcion']; ?>


        
    </main>
</div>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php
    
    
    mysqli_close($db);

    incluirTemplate('footer');?>