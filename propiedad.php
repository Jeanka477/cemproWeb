<?php include 'includes/templates/header.php';?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Montaña </h1>

        <picture>
            <source srcset="build/img/Propiedad1.webp" type="image/webp">
            <source srcset="build/img/Propiedad1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/Propiedad 2.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad ">
            <p class="precio">3,000,000</p>
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

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer"> 
        <nav class="navegacion">
         <a href="requisitos.html">Formularios</a>
         <a href="proyectos.html">Proyectos</a>
         <a href="propiedades.html">Propiedades</a>
         <a href="historia.html">Historia</a>
         <a href="contactenos.html"> Contactenos</a>
        </nav>
    </div>
    <p class="copyright">Todos los derechos reservados 2022 &copy;</p>
</footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>