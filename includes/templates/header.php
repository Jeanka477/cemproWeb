
<?php 

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEMPRODECA</title>
<!-- <> <link rel="stylesheet" href="/build/css/app.css"> -->

<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <a href="/">
                   <!-- <img src="build/img/logo.svg" alt="Logotipo de cemprodeca">-->

                   <img loading="lazy" src="../../BizPage/assets/img/CEMPRODECA.png" alt="anincio" class="logoCemprodeca">
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
              
              <li><a class="nav-link scrollto" href="../../propiedades.php">Propiedades</a></li>
              <li><a class="nav-link scrollto" href="../../proyectos.php">Proyectos</a></li>
              <li><a class="nav-link scrollto " href="../../cursos.php">Cursos</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link  " href="../../login.php">Iniciar Sesión</a></li>

              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
 
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
    

    