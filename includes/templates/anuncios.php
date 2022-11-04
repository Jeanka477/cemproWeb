<?php

//importar la conexion

$db =   conectarDB();

// consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//obtener resultados
$resultado = mysqli_query($db, $query);

?>

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
                  <li><a href="requisitoHipoteca.php">Por Hipoteca</a></li>
                  <li><a href="RequisitoFiador.php">Por Fiador</a></li>
                  </li>
                </ul>
              </li>
              
              <li><a class="nav-link scrollto" href="propiedades.php">Propiedades</a></li>
              <li><a class="nav-link scrollto" href="proyectos.php">Proyectos</a></li>
              <li><a class="nav-link scrollto " href="cursos.php">Cursos</a></li>
              <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
              <li><a class="nav-link  " href="login.php">Iniciar Sesión</a></li>

              <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>


<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<div class="contenedor-anuncios"  >
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">


            <img  class="imagen" loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" style="margin: 10px">
            </picture>
            
            <div class="contenido-anuncio">
                
                <p><?php echo $propiedad['ubicacion']; ?></p>
                <p class="precio"><?php echo $propiedad['precio']; ?></p>


                <!-- <ul class="iconos-cararteristicas">
                    <li>
                        <img loading="lazy" src="build/img/IconoAgua.svg" alt="">
                        <p>   No</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/Electricidad.svg" alt="">
                        <p>No</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/Paisaje.svg" alt="">
                        <p>SI</p>
                    </li>
                </ul> -->

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