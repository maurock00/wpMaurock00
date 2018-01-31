<?php 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            El archivo <em>tag-2.php</em> es el archivo que toma 
            WordPress para mostrar la etiqueta con id 2
        </h1>
    </div>
');
get_template_part('content');
get_sidebar();
get_footer();
