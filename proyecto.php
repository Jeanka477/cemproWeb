<?php

require 'includes/app.php';

 incluirTemplate('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Cultivo de naranjas </h1>

        <picture>
            <source srcset="build/img/Proyecto1.webp" type="image/webp"> 
            <source srcset="build/img/Proyecto1.jpg" type="image/jpg"> 
            <img loading="lazy" src="build/img/Proyecto1.png" alt="anincio">
        </picture>

        <h2>Descripción del proyecto</h2>
        <div class="resumen-propiedad ">
           
          
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
    </main>

    <?php incluirTemplate('footer');?>