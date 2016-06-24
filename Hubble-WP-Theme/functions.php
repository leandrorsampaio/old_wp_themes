<?php

/**
 * Wordpress Naked, a very minimal wordpress theme designed to be used as a base for other themes.
 *
 * @licence LGPL
 * @author Darren Beale - http://siftware.co.uk - bealers@gmail.com - @bealers
 * 
 * Project URL http://code.google.com/p/wordpress-naked/
 */

/**
 * naked_nav()
 *
 * @desc a wrapper for the wordpress wp_list_pages() function that
 * will display one or two unordered lists:
 * 1) primary nav, a ul with css id #nav - always shown even if empty
 * 2) Optional secondary nav, a ul with css id #subNav
 *
 * @todo default css provided to allow space for both nav 'bars' one below the other to stop the page jig
 *
 * @param obj post
 * @return string (html)
 */
//
//
// Custom Post - Slider
function slider() {
    $labels = array(
        'name' => _x('Slider Home'),
        'singular_name' => _x('slider'),
        'add_new' => _x('Adicionar novo', 'slide'),
        'add_new_item' => __('Adicionar novo slide'),
        'edit_item' => __('Editar slide'),
        'new_item' => __('Novo slide'),
        'all_items' => __('Todos os slides'),
        'view_item' => __('Ver slide'),
        'search_items' => __('Procurar slides'),
        'not_found' => __('Nenhum slide encontrado'),
        'not_found_in_trash' => __('Nenhum slide encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Slider Home'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slides da home page do site',
        'public' => true,
        'menu_position' => 2,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider');

// Custom Post - Slider
//
//
//
function naked_nav($post = 0) {
    $output = "";
    $subNav = "";
    $params = "title_li=&depth=1&echo=0";

    // always show top level
    $output .= '<ul id="nav">';
    $output .= wp_list_pages($params);
    $output .= '</ul>';

    // second level?
    if ($post->post_parent) {
        $params .= "&child_of=" . $post->post_parent;
    } else {
        $params .= "&child_of=" . $post->ID;
    }
    $subNav = wp_list_pages($params);

    if ($subNav) {
        $output .= '<ul id="subNav">';
        $output .= $subNav;
        $output .= '</ul>';
    }
    return $output;
}

/**
 * @desc make the site's heading & tagline an h1 on the homepage and an h4 on internal pages
 * Naked's default CSS should make the two different states look identical
 */
function do_heading() {
    $output = "";

    if (is_home())
        $output .= "<h1>"; else
        $output .= "<h4>";

    $output .= "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> <span>" . get_bloginfo('description') . "</span>";

    if (is_home())
        $output .= "</h1>"; else
        $output .= "</h4>";

    return $output;
}

/**
 * register_sidebar()
 *
 * @desc Registers the markup to display in and around a widget
 */
if (function_exists('register_sidebars'))
    ;

register_sidebar(array('name' => 'sidebar_unica',));
register_sidebar(array('name' => 'sidebar_home',));
register_sidebar(array('name' => 'sidebar_pages',));
register_sidebar(array('name' => 'sidebar_posts',));
register_sidebar(array('name' => 'sidebar_especialistas',));
register_sidebar(array('name' => 'sidebar_search',));
register_sidebar(array('name' => 'sidebar_publicacoes',));

/**
 * Check to see if this page will paginate
 * 
 * @return boolean
 */
function will_paginate() {
    global $wp_query;

    if (!is_singular()) {
        $max_num_pages = $wp_query->max_num_pages;

        if ($max_num_pages > 1) {
            return true;
        }
    }
    return false;
}

// THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 592, 290, true);
?>