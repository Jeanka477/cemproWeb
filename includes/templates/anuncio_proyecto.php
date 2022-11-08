<?php

//importar la conexion

$db =   conectarDB();

// consultar
$query = "SELECT * FROM proyecto LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>

<!--  -->

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
 <body style="background-color: #b5ffe545">


 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <a href="/">
                   <!-- <img src="build/img/logo.svg" alt="Logotipo de cemprodeca">-->

                   <img loading="lazy" src="BizPage/assets/img/CEMPRODECA.png" alt="anincio" class="logoCemprodeca">
                </a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
            <li class="dropdown"><a href="#"><span>Solicitar Crédito</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="../../requisitoHipoteca.php">Por Hipoteca</a></li>
                  <li><a href="../../RequisitoFiador.php">Por Fiador</a></li>
                  </li>
                </ul>
              </li>
              
              <li><a class="nav-link scrollto" href="propiedades.php">Propiedades</a></li>
              <li><a class="nav-link scrollto" href="proyectos.php">Proyectos</a></li>
              <li><a class="nav-link scrollto " href="cursos.php">Cursos</a></li>
              
              <li><a class="nav-link  " href="login.php">Iniciar Sesión</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->


<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>



<!--  -->


<div class="contenedor-anuncios">
    <?php while($proyecto = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">


            <img class="imagen" loading="lazy" src="/imagenes/<?php echo $proyecto['imagen_proyecto']; ?>" alt="anuncio" >
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $proyecto['nom_proyecto']; ?></p>
                <p class="precio"><?php echo $proyecto['precio']; ?></p>

                <a href="proyecto.php?id=<?php echo $proyecto['cod_proyecto']; ?>" class="btn btn-outline-primary">
                    Ver proyecto </a>

                </div><!--.contenido anuncio-->
            </div><!--anuncio-->
            <?php endwhile; ?>
            </div><!--.contenedor anuncios-->


            <?php

        //cerrar la conexion

        mysqli_close($db);



            ?>