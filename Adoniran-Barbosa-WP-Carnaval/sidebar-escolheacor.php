<?php
// Pega as cores
if ('escolas' == get_post_type()) {
    $cor1 = '#' . get_field("cor_1");
    $cor2 = '#' . get_field("cor_2");
    $cor3 = '#' . get_field("cor_3");
    $cor4 = '#' . get_field("cor_4");
} elseif (is_page('galerias-de-imagens')) {
    $cor1 = '#A6CE39'; //verde
    $cor2 = '#fff';
} elseif (is_page('noticias')) {
    $cor1 = '#ED1A3B'; //vermelho
    $cor2 = '#fff';
} elseif (/*noticias-carnaval-2013*/is_page(4241) || is_page(417) || is_page(6500)) {
    $cor1 = '#ED1A3B'; //vermelho
    $cor2 = '#fff';
} elseif (is_search()) {
    $cor1 = '#1d8bcb'; //azul
    $cor2 = '#fff';
} elseif (is_page()) {
    $cor1 = '#1d8bcb'; //azul
    $cor2 = '#fff';
} elseif (is_404()) {
    $cor1 = '#1d8bcb'; //azul
    $cor2 = '#fff';
} else {
    $cor1 = '#ed1a3b'; //vermelho
    $cor2 = '#fff';
}
?>