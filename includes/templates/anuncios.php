<?php

//importar la conexion
require __DIR__ .'/../config/database.php';
$db =   conectarDB();

// consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">


            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio"><?php echo $propiedad['precio']; ?></p>


                <!-- <ul class="iconos-cararteristicas">
                    <li>
                        <img loading="lazy" src="build/img/IconoAgua.svg" alt="">
                        <p>   No</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/Electricidad.svg" alt="">
                        <p>No</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/Paisaje.svg" alt="">
                        <p>SI</p>
                    </li>
                </ul> -->

                <a href="propiedad.php?id=<?php echo $propiedad['cod_propiedad']; ?>" class="boton-celeste">
                    Ver Propiedad </a>

                </div><!--.contenido anuncio-->
            </div><!--anuncio-->
            <?php endwhile; ?>
            </div><!--.contenedor anuncios-->


            <?php

        //cerrar la conexion

        mysqli_close($db);



            ?>