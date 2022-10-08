<?php 

 // Importar la conexion
 require '../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM proyecto"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['mensaje'] ?? null;

   

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >La propiedad de agrego Correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >La propiedad de actualizo Correctamente </p>
        <?php endif; ?>






    <table class= "propiedades">  
        <thead>
            <tr>

            <th>Codigo Proyecto</th>
            <th>Nombre</th>
            <th>ubicacion</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
            </tr>
            <a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>
        </thead>

        <a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nuevo proyecto</a>
     
      
               

        <tbody> <!--mostrar los resultados-->
            <?php  while($proyecto = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $proyecto['cod_proyecto']; ?></td>
                <td><?php echo $proyecto['nom_proyecto']; ?></td>
                <td><?php echo $proyecto['ubicación_proyecto']; ?></td>
                <td> <?php echo $proyecto['fecha_inicio']; ?></td>
                <td> <?php echo $proyecto['fecha_fin']; ?></td>
                <td><img src="/imagenes/<?php echo $proyecto['imagen_proyecto']; ?>" class="imagen-tabla">  </td>
                <td>

                <a href="#"class="boton-eliminar">Eliminar</a>
              
                <a href="admin/propiedades/actualizar.php?cod_propiedad=<?php echo $propiedad['cod_proyecto'];?>" 
                class="boton-Actualizar">Actualizar</a>
                </td>
            </tr>

            <?php  endwhile;?>
        </tbody>
</table>
 <!--<a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nuevo proyecto</a>



    <table class= "propiedades">  
        <thead>
            <tr>

            <th>Codigo proyecto</th>
            <th>Nombre Proyecto</th>
            <th>Ubicacion</th>
            <th>Fecha de inicio</th>
            <th>fecha de final</th>
            <th>descripcion</th>
            <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> /<?// echo $proyecto['id']; ?></td>
                <td><?php //echo $proyecto['cod_proyecto']; ?></td>
                <td><?php //echo $proyecto['nom_proyecto']; ?></td>
                <td><img src="/imagenes/<?php //echo $proyecto['imagen']; ?>" class="imagen-tabla">  </td>
                <td><?// echo $proyecto['fecha_inicio']; ?></td>
                <td><?php //echo $proyecto['fecha_fin']; ?></td>
                <td><?php //echo $proyecto['descripcion']; ?></td>
                <td></td>
                <td>
            
<br>
                <a href="#"class="boton-eliminar">Eliminar</a>
                <br>
                <br>
                <br>
                <a href="#" class="boton-Actualizar">Actualizar</a>

                </td>
            </tr>
          
        </tbody>
    </table>
-->


</main>


<?php

//Cerar conexion

mysqli_close($db);
    incluirTemplate('footer');
    ?>