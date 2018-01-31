<?php 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            El archivo <em>tag.php</em> es el archivo que toma 
            por defecto WordPress para mostrar busquedas de etiquetas
        </h1>
    </div>
');
get_template_part('content');
get_sidebar();
get_footer();
