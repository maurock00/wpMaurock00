<?php
/*
Template name: Plantilla de pagina estatica sin sidebar
*/ 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            Archivo page-sin-sidebar.php es una Plantilla creada para seleccionar desde el administrador 
            unicamente para paginas estaticas, es necesario agrear un comentario despues de el inicio de php para 
            que funcione
        </h1>
    </div>
');
get_template_part('content');
get_footer();
