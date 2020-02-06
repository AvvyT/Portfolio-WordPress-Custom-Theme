<?php
require get_template_directory() . '/inc/cleanup.php';

/*
==============================================
Include scripts and styles
==============================================
 */
function avvys_script_enqueue()
{
    // CSS, Hooks
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/avvys.css');
    wp_enqueue_style('background', get_template_directory_uri() . '/css/background.css', array('customstyle'));
    wp_enqueue_style('boxes', get_template_directory_uri() . '/css/boxes.css', array('customstyle'));
    wp_enqueue_style('color', get_template_directory_uri() . '/css/color.css', array('customstyle'));
    wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css', array('customstyle'));
    wp_enqueue_style('button', get_template_directory_uri() . '/css/button.css', array('customstyle'));
    wp_enqueue_style('link', get_template_directory_uri() . '/css/link.css', array('customstyle'));

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
Images funtion
==============================================
 */
add_image_size('content image', 400); // för att ändra storlek: ändra här & efter det regenerate thumbails

/*
==============================================
Custom Post Type
==============================================
 */
function avvys_custom_post_type()
{
    $labels = array(
        'name' => 'Resume',
        'singular_name' => 'Resume',
        'add_new_item' => 'Add Item',
        'all_items' => 'All Items',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Resume',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false,
    );
    // create post-type with Hook = register_post_type
    register_post_type('resume', $args);
}
add_action('init', 'avvys_custom_post_type');
