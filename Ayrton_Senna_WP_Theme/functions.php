<?php

//
//
//
// Menu Superior
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu_superior', 'Menu Superior');
}
// Menu Lateral dos Espaços
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu_espacos', 'Menu Espacos');
}
// Menu Lateral do Conheca 
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu_conheca', 'Menu Conheca');
}

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
        'menu_position' => 4,
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
//
// Custom Post - Boxes Home
function boxes() {
    $labels = array(
        'name' => _x('Boxes Home'),
        'singular_name' => _x('boxes'),
        'add_new' => _x('Adicionar novo', 'box'),
        'add_new_item' => __('Adicionar novo box'),
        'edit_item' => __('Editar box'),
        'new_item' => __('Novo box'),
        'all_items' => __('Todos os boxes'),
        'view_item' => __('Ver slide'),
        'search_items' => __('Procurar boxes'),
        'not_found' => __('Nenhum box encontrado'),
        'not_found_in_trash' => __('Nenhum box encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Box Home'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Boxes da home page do site',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('boxes', $args);
}

add_action('init', 'boxes');

// Custom Post - Boxes Home
//
//
//
//
// Custom Post - Background
function background() {
    $labels = array(
        'name' => _x('Imagem de Fundo'),
        'singular_name' => _x('background'),
        'add_new' => _x('Adicionar nova', 'imagem de fundo'),
        'add_new_item' => __('Adicionar nova imagem'),
        'edit_item' => __('Editar imagem'),
        'new_item' => __('Nova imagem'),
        'all_items' => __('Todas as imagens'),
        'view_item' => __('Ver imagem'),
        'search_items' => __('Procurar imagens'),
        'not_found' => __('Nenhuma imagem encontrada'),
        'not_found_in_trash' => __('Nenhuma imagem encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Imagem de Fundo'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Imagem que ficara como plano de fundo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('background', $args);
}

add_action('init', 'background');

// Custom Post - Background
// 
// 
// 
// 
// 
// Custom Post - Espacos (Seu Evento aqui)
function espacos() {
    $labels = array(
        'name' => _x('Espacos'),
        'singular_name' => _x('espacos'),
        'add_new' => _x('Adicionar novo', 'espacos'),
        'add_new_item' => __('Adicionar novo espaco'),
        'edit_item' => __('Editar espaco'),
        'new_item' => __('Novo espaco'),
        'all_items' => __('Todos os espacos'),
        'view_item' => __('Ver espaco'),
        'search_items' => __('Procurar espacos'),
        'not_found' => __('Nenhum espaco encontrado'),
        'not_found_in_trash' => __('Nenhum espaco encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Espacos'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Espacos do Autodromo de Interlagos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'excerpt', 'Editor'),
        'has_archive' => true,
    );
    register_post_type('espacos', $args);
}

add_action('init', 'espacos');

// Custom Post - Espacos (Seu Evento aqui)
//
//
//
//
// Custom Post - Eventos
function eventos() {
    $labels = array(
        'name' => _x('Eventos'),
        'singular_name' => _x('eventos'),
        'add_new' => _x('Adicionar evento', 'eventos'),
        'add_new_item' => __('Adicionar novo evento'),
        'edit_item' => __('Editar evento'),
        'new_item' => __('Novo evento'),
        'all_items' => __('Todos os eventos'),
        'view_item' => __('Ver evento'),
        'search_items' => __('Procurar eventos'),
        'not_found' => __('Nenhum evento encontrado'),
        'not_found_in_trash' => __('Nenhum evento encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Eventos'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Eventos do Autodromo de Interlagos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
        'has_archive' => true,
    );
    register_post_type('eventos', $args);
}

add_action('init', 'eventos');

// Custom Post - Eventos
//
//
//
//
// Custom Post - Galeria de Fotos
function galeria() {
    $labels = array(
        'name' => _x('Galerias de Fotos'),
        'singular_name' => _x('galeria'),
        'add_new' => _x('Adicionar nova', 'galeria'),
        'add_new_item' => __('Adicionar nova galeria'),
        'edit_item' => __('Editar galeria'),
        'new_item' => __('Nova galeria'),
        'all_items' => __('Todas as galerias'),
        'view_item' => __('Ver galerias'),
        'search_items' => __('Procurar galerias'),
        'not_found' => __('Nenhuma galeria encontrada'),
        'not_found_in_trash' => __('Nenhuma galeria encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Galerias de Fotos'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Galerias de Fotos do Autódromo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
    );
    register_post_type('galeria', $args);
}

add_action('init', 'galeria');

// Custom Post - Galeria de Fotos
// 
// 
//
//
// Custom Post - ADS
function ads() {
    $labels = array(
        'name' => _x('Anuncios'),
        'singular_name' => _x('anuncios'),
        'add_new' => _x('Adicionar anuncio', 'anuncios'),
        'add_new_item' => __('Adicionar novo anuncio'),
        'edit_item' => __('Editar anuncio'),
        'new_item' => __('Novo anuncio'),
        'all_items' => __('Todos os anuncios'),
        'view_item' => __('Ver anuncio'),
        'search_items' => __('Procurar anuncios'),
        'not_found' => __('Nenhum anuncio encontrado'),
        'not_found_in_trash' => __('Nenhum anuncio encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Anuncios'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Anuncios do Autodromo de Interlagos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('ads', $args);
}

add_action('init', 'ads');

// Custom Post - ADS
//
//
//
//// Custom Post - COUNTDOWN
function countdown() {
    $labels = array(
        'name' => _x('Contagem Regressiva'),
        'singular_name' => _x('Contagem Regressiva'),
        'add_new' => _x('Adicionar contagem regressiva', 'contagens regressivas'),
        'add_new_item' => __('Adicionar nova contagem regressiva'),
        'edit_item' => __('Editar contagem regressiva'),
        'new_item' => __('Nova contagem regressiva'),
        'all_items' => __('Todas as contagens regressivas'),
        'view_item' => __('Ver contagem regressiva'),
        'search_items' => __('Procurar contagem regressiva'),
        'not_found' => __('Nenhuma contagem regressiva encontrada'),
        'not_found_in_trash' => __('Nenhuma contagem regressiva encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Contagem Regressiva'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Contagem Regressiva de Eventos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('countdown', $args);
}

add_action('init', 'countdown');

// Custom Post - ADS
//
// Taxonomias - criando taxonomias de todos os posts types
function add_custom_taxonomies() {
    // Taxonomia Espacos: Grupos
    register_taxonomy('grupos', 'espacos', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Grupos', 'Grupos de espacos'),
            'singular_name' => _x('grupos'),
            'search_items' => __('Procurar Grupos'),
            'all_items' => __('Todos os Grupos'),
            'parent_item' => __('Grupo pai'),
            'parent_item_colon' => __('Grupo pai:'),
            'edit_item' => __('Editar Grupo'),
            'update_item' => __('Atualizar Grupo'),
            'add_new_item' => __('Adicionar novo Grupo'),
            'new_item_name' => __('Novo nome de Grupo'),
            'menu_name' => __('Grupos'),
        ),
        'rewrite' => array(
            'slug' => 'grupos',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
    // Taxonomia Espacos: Categorias (Eventos)
    register_taxonomy('categorias', 'eventos', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Categorias', 'Categorias de espacos'),
            'singular_name' => _x('categorias'),
            'search_items' => __('Procurar categorias'),
            'all_items' => __('Todos as categorias'),
            'parent_item' => __('Categoria pai'),
            'parent_item_colon' => __('Categoria pai:'),
            'edit_item' => __('Editar categoria'),
            'update_item' => __('Atualizar categoria'),
            'add_new_item' => __('Adicionar nova categoria'),
            'new_item_name' => __('Novo nome de categoria'),
            'menu_name' => __('Categorias'),
        ),
        'rewrite' => array(
            'slug' => 'categorias',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
}

add_action('init', 'add_custom_taxonomies', 0);

// Taxonomias - criando taxonomias de todos os posts types
//
//
//
//
// Thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 970, 249, true);
add_image_size('thumb-slider', 300, 300, true);
add_image_size('espacos_info', 250, 167, false);
add_image_size('eventos_info', 192, 140, false);

// Thumbnails
//
//
//
//
////BREADCRUMB (cria uma função de breadcrumb)
//function the_breadcrumb() {
//    if (!is_home()) {
//        echo '<a href="';
//        echo get_option('home');
//        echo '">';
//        echo "Home</a> Â» ";
//        if (is_category() || is_single()) {
//            the_category('title_li=');
//            if (is_single()) {
//                
//            }
//        } elseif (is_page()) {
//            echo the_title();
//        }
//    }
//}
//
//
//SIDEBAR - TRADUÇÃO
register_sidebar(array(
    'name' => 'Traducao',
    'id' => 'traducao',
    'description' => 'Espaco destinado ao plugin de traducao'
));
//
////SIDEBAR - CONTATO/VENDAS
register_sidebar(array(
    'name' => 'Contato/Vendas',
    'id' => 'contato_vendas',
    'description' => 'Espaco destinado a informacoes de contato e vendas'
));

//Alterado pelo Joao!

add_filter( 'admin_footer_text', 'my_footer_text' );
add_filter( 'update_footer', 'my_footer_version', 11 );

function my_footer_text() {
    return 'I don´t know.';
}
 
function my_footer_version() {
    return 'I don´t know.';
}

add_filter('the_generator', 'digwp_complete_version_removal');
function digwp_complete_version_removal() {
    return '';
	}

//
//
