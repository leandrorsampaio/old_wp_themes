<?php

// THEME LOCATION at header.php - menu superior
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-superior', 'Menu Superior');
}
// THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 1600, 530, true);

//CUSTOM POST - Slider 
function slider_register() {
    $labels_sliderhome = array(
        'name' => _x('Sliders', 'Nome geral'),
        'singular_name' => _x('Sliders', 'Nome singular'),
        'add_new' => _x('Novo Slide', 'Slide'),
        'add_new_item' => __('Adicionar novo Slide'),
        'edit_item' => __('Edite Slide'),
        'new_item' => __('Criar Slide'),
        'all_items' => __('Todos os Slides'),
        'view_item' => __('Ver Slide'),
        'search_items' => __('Buscar Slides'),
        'not_found' => __('Nenhum Slide encontrado'),
        'not_found_in_trash' => __('Nenhum Slide encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Slider Home'
    );
    $args_sliderhome = array(
        'labels' => $labels_sliderhome,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 11,
        'supports' => array('title', 'thumbnail', 'revisions', 'excerpt'),
    );
    register_post_type('slider', $args_sliderhome);
}

add_action('init', 'slider_register');

//FIM CUSTOM POST - Slider
//
//CUSTOM POST - Cartões de Natal
function cartoes_register() {
    $labels = array(
        'name' => _x('Cartoes de Natal'),
        'singular_name' => _x('Cartao'),
        'add_new' => _x('Novo Cartao', 'Cartao'),
        'add_new_item' => __('Adicionar novo Cartao'),
        'edit_item' => __('Edite Cartao'),
        'new_item' => __('Criar Cartao'),
        'all_items' => __('Todos os Cartoes'),
        'view_item' => __('Ver Cartao'),
        'search_items' => __('Buscar Cartoes'),
        'not_found' => __('Nenhum Cartao encontrado'),
        'not_found_in_trash' => __('Nenhum Cartao encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Cartoes de Natal'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'revisions', 'excerpt'),
    );
    register_post_type('cartoes', $args);
}

add_action('init', 'cartoes_register');

//FIM CUSTOM POST - Slider
//
//
//SIDEBAR - GERAL
register_sidebar(array(
    'name' => 'Sidebar Geral',
    'id' => 'geral',
    'description' => 'Sidebar que aparece em todas as paginas internas'
));
//SIDEBAR - Home Box Atrações
register_sidebar(array(
    'name' => 'Box na Home - Atracoes',
    'id' => 'homebox-atracoes',
    'description' => 'Box Atracoes na home do site'
));

//SIDEBAR - Home Box Compras
register_sidebar(array(
    'name' => 'Box na Home - Compras',
    'id' => 'homebox-compras',
    'description' => 'Box Compras na home do site'
));

//SIDEBAR - Home Box Calendario
register_sidebar(array(
    'name' => 'Box na Home - Calendario',
    'id' => 'homebox-calendario',
    'description' => 'Box Calendario na home do site'
));
//SIDEBAR - Home Box Noticias
register_sidebar(array(
    'name' => 'Box na Home - Noticias',
    'id' => 'homebox-noticias',
    'description' => 'Box de Noticias na home do site'
));
//SIDEBAR - Home Box Video
register_sidebar(array(
    'name' => 'Box na Home - Video',
    'id' => 'homebox-video',
    'description' => 'Box para o Video na home do site'
));
//Barra superior SP Turis
register_sidebar(array(
    'name' => 'Barra superior SP Turis',
    'id' => 'barra',
    'description' => 'SYSTEM - nao mexer'
));
