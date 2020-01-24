<?php
/* 
    ==============================================
      Include scripts and styles
    ==============================================
 */
function avvys_script_enqueue()
{
    // CSS, Hooks               
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/avvys.css', array(), '1.0.0', 'all');
    // JS
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/avvys.js', array(), '1.0.0', true);
}
// my action
add_action('wp_enqueue_scripts', 'avvys_script_enqueue');

/* 
    ==============================================
      Activate menus
    ==============================================
 */
function avvys_theme_setup()
{
    // Hook
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'avvys_theme_setup');

/* 
    ==============================================
      Theme support funtion
    ==============================================
 */
// add Theme Features
add_theme_support('custom-background');
//add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/* 
    ==============================================
      Sidebar funtion
    ==============================================
 */


add_image_size( 'content image', 550, 400); // för att ändra storlek: ändra här efter det regenerate thumbails