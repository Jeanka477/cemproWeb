<?php
function conectarDB() : mysqli {

    $db = mysqli_connect(
        $_ENV['DB_HOST'] ,
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        $_ENV['DB_BD']
    );
   // $db = mysqli_connect('localhost','root','root','pruebas_crudImagenPropiedadProyecto2');


    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }else

    return $db;
}