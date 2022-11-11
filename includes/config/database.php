<?php
function conectarDB() : mysqli {

    //mysql://bbd6310f71c718:b3f72c30@us-cdbr-east-06.cleardb.net/heroku_be4e81f72c98ffa?reconnect=true
    //$db = mysqli_connect('us-cdbr-east-06.cleardb.net','bbd6310f71c718','b3f72c30','heroku_be4e81f72c98ffa');
    $db = mysqli_connect('localhost','root','root','cemprodeca');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }else

    return $db;
}