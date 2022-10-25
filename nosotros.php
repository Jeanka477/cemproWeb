<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

<br>
<br>
<br>
    <main class="contenedor seccion">
        <h1>Conoce más sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/cemprodecaFondo.webp" type="image/webp">
                    <source srcset="build/img/cemprodecaFondo.jpg" type="image/jpeg">
                    <img  loading="lazy" src="build/img/CemprodecaFondo.jpg" alt="Imagen de cemprodeca">
                </picture>
            </div> 

                <div class="texto-nosotros">
                    <blockquote>
                        10 años ayudando a emprendedores.
                    </blockquote>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                         In nisi ut consequuntur dolorem sapiente, magni ipsam 
                         soluta optio aperiam ipsum nihil eius consequatur rem minus 
                         reiciendis! Dolorem, tenetur. Ipsam, at.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Repellendus porro molestias ducimus culpa, veniam a est
                          aliquam quaerat cum obcaecati rem ab tempora aut minus
                           dolore iste fugiat aliquid eveniet?
                    </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                         Architecto modi qui doloremque ex sequi minima tempora 
                         dicta porro eaque alias ipsam doloribus sint odit minus 
                         vero nobis eligendi, illo accusamus? Lorem ipsum dolor, 
                         sit amet consectetur adipisicing elit. A obcaecati maxime 
                         omnis magni officia temporibus neque impedit consectetur 
                         reiciendis quae ex dolore modi dolorum iusto repellendus,
                          amet quidem! Fugit, animi.
                        </p>

                </div>

        </div>
    </main>

    <section class="contenedor seccion">
       
        </div>
       
        <div class="iconos-nosotros">
            <div class="icono">
           <img src="build/img/icono-responsabilidad.svg" alt="">
                <h3>Misión</h3>
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
                     <h3> Visión</h3>
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
                         <h3> Objetivos</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sequi ipsam rerum delectus harum debitis,
                              fuga perspiciatis, maiores commodi praesentium nostrum temporibus
                               hic ad quam nobis magni magnam aperiam explicabo?
                               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nesciunt eligendi praesentium exercitationem 
                               atque expedita vitae, ea laudantium,
                                reprehenderit sequi soluta iste a itaque enim accusantium totam perspiciatis at.
         
                         </p>
         
                     </div>
        </div>
    </section>

    <link href="/BizPage/assets/css/style.css" rel="stylesheet">
    <?php incluirTemplate('footer');?>