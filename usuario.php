<?php

//importar conexion
require 'includes/config/database.php';
$db = conectarDB();

//crear email y pass
// $email = "correo@correo.com";
// $password = "123456";


$passwordHash = password_hash($password, PASSWORD_DEFAULT);



//query para crear usuario
$query = "INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}' );";
echo"<pre>";
echo $query;
echo"</pre>";



//agregarlo a la base de datos
mysqli_query($db, $query);