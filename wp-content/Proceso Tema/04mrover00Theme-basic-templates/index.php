<?php
/*
Plantillas en Wordpress: son los archivos que nuestro tema va utilizando
dependiendo del contenido solicitdao 
 adicionales a los vistos

 search.php ... busqueda por formulario 
 comments.php ... template para los comentarios 
 author.php ... template para mostrar la pagina de un usuario (perfil)
 *** se pueden tener templates personalizados

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
//get_header('secundario');
//include TEMPLATEPATH . '/content.php';
get_template_part('content');
get_sidebar();
get_footer();