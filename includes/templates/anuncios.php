<?php

//importar la conexion

$db =   conectarDB();

// consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CEMPRODECA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/BizPage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/BizPage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/BizPage/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>



<div class="contenedor-anuncios"  >
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">


            <img  class="imagen" loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" >
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $propiedad['ubicacion']; ?></p>
                <p class="precio"><?php echo $propiedad['precio']; ?></p>


            

                <br>
                <br>
                <br> 

                <a href="propiedad.php?id=<?php echo $propiedad['cod_propiedad']; ?>" class="btn btn-outline-primary">
                    Ver Propiedad </a>

                </div><!--.contenido anuncio-->
            </div><!--anuncio-->
            <?php endwhile; ?>
            </div><!--.contenedor anuncios-->










            
            <?php

        //cerrar la conexion

        mysqli_close($db);



            ?>