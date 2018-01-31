<?php
printf('<main class="container main">');

    if( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            $template_html = '    
                <section class="container post">
                    <div class="main-image" style="background-image:url(%s)">
                        <h1 class="title">%s</h1>
                    </div>
                    <article class="item">
                        <div class = "the-content"> %s </div>
                    </article>
                </section>
            ';

            printf( 
                $template_html, 
                featured_image_url('full'),
                get_the_title(), 
                get_the_content()
            );

        endwhile;
    else :
        printf('<p class="error">No hay entradas</p>');
    endif; 
    rewind_posts();
printf('</main>');



