<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head();?>
</head>
<body>
    <header id="header" class="container  header">
        <h1 class="item  i-b w-30 logo">LOGO</h1>
            <?php
                $args = array(
                    'theme_location' => 'main_nav',
                    'container' => 'nav',
                    'container_class' => 'item  i-b w-70 nav' 
                );
                wp_nav_menu( $args );
            ?>
    </header>
    <section class="container">
    
    