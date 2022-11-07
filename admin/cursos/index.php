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

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id =  $_POST['cod_curso'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

             //eliminar archivo
             $query =  "SELECT imagen_curso FROM  curso WHERE cod_curso = ${id}";

             $resultado = mysqli_query($db, $query);
             $curso = mysqli_fetch_assoc($resultado);
            
 
             unlink('../../imagenes/' . $curso['imagen_curso']);



             //eliminar proyecto
            $query = "DELETE FROM curso WHERE cod_curso = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin/cursos/index?resultado=3');
            }
        }

        
    }


   

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br><br><br><br>

<body>
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
        <p class="alerta exito" >El curso se agregó correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >El curso se actualizó correctamente </p>
        <?php endif; ?>






    <table class= "table table-bordered table-striped table-hover"  id="tblDatos">  
        <thead>
        <tr style="background-color: #bdffdf;">

            <th>Código Curso</th>
            <th>Nombre del Curso</th>
            <th>Descripción</th>
            
            <th>Estado</th>
            <th>Imágen</th>
            <th>Acciones</th>
            </tr>
            <a href="/admin/cursos/crear.php" class="btn btn-success"> Crear un nuevo curso   </a>
            <br>
          <br>
            <a href="/admin" class="btn btn-success">Volver  </a>
            <br>
            <br>
        </thead>
                     

        <tbody> <!--mostrar los resultados-->
            <?php  while($curso = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $curso['cod_curso']; ?></td>
                <td><?php echo $curso['nombre_curso']; ?></td>
                <td><?php echo $curso['descripcion']; ?></td>
                <td> <?php echo $curso['estado']; ?></td>
                <td><img style="width: 10rem;" src="/imagenes/<?php echo $curso['imagen_curso']; ?>" class="imagen-tabla">  </td>
                <td>
                <!--Eliminar-->
                <form method="POST" class="w-100">

                <input type="hidden" name="cod_curso" value="<?php echo $curso['cod_curso'];?>">
                <input type="submit"class="btn btn-outline-danger"value="Eliminar" onclick='return confirmation()'>
                </form>

                 <!--Actualizar-->
                <a href="actualizar.php?cod_curso=<?php echo $curso['cod_curso'];?>" 
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
</body>

<?php

//Cerar conexion

mysqli_close($db);