<?php 
get_header();

$search_template = ' 
    <div class="container item results-label">
            Los resultados para la busqueda %s son:
    </div>
';

printf( $search_template, get_search_query() );
get_template_part('content');
get_footer();
