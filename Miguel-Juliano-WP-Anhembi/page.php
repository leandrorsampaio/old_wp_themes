<?php

$post = $wp_query->post;
if (is_page('561')) {
    include(TEMPLATEPATH . '/page-agenda-de-eventos.php');
} elseif (is_page('1817')) {
    include(TEMPLATEPATH . '/page-servicos.php');
} elseif (is_page('1231')) {
    include(TEMPLATEPATH . '/page-clipping.php');
} elseif (is_page('152')) {
    include(TEMPLATEPATH . '/page-como-chegar.php');
} elseif (is_page(array('154', '7431', '11641'))) {
    include(TEMPLATEPATH . '/page-fale-conosco.php');
} elseif (is_page('1229')) {
    include(TEMPLATEPATH . '/page-inteligencia.php');
} elseif (is_page('1561')) {
    include(TEMPLATEPATH . '/page-institucional.php');
} elseif (is_page('148')) {
    include(TEMPLATEPATH . '/page-institucional.php');
} elseif (is_page('1224')) {
    include(TEMPLATEPATH . '/page-oportunidades.php');
} elseif (is_page('1699')) {
    include(TEMPLATEPATH . '/page-receba-novidades.php');
} elseif (is_page('1810')) {
    include(TEMPLATEPATH . '/page-servicos.php');
} elseif (is_page('1831')) {
    include(TEMPLATEPATH . '/page-seu-evento-aqui.php');
} elseif (is_page('1233')) {
    include(TEMPLATEPATH . '/page-social-hub.php');
} elseif (is_page('1227')) {
    include(TEMPLATEPATH . '/page-videos.php');
} elseif (is_page('2138')) {
    include(TEMPLATEPATH . '/page-noticias-geral.php');
} else {
    include(TEMPLATEPATH . '/page-institucional.php');
}
?>