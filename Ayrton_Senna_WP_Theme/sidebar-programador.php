<?php

//-------------------------------- ESPAÇOS
//ÁREAS COBERTAS
$salaoS = 126;
$espaco_vitoria = 130;
$salao_nobre = 38;
$salao_panoramico = 131;
$tribuna = 132;
$area_boxes = 133;
$torre = 134;
$sala_imprensa = 135;
$centro_medico = 136;
//
//ÁREAS ABERTAS
//
$arena_inter = 137;
$espaco_mecanica = 138;
$arquibancadas = 139;
$arqui_A = 155;
$arqui_B = 156;
$arqui_C = 157;
$arqui_M = 158;
$curva_do_lago = 140;
//
//SEMI-COBERTAS
//
$hc_ferradura = 141;
$hc_laranjinha = 142;
$terraço_do_sol = 143;
$hc_heliponto = 144;
//
//PISTAS
//
$pista_aux = 145;
$retao = 159;
$ferradura = 160;
$completa = 161;
$pista_inter = 146;
//
$estacionamentos = 147;
$portao7 = 162;
$arena = 163;
$mecanica = 164;
//-------------------------------- PÁGINAS
$agenda = 68;
$contato = 71;
$home_espacos = 107;
$como_chegar = 75;
$home_noticias = 79;
$dicas = 308;
$conheca = 2;
$historia = 321;
$circuito = 323;
$kartodromo = 325;
$parque = 574;
$galeria_home = 640;
$newsletter = 806;
$todas_noticias = 876;
$linha_do_tempo = 973;
$achados_e_perdidos = 1686;
//-------------------------------- POST TYPES
$post_type = get_post_type($post);
if ($post == 'post') {
    $post_type = $noticias;
} elseif ($post == 'espacos') {
    $post_type = $espacos;
} elseif ($post == 'eventos') {
    $post_type = $eventos;
} elseif ($post == 'countdown') {
    $post_type = $contagem;
} elseif ($post == 'galeria') {
    $post_type = $galerias;
}
//------------------------------- SUBMENU
//--------- Determinado o tipo de menu
//Arquibancadas
if (is_single(array($arquibancadas, $arqui_A, $arqui_B, $arqui_C, $arqui_M))) {
    $tipo = 1;
//Pistas
} elseif (is_single(array($pista_aux, $retao, $ferradura, $completa))) {
    $tipo = 2;
//Estacionamentos
} elseif (is_single(array($estacionamentos, $portao7, $arena, $mecanica))) {
    $tipo = 3;
//Conheça Interlagos 
} elseif (is_page(array($parque, $circuito, $historia, $kartodromo, $galeria_home))) {
    $tipo = 4;
} else {
    
}
//---------------------- TERMS & CATEGORIAS
//
//----- puxa o term da custom taxonomy da single de eventos
$terms = wp_get_object_terms($post->ID, 'categorias');
if (!empty($terms)) :
    $termEvento = array();
    foreach ($terms as $term) {
        $termEvento = $term->name;
    }
endif;
//
//----- puxa o term da custom taxonomy da single de espaços
$terms = wp_get_object_terms($post->ID, 'grupos');
if (!empty($terms)) :
    $termEspaco = array();
    foreach ($terms as $term) {
        $termEspaco = $term->name;
    }
endif;
//
//
//

?>