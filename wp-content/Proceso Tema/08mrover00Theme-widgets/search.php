<?php 
get_header();

$search_template = ' 
    <h1 class="item title-template"> 
        El archivo <em>search.php</em> es el archivo que toma 
        WordPress para mostrar una busqueda generada por 
        el buscador construido con get_search_form, las busquedas
        se generan por titulo de post y el contenido del mismo
        (<code>?s=mi+busqueda</code>)
    </h1>
    <p class = "item" >
        Los resultados para la busqueda <mark> %s</mark> son:
    </p>
';

printf( $search_template, get_search_query() );
get_template_part('content');
get_sidebar();
get_footer();
