<?php

// registering menu places. These places appear on the menu management page in wp-admin that can be select where to each menu should display. In header we add the menu.

register_nav_menus([
    'primary'=>'Primary menu',
    'footer'=>'Footer menu',
    'sidebar'=>'Sidebar menu'
    ]);

//linking style.css style sheet to the theme : function
function elifin_assets(){
    wp_enqueue_style('style',get_stylesheet_uri());
}
//linking style.css style sheet to the theme : adding action 
add_action('wp_enqueue_scripts','elifin_assets');
?>