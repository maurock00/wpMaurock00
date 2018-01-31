<?php 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            El archivo <em>page-2.php</em> es el archivo que toma 
            WordPress para mostrar una pagina estatica con el id 2
        </h1>
    </div>
');
get_template_part('content');
get_sidebar();
get_footer();
