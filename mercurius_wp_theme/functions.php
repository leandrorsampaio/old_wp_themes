<?php

//
//
//
//
//
function cspturismo() {
    $labels = array(
        'name' => _x('Turismo em S&atilde;o Paulo'),
        'singular_name' => _x('cspturismo'),
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
        'menu_name' => 'Turismo em S&atilde;o Paulo'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('cspturismo', $args);
}

add_action('init', 'cspturismo');
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
function internacionalpress() {
    $labels = array(
        'name' => _x('Imprensa Internacional'),
        'singular_name' => _x('internacionalpress'),
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
        'menu_name' => 'Imprensa Internacional'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('internacionalpress', $args);
}

add_action('init', 'internacionalpress');
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
function spempauta() {
    $labels = array(
        'name' => _x('S&atilde;o Paulo em Pauta'),
        'singular_name' => _x('spempauta'),
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
        'menu_name' => 'S&atilde;o Paulo em Pauta'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('spempauta', $args);
}

add_action('init', 'spempauta');
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
function custom_taxonomy_lang() {

    $labels = array(
        'name' => _x('Linguagem', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('Linguagem', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Linguagem', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'new_item_name' => __('New Item Name', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items' => __('Add or remove items', 'text_domain'),
        'choose_from_most_used' => __('Choose from the most used', 'text_domain'),
        'popular_items' => __('Popular Items', 'text_domain'),
        'search_items' => __('Search Items', 'text_domain'),
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
    register_taxonomy('lang', array('cspturismo, spempauta'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_lang', 0);

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
function spturisevc() {
    $labels = array(
        'name' => _x('SPTuris e Voc&ecirc;'),
        'singular_name' => _x('spturisevc'),
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
        'menu_name' => 'SPTuris e Voc&ecirc;'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('spturisevc', $args);
}

add_action('init', 'spturisevc');
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
function interlagos() {
    $labels = array(
        'name' => _x('Aut&oacute;dromo de Interlagos'),
        'singular_name' => _x('interlagos'),
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
        'menu_name' => 'Aut&oacute;dromo de Interlagos'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('interlagos', $args);
}

add_action('init', 'interlagos');
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
// REMOVE ALUNS ITENS DO MENU
function remove_menus() {

    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page('edit.php');                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page('edit.php?post_type=page');    //Pages
    remove_menu_page('edit-comments.php');          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
    remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
}

add_action('admin_menu', 'remove_menus');

//
//
//
//
//
?>