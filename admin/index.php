<?php 



 // Importar la conexion
 require '../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM propiedades"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['resultado'] ?? null;

   

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >La propiedad de agrego Correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >La propiedad de actualizo Correctamente </p>
            <?php elseif(intval($resultado)  === 3): ?>
            <p class="alerta exito" >La propiedad se eliminada correctamente Correctamente </p>
        <?php endif; ?>






    <table class= "propiedades">  
        <thead>
            <tr>

            <th>Codigo Propiedad</th>
            <th>Precio</th>
            <th>ubicacion</th>
            <th>tamano</th>
            <th>imagen</th>
            <th>acciones</th>
            </tr>
            <br>
            <a href="/admin/propiedades/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>
        </thead>

       <!-- <a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nuevo proyecto</a>-->
     
      
               

        <tbody> <!--mostrar los resultados-->
        <?php  while($propiedad = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
            <td><?php echo $propiedad['cod_propiedad']; ?></td>
                <td>₡<?php echo $propiedad['precio']; ?></td>
                <td><?php echo $propiedad['ubicacion']; ?></td>
                <td> <?php echo $propiedad['tamano']; ?>m²</td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla">  </td>
                <td>

                <a href="#"class="boton-eliminar">Eliminar</a>
              
                <a href="admin/propiedades/actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
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

                   <input type="submit"class="boton-eliminar"value="Eliminar">
                   </form>
                  
                   <br>
                   
                <a href="admin/propiedades/actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
                class="boton-Actualizar" class="w-100">Actualizar</a>
                <br>
                
                </td>
            </tr>

          
        </tbody>
</table>


</main>


<?php

//Cerar conexion

mysqli_close($db);
    incluirTemplate('footer');
    ?>