<?php 
session_start();



$auth = $_SESSION ['login'];

if (!$auth){
    header('Location: /');
}


 // Importar la conexion
 require '../../includes/config/database.php';
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
                header('location: /admin/propiedades/index?resultado=3');
            }
        }

        
    }

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<script>    
function confirmation(){
    var respuesta = confirm("Esta seguro de eliminar esta Propiedad?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}
</script>

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

            <th>Codigo Propiedad</th>
            <th>Precio</th>
            <th>ubicacion</th>
            <th>tamano</th>
            <th>imagen</th>
            <th>acciones</th>
            </tr>
            <a href="/admin/propiedades/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>
            <a href="/admin" class="boton bton-ver-propiedades">Volver</a>
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
                <!--Eliminar-->
                <form method="POST" class="w-100">

                <input type="hidden" name="cod_propiedad" value="<?php echo $propiedad['cod_prpiedad'];?>">
                <input type="submit"class="boton-eliminar"value="Eliminar" onclick='return confirmation()'>
                </form>

                 <!--Actualizar-->
                <a href="actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
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