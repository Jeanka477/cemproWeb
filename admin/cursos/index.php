<?php 


$auth = $_SESSION ['login'];

if(!$auth){
    header('location / ');
}

 // Importar la conexion
 require '../../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM curso"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['mensaje'] ?? null;

   

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br><br><br><br>
<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >El curso se agregó correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >El curso se actualizó correctamente </p>
        <?php endif; ?>






    <table class= "table table-bordered table-striped table-hover"  id="tblDatos">  
        <thead>
            <tr>

            <th>Código Curso</th>
            <th>Nombre del Curso</th>
            <th>Descripción</th>
            <th>Estado</th>
            </tr>
            <a href="/admin/cursos/crear.php" class="btn btn-success"> Crear un nuevo curso   </a>
            <br>
          <br>
            <a href="/admin" class="btn btn-success">Volver  </a>
        </thead>
                     

        <tbody> <!--mostrar los resultados-->
            <?php  while($curso = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $curso['cod_curso']; ?></td>
                <td><?php echo $curso['nombre_curso']; ?></td>
                <td><?php echo $curso['descripcion']; ?></td>
                <td> <?php echo $curso['estado']; ?></td>
                <td><img src="/imagenes/<?php echo $curso['imagen']; ?>" class="imagen-tabla">  </td>
                <td>
                <!--Eliminar-->
                <form method="POST" class="w-100">

                <input type="hidden" name="cod_curso" value="<?php echo $curso['cod_curso'];?>">
                <input type="submit"class="btn btn-outline-danger"value="Eliminar">
                </form>

                 <!--Actualizar-->
                <a href="admin/cursos/actualizar.php?cod_curso=<?php echo $curso['cod_curso'];?>" 
                class="btn btn-primary">Actualizar</a>
                </td>
            </tr>
            <?php  endwhile;?>

            
        </tbody>
</table>
<div id="paginador" class=""></div>
 

</main>
<script src="/BizPage/assets/js/paje.js" ></script>
<link href="/BizPage/assets/css/style.css" rel="stylesheet">


<?php

//Cerar conexion

mysqli_close($db);