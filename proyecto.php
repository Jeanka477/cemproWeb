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

<body style="background-color: #b5ffe545">

<br>
<br>
<br>
<br>
<br>
<br>

    <main class="contenido-proyecto" >
        <h1><?php echo $proyecto['nom_proyecto']; ?></h1>

        <picture>
            <img loading="lazy" src="/imagenes/<?php echo $proyecto['imagen_proyecto']; ?>" alt="Imagen del proyecto">
        </picture>

        <div class="resumen-proyecto ">
            <h2 class="ubicacion">Ubicación: <?php echo $proyecto['ubicacion_proyecto']; ?></h2>

            <h2 class="fecha_inicio">Fecha de inicio: <?php echo $proyecto['fecha_inicio']; ?></h2>
          
            <h2 class="fecha_fin">Fecha de finalización: <?php echo $proyecto['fecha_fin']; ?></h2>

            <h2 class="fecha_fin">Descripción: <?php echo $proyecto['descripcion']; ?>


        </div>
    </main>
</body>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php 
    mysqli_close($db);

    incluirTemplate('footer');?>