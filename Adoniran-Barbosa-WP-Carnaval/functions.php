<?php

//
//
//
// Menu Superior
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu_superior', 'Menu Superior');
}

//
//
//
// Custom Post - ESCOLAS DE SAMBA
function escolas() {
    $labels = array(
        'name' => _x('Escolas de Samba', 'logAdminCorrection'),
        'singular_name' => _x('escolas', 'logAdminCorrection'),
        'add_new' => _x('Adicionar nova', 'escola'),
        'add_new_item' => _x('Adicionar nova escola', 'logAdminCorrection'),
        'edit_item' => _x('Editar Escola', 'logAdminCorrection' ),
        'new_item' => _x('Nova Escola', 'logAdminCorrection'),
        'all_items' => _x('Todas as Escolas', 'logAdminCorrection'),
        'view_item' => _x('Ver Escola', 'logAdminCorrection'),
        'search_items' => _x('Procurar Escolas', 'logAdminCorrection'),
        'not_found' => _x('Nenhuma Escola Encontrada', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhuma Escola encontrada na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Escolas de Samba'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Escolas de Samba de todos os grupos',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('escolas', $args);
}

add_action('init', 'escolas');

// Custom Post - ESCOLAS DE SAMBA
//
//
//
//
// Custom Post - LINHA DO TEMPO
function ldt() {
    $labels = array(
        'name' => _x('Linha do Tempo', 'logAdminCorrection'),
        'singular_name' => _x('ldt'),
        'add_new' => _x('Adicionar novo', 'fato'),
        'add_new_item' => _x('Adicionar novo fato historico', 'logAdminCorrection'),
        'edit_item' => _x('Editar fato historico', 'logAdminCorrection'),
        'new_item' => _x('Novo fato historico', 'logAdminCorrection'),
        'all_items' => _x('Fatos historicos', 'logAdminCorrection'),
        'view_item' => _x('Ver fato historico', 'logAdminCorrection'),
        'search_items' => _x('Procurar fatos historicos', 'logAdminCorrection'),
        'not_found' => _x('Nenhum fato historico encontrado', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhum fato historico encontrado na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Linha do Tempo'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Fatos hitoricos na Linha do Tempo',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
    );
    register_post_type('ldt', $args);
}

add_action('init', 'ldt');

// Custon Post - LINHA DO TEMPO
//
//
//
//
// Custom Post - GALERIAS
function galerias() {
    $labels = array(
        'name' => _x('Galerias de Imagens', 'logAdminCorrection'),
        'singular_name' => _x('galerias', 'logAdminCorrection'),
        'add_new' => _x('Adicionar nova', 'galeria', 'logAdminCorrection'),
        'add_new_item' => _x('Adicionar nova galeria', 'logAdminCorrection'),
        'edit_item' => _x('Editar galeria', 'logAdminCorrection'),
        'new_item' => _x('Nova galeria', 'logAdminCorrection'),
        'all_items' => _x('Galerias de Imagens', 'logAdminCorrection'),
        'view_item' => _x('Ver galeria', 'logAdminCorrection'),
        'search_items' => _x('Procurar galerias', 'logAdminCorrection'),
        'not_found' => _x('Nenhuma galerias encontrada', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhuma galerias encontrada na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Galerias de Imagens'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Galerias de Imagens',
        'public' => true,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
    );
    register_post_type('galerias', $args);
}

add_action('init', 'galerias');

// Custom Post - GALERIAS
//
//
//
//
// Custom Post - REDES SOCIAIS
function social() {
    $labels = array(
        'name' => _x('Redes Sociais', 'logAdminCorrection'),
        'singular_name' => _x('social', 'logAdminCorrection'),
        'add_new' => _x('Adicionar nova', 'postagem'),
        'add_new_item' => _x('Adicionar nova postagem', 'logAdminCorrection'),
        'edit_item' => _x('Editar postagem', 'logAdminCorrection'),
        'new_item' => _x('Nova postagem', 'logAdminCorrection'),
        'all_items' => _x('Postagens', 'logAdminCorrection'),
        'view_item' => _x('Ver postagem', 'logAdminCorrection'),
        'search_items' => _x('Procurar postagens', 'logAdminCorrection'),
        'not_found' => _x('Nenhuma postagem encontrada', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhuma postagem encontrada na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Redes Sociais'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Postagens nas Redes Sociais',
        'public' => true,
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
    );
    register_post_type('social', $args);
}

add_action('init', 'social');

// Custom Post - REDES SOCIAIS
//
//
//
//
// Custom Post - SLIDER NO HEADER
function slider() {
    $labels = array(
        'name' => _x('Slider', 'logAdminCorrection'),
        'singular_name' => _x('slider', 'logAdminCorrection'),
        'add_new' => _x('Adicionar novo', 'slide', 'logAdminCorrection'),
        'add_new_item' => _x('Adicionar novo slide', 'logAdminCorrection'),
        'edit_item' => _x('Editar Slide', 'logAdminCorrection'),
        'new_item' => _x('Novo Slide', 'logAdminCorrection'),
        'all_items' => _x('Todos os Slides', 'logAdminCorrection'),
        'view_item' => _x('Ver Slides', 'logAdminCorrection'),
        'search_items' => _x('Procurar Slides', 'logAdminCorrection'),
        'not_found' => _x('Nenhum Slide Encontrado', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhum Slide encontrado na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Vitrine Home'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slider no Topo das páginas',
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title'),
        'has_archive' => true,
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider');

//
//
//
//
// Custom Post - SLIDER NAS INTERNAS
function sliderinterna() {
    $labels = array(
        'name' => _x('Sliderinterna', 'logAdminCorrection'),
        'singular_name' => _x('Sliderinterna', 'logAdminCorrection'),
        'add_new' => _x('Adicionar novo', 'Sliderinterna', 'logAdminCorrection'),
        'add_new_item' => _x('Adicionar novo Sliderinterna', 'logAdminCorrection'),
        'edit_item' => _x('Editar Sliderinterna', 'logAdminCorrection'),
        'new_item' => _x('Novo Sliderinterna', 'logAdminCorrection'),
        'all_items' => _x('Todos os Sliderinterna', 'logAdminCorrection'),
        'view_item' => _x('Ver Sliderinterna', 'logAdminCorrection'),
        'search_items' => _x('Procurar Sliderinterna', 'logAdminCorrection'),
        'not_found' => _x('Nenhum Sliderinterna Encontrado', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nenhum Sliderinterna encontrado na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Vitrine Interna'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slider no Topo das páginas internas',
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title'),
        'has_archive' => true,
    );
    register_post_type('sliderinterna', $args);
}

add_action('init', 'sliderinterna');

// Custom Post - SLIDER NO HEADER
//
//
//
//
// Custom Post - BIBLIOTECA SAMBAS ENREDO
function sambaenredo() {
    $labels = array(
        'name' => _x('Biblioteca de Sambas Enredo', 'logAdminCorrection'),
        'singular_name' => _x('sambaenredo', 'logAdminCorrection'),
        'add_new' => _x('Adicionar novo', 'sambaenredo'),
        'add_new_item' => _x('Adicionar novo', 'logAdminCorrection'),
        'edit_item' => _x('Editar', 'logAdminCorrection'),
        'new_item' => _x('Novo', 'logAdminCorrection'),
        'all_items' => _x('Todos', 'logAdminCorrection'),
        'view_item' => _x('Ver', 'logAdminCorrection'),
        'search_items' => _x('Procurar', 'logAdminCorrection'),
        'not_found' => _x('Nada Encontrado', 'logAdminCorrection'),
        'not_found_in_trash' => _x('Nada encontrado na lixeira', 'logAdminCorrection'),
        'parent_item_colon' => '',
        'menu_name' => 'Biblioteca de Sambas Enredo'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Biblioteca de Sambas Enredo',
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title'),
        'has_archive' => true,
    );
    register_post_type('sambaenredo', $args);
}

add_action('init', 'sambaenredo');

// Custom Post - BIBLIOTECA SAMBAS ENREDO
// 
// 
// 
// 
// Taxonomias - criando taxonomias de todos os posts types
function add_custom_taxonomies() {
// Taxonomia Escolas de Samba: Grupos
    register_taxonomy('grupos', array('escolas', 'sambaenredo'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Grupos', 'Grupos das Escolas de Samba'),
            'singular_name' => _x('grupos', 'logAdminCorrection'),
            'search_items' => _x('Procurar Grupos', 'logAdminCorrection'),
            'all_items' => _x('Todos os Grupos', 'logAdminCorrection'),
            'parent_item' => _x('Grupo pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Grupo pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Grupo', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Grupo', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar novo Grupo', 'logAdminCorrection'),
            'new_item_name' => _x('Novo nome de Grupo', 'logAdminCorrection'),
            'menu_name' => _x('Grupos'),
        ),
        'rewrite' => array(
            'slug' => 'grupos',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
// Taxonomia Linha do Tempo: Tipos de eventos
    register_taxonomy('tiposldt', 'ldt', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Tipos', 'Tipos de fatos historicos'),
            'singular_name' => _x('tiposldt', 'logAdminCorrection'),
            'search_items' => _x('Procurar tipos', 'logAdminCorrection'),
            'all_items' => _x('Todos os tipos', 'logAdminCorrection'),
            'parent_item' => _x('Tipo pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Tipo pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Tipo', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Tipo', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar novo Tipo', 'logAdminCorrection'),
            'new_item_name' => _x('Novo nome de Tipo', 'logAdminCorrection'),
            'menu_name' => _x('Tipos de fatos historicos'),
        ),
        'rewrite' => array(
            'slug' => 'tiposldt',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
// Taxonomia Linha do Tempo: Anos dos Eventos
    register_taxonomy('anosldt', 'ldt', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Ano', 'Ano dos fatos historicos'),
            'singular_name' => _x('anosldt', 'logAdminCorrection'),
            'search_items' => _x('Procurar anos', 'logAdminCorrection'),
            'all_items' => _x('Todos os anos', 'logAdminCorrection'),
            'parent_item' => _x('Ano pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Ano pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Ano', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Ano', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar novo Ano', 'logAdminCorrection'),
            'new_item_name' => _x('Novo Ano', 'logAdminCorrection'),
            'menu_name' => _x('Anos dos fatos historicos'),
        ),
        'rewrite' => array(
            'slug' => 'anosldt',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
// Taxonomia das Galerias de Imagens: Galerias
    register_taxonomy('tiposgalerias', 'galerias', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Tipos', 'Tipos de galerias de imagens', 'logAdminCorrection'),
            'singular_name' => _x('tiposgalerias', 'logAdminCorrection'),
            'search_items' => _x('Procurar tipos', 'logAdminCorrection'),
            'all_items' => _x('Todos os tipos', 'logAdminCorrection'),
            'parent_item' => _x('Tipo pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Tipo pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Tipo', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Tipo', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar novo Tipo de galeria', 'logAdminCorrection'),
            'new_item_name' => _x('Novo nome de Tipo de Galeria', 'logAdminCorrection'),
            'menu_name' => _x('Tipos de galerias'),
        ),
        'rewrite' => array(
            'slug' => 'tiposgalerias',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
// Taxonomia das Galerias de Imagens: Escolas Relacionadas
    register_taxonomy('escolasrelacionadas', array('galerias', 'sambaenredo', 'escolas'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Escolas relacionadas', 'Escolas relacioadas'),
            'singular_name' => _x('escolasrelacionadas', 'logAdminCorrection'),
            'search_items' => _x('Procurar Escolas', 'logAdminCorrection'),
            'all_items' => _x('Todas as Escolas', 'logAdminCorrection'),
            'parent_item' => _x('Escola pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Escola pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Escola', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Escola', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar nova Escola', 'logAdminCorrection'),
            'new_item_name' => _x('Novo nome de Escola', 'logAdminCorrection'),
            'menu_name' => _x('Escolas relacionadas'),
        ),
        'rewrite' => array(
            'slug' => 'escolasrelacionadas',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
// Taxonomia Escolas de Samba: Redes Sociais
    register_taxonomy('redes', 'social', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Redes', 'Tipos de redes sociais'),
            'singular_name' => _x('redes', 'logAdminCorrection'),
            'search_items' => _x('Procurar redes sociais', 'logAdminCorrection'),
            'all_items' => _x('Todas as redes sociais', 'logAdminCorrection'),
            'parent_item' => _x('Rede social pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Rede social pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Rede social', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Rede social', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar nova Rede social', 'logAdminCorrection'),
            'new_item_name' => _x('Novo nome de Rede social', 'logAdminCorrection'),
            'menu_name' => _x('Redes Sociais'),
        ),
        'rewrite' => array(
            'slug' => 'redes',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));


    // Taxonomia CARNAVAL ANO
    register_taxonomy('anocarnaval', array('post', 'galerias', 'social', 'sambaenredo'), array(
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'labels' => array(
            'name' => _x('Ano Carnaval', 'logAdminCorrection'),
            'singular_name' => _x('anocarnaval', 'logAdminCorrection'),
            'search_items' => _x('Procurar Ano Carnaval', 'logAdminCorrection'),
            'all_items' => _x('Todos os Ano Carnaval', 'logAdminCorrection'),
            'parent_item' => _x('Idioma pai', 'logAdminCorrection'),
            'parent_item_colon' => _x('Ano Carnaval pai:', 'logAdminCorrection'),
            'edit_item' => _x('Editar Ano Carnaval', 'logAdminCorrection'),
            'update_item' => _x('Atualizar Ano Carnaval', 'logAdminCorrection'),
            'add_new_item' => _x('Adicionar novo Ano Carnaval', 'logAdminCorrection'),
            'new_item_name' => _x('Novo Ano Carnaval', 'logAdminCorrection'),
            'menu_name' => _x('Ano Carnaval'),
            'show_ui' => true,
            'show_admin_column' => true,
        ),
        'rewrite' => array(
            'slug' => 'anocarnaval',
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






add_action('init', 'register_cpt_galerias2');

function register_cpt_galerias2() {

    $labels = array(
        'name' => _x('galerias2', 'galerias2'),
        'singular_name' => _x('galerias2', 'galerias2'),
        'add_new' => _x('Add New', 'galerias2'),
        'add_new_item' => _x('Add New galerias2', 'galerias2'),
        'edit_item' => _x('Edit galerias2', 'galerias2'),
        'new_item' => _x('New galerias2', 'galerias2'),
        'view_item' => _x('View galerias2', 'galerias2'),
        'search_items' => _x('Search galerias2', 'galerias2'),
        'not_found' => _x('No galerias2 found', 'galerias2'),
        'not_found_in_trash' => _x('No galerias2 found in Trash', 'galerias2'),
        'parent_item_colon' => _x('Parent galerias2:', 'galerias2'),
        'menu_name' => _x('galerias2', 'galerias2'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('anocarnaval', 'escolasrelacionadas', 'tiposgalerias'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type('galerias2', $args);
}






//
//
//
//
//
//
//
//Remove itens do menu do administrador
function remove_menus() {
    global $menu;
    $restricted = array(
//_x('Dashboard'),
//_x('Posts'),
//_x('Media'),
        _x('Links'),
        //_x('Pages'),
//_x('Appearance'),
//_x('Tools'),
//_x('Users'),
//_x('Settings'),
//_x('Plugins'),
        _x('Comments'));
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
//
//Resumos - Limitador de Palavras
function limit_words($string, $word_limit) {
// creates an array of words from $string
    $words = explode(' ', $string);
// this next bit chops the $words array and sticks it back together
// starting at the first word '0' and ending at the $word_limit
// the $word_limit which is passed in the function will be the number of words we want to use
// implode glues the chopped up array back together using a space character
    return implode(' ', array_slice($words, 0, $word_limit));
}

//
//
//
// Thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-escolas', 53, 40, true);
add_image_size('thumb-parangole', 183, 298, true);
add_image_size('thumb-slider', 970, 249, true);
// Thumbnails
//
//
//
//SIDEBAR - Publicidade
register_sidebar(array(
    'name' => 'Publicidade',
    'id' => 'publicidade',
    'description' => 'Publicidade OpenAds'
));
//
//
//
//SIDEBAR - Mais Noticias
register_sidebar(array(
    'name' => 'Mais Noticias',
    'id' => 'maisnoticias',
    'description' => 'Exibe as 6 ultimas noticias'
));
//
//
//
//SIDEBAR - Mais Escolas
register_sidebar(array(
    'name' => 'Mais Escolas',
    'id' => 'maisescolas',
    'description' => 'Exibe randomicamente 30 escolas'
));
//
?>