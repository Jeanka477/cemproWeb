<?php 

 // Importar la conexion
 require '../../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM formularios_fiador"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['resultado'] ?? null;



    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id =  $_POST['cod_formF'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

             //eliminar archivo
             



             //eliminar proyecto
            $query = "DELETE FROM formularios_fiador WHERE cod_formF = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: \admin\formularios_fiador\index?resultado=3');
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
    var respuesta = confirm("Esta seguro de eliminar este formulario?");
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
        <p class="alerta exito" >El formulario se agrego Correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >El formulario se actualizo Correctamente </p>
            <?php elseif(intval($resultado)  === 3): ?>
            <p class="alerta exito" >El formulario se elimino Correctamente </p>
        <?php endif; ?>



        <div class="container-fluid">
        <form class="d-flex">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="10" cy="10" r="7" />
        <line x1="21" y1="21" x2="15" y2="15" /></svg>

            <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar"> 
            <hr>
        </form>
        </div>



        <br>
        <a href="/pdf-fiador.php" class="btn btn-primary"><b>PDF</b> </a>
		</div>
		<br>



    <!-- <table  class= "table table-bordered table-striped table-hover table_id"> -->

<br>
    <table  class= "table table-bordered table-striped table-hover table_id" id="tblDatos">  
        <thead>
            <tr style="background-color: #bdffdf;">

            <th>Monto</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Cédula</th>
            <th>Cantón</th>
            <th>Empresa</th>
            <th>Acción</th>
            </tr>
            <div class="botones-crud ">
        <!-- <a href="#" class="btn btn-success">crear</a> -->
            <a href="/admin" class="btn btn-primary btn-lg">Volver</a>
            </div>
        </thead>
        <br>
        <br>

        

      
     
      
               

        <tbody> <!--mostrar los resultados-->
            <?php  while($formularioF = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $formularioF['monto_solicitar']; ?></td>
                <td><?php echo $formularioF['nombre_cliente']; ?></td>
                <td><?php echo $formularioF['edad']; ?></td>
                <td> <?php echo $formularioF['cedula']; ?></td>
                <td> <?php echo $formularioF['canton']; ?></td>
                <td> <?php echo $formularioF['nombre_emp']; ?></td>
                <td>

                <form method="POST" class="w-100">

                <input type="hidden" name="cod_proyecto" value="<?php echo $formularioF['cod_formF'];?>">

                <input type="submit" class="btn btn-danger" value="Eliminar" onclick='return confirmation()'>
                </form>
                <br>
                
              
                <a href="actualizar.php?cod_formF=<?php echo $formularioF['cod_formF'];?>" 
                class="btn btn-warning">Imprimir</a>
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