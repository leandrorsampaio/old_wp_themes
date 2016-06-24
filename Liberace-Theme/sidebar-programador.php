<?php
//
//testa a página atual e identifica o tipo de post para a query e o css específico para ela.
//também determina a quantidade de posts a serem carregados na query (necessário para o TOP 10).
//
if (is_page (array('cultura', 'culture'))) {
    $tipo_post = 'cultura';
    $classeCSS = 'A1-cultura';
    $idCSS = 'fittext-A1';
    $numberPosts = -1;
} elseif (is_page(array('compras', 'shopping'))) {
    $tipo_post = 'compras';
    $classeCSS = 'A2-compras';
    $idCSS = 'fittext-A2';
    $numberPosts = -1;
} elseif (is_page(array('gastronomia', 'gastronomy'))) {
    $tipo_post = 'gastronomia';
    $classeCSS = 'A3-gastronomia';
    $idCSS = 'fittext-A3';
    $numberPosts = -1;
} elseif (is_page(array('noite', 'night'))) {
    $tipo_post = 'noite';
    $classeCSS = 'A4-noite';
    $idCSS = 'fittext-A4';
    $numberPosts = -1;
} elseif (is_page(array('eventos', 'events'))) {
    $tipo_post = 'eventos';
    $classeCSS = 'B1-eventos';
    $idCSS = 'fittext-B1';
    $numberPosts = -1;
} elseif (is_page(array('top-10', 'top-10-en'))) {
    $tipo_post = 'topdez';
    $classeCSS = 'B2-top10';
    $idCSS = 'fittext-B2';
    $numberPosts = 10;
} elseif (is_page(array('diversao', 'joy-fun'))) {
    $tipo_post = 'diversao';
    $classeCSS = 'B3-diversao';
    $idCSS = 'fittext-B3';
    $numberPosts = -1;
} elseif (is_page(array('roteiro-de-uma-semana', 'one-week-in-sao-paulo'))) {
    $tipo_post = 'roteiro';
    $classeCSS = 'C1-roteiro';
    $idCSS = 'fittext-C1';
    $numberPosts = -1;
} elseif (is_page(array('facebook-twitter', 'facebook-twitter-en'))) {
    $classeCSS = 'B4-social';
    $idCSS = 'fittext-B4';
} else {
    
}


//
// Taxonomias (idioma)
//
$terms = wp_get_object_terms($post->ID, 'idioma');
if (!empty($terms)) :
    $tipo = array();
    foreach ($terms as $term) {
        $tipo = $term->slug;
    }
endif;
if ($tipo == en) {
    $idioma = en;
} else {
    $idioma = pt;
}
?>