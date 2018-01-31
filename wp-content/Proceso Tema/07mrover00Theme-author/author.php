<?php 
get_header();
printf('
    <div class="container">
        <h1 class="item title-template"> 
            El archivo <em><b>author.php</b></em> es el archivo que toma 
            por defecto WordPress para perfil de autor (usuario) del post
        </h1>
    </div>
');

$template_author = '
    <ul class = "item author-info">
        <li> Author: %s </li>
        <li> Author ID: %s </li>
        <li> Correo: %s </li>
        <li> Login: %s </li>
        <li> Password: %s </li>
        <li> Nicename: %s </li>
        <li> URL del sitio web del autor: %s </li>
        <li> URL del autor en wordpress: %s </li>
        <li> Fecha de registro del usuario: %s </li>
        <li> Roles: %s </li>
        <li> User activation key: %s </li>
        <li> user status: %s </li>
        <li> Display name: %s </li>
        <li> Nickname: %s </li>
        <li> first name: %s </li>
        <li> last name: %s </li>
        <li> description: %s </li>
        <li> Numero de Publicaciones del autor: %s </li>
        <li> Avatar del autor: %s </li>
    </ul>
';

printf( 
        $template_author, 
        get_the_author(),
        get_the_author_id(),
        get_the_author_meta('user_email'),
        get_the_author_meta('user_login'),
        get_the_author_meta('user_pass'),
        get_the_author_meta('user_nicename'),
        get_the_author_meta('user_url'),
        get_author_posts_url( get_the_author_id() ),
        get_the_author_meta('user_registered'),
        get_the_author_meta('roles')[0],
        get_the_author_meta('user_activation_key'),
        get_the_author_meta('user_status'),
        get_the_author_meta('display_name'),
        get_the_author_meta('nickname'),
        get_the_author_meta('first_name'),
        get_the_author_meta('last_name'),
        get_the_author_meta('description'),
        get_the_author_posts(),
        get_avatar( get_the_author_id(), 512)
    );


get_template_part('content');
get_sidebar();
get_footer();
