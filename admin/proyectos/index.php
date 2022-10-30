<?php 

 // Importar la conexion
 require '../../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM proyecto"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['resultado'] ?? null;



    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id =  $_POST['cod_proyecto'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

             //eliminar archivo
             $query =  "SELECT imagen_proyecto FROM  proyecto WHERE cod_proyecto = ${id}";

             $resultado = mysqli_query($db, $query);
             $proyecto = mysqli_fetch_assoc($resultado);
            
 
             unlink('../../imagenes/' . $propiedad['imagen_proyecto']);



             //eliminar proyecto
            $query = "DELETE FROM proyecto WHERE cod_proyecto = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin/proyectos/index?resultado=3');
            }
        }

        
    }

   
   

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br>
<br>
<br>
<br>
<head>


    

<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>

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
        <p class="alerta exito" >El pryecto se agrego Correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >El pryecto se actualizo Correctamente </p>
            <?php elseif(intval($resultado)  === 3): ?>
            <p class="alerta exito" >El pryecto se elimino Correctamente </p>
        <?php endif; ?>



        <div class="container-fluid">
        <form class="d-flex">
            <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar un Proyecto">
            <hr>
        </form>
        </div>



        <br>
        <a href="/pdf-proyecto.php" class="btn btn-primary"><b>PDF</b> </a>
		</div>
		<br>


    <!-- <table  class= "table table-bordered table-striped table-hover table_id"> -->

<br>
    <table  class= "table table-bordered table-striped table-hover table_id" id="tblDatos">  
        <thead>
            <tr>

            <th>Codigo Proyecto</th>
            <th>Nombre</th>
            <th>ubicacion</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
            </tr>
            <div class="botones-crud ">
        <a href="/admin/proyectos/crear.php" class="btn btn-success">Publicar un nuevo proyecto</a>
            <a href="/admin" class="btn btn-success">Volver</a>
            </div>
        </thead>
        <br>
        <br>

        

      
     
      
               

        <tbody> <!--mostrar los resultados-->
            <?php  while($proyecto = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $proyecto['cod_proyecto']; ?></td>
                <td><?php echo $proyecto['nom_proyecto']; ?></td>
                <td><?php echo $proyecto['ubicacion_proyecto']; ?></td>
                <td> <?php echo $proyecto['fecha_inicio']; ?></td>
                <td> <?php echo $proyecto['fecha_fin']; ?></td>
                <td><img style="width: 10rem;" src="/imagenes/<?php echo $proyecto['imagen_proyecto']; ?>" class="imagen-tabla">  </td>
                <td>

                <form method="POST" class="w-100">

                <input type="hidden" name="cod_proyecto" value="<?php echo $proyecto['cod_proyecto'];?>">

                <input type="submit" class="btn btn-outline-danger" value="Eliminar" onclick='return confirmation()'>
                </form>
                <br>
                
              
                <a href="actualizar.php?cod_proyecto=<?php echo $proyecto['cod_proyecto'];?>" 
                class="btn btn-primary">Actualizar</a>
                </td>
            </tr>

            <?php  endwhile;?>
        </tbody>
</table>
<div id="paginador" class=""></div>
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

   
<link href="/BizPage/assets/css/style.css" rel="stylesheet">
<script src="/BizPage/assets/js/paje.js" ></script>
<script src="/bootstrap/js/bootstrap.bundle.js"></script>
<!--Este script es el del buscador -->
<script src="/BizPage/assets/js/buscador.js"></script>
        
    </body>