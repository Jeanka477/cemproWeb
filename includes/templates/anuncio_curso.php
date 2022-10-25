<?php


//importar la conexion

$db =   conectarDB();

// consultar
$query = "SELECT * FROM curso LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
    <?php while($curso = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">

            
            <img loading="lazy" src="/imagenes/<?php echo $curso['imagen_curso']; ?>" alt="anuncio">
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $curso['descripcion']; ?></p>
                

                <a href="curso.php?id=<?php echo $curso['cod_curso']; ?>" class="boton_detalles">
                    Ver curso </a>

                </div><!--.contenido anuncio-->
            </div><!--anuncio-->
            <?php endwhile; ?>
            </div><!--.contenedor anuncios-->


            <?php

        //cerrar la conexion

        mysqli_close($db);



            ?>