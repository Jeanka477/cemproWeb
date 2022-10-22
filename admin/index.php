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

    <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/proyectos/index.php"> Crear un proyecto</a>
            </div>
            <br>

            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/propiedades/index.php">Publicar una propiedad</a>
            </div>
            <br>
            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="admin/cursos/index.php"> Agregar un curso</a>
            </div>






    <table class= "propiedades">  
        <thead>
      
 
<?php

//Cerar conexion

mysqli_close($db);
    incluirTemplate('footer');
    ?>