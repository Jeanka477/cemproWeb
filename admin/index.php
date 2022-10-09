<?php 



 // Importar la conexion
 require '../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM propiedades"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['resultado'] ?? null;

   

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cod_propiedad = $_POST['cod_propiedad'];
        $cod_propiedad = filter_var($cod_propiedad, FILTER_VALIDATE_INT);

        if($cod_propiedad){

            //Eliminar archivo
            $query = "SELECT imagen FROM propiedade WHERE cod_propiedad = ${cod_propiedad}";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_query($resultado);

            unlink ('../imagenes/'. $propiedad['imagen']);

            exit;

            //Eliminar propiedad
            $query = "DELETE FROM propiedades WHERE cod_propiedad = ${cod_propiedad}";
            $resultado = mysqli_query($db, $query);

       
        if($resultado){
            header('location: /admin?resultado=3');
        }

      } 
    }


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

                <br>
              
                <form method="POST" class="w-100">
                    <input type="hidden" name="codigo propiedad" value="<?php echo $propiedad['cod_propiedad']; ?>">

                   <input type="submit"class="boton-eliminar"value="Eliminar">
                   </form>
                  
                   <br>
                   
                <a href="admin/propiedades/actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
                class="boton-Actualizar" class="w-100">Actualizar</a>
                <br>
                
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