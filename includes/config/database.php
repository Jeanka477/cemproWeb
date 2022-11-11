<?php
function conectarDB() : mysqli {

  //  $db = mysqli_connect(
       // $_ENV['DB_HOST'] ,
       // $_ENV['DB_USER'],
       // $_ENV['DB_PASS'],
        //$_ENV['DB_BD']
   // );
    $db = mysqli_connect('us-cdbr-east-06.cleardb.net','bbd6310f71c718','b3f72c30','heroku_be4e81f72c98ffa');


    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }else

    return $db;
}