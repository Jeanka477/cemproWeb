<?php 

    
   

    
     
        // Importar la conexion
        require '../includes/config/database.php';
        $db =conectarDB();


        //Escribir el Query
        $query = "SELECT * FROM propiedades"; 


        //Consultar la BD 
        $reultadoConsulta = mysqli_query($db, $query);



        //Muestra un mensaje condicional 
    $resultado = $_GET ['mensaje'] ?? null;

   
    //Incluye un template
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >La propiedad de agrego Correctamente </p>

        <?php endif; ?>


    <a href="/admin/propiedades/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>



    <table class= "propiedades">  
        <thead>
            <tr>

            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody> <!--mostrar los resultados-->
            <?php  while($propiedad = mysqli_fetch_assoc($reultadoConsulta)): ?>

            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla">  </td>
                <td> ₡<?php echo $propiedad['precio']; ?></td>
                <td>
<br>
                <a href="#"class="boton-eliminar">Eliminar</a>
                <br>
                <br>
                <br>
                <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" 
                class="boton-Actualizar">Actualizar</a>

                </td>
            </tr>
            <?php  endwhile;?>
        </tbody>
</table>
</main>

<?php


//Cerar conexion

                mysqli_close($db);
    incluirTemplate('footer');
    ?>