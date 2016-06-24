<?php

//
//
//---------- ADICIONA SCRIPTS
//function wp_scripts2() {
//    wp_register_script('netflix', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1.js');
//    wp_enqueue_script('netflix');
//}
//add_action('wp_enqueue_scripts', 'wp_scripts2');

//
//
//
//----------- ADICIONA STYLE

function wp_styles2() {
    // Registra o css no tema:
    wp_register_style('style', get_template_directory_uri() . '/style.css');

    //Chama o css:  
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'wp_styles2');

//
//
//
//------------- ADICIONA JQUERY
//function wp_jquery2() {
//    wp_enqueue_script(
//            'custom_jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array('jquery')
//    );
//    wp_enqueue_script('custom_jquery');
//}
//
//add_action('wp_enqueue_scripts', 'wp_jquery');
//
//
// -------------------- Custom Post - Dialetos da Cidade
function dialetos() {
    $labels = array(
        'name' => _x('Dialetos da Cidade'),
        'singular_name' => _x('dialeto'),
        'add_new' => _x('Adicionar novo dialeto', 'dialeto'),
        'add_new_item' => __('Adicionar novo dialeto'),
        'edit_item' => __('Editar dialeto'),
        'new_item' => __('Novo dialeto'),
        'all_items' => __('Todos os dialetos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum dialeto encontrado'),
        'not_found_in_trash' => __('Nenhum dialeto encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Dialetos da Cidade'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Dialetos da Cidade, por regioes',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('dialetos', $args);
}

add_action('init', 'dialetos');

//
//
// -------------------- Custom Post - Gastronomia
function gastronomia() {
    $labels = array(
        'name' => _x('Gastronomia'),
        'singular_name' => _x('gastronomia'),
        'add_new' => _x('Adicionar nova', 'gastronomia'),
        'add_new_item' => __('Adicionar nova'),
        'edit_item' => __('Editar'),
        'new_item' => __('Nova'),
        'all_items' => __('Todas'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhuma gastronomia encontrada'),
        'not_found_in_trash' => __('Nenhuma gastronomia encontrada na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Gastronomia'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Gastronomia',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'taxonomies' => array('alfabeto'),
    );
    register_post_type('gastronomia', $args);
}

add_action('init', 'gastronomia');

//
// Taxonomias - criando taxonomias 
//
function add_custom_taxonomies() {
    register_taxonomy('alfabeto', array('post'), array(
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'labels' => array(
            'name' => _x('Alfabeto'),
            'singular_name' => _x('letra'),
            'search_items' => __('Procurar letras'),
            'all_items' => __('Todas as letras'),
            'parent_item' => __('Letra pai'),
            'parent_item_colon' => __('Letra pai:'),
            'edit_item' => __('Editar letra'),
            'update_item' => __('Atualizar letra'),
            'add_new_item' => __('Adicionar nova letra'),
            'new_item_name' => __('Nova letra'),
            'menu_name' => __('Alfabeto'),
            'show_ui' => true,
            'show_admin_column' => true,
        ),
        'rewrite' => array(
            'slug' => 'alfabeto',
            'hierarchical' => true
        ),
    ));
}

add_action('init', 'add_custom_taxonomies', 0);


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
// -------------------- Custom Post - Dialetos da Cidade
function destaques() {
    $labels = array(
        'name' => _x('Destaques'),
        'singular_name' => _x('destaques'),
        'add_new' => _x('Adicionar novo', 'dialeto'),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo'),
        'all_items' => __('Todos'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' => __('Nenhum encontrado'),
        'not_found_in_trash' => __('Nenhum encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Destaques'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Destaques',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('destaques', $args);
}

add_action('init', 'destaques');

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





















//Remove itens do menu do administrador
function remove_menus() {
    global $menu;
    $restricted = array(
//__('Dashboard'),
//        __('Posts'),
        __('Media'),
        __('Links'),
            //__('Pages'),
//__('Appearance'),
//__('Tools'),
//__('Users'),
//__('Settings'),
//__('Plugins'),
//        __('Comments')
    );
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('admin_menu', 'remove_menus');

//
//-------------------- COMENTÁRIOS
//redireciona para uma pagina "obrigado" após comentar
add_filter('comment_post_redirect', 'redirect_after_comment');

function redirect_after_comment() {
    wp_redirect('/?page_id=102/');
    exit();
}
//redireciona para uma pagina "obrigado" após comentar
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
