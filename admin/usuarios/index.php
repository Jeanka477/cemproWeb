<?php 


$auth = $_SESSION ['login'];

if(!$auth){
    header('location / ');
}

 // Importar la conexion
 require '../../includes/config/database.php';
 $db =conectarDB();


 //Escribir el Query
 $query = "SELECT * FROM usuarios"; 


 //Consultar la BD 
 $reultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET ['mensaje'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id =  $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

             //eliminar archivo



             //eliminar proyecto
            $query = "DELETE FROM usuarios WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin/usuarios/index?resultado=3');
            }
        }

        
    }


   

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<br><br><br><br>
<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >El usuario se agregó correctamente </p>
        <?php elseif(intval($resultado)  === 2): ?>
            <p class="alerta exito" >El usuario se actualizó correctamente </p>
        <?php endif; ?>






    <table class= "table table-bordered table-striped table-hover"  id="tblDatos">  
        <thead>
        <tr style="background-color: #bdffdf;">

            <th>Id</th>
            <th>Email</th>
            <th>Contraseña</th>
            
    
            </tr>
            <a href="/admin/usuarios/crear.php" class="btn btn-success"> Crear un nuevo usuario   </a>
            <br>
          <br>
            <a href="/admin" class="btn btn-success">Volver  </a>
            <br>
            <br>
        </thead>
                     

        <tbody> <!--mostrar los resultados-->
            <?php  while($usuario = mysqli_fetch_assoc($reultadoConsulta)): ?>
            <tr>
                
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['password']; ?></td>
 
            
                <td>
                <!--Eliminar-->
                <form method="POST" class="w-100">

                <input type="hidden" name="cod_curso" value="<?php echo $usuario['cod_curso'];?>">
                <input type="submit"class="btn btn-outline-danger"value="Eliminar">
                </form>

                 <!--Actualizar-->
                <a href="actualizar.php?cod_curso=<?php echo $usuario['cod_curso'];?>" 
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