<?php

// THEME LOCATION at header.php - menu superior do site
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-superior', 'Menu Superior');
}

// THEME LOCATION at category-12.php - menu da categoria Marca SP
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-marcasp', 'Menu Marca SP');
}

// THEME LOCATION at category-3.php - menu da categoria Saiu na Midia
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-midia', 'Menu Saiu na Midia');
}

// SIDEBAR - Vídeos na Home - Primeiro Vídeo
register_sidebar(array(
    'name' => 'Video Home 1',
    'id' => 'video-home-1',
    'description' => 'Primeiro Video na home do site'
));


// SIDEBAR - Vídeos na Home - Segundo Vídeo
register_sidebar(array(
    'name' => 'Video Home 2',
    'id' => 'video-home-2',
    'description' => 'Segundo Video na home do site'
));


// SIDEBAR - Vídeos na Home - Terceiro Vídeo
register_sidebar(array(
    'name' => 'Video Home 3',
    'id' => 'video-home-4',
    'description' => 'Terceiro Video na home do site'
));

/*
  // SIDEBAR - Notícias relacionadas Padrão
  register_sidebar(array(
  'name' => 'Noticias Relacionadas padrao',
  'id' => 'noticias-relacionadas-padrao',
  'description' => 'Sidebar para noticias relacionadas'
  ));

  // SIDEBAR - Notícias relacionadas Central Multimidia
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Central Multimidia',
  'id' => 'noticias-relacionadas-centralMult',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Central Multimidia'
  ));

  // SIDEBAR - Notícias relacionadas Press Kit
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Press Kit',
  'id' => 'noticias-relacionadas-pressKit',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Press Kit'
  ));

  // SIDEBAR - Notícias relacionadas Projetos
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Projetos',
  'id' => 'noticias-relacionadas-projetos',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Projetos'
  ));

  // SIDEBAR - Notícias relacionadas Releases
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Releases',
  'id' => 'noticias-relacionadas-releases',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Releases'
  ));

  // SIDEBAR - Notícias relacionadas Saiu na Midia
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Saiu na Midia',
  'id' => 'noticias-relacionadas-saiuMidia',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Saiu na Midia'
  ));

  // SIDEBAR - Notícias relacionadas Marca SP
  register_sidebar(array(
  'name' => 'Noticias Relacionadas Marca SP',
  'id' => 'noticias-relacionadas-marcaSP',
  'description' => 'Barra lateral para noticias relacionadas dos artigos de Marca SP'
  ));
 */

// SIDEBAR - Sidebar Padrão
register_sidebar(array(
    'name' => 'Sidebar Padrao',
    'id' => 'sidebar-padrao',
    'description' => 'Sidebar padrão das páginas internas do site'
));

// SIDEBAR - Sidebar Central Multimidia
register_sidebar(array(
    'name' => 'Sidebar Central Multimidia',
    'id' => 'central-multimidia',
    'description' => 'Barra lateral dos artigos de Central Multimidia'
));

// SIDEBAR - Sidebar Press Kit
register_sidebar(array(
    'name' => 'Sidebar Press Kit',
    'id' => 'press-kit',
    'description' => 'Barra lateral dos artigos de Press Kit'
));

// SIDEBAR - Sidebar Projetos
register_sidebar(array(
    'name' => 'Sidebar Projetos',
    'id' => 'projetos',
    'description' => 'Barra lateral dos artigos de Projetos'
));

// SIDEBAR - Sidebar Releases
register_sidebar(array(
    'name' => 'Sidebar Releases',
    'id' => 'releases',
    'description' => 'Barra lateral dos artigos de Releases'
));

// SIDEBAR - Sidebar Saiu na midia
register_sidebar(array(
    'name' => 'Sidebar Saiu na midia',
    'id' => 'saiu-midia',
    'description' => 'Barra lateral dos artigos de Saiu na Midia'
));

// SIDEBAR - Sidebar Marca SP
register_sidebar(array(
    'name' => 'Sidebar Marca SP',
    'id' => 'marca-sp',
    'description' => 'Barra lateral dos artigos de Marca SP'
));

// SIDEBAR - Sidebar 404
register_sidebar(array(
    'name' => 'Sidebar 404',
    'id' => '404',
    'description' => 'Barra lateral da pagina 404 (erro)'
));

// SIDEBAR - Sidebar Search
register_sidebar(array(
    'name' => 'Sidebar Search',
    'id' => 'search',
    'description' => 'Barra lateral da pagina search'
));

// SIDEBAR - Sidebar Category
register_sidebar(array(
    'name' => 'Sidebar Cetegory',
    'id' => 'category',
    'description' => 'Barra lateral das paginas de categorias'
));

// SIDEBAR - Sidebar Contato
register_sidebar(array(
    'name' => 'Sidebar Contato',
    'id' => 'contato',
    'description' => 'Barra lateral das paginas de contato'
));

// SIDEBAR - Sidebar Links
register_sidebar(array(
    'name' => 'Sidebar Links',
    'id' => 'links',
    'description' => 'Barra lateral das paginas de Links'
));

