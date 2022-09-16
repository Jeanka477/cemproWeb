<?php

require 'includes/funciones.php';

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
        <div class="contenedor-anuncios">
            <div class="anuncio">

            <picture>
                <source srcset="build/img/propiedad1.webp" type="image/webp"> 
                <source srcset="build/img/propiedad1.jpg" type="image/jpg"> 
                <img loading="lazy" src="build/img/Propiedad1.jpg" alt="anincio">
            </picture>
            
            <div class="contenido-anuncio">
                <h3>Montaña</h3>
                <p> Montaña con bastante vegetacion</p>
                <p class="precio">3 000 000</p>
                <ul class="iconos-cararteristicas">
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
                </ul>

                <a href="propiedad.php" class="boton-celeste">
                    Ver Propiedad
                </a>
            </div>
            </div>
            <div class="anuncio">

                <picture>
                    <source srcset="build/img/Propiedad4.webp" type="image/webp"> 
                    <source srcset="build/img/Propiedad4.jpg" type="image/jpg"> 
                    <img loading="lazy" src="build/img/Propiedad4.jpg" alt="anincio">
                </picture>
                
                <div class="contenido-anuncio">
                    <h3>Montaña</h3>
                    <p> Montaña con bastante vegetacion</p>
                    <p class="precio">3 000 000</p>
                    <ul class="iconos-cararteristicas">
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
                    </ul>
    
                    <a href="propiedad.php" class="boton-celeste">
                        Ver Propiedad
                    </a>
                </div>
                </div>
                <div class="anuncio">

                    <picture>
                        <source srcset="build/img/propiedad 3.webp" type="image/webp"> 
                        <source srcset="build/img/propiedad 3.jpg" type="image/jpg"> 
                        <img loading="lazy" src="build/img/Propiedad 3.jpg" alt="anincio">
                    </picture>
                    
                    <div class="contenido-anuncio">
                        <h3>Montaña</h3>
                        <p> Montaña con bastante vegetacion</p>
                        <p class="precio">3 000 000</p>
                        <ul class="iconos-cararteristicas">
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
                        </ul>
        
                        <a href="propiedad.php" class="boton-celeste">
                            Ver Propiedad
                        </a>
                    </div>
                 </div>
            </div>

            <br>
            <br>
            <div class="ver-todas">
                <a class="bton-ver-propiedades" href="propiedades.php"> Ver Todas las Propiedades</a>
            </div>
        <!--Proyectos-->

    </section>
    <section class="seccion contenedor">
        <h2> Proyectos financiados por cemprodeca </h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">

            <picture>
                <source srcset="build/img/Proyecto1.webp" type="image/webp"> 
                <source srcset="build/img/Proyecto1.jpg" type="image/jpg"> 
                <img loading="lazy" src="build/img/Proyecto1.png" alt="anincio">
            </picture>
            
            <div class="contenido-anuncio">
                <h3>Cultivo</h3>
               
                <p>Descripcion:Cultivo de naranja en la zona de Hojancha</p>
          

                <a href="proyecto.php" class="boton-celeste">
                    Ver Proyecto
                </a>
            </div>
            </div>
            <div class="anuncio">

                <picture>
                    <source srcset="build/img/proyecto2.webp" type="image/webp"> 
                    <source srcset="build/img/pryecto2.jpg" type="image/jpg"> 
                    <img loading="lazy" src="build/img/Proyecto2.jpg" alt="anincio">
                </picture>
                
                <div class="contenido-anuncio">
                    <h3>siembra de maiz </h3>
                    <p>Descripcion: Siembra de maiz en la zona de nicoya </p>
                    
                
    
                    <a href="proyecto.php" class="boton-celeste">
                        Ver Proyecto
                    </a>
                </div>
                </div>
                <div class="anuncio">

                    <picture>
                        <source srcset="build/img/Proyecto3.webp" type="image/webp"> 
                        <source srcset="build/img/Proyecto3.jpg" type="image/jpg"> 
                        <img loading="lazy" src="build/img/Proyecto3.jpg" alt="anincio">
                    </picture>
                    
                    <div class="contenido-anuncio">
                        <h3>Microempresas</h3>
                        <p> Descripcion: Venta de pinas en Santa Cruz</p>
                        <a href="proyecto.php" class="boton-celeste">
                            Ver Proyecto
                        </a>
                    </div>
                 </div>
            </div>

            <br>
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
