<?php

require 'includes/app.php';

 incluirTemplate('header', $inicio = true);
 ?>
    <main class="contenedor seccion">
      
      
       <h1>Cualidades de Cemprodeca</h1>
        <div  class="iconos-nosotros">
            <div class="icono">
           <img class="iconos-dark" src="build/img/icono-responsabilidad.svg" alt="">

       
                <h3> Responsabilidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                     fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                      hic ad quam nobis magni magnam aperiam explicabo?
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                      atque expedita vitae, ea laudantium,
                       reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.

                </p>

            </div>
            <div class="icono">
                <img iconos-dark src="build/img/icono-Compromiso.svg" alt="">
                     <h3> Compromiso</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                          fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                           hic ad quam nobis magni magnam aperiam explicabo?
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                           atque expedita vitae, ea laudantium,
                            reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.
     
                     </p>
     
                 </div>
                 <div class="icono">
                    <img  iconos-dark src="build/img/Transparencia.svg" alt="">
                         <h3> Transparencia</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                              fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                               hic ad quam nobis magni magnam aperiam explicabo?
                               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                               atque expedita vitae, ea laudantium,
                                reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.
         
                         </p>
         
                     </div>

                     
        </div>

        <a class="boton-nosotros" href="historia.php">Mas sobre nosotros</a>
    </main>
    <section class="seccion contenedor">
        <h2> Propiedades a la venta </h2>


        <?php

        $limite = 3;
        include 'includes/templates/anuncios.php';
        ?>
            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="propiedades.php"> Ver Todas las Propiedades</a>
            </div>
    </section>

     <!--Proyectos-->
    <section class="seccion contenedor">
        <h2> Proyectos financiados por cemprodeca </h2>

        <?php

            $limite = 3;
            include 'includes/templates/anuncio_proyecto.php';
        ?>

        <div class="contenedor-anuncios">
            <div class="anuncio">

           
            
            
                 </div>
            </div>

            <br>
           
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="proyectos.php"> Ver Todos los Proyectos</a>
            </div>
    </section>
    <main class="contenedor seccion">
        <div class="navegacion"  > 
            <h2>Nuestros servicios</h2>
        </div>
       
        <div class="iconos-nosotros textos">
            <div class="icono">
           <img src="build/img/icono-responsabilidad.svg" alt="">
                <h3>Prestamos para emprendimientos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                     fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                      hic ad quam nobis magni magnam aperiam explicabo?
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                      atque expedita vitae, ea laudantium,
                       reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.

                </p>

            </div>
            <div class="icono">
                <img src="build/img/icono-Compromiso.svg" alt="">
                     <h3>Intermediarios para cursos</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                          fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                           hic ad quam nobis magni magnam aperiam explicabo?
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                           atque expedita vitae, ea laudantium,
                            reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.
     
                     </p>
     
                 </div>
                 <div class="icono">
                    <img src="build/img/Transparencia.svg" alt="">
                         <h3>Venta de propiedades</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                              fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                               hic ad quam nobis magni magnam aperiam explicabo?
                               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                               atque expedita vitae, ea laudantium,
                                reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.
         
                         </p>
         
                     </div>
        </div>

        <?php incluirTemplate('footer');?>
