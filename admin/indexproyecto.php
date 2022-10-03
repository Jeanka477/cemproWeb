<?php 



    $resultado = $_GET ['mensaje'] ?? null;

   

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >El proyecto se agrego Correctamente </p>

        <?php endif; ?>


    <a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nuevo proyecto</a>



    <table class= "proyecto">  
        <thead>
            <tr>

            <th>Codigo proyecto</th>
            <th>Nombre Proyecto</th>
            <th>Ubicacion</th>
            <th>Fecha de inicio</th>
            <th>fecha de final</th>
            <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/imagenes/archivo.jpg" class="imagen-tabla">  </td>
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
</main>

<?php
    incluirTemplate('footer');
    ?>