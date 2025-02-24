<!DOCTYPE html>
<html lang="en">
<head>
    <!-- adding site name and ste tagline as the site title using bloginfo() -->
    <title><?php bloginfo('name') ?> : <?php bloginfo('description') ?></title>   
    <!-- including charset incase of if title text does include non-ASCII chars, using bloginfo() it takes site's charset dynamically -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
<div id="site-container">
    <nav id="top-navi">
        <!-- Adding menu that used theme location as 'primary' on the wp-admin menu page.This is one of location we already defined in function.php -->
        <?php
            $args=['theme_location'=>'primary'];
            wp_nav_menu($args);
        ?>
    </nav>
    <header id="site-header">
        <!-- Adding dunamic Page visible title on the header usig bloginfo() -->
        <h1><?php bloginfo('name') ?> : <?php bloginfo('description') ?></h1>
    </header>
    