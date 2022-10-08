<?php
function conectarDB() : mysqli {

    $db = mysqli_connect('localhost','root','root','BDCemprowebPruebas2');
   // $db = mysqli_connect('localhost','root','root','pruebas_crudImagenPropiedadProyecto2');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}