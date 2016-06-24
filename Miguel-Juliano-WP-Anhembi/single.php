<?php

$post = $wp_query->post;
if (is_single('509')) {
    include(TEMPLATEPATH . '/single_telecom.php');
} elseif (is_single(array(512, 513, 514, 515))) {
    include(TEMPLATEPATH . '/single_telecom_internas.php');
} elseif (is_single(array(4775, 516, 519, 520, 1001, 1177, 1929, 7317))) {
    include(TEMPLATEPATH . '/single_servicos.php');
} elseif (is_single('2610')) {
    include(TEMPLATEPATH . '/single_formulario-telecom.php');
} elseif (is_single('5712')) {
    include(TEMPLATEPATH . '/single_5712Teste.php');
} elseif (is_single(array(11339, 11377, 11379, 11381))) {
    include(TEMPLATEPATH . '/single_telecom2015.php');    
} else {
    include(TEMPLATEPATH . '/single_destaques.php');
}