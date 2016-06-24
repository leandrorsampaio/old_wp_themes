<?php 
//
//
// 
//
//
// Thumbnails
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 693, 219, true);
// Thumbnails
//
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
__('Pages'),
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
//
//
//
// Idioma
function create_idioma() {
    $labelscat1 = array(
        'name' => __('Idioma'),
        'singular_name' => __('Tipo'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais usados'),
        'all_items' => __('Todos'),
        'parent_item' => __('Categoria Mae'),
        'parent_item_colon' => __('Categoria Mae'),
        'edit_item' => __('Editar'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar'),
        'new_item_name' => __('idioma')
    );
    $args1 = array(
        'hierarchical' => true,
        'labels' => $labelscat1,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'idioma')
    );
    register_taxonomy('idioma', array('post'), $args1);
}

add_action('init', 'create_idioma');

?>