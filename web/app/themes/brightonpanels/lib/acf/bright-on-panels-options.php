<?php
/*
 *  Create Options Page
 */

if( function_exists('acf_add_options_page') ) {

    // add parent
    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Bright on Panels General Settings',
        'menu_title' 	=> 'Theme Settings',
        'redirect' 		=> false
    ));


    // add sub page
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer Content',
        'menu_title' 	=> 'Footer Content',
        'parent_slug' 	=> $parent['menu_slug'],
    ));

}