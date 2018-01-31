<?php
printf('<main class="container main">');

    if( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            $template_html = '
                <a href="%s">
                    <figure class="item i-b  ph100 sm50 md33 lg25 post-item">
                        <img src="%s"></img>
                        <figcaption> <h3> %s </hr> </figcaption> 
                    </figure>
                </a>
            ';

            printf( 
                $template_html,
                get_permalink(), 
                featured_image_url('thumbnail'),
                get_the_title()
            );

        endwhile;
    else :
        printf('<p class="error">No hay entradas</p>');
    endif; 
    rewind_posts();
printf('</main>');



