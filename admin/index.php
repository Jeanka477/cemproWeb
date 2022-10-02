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
</main>

<?php
    incluirTemplate('footer');
    ?>