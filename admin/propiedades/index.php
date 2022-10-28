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
        <p class="alerta exito" >La propiedad de agrego Correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >La propiedad de actualizo Correctamente </p>
        <?php endif; ?>


        <div class="container-fluid">
        <form class="d-flex">
            <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar un Proyecto">
            <hr>
        </form>
        </div>

        <br>
        <a href="includes/reporte.php" class="btn btn-primary"><b>PDF</b> </a>
		</div>
		<br>



    <!-- <table  class= "table table-bordered table-striped table-hover table_id"> -->


    <table  class= "table table-bordered table-striped table-hover table_id" id="tblDatos">  
        <thead>
            <tr>

            <th>Codigo Propiedad</th>
            <th>Precio</th>
            <th>ubicacion</th>
            <th>tamano</th>
            <th>imagen</th>
            <th>acciones</th>
            </tr>
            <div class="botones-crud ">
            <a href="/admin/propiedades/crear.php" class="btn btn-success">Crear una nueva propiedad</a>
            <a href="/admin" class="btn btn-success">Volver</a>
            </div>
           
        </thead>

        <br><br>
     
      
               

        <tbody> <!--mostrar los resultados-->
            <?php  while($propiedad = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $propiedad['cod_propiedad']; ?></td>
                <td>₡<?php echo $propiedad['precio']; ?></td>
                <td><?php echo $propiedad['ubicacion']; ?></td>
                <td> <?php echo $propiedad['tamano']; ?>m²</td>
                <td><img style="width: 10rem;" src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla">  </td>
                <td>
                <!--Eliminar-->
                <form method="POST" class="w-100">

                <input type="hidden" name="cod_propiedad" value="<?php echo $propiedad['cod_prpiedad'];?>">
                <input type="submit"class="btn btn-outline-danger"value="Eliminar" onclick='return confirmation()'>
                </form>

                <br>
                 <!--Actualizar-->
                <a href="actualizar.php?cod_propiedad=<?php echo $propiedad['cod_propiedad'];?>" 
                class="btn btn-primary">Actualizar</a>
                </td>
            </tr>
          
            <?php  endwhile;?>

            
        </tbody>
</table>

<div id="paginador" class=""></div>
 

</main>


<script src="/bootstrap/js/bootstrap.bundle.js"></script>
<!--Este script es el de la paginacion -->
<script src="/BizPage/assets/js/paje.js" ></script>
<link href="/BizPage/assets/css/style.css" rel="stylesheet">
<!--Este script es el del buscador -->
<script src="/BizPage/assets/js/buscador.js"></script>
        
</body>

<?php

//Cerar conexion

mysqli_close($db);
    incluirTemplate('footer');
    ?>