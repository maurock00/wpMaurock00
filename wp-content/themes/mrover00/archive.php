<?php 
get_header();
$archive_template = ' 
<div class="container item results-label">
        Los resultados de la categoria '.single_cat_title("", false).' son:
</div>
';
printf( $archive_template);
get_template_part('content');
get_footer();
