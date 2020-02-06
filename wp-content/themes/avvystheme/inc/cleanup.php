<?php

/*
@package avvystheme

==============================================
Remove Generator version number => 'ver=5.3.2'
==============================================
 */

 /** remove version string from js & css **/
function avvys_remove_wp_version_strings($src)
{
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'avvys_remove_wp_version_strings');
add_filter('style_loader_src', 'avvys_remove_wp_version_strings');

/** remove metatag generator from header **/
function avvys_remove_meta_version()
{
    return '';
}
add_filter('the_generator', 'avvys_remove_meta_version');
