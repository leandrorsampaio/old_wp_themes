<?php

//
//
//
//
//
function pqsp() {
    $labels = array(
        'name' => _x('Por que S&atilde;o Paulo?'),
        'singular_name' => _x('pqsp'),
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
        'menu_name' => 'Por que S&atilde;o Paulo?'
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
    register_post_type('pqsp', $args);
}

add_action('init', 'pqsp');

//
//
//
//
//
function historia() {
    $labels = array(
        'name' => _x('Hist&oacute;ria'),
        'singular_name' => _x('historia'),
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
        'menu_name' => 'Hist&oacute;ria'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('historia', $args);
}

add_action('init', 'historia');

//
//
//
//
//
function linhatempo() {
    $labels = array(
        'name' => _x('Linha do Tempo'),
        'singular_name' => _x('linhatempo'),
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
        'menu_name' => 'Linha do Tempo'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('linhatempo', $args);
}

add_action('init', 'linhatempo');

//
//
//
//
//
function planeje() {
    $labels = array(
        'name' => _x('Planeje sua viagem'),
        'singular_name' => _x('planeje'),
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
        'menu_name' => 'Planeje sua viagem'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'description' => '',
        'public' => true,
        'menu_position' => 10,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('planeje', $args);
}

add_action('init', 'planeje');

//
//
//
//
//

function agencias() {
    $labels = array(
        'name' => _x('Ag&ecirc;ncias'),
        'singular_name' => _x('agencias'),
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
        'menu_name' => 'Ag&ecirc;ncias'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 10,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('agencias', $args);
}

add_action('init', 'agencias');

//
//
//
//
//

function hoteis() {
    $labels = array(
        'name' => _x('Hot&eacute;is'),
        'singular_name' => _x('hoteis'),
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
        'menu_name' => 'Hot&eacute;is'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 10,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('hoteis', $args);
}

add_action('init', 'hoteis');

//
//
//
//
//

function vivasp() {
    $labels = array(
        'name' => _x('Viva S&atilde;o Paulo'),
        'singular_name' => _x('vivasp'),
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
        'menu_name' => 'Viva S&atilde;o Paulo'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('vivasp', $args);
}

add_action('init', 'vivasp');

//
//
//
//
//
function compras() {
    $labels = array(
        'name' => _x('Compras'),
        'singular_name' => _x('compras'),
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
        'menu_name' => 'Compras'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('compras', $args);
}

add_action('init', 'compras');

//
//
//
//
//
function roteirosape() {
    $labels = array(
        'name' => _x('Roteiros a p&eacute;'),
        'singular_name' => _x('roteirosape'),
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
        'menu_name' => 'Roteiros a p&eacute;'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('roteirosape', $args);
}

add_action('init', 'roteirosape');

//
//
//
//
//
function roteirosporperiodo() {
    $labels = array(
        'name' => _x('Roteiros por per&iacute;odo'),
        'singular_name' => _x('roteirosporperiodo'),
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
        'menu_name' => 'Roteiros por per&iacute;odo'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('roteirosporperiodo', $args);
}

add_action('init', 'roteirosporperiodo');

//
//
//
//
//
function roteirosportema() {
    $labels = array(
        'name' => _x('Roteiros por tema'),
        'singular_name' => _x('roteirosportema'),
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
        'menu_name' => 'Roteiros por tema'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('roteirosportema', $args);
}

add_action('init', 'roteirosportema');

//
//
//
//
//
function roteirosporregiao() {
    $labels = array(
        'name' => _x('Roteiros por regi&atilde;o'),
        'singular_name' => _x('roteirosporregiao'),
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
        'menu_name' => 'Roteiros por regi&atilde;o'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('roteirosporregiao', $args);
}

add_action('init', 'roteirosporregiao');

//
//
//
//
//
function atrativos() {
    $labels = array(
        'name' => _x('Atrativos'),
        'singular_name' => _x('atrativos'),
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
        'menu_name' => 'Atrativos'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('atrativos', $args);
}

add_action('init', 'atrativos');

//
//
//
//
//
/*
  function roteirosguiados() {
  $labels = array(
  'name' => _x('Roteiros guiados'),
  'singular_name' => _x('roteirosguiados'),
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
  'menu_name' => 'Roteiros guiados'
  );
  $args = array(
  'labels' => $labels,
  'description' => '',
  'public' => true,
  'menu_position' => 15,
  'supports' => array('title', 'revisions'),
  'has_archive' => true,
  );
  register_post_type('roteirosguiados', $args);
  }

  add_action('init', 'roteirosguiados');
 */
//
//
//
//
//

function acontece() {
    $labels = array(
        'name' => _x('Acontece'),
        'singular_name' => _x('acontece'),
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
        'menu_name' => 'Acontece'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'description' => '',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('acontece', $args);
}

add_action('init', 'acontece');

//
//
//
//
//
//
//
//
function agenda() {
    $labels = array(
        'name' => _x('Agenda'),
        'singular_name' => _x('agenda'),
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
        'menu_name' => 'Agenda'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('agenda', $args);
}

add_action('init', 'agenda');

//
//
//
//
//
//
//

function novidades() {
    $labels = array(
        'name' => _x('Novidades'),
        'singular_name' => _x('novidades'),
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
        'menu_name' => 'Novidades'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('novidades', $args);
}

add_action('init', 'novidades');

//
//
//
//
//
//




function dicas() {
    $labels = array(
        'name' => _x('Dicas de quem vive em SP'),
        'singular_name' => _x('dicas'),
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
        'menu_name' => 'Dicas de quem vive em SP'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('dicas', $args);
}

add_action('init', 'dicas');

//
//
//
//
//
//////// FUNCTION EVENTOS?????
//
//
//
//
//
function institucional() {
    $labels = array(
        'name' => _x('Institucional'),
        'singular_name' => _x('institucional'),
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
        'menu_name' => 'Institucional'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'description' => '',
        'public' => true,
        'menu_position' => 25,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('institucional', $args);
}

add_action('init', 'institucional');

//
//
//
//
//
function parceiros() {
    $labels = array(
        'name' => _x('Parceiros'),
        'singular_name' => _x('parceiros'),
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
        'menu_name' => 'Parceiros'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 25,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('parceiros', $args);
}

add_action('init', 'parceiros');

//
//
//
//
//
function downloadscsp() {
    $labels = array(
        'name' => _x('Downloads'),
        'singular_name' => _x('downloadscsp'),
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
        'menu_name' => 'Downloads'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 25,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('downloadscsp', $args);
}

add_action('init', 'downloadscsp');

//
//
//
//
//
function sliderhome() {
    $labels = array(
        'name' => _x('Slider Home'),
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
        'menu_name' => 'Slider Home'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-images-alt',
        'description' => '',
        'public' => true,
        'menu_position' => 30,
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
function destaqueshome() {
    $labels = array(
        'name' => _x('Destaques Home'),
        'singular_name' => _x('destaqueshome'),
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
        'menu_name' => 'Destaques Home'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-flag',
        'description' => '',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('destaqueshome', $args);
}

add_action('init', 'destaqueshome');

//
//
//
//
//
//
//
//
//
function testesab() {
    $labels = array(
        'name' => _x('Testes AB'),
        'singular_name' => _x('testesab'),
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
        'menu_name' => 'Testes AB'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'menu_icon' => 'dashicons-image-flip-horizontal',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('testesab', $args);
}

add_action('init', 'testesab');

//
//
//
//
//
//
//
//
//
function newsletters() {
    $labels = array(
        'name' => _x('Newsletters'),
        'singular_name' => _x('newsletters'),
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
        'menu_name' => 'Newsletters'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'menu_icon' => 'dashicons-email-alt',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('newsletters', $args);
}

add_action('init', 'newsletters');

//
//
//
//
//
//
//
//
//
function citacoes() {
    $labels = array(
        'name' => _x('Cita&ccedil;&otilde;es'),
        'singular_name' => _x('citacoes'),
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
        'menu_name' => 'Cita&ccedil;&otilde;es'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'menu_icon' => 'dashicons-format-quote',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    register_post_type('citacoes', $args);
}

add_action('init', 'citacoes');

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
/*
  function custom_taxonomy_downloadslang() {

  $labels = array(
  'name' => _x('Linguagem dos Downloads', 'Taxonomy General Name', 'text_domain'),
  'singular_name' => _x('Linguagem do Download', 'Taxonomy Singular Name', 'text_domain'),
  'menu_name' => __('Linguagem do Download', 'text_domain'),
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
  register_taxonomy('downloadslang', array('downloadscsp'), $args);
  }

  // Hook into the 'init' action
  add_action('init', 'custom_taxonomy_downloadslang', 0);
 */

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
function custom_taxonomy_novidadescat() {

    $labels = array(
        'name' => _x('Categorias de Novidades', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('novidadescat', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Categorias de Novidades', 'text_domain'),
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
    register_taxonomy('novidadescat', array('novidades'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_novidadescat', 0);

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
function custom_taxonomy_hoteltipo() {

    $labels = array(
        'name' => _x('Tipo do Hotel', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('hoteltipo', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Tipo do Hotel', 'text_domain'),
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
    register_taxonomy('hoteltipo', array('hoteis'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_hoteltipo', 0);

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
function custom_taxonomy_roteirosagencias() {

    $labels = array(
        'name' => _x('Tipos de Roteiros', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('roteirosagencias', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Tipos de Roteiros', 'text_domain'),
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
    register_taxonomy('roteirosagencias', array('agencias'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_roteirosagencias', 0);

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
function custom_taxonomy_roteiroscategorias() {

    $labels = array(
        'name' => _x('Categoria Relacional', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('roteiroscategorias', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Categoria Relacional', 'text_domain'),
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
    register_taxonomy('roteiroscategorias', array('roteirosporperiodo', 'roteirosportema', 'roteirosporregiao', 'roteirosape'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_roteiroscategorias', 0);

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
function custom_taxonomy_dicasprofissao() {

    $labels = array(
        'name' => _x('Profissao do Sujeito', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('dicasprofissa', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Profissao', 'text_domain'),
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
    register_taxonomy('dicasprofissa', array('dicas'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_dicasprofissao', 0);

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
function custom_taxonomy_dicasalfabeto() {

    $labels = array(
        'name' => _x('Ordem Alfabetica', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('dicasalfabeto', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Ordem Alfabetica', 'text_domain'),
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
    register_taxonomy('dicasalfabeto', array('dicas'), $args);
}

// Hook into the 'init' action
add_action('init', 'custom_taxonomy_dicasalfabeto', 0);

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

    //remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page('edit.php');                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page('edit.php?post_type=page');    //Pages
    remove_menu_page('edit-comments.php');          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
}

add_action('admin_menu', 'remove_menus');

//
//
//
//
//
// ORGANIZA A ORDEM DOS MENUS
function custom_menu_order($menu_ord) {
    if (!$menu_ord)
        return true;

    return array(
        'index.php', // Dashboard
        //'separator1', // Separator
        'edit.php?post_type=pqsp',
        'edit.php?post_type=historia',
        'edit.php?post_type=linhatempo',
        //'separator2', // Separator
        'edit.php?post_type=planeje',
        'edit.php?post_type=agencias',
        'edit.php?post_type=hoteis',
        //'separator3', // Separator
        'edit.php?post_type=vivasp',
        'edit.php?post_type=compras',
        'edit.php?post_type=roteirosape',
        'edit.php?post_type=roteirosporperiodo',
        'edit.php?post_type=roteirosportema',
        'edit.php?post_type=roteirosporregiao',
        //'edit.php?post_type=roteirosguiados',
        'edit.php?post_type=atrativos',
        //'separator4', // Separator
        'edit.php?post_type=acontece',
        'edit.php?post_type=novidades',
        'edit.php?post_type=agenda',
        //'edit.php', // Posts
        'edit.php?post_type=dicas',
        //'separator5', // Separator
        'edit.php?post_type=institucional',
        'edit.php?post_type=parceiros',
        'edit.php?post_type=downloadscsp',
        //'separator6', // Separator
        'edit.php?post_type=sliderhome',
        'edit.php?post_type=destaqueshome',
        'edit.php?post_type=testesab',
        'edit.php?post_type=newsletters',
        'edit.php?post_type=citacoes',
        //'separator7', // Separator
        'upload.php', // Media
        'plugins.php',
        'users.php',
        'themes.php',
        'tools.php',
        'options-general.php',
        //'separator8', // Separator
        'edit.php?post_type=acf',
        'edit.php?post_type=acf',
        'wpseo_dashboard',
        'admin.php?page=wsal-auditlog'
    );
}

add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');
//
//
//
//
//
// ALTERANDO CSS DO MENU
add_action('admin_head', 'my_css_function');

function my_css_function() {
    echo '<style>
            .wp-has-submenu {
                margin: 2px 0 2px 0;
            }
            div.wp-menu-image:before {
                color: #fff !important;
            }
            #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
                background-color: inherit !important;
            }
            

            .wp-has-submenu:nth-child(2) {
                background-color: #133F6B !important;
            }
            .wp-has-submenu:nth-child(3) {
                background-color: #133F6B !important;
            }
            .wp-has-submenu:nth-child(4) {
                background-color: #133F6B !important;
            }
            

            .wp-has-submenu:nth-child(5) {
                background-color: #F79D1F !important;
            }
            .wp-has-submenu:nth-child(6) {
                background-color: #F79D1F !important;
            }
            .wp-has-submenu:nth-child(7) {
                background-color: #F79D1F !important;
            }
            
            
            .wp-has-submenu:nth-child(8) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(9) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(10) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(11) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(12) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(13) {
                background-color: #C21F3D !important;
            }
            .wp-has-submenu:nth-child(14) {
                background-color: #C21F3D !important;
            }            

            
            .wp-has-submenu:nth-child(15) {
                background-color: #5BA344 !important;
            }
            .wp-has-submenu:nth-child(16) {
                background-color: #5BA344 !important;
            }
            .wp-has-submenu:nth-child(17) {
                background-color: #5BA344 !important;
            }


            .wp-has-submenu:nth-child(18) {
                background-color: #5BA344 !important;
            }
            .wp-has-submenu:nth-child(19) {
                background-color: #1675A5 !important;
            }
            .wp-has-submenu:nth-child(20) {
                background-color: #1675A5 !important;
            }
            .wp-has-submenu:nth-child(21) {
                background-color: #1675A5 !important;
            }
            


</style>';
}

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
?>