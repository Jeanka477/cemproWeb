<?php 

    $resultado = $_GET ['mensaje'] ?? null;

   

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de cemproweb</h1>    

    <?php if(intval($resultado)  === 1): ?>
        <p class="alerta exito" >La propiedad de agrego Correctamente </p>

        <?php endif; ?>


    <a href="/admin/propiedades/crear.php" class="boton bton-ver-propiedades">Crear una nueva propiedad</a>



    <table class= "propiedades">  
        <thead>
            <tr>

            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Finca</td>
                <td><img src="/imagenes/archivo.jpg" class="imagen-tabla">  </td>
                <td>$30000000</td>
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

<a href="/admin/proyectos/crear.php" class="boton bton-ver-propiedades">Crear una nuevo proyecto</a>



    <table class= "propiedades">  
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