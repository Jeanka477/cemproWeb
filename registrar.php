<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>
<br>
<br>
<br>
<br>
<br>


<div class="contenedor-registro">
    <form action="" method="POST" class="formulario-registro">
        <h2 class="titulo">Registrar</h2>
        <?php
 include ("BizPage/assets/controlador/controlador_registrar_usuario.php");

        ?>
        <div class="email">
            <label for="">Email</label>
            <input type="email" name="email">
        </div>

        <div class="password">
            <label for="">Contraseña</label>
            <input type="password" name="password">
        </div>

        <div class="registrar"></div>
        <input class="boton-registrar" type="submit" value="Registrar" name="registrar">
        <a href="login.php">Salir</a>
    </form>
</div>




<link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>
