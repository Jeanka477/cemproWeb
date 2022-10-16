<?php

//importar la conexion

$db =   conectarDB();

// consultar
$query = "SELECT * FROM proyecto LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
    <?php while($proyecto = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">


            <img loading="lazy" src="/imagenes/<?php echo $proyecto['imagen_proyecto']; ?>" alt="anuncio">
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $proyecto['descripcion']; ?></p>
                <p class="precio"><?php echo $proyecto['precio']; ?></p>

                <a href="proyecto.php?id=<?php echo $proyecto['cod_proyecto']; ?>" class="boton-celeste">
                    Ver proyecto </a>

                </div><!--.contenido anuncio-->
            </div><!--anuncio-->
            <?php endwhile; ?>
            </div><!--.contenedor anuncios-->


            <?php

        //cerrar la conexion

        mysqli_close($db);



            ?>