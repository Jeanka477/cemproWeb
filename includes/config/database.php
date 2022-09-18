<?php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost','root','7370543jJ','bdcemproWeb');


    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}