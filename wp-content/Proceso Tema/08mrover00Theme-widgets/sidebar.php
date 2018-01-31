<?php 

/*$sidebar = ' 
    <aside class = " item i-b w-30 aside"> %s </aside>;
';

printf( $sidebar, get_search_form( false ) ); 
dynamic_sidebar(1);*/

printf('<aside class = " item i-b w-30 aside ">');
    get_search_form();
    dynamic_sidebar(1);
    dynamic_sidebar('widget 2');
printf('</aside>');