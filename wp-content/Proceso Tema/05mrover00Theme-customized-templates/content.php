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
                    <p> %s </p>
                    <div class = "the-content"> %s </div>
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
                get_the_author(),
                get_the_content()
            );

        endwhile;
    else :
        printf('<p class="error">No hay entradas</p>');
    endif; 
    rewind_posts();
printf('</main>');
/*?> Al tener solo codigo PHP no es necesario cerrar 


