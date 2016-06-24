<?php 
//
//
// Custom Post - SLIDER NA HOME
//
//
function slider() {
$labels = array(
'name' => _x('Slider'),
 'singular_name' => _x('slide'),
 'add_new' => _x('Adicionar novo', 'slide'),
 'add_new_item' => __('Adicionar novo slide'),
 'edit_item' => __('Editar slide'),
 'new_item' => __('Novo slide'),
 'all_items' => __('Todos os slides'),
 'view_item' => __('Ver slide'),
 'search_items' => __('Procurar slide'),
 'not_found' => __('Nenhum slide encontrado'),
 'not_found_in_trash' => __('Nenhum slide encontrado na lixeira'),
 'parent_item_colon' => '',
 'menu_name' => 'Slider na Home'
);
$args = array(
'labels' => $labels,
 'description' => 'Slider na Home',
 'public' => true,
 'menu_position' => 4,
 'supports' => array('title', 'thumbnail', 'excerpt'),
 'has_archive' => true,
);
register_post_type('slider', $args);
}

add_action('init', 'slider');
//
// FIM Custom Post - SLIDER NA HOME
//
//
//
// Custom Post - ROTEIROS
//
//
function roteiros() {
$labels = array(
'name' => _x('Roteiros'),
 'singular_name' => _x('roteiro'),
 'add_new' => _x('Adicionar novo', 'roteiro'),
 'add_new_item' => __('Adicionar novo roteiro'),
 'edit_item' => __('Editar roteiro'),
 'new_item' => __('Novo roteiro'),
 'all_items' => __('Todos os roteiros'),
 'view_item' => __('Ver roteiro'),
 'search_items' => __('Procurar roteiro'),
 'not_found' => __('Nenhum roteiro encontrado'),
 'not_found_in_trash' => __('Nenhum roteiro encontrado na lixeira'),
 'parent_item_colon' => '',
 'menu_name' => 'Roteiros'
);
$args = array(
'labels' => $labels,
 'description' => 'Roteiros',
 'public' => true,
 'menu_position' => 4,
 'supports' => array('title', 'thumbnail', 'editor'),
 'has_archive' => true,
);
register_post_type('roteiros', $args);
}

add_action('init', 'roteiros');
//
// FIM Custom Post - ROTEIROS
//
//
//
// Custom Post - ROTEIROS ESPECIAIS
//
//
function roteirosesp() {
$labels = array(
'name' => _x('Roteiros Especiais'),
 'singular_name' => _x('roteiro especial'),
 'add_new' => _x('Adicionar novo', 'roteiro'),
 'add_new_item' => __('Adicionar novo roteiro'),
 'edit_item' => __('Editar roteiro'),
 'new_item' => __('Novo roteiro'),
 'all_items' => __('Todos os roteiros'),
 'view_item' => __('Ver roteiro'),
 'search_items' => __('Procurar roteiro'),
 'not_found' => __('Nenhum roteiro encontrado'),
 'not_found_in_trash' => __('Nenhum roteiro encontrado na lixeira'),
 'parent_item_colon' => '',
 'menu_name' => 'Roteiros Especiais'
);
$args = array(
'labels' => $labels,
 'description' => 'Roteiros Especiais',
 'public' => true,
 'menu_position' => 4,
 'supports' => array('title', 'editor'),
 'has_archive' => true,
);
register_post_type('roteirosesp', $args);
}

add_action('init', 'roteirosesp');
//
// FIM Custom Post - ROTEIROS ESPECIAIS
// 
// 
// 
//SIDEBAR - TRADUวรO
register_sidebar(array(
    'name' => 'Traducao',
    'id' => 'traducao',
    'description' => 'Espaco destinado ao plugin de traducao'
));
//
//
// Thumbnails
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
}
add_image_size('thumb-slider', 693, 219, true);
add_image_size('thumb-roteiros', 190, 140, true);
// Thumbnails
//
//
//
//Remove itens do menu do administrador
function remove_menus() {
global $menu;
$restricted = array(
//__('Dashboard'),
__('Posts'),
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
//Remove itens do menu do administrador
//
//
//
?>