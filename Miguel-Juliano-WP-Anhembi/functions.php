<?php

// THEME LOCATION at header.php - menu superior do site
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-superior', 'Menu Superior');
}
//
//
// THEME LOCATION at footer.php - menu inferior do site
if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-footer', 'Menu Inferior');
}
//
//
// THEME LOCATION - menu lateral Seu Evento Aqui
if (function_exists('register_nav_menu')) {
    register_nav_menu('seu-evento-aqui', 'Seu Evento Aqui');
}
//
//
// THEME LOCATION - menu Espacos
if (function_exists('register_nav_menu')) {
    register_nav_menu('espacos', 'Espacos');
}
//
// THEME LOCATION - menu teste 
if (function_exists('register_nav_menu')) {
    register_nav_menu('teste', 'teste');
}
//
//
// THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 1600, 530, true);
add_image_size('thumb-homeFaixa1', 210, 150, true);
add_image_size('thumb-servicos', 332, 261, true);
add_image_size('thumb-single2colunas', 332, 261, true);
add_image_size('thumb-single3colunas', 213, 261, true);
add_image_size('thumb-destaques-noticias', 516, 261, true);
add_image_size('thumb-destaques-servico', 190, 110, true);
add_image_size('thumb-videos-sidebar', 160, 132, true);
add_image_size('thumb-videos', 188, 154, false);
add_image_size('thumb-espacos', 190, 110, true);
// FIM THUMBNAILS
//
//
//TAXONOMIA - Espacos Anhembi
add_action('init', 'create_post_type_espaco');

