<?php

$post = $wp_query->post;
if (is_page('15')) {
    include(TEMPLATEPATH . '/page-dialetos.php');
} elseif (is_page('13')) {
    include(TEMPLATEPATH . '/page-gastronomia.php');
} elseif (is_page('17')) {
    include(TEMPLATEPATH . '/page-prefacio.php');
} elseif (is_page('108')) {
    include(TEMPLATEPATH . '/page-contribua.php');
} elseif (is_page('110')) {
    include(TEMPLATEPATH . '/404.php');
} else {
    include(TEMPLATEPATH . '/page-padrao.php');
}
?>