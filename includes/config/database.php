<?php
function conectarDB() : mysqli {

    $db = mysqli_connect('localhost','root','root','bdHojancha2');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}