function create_post_type_espaco() {
    $label_espaco = array(
        'name' => _x('Espacos', 'Nome Geral'),
        'singular_name' => _x('Espaco', 'Nome singular'),
        'add_new' => _x('Novo', 'Espaco'),
        'add_new_item' => __('Adicionar novo Espaco'),
        'edit_item' => __('Edite Espaco'),
        'new_item' => __('Novo Espaco'),
        'all_items' => __('Todos os Espaco'),
        'view_item' => __('Ver Espaco'),
        'search_items' => __('Buscar Espaco'),
        'not_found' => __('Nenhum Espaco encontrado'),
        'not_found_in_trash' => __('Nenhum Espaco encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Espacos'
    );
    register_post_type('Espaco', array(
        'labels' => $label_espaco,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions')
            )
    );
}

//FIM TAXONOMIA - Espacos Anhembi
//
//
//TAXONOMIA - Seu Evento aqui
add_action('init', 'create_post_type_seueventoaqui');

function create_post_type_seueventoaqui() {
    $labels_seueventoaqui = array(
        'name' => _x('Paginas', 'Nome geral'),
        'singular_name' => _x('Paginas', 'Nome singular'),
        'add_new' => _x('Nova Pagina', 'Pagina'),
        'add_new_item' => __('Adicionar nova Paginas'),
        'edit_item' => __('Edite Pagina'),
        'new_item' => __('Criar pagina'),
        'all_items' => __('Todos as paginas'),
        'view_item' => __('Ver pagina'),
        'search_items' => __('Buscar pagina'),
        'not_found' => __('Nenhuma pagina encontrada'),
        'not_found_in_trash' => __('Nenhuma pagina encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Seu evento aqui'
    );
    register_post_type('seueventoaqui', array(
        'labels' => $labels_seueventoaqui,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions')
            )
    );
}

//TAXONOMIA - SERVICOS
function servicos_register() {
    $labels_servicos = array(
        'name' => _x('Paginas', 'Nome geral'),
        'singular_name' => _x('Paginas', 'Nome singular'),
        'add_new' => _x('Nova Pagina', 'Pagina'),
        'add_new_item' => __('Adicionar nova Paginas'),
        'edit_item' => __('Edite Pagina'),
        'new_item' => __('Criar pagina'),
        'all_items' => __('Todos as paginas'),
        'view_item' => __('Ver pagina'),
        'search_items' => __('Buscar pagina'),
        'not_found' => __('Nenhuma pagina encontrada'),
        'not_found_in_trash' => __('Nenhuma pagina encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Servicos'
    );
    $args_servicos = array(
        'labels' => $labels_servicos,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 7,
        'supports' => array('title', 'thumbnail', 'revisions', 'editor', 'excerpt', 'category'),
    );
    register_post_type('servicos', $args_servicos);

    function create_servicos_taxonomies() {
        $labelscat_servicos = array(
            'name' => __('Categorias'),
            'singular_name' => __('Categoria'),
            'search_items' => __('Buscar'),
            'popular_items' => __('Mais usados'),
            'all_items' => __('Todas Categorias'),
            'parent_item' => __('Categoria Mae'),
            'parent_item_colon' => __('Categoria Mae'),
            'edit_item' => __('Editar categoria'),
            'update_item' => __('Atualizar'),
            'add_new_item' => __('Adicionar nova Categoria'),
            'new_item_name' => __('Nova Categoria')
        );
        $args_servicoscat = array(
            'hierarchical' => true,
            'labels' => $labelscat_servicos,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'servicos')
        );
        register_taxonomy('servicos', array('servicos'), $args_servicoscat);
    }

}

add_action('init', 'servicos_register');
add_action('init', 'create_servicos_taxonomies');

//FIM TAXONOMIA - SERVICOS
//
//
//TAXONOMIA - Oportunidades
function oportunidades_register() {
    $labels_oportunidades = array(
        'name' => _x('Oportunidades', 'Nome geral'),
        'singular_name' => _x('Oportunidades', 'Nome singular'),
        'add_new' => _x('Nova Oportunidade', 'Pagina'),
        'add_new_item' => __('Adicionar nova Oportunidade'),
        'edit_item' => __('Edite Oportunidade'),
        'new_item' => __('Criar Oportunidade'),
        'all_items' => __('Todos as Oportunidades'),
        'view_item' => __('Ver Oportunidade'),
        'search_items' => __('Buscar Oportunidade'),
        'not_found' => __('Nenhuma Oportunidade encontrada'),
        'not_found_in_trash' => __('Nenhuma Oportunidade encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Oportunidades'
    );
    $args_oportunidades = array(
        'labels' => $labels_oportunidades,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title', 'thumbnail', 'revisions', 'editor', 'excerpt', 'category', 'custom-fields'),
    );
    register_post_type('oportunidades', $args_oportunidades);
}

add_action('init', 'oportunidades_register');

//FIM TAXONOMIA - Oportunidades
//
//
//TAXONOMIA - Clipping
/*function clipping_register() {
    $labels_clipping = array(
        'name' => _x('Paginas', 'Nome geral'),
        'singular_name' => _x('Paginas', 'Nome singular'),
        'add_new' => _x('Nova Pagina', 'Pagina'),
        'add_new_item' => __('Adicionar nova Paginas'),
        'edit_item' => __('Edite Pagina'),
        'new_item' => __('Criar pagina'),
        'all_items' => __('Todos as paginas'),
        'view_item' => __('Ver pagina'),
        'search_items' => __('Buscar pagina'),
        'not_found' => __('Nenhuma pagina encontrada'),
        'not_found_in_trash' => __('Nenhuma pagina encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Clipping'
    );
    $args_clipping = array(
        'labels' => $labels_clipping,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 9,
        'supports' => array('title', 'thumbnail', 'revisions', 'editor', 'excerpt', 'category'),
    );
    register_post_type('clipping', $args_clipping);
}

add_action('init', 'clipping_register');
 */ 
 

//FIM TAXONOMIA - Clipping
//
//
//TAXONOMIA - Mercado de Eventos (Inteligencia de Mercado)
//function inteligencia_register() {
//    $labels_mercadodeeventos = array(
//        'name' => _x('Paginas', 'Nome geral'),
//        'singular_name' => _x('Paginas', 'Nome singular'),
//        'add_new' => _x('Nova Pagina', 'Pagina'),
//        'add_new_item' => __('Adicionar nova Paginas'),
//        'edit_item' => __('Edite Pagina'),
//        'new_item' => __('Criar pagina'),
//        'all_items' => __('Todos as paginas'),
//        'view_item' => __('Ver pagina'),
//        'search_items' => __('Buscar pagina'),
//        'not_found' => __('Nenhuma pagina encontrada'),
//        'not_found_in_trash' => __('Nenhuma pagina encontrada na lixeira'),
//        'parent_item_colon' => '',
//        'menu_name' => 'Mercado de Eventos'
//    );
//    $args_mercadodeeventos = array(
//        'labels' => $labels_mercadodeeventos,
//        'public' => true,
//        'publicly_queryable' => true,
//        'show_ui' => true,
//        'query_var' => true,
//        'rewrite' => true,
//        'capability_type' => 'post',
//        'hierarchical' => false,
//        'menu_position' => 10,
//        'supports' => array('title', 'thumbnail', 'revisions', 'editor', 'excerpt', 'category'),
//    );
//    register_post_type('inteligencia', $args_mercadodeeventos);
//}
//
//add_action('init', 'inteligencia_register');
//FIM TAXONOMIA - Mercado de Eventos (Inteligencia de Mercado)
//
//
//TAXONOMIA - Videos
function videos_register() {
    $labels_videos = array(
        'name' => _x('Videos', 'Nome geral'),
        'singular_name' => _x('Videos', 'Nome singular'),
        'add_new' => _x('Novo Video', 'Pagina'),
        'add_new_item' => __('Adicionar novo Video'),
        'edit_item' => __('Edite Video'),
        'new_item' => __('Criar Video'),
        'all_items' => __('Todos os Videos'),
        'view_item' => __('Ver Video'),
        'search_items' => __('Buscar Video'),
        'not_found' => __('Nenhum Video encontrado'),
        'not_found_in_trash' => __('Nenhum Videos encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Videos'
    );
    $args_videos = array(
        'labels' => $labels_videos,
        'show_tagcloud' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_tagcloud' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'category'),
        'taxonomies' => array('post_tag'),
    );
    register_post_type('videos', $args_videos);

    function create_videos_taxonomies() {
        $labelscat_videos = array(
            'name' => __('Categorias'),
            'singular_name' => __('Categoria'),
            'search_items' => __('Buscar'),
            'popular_items' => __('Mais usados'),
            'all_items' => __('Todas Categorias'),
            'parent_item' => __('Categoria Mae'),
            'parent_item_colon' => __('Categoria Mae'),
            'edit_item' => __('Editar categoria'),
            'update_item' => __('Atualizar'),
            'add_new_item' => __('Adicionar nova Categoria'),
            'new_item_name' => __('Nova Categoria')
        );
        $args_videoscat = array(
            'hierarchical' => true,
            'labels' => $labelscat_videos,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'videos')
        );
        register_taxonomy('videos', array('videos'), $args_videoscat);
    }

}

add_action('init', 'videos_register');
add_action('init', 'create_videos_taxonomies');

//FIM TAXONOMIA - Videos
//
//
//TAXONOMIA - Slider Home
function destaque_register() {
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
        'supports' => array('title', 'thumbnail', 'excerpt'),
    );
    register_post_type('destaque', $args_sliderhome);
}

add_action('init', 'destaque_register');

//FIM TAXONOMIA - Slider Home
//
//
//TAXONOMIA - Slider Destaques
function destaqueshome_register() {
    $labels_sliderdestaques = array(
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
        'menu_name' => 'Slider Destaques'
    );
    $args_sliderdestaques = array(
        'labels' => $labels_sliderdestaques,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 12,
        'supports' => array('title', 'thumbnail', 'excerpt'),
    );
    register_post_type('destaqueshome', $args_sliderdestaques);
}

add_action('init', 'destaqueshome_register');

//FIM TAXONOMIA - Slider Destaques
//
//
//Remove itens do menu do administrador
function remove_menus() {
    global $menu;
    $restricted = array(
        //__('Dashboard'),
        //__('Posts'),
        //__('Media'),
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
//FIM (Remove itens do menu do administrador)
//
//
////SIDEBAR - TRADUÇÃO
register_sidebar(array(
    'name' => 'Traducao',
    'id' => 'traducao',
    'description' => 'Espaco destinado ao plugin de traducao'
));
//
//
//SIDEBAR - HOME: Downloads
register_sidebar(array(
    'name' => 'Home: Box Download',
    'id' => 'homebox-download',
    'description' => 'Box Download na home do site'
));
//
//
//SIDEBAR - HOME: Anuncie no Anhembi (Midia)
register_sidebar(array(
    'name' => 'Home: Box Midia',
    'id' => 'homebox-midia',
    'description' => 'Box Anuncie no Anhembi (Midia) na home do site'
));
//
//
//SIDEBAR - HOME: Anhembi Telecom
register_sidebar(array(
    'name' => 'Home: Box Telecom',
    'id' => 'homebox-telecom',
    'description' => 'Box Anhembi Telecom na home do site'
));
//
//
//SIDEBAR - Destaques (Home dos destaques)
register_sidebar(array(
    'name' => 'Destaques (Abertura)',
    'id' => 'destaques',
    'description' => 'Sidebar da pagina de abertura da area Destaques'
));
//
//
//SIDEBAR - Posts (Internas)
register_sidebar(array(
    'name' => 'Destaques (Internas)',
    'id' => 'destaques-internas',
    'description' => 'Sidebar para as paginas internas da area Destaques (Area Posts)'
));
//
//
//SIDEBAR - Videos: vídeo em destaque na área Abertura
register_sidebar(array(
    'name' => 'Video em destaque (Abertura)',
    'id' => 'videos_destaque',
    'description' => 'Embed 564x303 do video em destaque na área de videos'
));
//
//
//SIDEBAR - Videos: páginas internas
register_sidebar(array(
    'name' => 'Videos',
    'id' => 'videos',
    'description' => 'Sidebar das páginas internas da area de videos'
));
//
//
//SIDEBAR - Mercado de Eventos (Inteligencia de Mercado)
//register_sidebar(array(
//    'name' => 'Mercado de Eventos',
//    'id' => 'inteligencia',
//    'description' => 'Sidebar da area de Mercado de Eventos (Inteligencia de Mercado)'
//));
//
//
//SIDEBAR - Seu Evento Aqui
register_sidebar(array(
    'name' => 'Seu Evento Aqui',
    'id' => 'seu-evento-aqui',
    'description' => 'Sidebar para a area Seu Evento Aqui'
));
//
//
//SIDEBAR - Espacos Anhembi
register_sidebar(array(
    'name' => 'Espacos Anhembi',
    'id' => 'espacos',
    'description' => 'Sidebar para a area Espacos'
));
//
//
//SIDEBAR - Servicos
register_sidebar(array(
    'name' => 'Servicos',
    'id' => 'servicos',
    'description' => 'Sidebar para a area Servicos'
));
//
//
//SIDEBAR - Telecom (dentro de servicos)
register_sidebar(array(
    'name' => 'Telecom',
    'id' => 'telecom',
    'description' => 'Sidebar para a area Telecom'
));
//
//
////SIDEBAR - Midia (dentro de servicos)
register_sidebar(array(
    'name' => 'Midia',
    'id' => 'midia',
    'description' => 'Sidebar para a pagina de Midia'
));
//
//
//SIDEBAR - Oportunidades
register_sidebar(array(
    'name' => 'Oportunidades',
    'id' => 'oportunidades',
    'description' => 'Sidebar da area Oportunidades'
));
//
//
//SIDEBAR - Clipping
register_sidebar(array(
    'name' => 'Clipping',
    'id' => 'clipping',
    'description' => 'Sidebar da area Clipping'
));
//
//
//SIDEBAR - Agenda de Eventos
register_sidebar(array(
    'name' => 'Agenda de Eventos',
    'id' => 'agenda',
    'description' => 'Sidebar da area Clipping'
));
//
//
//SIDEBAR - PAGE: Fale Conosco
register_sidebar(array(
    'name' => 'Fale Conosco',
    'id' => 'fale-conosco',
    'description' => 'Sidebar da pagina Fale Conosco'
));
//
//
//SIDEBAR - PAGE: Como Chegar (MAPA)
register_sidebar(array(
    'name' => 'Como Chegar (Mapa)',
    'id' => 'mapa',
    'description' => 'Sidebar para informacoes de mapas (Encontre aqui, Como chegar e Estacionamento)'
));
//
//
//SIDEBAR - PAGE: Institucionais
register_sidebar(array(
    'name' => 'Paginas Institucionais',
    'id' => 'institucional',
    'description' => 'Sidebar das paginas Institucionais'
));
//
//
//SIDEBAR - Open Ads (Publicidade)
register_sidebar(array(
    'name' => 'Publicidade',
    'id' => 'publicidade',
    'description' => 'Sidebar para a insercao de publicidade no site'
));
//
//
//SIDEBAR - Footer
register_sidebar(array(
    'name' => 'Rodape',
    'id' => 'footer',
    'description' => 'Conteudo para o rodape do site'
));

//
//
//
// Criar uma single para cada categoria 
function get_custom_post_type_template($single_template) {
    global $post;
    if ($post->post_type == 'my_post_type') {
        $single_template = dirname(__FILE__) . '/post-type-template.php';
    }
    return $single_template;
}

add_filter("single_template", "get_custom_post_type_template");

// FIM - Criar uma single para cada categoria 
//
//
//Criar paginação (usada no resultado da busca)
function pagination($pages = '', $range = 2) { //range define a qtdade de págs. que irá aparecer
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged))
        $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div id=\"paginationCurrent\">P&aacute;gina " . $paged . " de " . $pages . "</div><div class=\"pagination\">";  //mostra a pagina atual e a qtdade total de paginas
        if ($paged > 1 && $showitems < $pages)
            echo "<a title=\"Primeira\" href='" . get_pagenum_link($pages == 1) . "'><img src=\"http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/searchContent_pagination_btnFirst.png\"></a>"; //ir para a primeira pag
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<span class=\"current\">" . $i . "</span>" : "<a title=\"P&aacute;gina $i\" href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) //ir para a ultima pag
            echo "<a title=\"&Uacute;ltima\" href=\"" . get_pagenum_link($pages) . "\"><img src=\"http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/searchContent_pagination_btnLast.png\"></a>";
        echo "</div>\n";
    }
}

// FIM - Criar paginação (usada no resultado da busca)
//
//
//Adiciona o suporte a Resumo em todas as Pages. 
add_action('edit_page_form', 'pe_add_box');
add_action('init', 'pe_init');

function pe_init() {
    if (function_exists("add_post_type_support")) {
        add_post_type_support('page', 'excerpt');
    }
}

// FIM - Adiciona o suporte a Resumo em todas as Pages. 
//
//
//Adiciona Thumbnails junto ao post 
//----------------------------(Add the posts and pages columns filter. They can both use the same function.)
add_filter('manage_posts_columns', 'tcb_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'tcb_add_post_thumbnail_column', 5);

// Add the column
function tcb_add_post_thumbnail_column($cols) {
    $cols['tcb_post_thumb'] = __('Imagem em Destaque');
    return $cols;
}

//---------------------------- Hook into the posts an pages column managing. Sharing function callback again.
add_action('manage_posts_custom_column', 'tcb_display_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'tcb_display_post_thumbnail_column', 5, 2);

//---------------------------- Grab featured-thumbnail size post thumbnail and display it.
function tcb_display_post_thumbnail_column($col, $id) {
    switch ($col) {
        case 'tcb_post_thumb':
            if (function_exists('the_post_thumbnail'))
                echo the_post_thumbnail('admin-list-thumb');
            else
                echo 'Not supported in theme';
            break;
    }
}

//
//FIM - Adiciona Thumbnails junto ao post.   
//TAXONOMIA - AVISOS HOME
function avisoshome() {
    $labels = array(
        'name' => _x('avisoshome'),
        'singular_name' => _x('avisoshome'),
        'add_new' => _x('Adicionar novo', ''),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo'),
        'all_items' => __('Todos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum encontrado'),
        'not_found_in_trash' => __('Nenhum encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Avisos Home'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Avisos Home',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title'),
        'has_archive' => true,
    );
    register_post_type('avisoshome', $args);
}

add_action('init', 'avisoshome');

//FIM TAXONOMIA - Espacos Anhembi
//
//
//
//
//
//
//
//
//
//

function abtest() {
    $labels = array(
        'name' => _x('Experimentos'),
        'singular_name' => _x('abtest'),
        'add_new' => _x('Adicionar novo', ''),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo'),
        'all_items' => __('Todos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum encontrado'),
        'not_found_in_trash' => __('Nenhum encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Experimentos'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('abtest', $args);
}

add_action('init', 'abtest');