// THUMBNAIL
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 1600, 400, true);
add_image_size('thumb-multimidia', 200, 150, false);
add_image_size('thumb-download', 150, 218, true);

//TAXONOMIA - Destaques da Home (slider)
function destaque_register() {
    $labels = array(
        'name' => __('Destaques'),
        'singular_name' => __('Destaque'),
        'add_new' => __('Novo Destaque'),
        'add_new_item' => __('Adicionar novo destaque'),
        'edit_item' => __('Editar destaque'),
        'new_item' => __('Novo Destaque'),
        'view_item' => __('Ver Destaque'),
        'search_items' => __('Buscar Destaque'),
        'not_found' => __('Nenhuma Destaque encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
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
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'revisions'),
    );
    register_post_type('destaque', $args);
}

function create_destaque_taxonomies() {
    $labelscat = array(
        'name' => __('Categoria Dest.'),
        'singular_name' => __('Categoria Destaque'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais usados'),
        'all_items' => __('Todas Categorias'),
        'parent_item' => __('Categoria Mae'),
        'parent_item_colon' => __('Categoria Mae'),
        'edit_item' => __('Editar categoria'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar nova Categoria'),
        'new_item_name' => __('Categoria new')
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labelscat,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'categoria-destaque')
    );
    register_taxonomy('categoria-destaque', array('destaque'), $args);
}

add_action('init', 'destaque_register');
add_action('init', 'create_destaque_taxonomies');

//fim do codigo de registro de taxonomias
//TAXONOMIA - Downloads Cidade de Sao Paulo
function downloadscsp_register() {
    $labelsdown = array(
        'name' => __('Downloads CSP'),
        'singular_name' => __('downloadscsp'),
        'add_new' => __('Novo Download'),
        'add_new_item' => __('Adicionar novo Download'),
        'edit_item' => __('Editar Download'),
        'new_item' => __('Novo Download'),
        'view_item' => __('Ver Download'),
        'search_items' => __('Buscar Download'),
        'not_found' => __('Nenhuma Download encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $argsdown = array(
        'labels' => $labelsdown,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_tagcloud' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'revisions', 'page-attributes'),
        'taxonomies' => array('post_tag'),
    );
    register_post_type('downloadscsp', $argsdown);
}

function create_downloadscsp_taxonomies() {
    $labelscat1 = array(
        'name' => __('Categoria Dest.'),
        'singular_name' => __('Categoria Destaque'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais usados'),
        'all_items' => __('Todas Categorias'),
        'parent_item' => __('Categoria Mae'),
        'parent_item_colon' => __('Categoria Mae'),
        'edit_item' => __('Editar categoria'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar nova Categoria'),
        'new_item_name' => __('Categoria new')
    );
    $args1 = array(
        'hierarchical' => true,
        'labels' => $labelscat1,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'lang-downloadscsp')
    );
    register_taxonomy('lang-downloadscsp', array('downloadscsp'), $args1);
}

add_action('init', 'downloadscsp_register');

add_action('init', 'create_downloadscsp_taxonomies');










// Register Custom Post Type - SPTURIS Compras e Licitacoes
function custom_post_type() {

    $labels = array(
        'name' => _x('licitacoes', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('licitacoes', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Compras e Licitacoes', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'add_new' => __('Add New', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'search_items' => __('Search Item', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    );
    $args = array(
        'label' => __('licitacoes', 'text_domain'),
        'description' => __('Compras e Licitacoes', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'revisions',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 100,
        'menu_icon' => '',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('licitacoes', $args);
}

// Hook into the 'init' action
add_action('init', 'custom_post_type', 0);


function create_downloadscsp_tipolicitacoes() {
    $labelscat1 = array(
        'name' => __('Tipo'),
        'singular_name' => __('Tipo'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais usados'),
        'all_items' => __('Todos'),
        'parent_item' => __('Categoria Mae'),
        'parent_item_colon' => __('Categoria Mae'),
        'edit_item' => __('Editar'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar'),
        'new_item_name' => __('tipolicitacoes')
    );
    $args1 = array(
        'hierarchical' => true,
        'labels' => $labelscat1,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tipolicitacoes')
    );
    register_taxonomy('tipolicitacoes', array('licitacoes'), $args1);
}

add_action('init', 'create_downloadscsp_tipolicitacoes');



function create_downloadscsp_finalizadaslicitacoes() {
    $labelscat1 = array(
        'name' => __('Finalizadas'),
        'singular_name' => __('Finalizadas'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais usados'),
        'all_items' => __('Todos'),
        'parent_item' => __('Categoria Mae'),
        'parent_item_colon' => __('Categoria Mae'),
        'edit_item' => __('Editar'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar'),
        'new_item_name' => __('finalizadaslicitacoes')
    );
    $args1 = array(
        'hierarchical' => true,
        'labels' => $labelscat1,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'finalizadaslicitacoes')
    );
    register_taxonomy('finalizadaslicitacoes', array('licitacoes'), $args1);
}

add_action('init', 'create_downloadscsp_finalizadaslicitacoes');

//fim do codigo de registro de taxonomias


/* Para criar uma single para cada categoria */
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;'));