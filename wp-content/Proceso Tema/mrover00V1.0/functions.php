<?php 

/*
El archivo function.php es como una boblioteca personal de funciones, es una manera
facil de agregar o modificar el comportamineto por defecto de wordpress. 
Se comporta excatamente igual que un plugin, anadiendo caracteristicas y funcionalidad a 
un tema, y se puede utilizar tanto para definir nuevas funciones PHP como para
modificar las que ya incorpora wordpress

Hooks son funciones adicionales a lo que ofrece wordpress 
pueden ser Actions o Filters

Actions -- Cosas ajenas a wordpress
           Se ligan a eventos

Filters -- funciones que pasan los datos a traves de Wordpress

*/

function custom_theme_setup(){
    add_theme_support( 'post-thumbnails' );

    $locations = array(
        'main_nav' => 'Menu Principal',
        'social_nav' => 'Menu Social Media'
    );

    register_nav_menus($locations);

}

function read_more(){
    $url_post = get_permalink();
    return "&nbsp<a href='$url_post'><small>Leer mas...</small></a>";
}

function widgets_activation(){
    //register_sidebar(); Widget por widget 
    $args = array(
        'name' => __('widget %d'),
        /*'id'   => 'sidebar',
        'description' => 'Wdiget de calendario',*/
        'class' => 'widgets',
        'before_widget' => '<div class="item widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'

    );
    register_sidebars(3, $args); //Muchos widgets
}

function featured_image_url($size){
    global $post; 
    
    $image_id = get_post_thumbnail_id( $post->ID );
    $featured_image = wp_get_attachment_image_src( $image_id, $size );
    // 0 = ruta, 1 = anchura, 2 = altura, 3 = boolean
    return $featured_image[0]; 
}

add_action('after_setup_theme', 'custom_theme_setup');

add_filter('excerpt_more', 'read_more');

add_action('widgets_init', 'widgets_activation');




