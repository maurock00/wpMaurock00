<?php
printf('<main class="container main">');

    if( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            $template_html = '
                <a href="%s">
                    <figure class="container post-item">
                        <img src="%s" class="item i-b md30 search-img"></img>
                        <figcaption class="item i-b md70"> 
                            <h3 class="search-title"> %s </h3> 
                            <div class = "description"> %s </div>
                        </figcaption> 
                    </figure>
                </a>
                <hr>
            ';

            printf( 
                $template_html,
                get_permalink(), 
                featured_image_url('thumbnail'),
                get_the_title(),
                get_the_excerpt()
            );

        endwhile;
    else :
        printf('<p class="error">No hay entradas</p>');
    endif; 
    rewind_posts();
printf('</main>');

