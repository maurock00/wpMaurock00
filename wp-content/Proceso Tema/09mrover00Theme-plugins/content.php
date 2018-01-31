<?php
printf('<main class="item i-b w-70  main">');

    if( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            $template_html = '
                <article class="post">
                    <h1>%s</h1>
                    <a href="%s"> %s </a>
                    <p> %s - %s</p>
                    <p> %s </p>
                    <p class="post-categories"> %s </p>
                    <p> %s </p>
                    <p><a href="%s"> %s </a></p>
                    <div class = "the-content"> %s </div>
                    <p> %s </p>
                </article>
                <hr>
            ';

            printf( 
                $template_html, 
                //the_title('<mark>','</mark>'), la funcion de php imprime 
                get_the_title(), // la funcion de php retorna string 
                get_the_permalink(),
                get_the_permalink(),
                get_the_date(),
                get_the_time(),
                get_the_excerpt(),
                //get_the_category(), devuelve array
                get_the_category_list(' - '),
                //get_the_tags(),
                get_the_tag_list( '<i>', ', ', '</i>' ),
                get_author_posts_url(get_the_author_id()),
                get_the_author(),
                get_the_content(),
                get_the_post_thumbnail( $post_id, 'thumbnail'/*,array( 'alt' => get_the_title() ) */)
            );

        endwhile;
    else :
        printf('<p class="error">No hay entradas</p>');
    endif; 
    rewind_posts();
printf('</main>');



