<?php

//
//
// 
// Thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-page', 221, 150, true);
add_image_size('thumb-grande', 221, 583, true);
add_image_size('thumb-horizontal', 673, 169, true);
add_image_size('thumb-slider', 661, 250, true);

// Thumbnails
//
//
// -------------------- Custom Post - Cultura
function cultura() {
    $labels = array(
        'name' => _x('Cultura'),
        'singular_name' => _x('cultura'),
        'add_new' => _x('Adicionar novo artigo', 'cultura'),
        'add_new_item' => __('Adicionar novo artigo de Cultura'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Cultura'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Cultura',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('cultura', $args);
}

add_action('init', 'cultura');

//
//------------------- Custom Post - Cultura
//
//
// -------------------- Custom Post - Compras
function compras() {
    $labels = array(
        'name' => _x('Compras'),
        'singular_name' => _x('compras'),
        'add_new' => _x('Adicionar novo artigo', 'compras'),
        'add_new_item' => __('Adicionar novo artigo de Compras'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Compras'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Compras',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('compras', $args);
}

add_action('init', 'compras');

//
//------------------- Custom Post - Compras
//
//
// -------------------- Custom Post - Compras
function gastronomia() {
    $labels = array(
        'name' => _x('Gastronomia'),
        'singular_name' => _x('Gastronomia'),
        'add_new' => _x('Adicionar novo artigo', 'gastronomia'),
        'add_new_item' => __('Adicionar novo artigo de Gastronomia'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Gastronomia'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Gastronomia',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('gastronomia', $args);
}

add_action('init', 'gastronomia');

//
//------------------- Custom Post - Gastronomia
//
//
// -------------------- Custom Post - Noite
function noite() {
    $labels = array(
        'name' => _x('Noite'),
        'singular_name' => _x('noite'),
        'add_new' => _x('Adicionar novo artigo', 'noite'),
        'add_new_item' => __('Adicionar novo artigo de Noite'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Noite'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Noite',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('noite', $args);
}

add_action('init', 'noite');

//
//------------------- Custom Post - Noite
//
//
// -------------------- Custom Post - Eventos
function eventos() {
    $labels = array(
        'name' => _x('Eventos'),
        'singular_name' => _x('eventos'),
        'add_new' => _x('Adicionar novo artigo', 'eventos'),
        'add_new_item' => __('Adicionar novo Evento'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Eventos'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Eventos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('eventos', $args);
}

add_action('init', 'eventos');

//
//------------------- Custom Post - Eventos
//
//
//
// -------------------- Custom Post - Top 10
function topdez() {
    $labels = array(
        'name' => _x('Top 10'),
        'singular_name' => _x('top dez'),
        'add_new' => _x('Adicionar novo artigo', 'top dez'),
        'add_new_item' => __('Adicionar novo item'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Top 10'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Top 10',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('topdez', $args);
}

add_action('init', 'topdez');

//
//------------------- Custom Post - Top 10
//
//
//
// -------------------- Custom Post - Diversão
function diversao() {
    $labels = array(
        'name' => _x('Diversao'),
        'singular_name' => _x('diversao'),
        'add_new' => _x('Adicionar novo artigo', 'diversao'),
        'add_new_item' => __('Adicionar novo artigo de Diversão'),
        'edit_item' => __('Editar artigo'),
        'new_item' => __('Novo artigo'),
        'all_items' => __('Todos os artigos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum artigo encontrado'),
        'not_found_in_trash' => __('Nenhum artigo encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Diversao'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Artigos de Diversão',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('diversao', $args);
}

add_action('init', 'diversao');

// -------------------- Custom Post - Diversão
//
//
//
// -------------------- Custom Post - Roteiro de uma semana
function roteiro() {
    $labels = array(
        'name' => _x('Roteiro'),
        'singular_name' => _x('roteiro'),
        'add_new' => _x('Adicionar novo', 'roteiro'),
        'add_new_item' => __('Adicionar novo roteiro'),
        'edit_item' => __('Editar roteiro'),
        'new_item' => __('Novo roteiro'),
        'all_items' => __('Todos os roteiros'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum roteiro encontrado'),
        'not_found_in_trash' => __('Nenhum roteiro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Roteiro de uma semana'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiro de uma semana',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('roteiro', $args);
}

add_action('init', 'roteiro');

// -------------------- Custom Post - Diversão
//
//
//
// -------------------- Custom Post - Slider
function slider() {
    $labels = array(
        'name' => _x('Slider'),
        'singular_name' => _x('slider'),
        'add_new' => _x('Adicionar novo slider', 'slider'),
        'add_new_item' => __('Adicionar novo slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'all_items' => __('Todos os sliders'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum slider encontrado'),
        'not_found_in_trash' => __('Nenhum slider encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Slider'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slider de imagens na home',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider');

//
//
//
//
// -------------------- Custom Post - Interfaces (idiomas na index)
function interfaces() {
    $labels = array(
        'name' => _x('Interface'),
        'singular_name' => _x('Interface'),
        'add_new' => _x('Adicionar nova interface', 'interface'),
        'add_new_item' => __('Adicionar nova interface'),
        'edit_item' => __('Editar interface'),
        'new_item' => __('Nova interface'),
        'all_items' => __('Todos as interfaces'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhuma interface encontrada'),
        'not_found_in_trash' => __('Nenhuma interface encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Interface'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Interfaces da home para diferentes idiomas',
        'public' => true,
        'menu_position' => 1,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'taxonomies' => array('idioma'),
    );
    register_post_type('interface', $args);
}

add_action('init', 'interfaces');

//
//
//
// Taxonomias - criando taxonomias para os posts types
//
function add_custom_taxonomies() {
//
// Taxonomia do TOP 10: Primária e Secundária
    register_taxonomy('categorias', 'topdez', array(
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'labels' => array(
            'name' => _x('Categorias', 'Categorias'),
            'singular_name' => _x('categorias'),
            'search_items' => __('Procurar categorias'),
            'all_items' => __('Todas as categorias'),
            'edit_item' => __('Editar Categoria'),
            'update_item' => __('Atualizar categoria'),
            'add_new_item' => __('Adicionar nova Categoria'),
            'new_item_name' => __('Novo nome de Categoria'),
            'menu_name' => __('Categorias'),
            'show_ui' => true,
            'show_admin_column' => true,
        ),
        'rewrite' => array(
            'slug' => 'categorias',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
    //
// Taxonomia IDIOMA
    register_taxonomy('idioma', array('page'), array(
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'labels' => array(
            'name' => _x('Idioma'),
            'singular_name' => _x('idioma'),
            'search_items' => __('Procurar idiomas'),
            'all_items' => __('Todos os idiomas'),
            'parent_item' => __('Idioma pai'),
            'parent_item_colon' => __('Idioma pai:'),
            'edit_item' => __('Editar idioma'),
            'update_item' => __('Atualizar idioma'),
            'add_new_item' => __('Adicionar novo idioma'),
            'new_item_name' => __('Novo idioma'),
            'menu_name' => __('Idioma'),
            'show_ui' => true,
            'show_admin_column' => true,
        ),
        'rewrite' => array(
            'slug' => 'idioma',
            'hierarchical' => true
        ),
    ));
}

add_action('init', 'add_custom_taxonomies', 0);

//Remove itens do menu do administrador
function remove_menus() {
    global $menu;
    $restricted = array(
//__('Dashboard'),
        __('Posts'),
        __('Media'),
        __('Links'),
        //__('Pages'),
//__('Appearance'),
//__('Tools'),
//__('Users'),
//__('Settings'),
//__('Plugins'),
        __('Comments'));
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('admin_menu', 'remove_menus');
//Remove itens do menu do administrador
//
//
//
////SIDEBAR - TRADUÇÃO
register_sidebar(array(
    'name' => 'Traducao',
    'id' => 'traducao',
    'description' => 'Espaco destinado ao plugin de traducao'
));
?>