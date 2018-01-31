<?php 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            El archivo <em>category_1.php</em> es el archivo que toma 
            WordPress para mostrar la categoria con el id 1 en la 
            base de datos
        </h1>
    </div>
');
get_template_part('content');
get_sidebar();
get_footer();
