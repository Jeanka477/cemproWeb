<?php 
//Base de datos
require '../../includes/config/database.php';
$db =conectarDB();

//Validacion del formulario


if ($_SERVER['REQUEST_METHOD'] ==='POST'){
  //  echo "<pre>";
   // var_dump($_POST);
   // echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $luz = $_POST['luz'];
    $agua = $_POST['agua'];
    $vista = $_POST['vista'];
    $vendedorId = $_POST['vendedor'];

    // insertar en la base de datos 
    $query =" INSERT INTO propiedades (titulo, precio, descripcion, 
    luz, agua, vista, vendedorId)  VALUES('$titulo', '$precio', '$descripcion', '$luz', '$agua','$vista','$vendedorId')";

    //echo $query;

    $resultado = mysqli_query($db, $query);
    if($resultado){
        echo "Insertado Correctamente";
    }

}
    



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>   
    
    
    <a href="/admin" class="boton bton-ver-propiedades">Volver</a> <br>

<br>
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad">

            <br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio propiedad">

            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image.jpeg, image/png" >
            <br>
            <label for="descripcion">Descripcion</label>
            <br>
            <textarea id="descripcion"  name="descripcion"placeholder="Escriba una descripcion de la propiedad "cols="60" rows="10"></textarea>
        </fieldset>


        <fieldset>

        <legend>Informacion de la propiedad</legend>

        <label for="luz" >electricidad:</label>
        <input type="text" id="luz" name="luz" >
<br>
            <label for="agua">Agua:</label>
            <input type="text" id="agua" name="agua" >
<br>
            <label for="vista">Panorama:</label>
            <input type="text" id="vista" name="vista" >


        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select  name="vendedor">
                <option id="vendedor" value="1" >CemProdeca</option>
                <option id="vendedor" value="2" >IMAS</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton bton-ver-propiedades">
    </form>



</main>


<?php
    incluirTemplate('footer');
    ?>