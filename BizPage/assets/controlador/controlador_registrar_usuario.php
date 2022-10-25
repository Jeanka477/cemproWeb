<?php
if (!empty($_POST["registrar"])){
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        echo '<div class="alerta">Uno de los campos esta vacio</div>' ;
    } else {
        $email=$_POST["email"];
        $password=$_POST["password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
        $query =" INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}' );";

        if($query==1){
            echo '<div class="succes">Usuario registrado bien</div>' ;
        } else {
            echo '<div class="alerta">Error</div>' ;
        }
    }
    
}
?>