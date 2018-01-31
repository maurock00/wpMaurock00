<?php
/*
Se pueden tener templates pesronalizados para
    - Categorias
    - Etiquetas
    - Paginas estaticas

Se pueden crear templates personalizados por: 
    - slug
    - id
*/
get_header();
printf('
<div class="container">
    <h1 class="item title-template"> 
        El archivo <em>index.php</em> es el archivo que toma 
        por defecto WordPress al momento de acceder a la carpeta de nuestro
        tema, funciona si no existe un home.php
    </h1>
</div>
');
get_template_part('content');
get_sidebar();
get_footer();