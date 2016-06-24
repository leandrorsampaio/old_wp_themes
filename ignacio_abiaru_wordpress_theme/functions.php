<?php

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
function roteiros() {
    $labels = array(
        'name' => _x('roteiros'),
        'singular_name' => _x('roteiros'),
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
        'supports' => array('title', 'revisions'),
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
//
//
//
function bemvindo() {
    $labels = array(
        'name' => _x('bemvindo'),
        'singular_name' => _x('bemvindo'),
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
        'menu_name' => 'Bem-vindo'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Bem-vindo Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('bemvindo', $args);
}

add_action('init', 'bemvindo');

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
function atracoes() {
    $labels = array(
        'name' => _x('atracoes'),
        'singular_name' => _x('atracoes'),
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
        'menu_name' => 'Atracoes'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Atracoes Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('atracoes', $args);
}

add_action('init', 'atracoes');

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
function ondeficar() {
    $labels = array(
        'name' => _x('Onde Ficar'),
        'singular_name' => _x('ondeficar'),
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
        'menu_name' => 'Onde Ficar'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Onde Ficar Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('ondeficar', $args);
}

add_action('init', 'ondeficar');

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
function ondecomer() {
    $labels = array(
        'name' => _x('onde Comer'),
        'singular_name' => _x('ondecomer'),
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
        'menu_name' => 'Onde Comer'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Onde Comer Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('ondecomer', $args);
}

add_action('init', 'ondecomer');

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
function comochegar() {
    $labels = array(
        'name' => _x('Como Chegar'),
        'singular_name' => _x('comochegar'),
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
        'menu_name' => 'Como Chegar'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Como Chegar Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('comochegar', $args);
}

add_action('init', 'comochegar');

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
function consumoresponsavel() {
    $labels = array(
        'name' => _x('Sustentabilidade'),
        'singular_name' => _x('consumoresponsavel'),
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
        'menu_name' => 'Sustentabilidade'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Sustentabilidade Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('consumoresponsavel', $args);
}

add_action('init', 'consumoresponsavel');

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
function seueventoaqui() {
    $labels = array(
        'name' => _x('Seu Evento Aqui'),
        'singular_name' => _x('seueventoaqui'),
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
        'menu_name' => 'Seu Evento Aqui'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Seu Evento Aqui Ecoturismo',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('seueventoaqui', $args);
}

add_action('init', 'seueventoaqui');

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
//
//
//
function sliderhome() {
    $labels = array(
        'name' => _x('Slide Home Imagem'),
        'singular_name' => _x('sliderhome'),
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
        'menu_name' => 'Slide Home Imagem'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slide Home Imagem',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('sliderhome', $args);
}

add_action('init', 'sliderhome');

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
//
//
//
function sliderhometitle() {
    $labels = array(
        'name' => _x('Slide Home Texto'),
        'singular_name' => _x('sliderhometitle'),
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
        'menu_name' => 'Slide Home Texto'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Slide Home Texto',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('sliderhometitle', $args);
}

add_action('init', 'sliderhometitle');

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
//
//

function demaispaginas() {
    $labels = array(
        'name' => _x('Demais P&aacute;ginas'),
        'singular_name' => _x('demaispaginas'),
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
        'menu_name' => 'Demais P&aacute;ginas'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Demais P&aacute;ginas',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('demaispaginas', $args);
}

add_action('init', 'demaispaginas');

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
//
//
// Register Custom Taxonomy
function tax_atracoestipo() {

    $labels = array(
        'name' => _x('atracoestipo', 'Taxonomy General Name', 'atracoestipo'),
        'singular_name' => _x('atracoestipo', 'Taxonomy Singular Name', 'atracoestipo'),
        'menu_name' => __('Tipo', 'atracoestipo'),
        'all_items' => __('All Items', 'atracoestipo'),
        'parent_item' => __('Parent Item', 'atracoestipo'),
        'parent_item_colon' => __('Parent Item:', 'atracoestipo'),
        'new_item_name' => __('New Item Name', 'atracoestipo'),
        'add_new_item' => __('Add New Item', 'atracoestipo'),
        'edit_item' => __('Edit Item', 'atracoestipo'),
        'update_item' => __('Update Item', 'atracoestipo'),
        'separate_items_with_commas' => __('Separate items with commas', 'atracoestipo'),
        'search_items' => __('Search Items', 'atracoestipo'),
        'add_or_remove_items' => __('Add or remove items', 'atracoestipo'),
        'choose_from_most_used' => __('Choose from the most used items', 'atracoestipo'),
        'not_found' => __('Not Found', 'atracoestipo'),
    );
    $rewrite = array(
        'slug' => 'atracoestipo',
        'with_front' => true,
        'hierarchical' => false,
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => $rewrite,
    );
    register_taxonomy('atracoestipo', array('atracoes'), $args);
}

// Hook into the 'init' action
add_action('init', 'tax_atracoestipo', 0);

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
        echo "<div id=\"paginationCurrent\">P&aacute;gina " . $paged . " de " . $pages . "</div><div class=\"paginationSearch\">";  //mostra a pagina atual e a qtdade total de paginas
        if ($paged > 1 && $showitems < $pages)
            echo "<a class=\"fa fa-arrow-circle-left\" title=\"Primeira\" href='" . get_pagenum_link($pages == 1) . "'></a>"; //ir para a primeira pag
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<span class=\"current\">" . $i . "</span>" : "<a title=\"P&aacute;gina $i\" href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) //ir para a ultima pag
            echo "<a class=\"fa fa-arrow-circle-right\" title=\"&Uacute;ltima\" href=\"" . get_pagenum_link($pages) . "\"></a>";
        echo "</div>\n";
    }
}

// FIM - Criar paginação (usada no resultado da busca) 