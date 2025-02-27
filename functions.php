<?php

// registering menu places. These places appear on the menu management page in wp-admin that can be select where to each menu should display. In header we add the menu.

register_nav_menus([
    'primary'=>'Primary menu',
    'footer'=>'Footer menu',
    'sidebar'=>'Sidebar menu'
    ]);

// Linking style.css stylesheet to the theme: function
function elifin_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('elifin-script', get_template_directory_uri() . '/js/elifin.js', array('jquery'), '1.0.0', true);
}

// Linking style.css stylesheet to the theme: adding action 
add_action('wp_enqueue_scripts', 'elifin_assets');


//registering sidebars to add widgets
function elifin_widgets_init(){
    register_sidebar( array(
        'name' => 'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div>',
        'after_widget'=>'</div>',
        'before_title'=>'<h2>',
        'after_title'=>'</h2>'

    ));
}
//linking function to a hook
add_action('widgets_init','elifin_widgets_init');

// Define a function to set up the theme
function elifin_theme_setup() {
    // Add support for the title tag, allowing WordPress to manage the document title
    add_theme_support('title-tag');
}

// Define a function to modify the "read more" link for post excerpts
function elifin_read_more($more) {
    global $post;
    // Use get_permalink() to get the URL of the current post
    return ' <a href="' . get_permalink($post->ID) . '">Read more &raquo;</a>';
}

// Hook the function to the 'excerpt_more' filter
add_action('excerpt_more', 'elifin_read_more');

// Hook the theme setup function to the 'after_setup_theme' action
// This ensures the function runs after the theme is set up
add_action('after_setup_theme', 'elifin_theme_setup');

?>


