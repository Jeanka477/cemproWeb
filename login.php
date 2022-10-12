<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>    

    <form class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input type="email" placeholder="Tu Email" id="email">

            <label for="password">Password</label>
            <input type="password" placeholder="Tu Password" id="password">

        </fieldset>

        <br>
        <input type="submit" value="Iniciar Sesión" class="boton-celeste">
    </form>
</main>

<?php
    incluirTemplate('footer');
    ?>