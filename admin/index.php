<?php 

require '../includes/funciones.php';
$auth = estarAutenticado();


if (!$auth){
    header('Location: /');
}


 // Importar la conexion
 require '../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM propiedades"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['resultado'] ?? null;


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id =  $_POST['cod_propiedad'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){


            //eliminar archivo
            $query =  "SELECT imagen FROM  propiedades WHERE cod_propiedad = ${id}";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);
           

            unlink('../imagenes/' . $propiedad['imagen']);
            


        //eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE cod_propiedad = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin?resultado=3');
            }
        }

        
    }
   

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >La propiedad de agregó correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >La propiedad de actualizó correctamente </p>
            <?php elseif(intval($resultado)  === 3): ?>
            <p class="alerta exito" >La propiedad se eliminó correctamente </p>
        <?php endif; ?>






    <table class= "propiedades">  
        <thead>
            <tr>

            <th>Código Propiedad</th>
            <th>Precio</th>
            <th>Ubicación</th>
            <th>Tamaño</th>
            <th>Imagen</th>
            <th>Acciones</th>
            </tr>
            <br>
            <a href="/admin/propiedades/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>
        </thead>
               

        <tbody> <!--mostrar los resultados-->
        <?php  while($propiedad = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
            <td><?php echo $propiedad['cod_propiedad']; ?></td>
                <td>₡<?php echo $propiedad['precio']; ?></td>
                <td><?php echo $propiedad['ubicacion']; ?></td>
                <td> <?php echo $propiedad['tamano']; ?>m²</td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla">  </td>
                <td>




                <form method="POST" class="w-100">

                <input type="hidden" name="cod_propiedad" value="<?php echo $propiedad['cod_propiedad'];?>">

                <input type="submit" class="boton-eliminar" value="Eliminar">
                </form>

                
              
                <a href="admin/propiedades/actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
                class="boton-Actualizar">Actualizar</a>
                </td>
            </tr>

            <?php  endwhile;?>
        </tbody>
</table>
 
















































<?php

//Cerar conexion

mysqli_close($db);
    incluirTemplate('footer');
    ?>