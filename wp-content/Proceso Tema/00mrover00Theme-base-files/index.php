<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <h1> Hola Wordpress </h1>
    <h2><code>bloginfo()</code></h2>
    <p> Nombre: <mark><?php bloginfo('name'); ?></mark></p>
    <p> DEscription: <mark><?php bloginfo('description'); ?></mark></p>
    <p> URL HOME: <mark><?php bloginfo('home'); ?></mark></p>
    <p> URL STYLES: <mark><?php bloginfo('stylesheet_url'); ?></mark></p>
    <p> URL THEME: <mark><?php bloginfo('template_url'); ?></mark></p>
    <p> Language: <mark><?php bloginfo('language'); ?></mark></p>
    <p> CHARSET: <mark><?php bloginfo('charset'); ?></mark></p>
    <img src="<?php bloginfo('template_url'); ?>/screenshot.png" alt="screenshot">
</body>
</html>