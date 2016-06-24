<?php

//
//
//
//
//SIDEBAR - Turismo de Bike
register_sidebar(array(
    'name' => 'Turismo de Bike',
    'id' => 'turismo-bike',
    'description' => 'Roteiros turísticos de Bike'
));
//
//
//
//
//SIDEBAR - Imprimir & Mandar por e-mail
register_sidebar(array(
    'name' => 'Imprimir e E-mail',
    'id' => 'print-email',
    'description' => 'Barra de Ações - Imprimir e Mandar por E-mail'
));

//
//
//
//
// ------------------ Custon Posts: LINKS
function links() {
    $labels = array(
        'name' => _x('links', ''),
        'singular_name' => _x('links', ''),
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
        'menu_name' => 'Links Sites'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'links',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title','thumbnail','editor'),
        'has_archive' => true,
    );
    register_post_type('links', $args);
}

add_action('init', 'links');
//
//
//
//
//
function links_app() {
    $labels = array(
        'name' => _x('links_app', ''),
        'singular_name' => _x('links_app', ''),
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
        'menu_name' => 'Links APP'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'links app',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title','thumbnail','editor'),
        'has_archive' => true,
    );
    register_post_type('links_app', $args);
}

add_action('init', 'links_app');
//
//
//
//
//
// ------------------ Custon Posts: SLIDER
function slider() {
    $labels = array(
        'name' => _x('slider' , ''),
        'singular_name' => _x('slider' , ''),
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
        'menu_name' => 'Slider'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiros Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'has_archive' => true,
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider');
//
//
//
//
//



function noticia() {
    $labels = array(
        'name' => _x('noticia' , ''),
        'singular_name' => _x('noticia', ''),
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
        'menu_name' => 'Noticia'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiros Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title','editor'),
        'has_archive' => true,
    );
    register_post_type('noticia', $args);
}

add_action('init', 'noticia');




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
//
//
//
//
//


function parque() {
    $labels = array(
        'name' => _x('parque' , ''),
        'singular_name' => _x('parque' , ''),
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
        'menu_name' => 'Parque'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiros Ecoturismo',
        'public' => true,
        'menu_position' => 4,
       'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'has_archive' => true,
    );
    register_post_type('parque', $args);
}

add_action('init', 'parque');


//
//
//
//
//
//
//
//
//

function roteiros() {
    $labels = array(
        'name' => _x('roteiros' , ''),
        'singular_name' => _x('roteiros', ''),
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
        'menu_name' => 'Roteiros'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiros Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('roteiros', $args);
}

add_action('init', 'roteiros');
//
//
//
//
//
//
//



function vias() {
    $labels = array(
        'name' => _x('vias', ''),
        'singular_name' => _x('vias', ''),
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
        'menu_name' => 'vias'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Roteiros Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('vias', $args);
}

add_action('init', 'vias');
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
//
// Register Custom Taxonomy
function custom_taxonomy1() {

    $labels = array(
        'name' => _x('zonas', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('zonas', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('zonas', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'new_item_name' => __('New Item Name', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'search_items' => __('Search Items', 'text_domain'),
        'add_or_remove_items' => __('Add or remove items', 'text_domain'),
        'choose_from_most_used' => __('Choose from the most used items', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('zonas', array('vias'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy1', 0);
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

//FIM - Adiciona Thumbnails junto ao post 
//
//
//
//
// THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
add_image_size('thumb-foto-parque', 247, 267, true);
add_image_size('thumb-header', 718, 260, true);
// FIM THUMBNAILS
//
//
//
//
//Adds shortcode for generating submenus in pages with children / Adiciona shortcode para gerar menus em páginas com subpáginas
// just add [submenu] in the page you want it to appear / Apenas adicione [submenu] na página em que o submenu deve aparecer
add_shortcode('submenu', 'gera_submenu');

function gera_submenu($atts) {
    global $post;
    $titulo = ($atts[titulo]) ? ($atts[titulo]) : 'Veja mais:';
    $lista_subpaginas = wp_list_pages('title_li=' . $titulo . '&child_of=' . $post->ID . '&echo=0');
    if ($lista_subpaginas) {
        $lista_subpaginas = '<ul class="submenu">' . $lista_subpaginas;
        $lista_subpaginas.='</ul>';
        return $lista_subpaginas;
    }
}




//
//
//
//
//
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