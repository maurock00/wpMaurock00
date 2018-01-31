<main class="item i-b w-70  main">
    <?php
    /*
        para busquedas personalizadas se usa query_posts()
    */

    //query_posts( 'order=ASC&category_name=uncategorized&posts_per_page=1' );

    /* Logica de the loop
       Si (hay entradas)
           mientras (hay entradas)
              muestra la info de las entradas
        Si no hay entradas 
           No hay entradas publicadas
    */
    if( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            //echo '<p> Imprimiendo entrada </p>';
    ?>
            <article class="post">
                <h1><?php the_title(); ?></h1>
                <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
                <p>
                 <?php the_date(); /*Solo imprime la fecha de una sola publicacion de la ultima del dia*/?>
                 <?php the_time('d-M-Y'); /*Imprimer la hora en la que se publico si no se pone parametros*/?>
                </p>
                <p> <?php the_excerpt()?> </p>
                <p> <?php the_category()?> </p>
                <p> <?php the_tags()?> </p>
                <p> <?php the_author()?> </p>
                <div class="the-content"> <?php the_content()?> </div>
            </article>
            <hr>
    <?php
        endwhile;
    else :
        echo '<p class="error">No hay entradas</p>';
    endif; 
    rewind_posts();
    ?>
</main>

