<?php

// Sidebar Programador
include 'inc_programador.php';
//
$topoleiamais = '<ul class="leiaMaisMobileUl"><li class="leiaMaisMobileUl_saibamais"><p>Saiba mais:</p></li>';
$topoleiamais2 = '</ul>';
if (is_search()) {
    
} elseif (is_single(array($bv_historia, $bv_apa, $bv_fauna, $bv_mapa, $bv_pat, $bv_dicas, $bv_seguranca, $bv_destaques)) || get_post_type() == 'post') {
    //
    // Query pega a noticia mais recente para o link "destaques"
    //
    global $linkultimopost;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1
    );
    global $destaquequery;
    $destaquequery = new WP_Query($args);
    while ($destaquequery->have_posts()) : $destaquequery->the_post();
        $linkultimopost = get_permalink();
    endwhile;
    wp_reset_query();
    // fim query
    echo $topoleiamais;
    echo '<li><a href="' . get_permalink($bv_historia) . $code_pt . '">' . $bullet . $bv_historia_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_apa) . $code_pt . '">' . $bullet . $bv_apa_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_fauna) . $code_pt . '">' . $bullet . $bv_fauna_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_mapa) . $code_pt . '">' . $bullet . $bv_mapa_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_pat) . $code_pt . '">' . $bullet . $bv_pat_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_dicas) . $code_pt . '">' . $bullet . $bv_dicas_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($bv_seguranca) . $code_pt . '">' . $bullet . $bv_seguranca_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($linkultimopost) . $code_pt . '">' . $bullet . $bv_destaques_txtLink . '</a></li>';
    echo $topoleiamais2;
} elseif (is_single(array($rt_mata, $rt_historia, $rt_religioso, $rt_cicloturismo, $rt_nautico))) {
    echo $topoleiamais;
    echo '<li><a href="' . get_permalink($rt_mata) . $code_pt . '">' . $bullet . $rt_mata_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($rt_historia) . $code_pt . '">' . $bullet . $rt_historia_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($rt_religioso) . $code_pt . '">' . $bullet . $rt_religioso_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($rt_cicloturismo) . $code_pt . '">' . $bullet . $rt_cicloturismo_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($rt_nautico) . $code_pt . '">' . $bullet . $rt_nautico_txtLink . '</a></li>';
    echo $topoleiamais2;
} elseif (is_single(array($of_camping, $of_alojamento, $of_pousadas))) {
    echo $topoleiamais;
    echo '<li><a href="' . get_permalink($of_camping) . $code_pt . '">' . $bullet . $of_camping_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($of_alojamento) . $code_pt . '">' . $bullet . $of_alojamento_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($of_pousadas) . $code_pt . '">' . $bullet . $of_pousadas_txtLink . '</a></li>';
    echo $topoleiamais2;
} elseif (is_single(array($oc_comidaderua, $oc_mercado, $oc_buteco, $oc_pesqueiros, $oc_restaurantes, $oc_caipira, $oc_cafes))) {
    echo $topoleiamais;
    //COMIDA DE RUA echo '<li><a href="' . get_permalink($oc_comidaderua) . $code_pt . '">' . $bullet . $oc_comidaderua_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_mercado) . $code_pt . '">' . $bullet . $oc_mercado_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_buteco) . $code_pt . '">' . $bullet . $oc_buteco_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_pesqueiros) . $code_pt . '">' . $bullet . $oc_pesqueiros_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_restaurantes) . $code_pt . '">' . $bullet . $oc_restaurantes_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_caipira) . $code_pt . '">' . $bullet . $oc_caipira_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($oc_cafes) . $code_pt . '">' . $bullet . $oc_cafes_txtLink . '</a></li>';
    echo $topoleiamais2;
} elseif (is_single(array($ch_onibus, $ch_carro, $ch_trem, $ch_bicicleta, $ch_agencias, $ch_guias))) {
    echo $topoleiamais;
    echo '<li><a href="' . get_permalink($ch_onibus) . $code_pt . '">' . $bullet . $ch_onibus_txtLink . '</a><li>';
    echo '<li><a href="' . get_permalink($ch_carro) . $code_pt . '">' . $bullet . $ch_carro_txtLink . '</a><li>';
    echo '<li><a href="' . get_permalink($ch_trem) . $code_pt . '">' . $bullet . $ch_trem_txtLink . '</a><li>';
    echo '<li><a href="' . get_permalink($ch_bicicleta) . $code_pt . '">' . $bullet . $ch_bicicleta_txtLink . '</a><li>';
    echo '<li><a href="' . get_permalink($ch_agencias) . $code_pt . '">' . $bullet . $ch_agencias_txtLink . '</a><li>';
    echo '<li><a href="' . get_permalink($ch_guias) . $code_pt . '">' . $bullet . $ch_guias_txtLink . '</a><li>';
    echo $topoleiamais2;
} elseif (is_single(array($cr_produtos, $cr_artesanato, $cr_responsabilidade, $cr_roofing, $cr_produtores))) {
    echo $topoleiamais;
    echo '<li><a href="' . get_permalink($cr_produtos) . $code_pt . '">' . $bullet . $cr_produtos_txtLink . '</a></li>';
    //ARTESANATO echo '<li><a href="' . get_permalink($cr_artesanato) . $code_pt . '">' . $bullet . $cr_artesanato_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($cr_responsabilidade) . $code_pt . '">' . $bullet . $cr_responsabilidade_txtLink . '</a></li>';
    // ROOFING echo '<li><a href="' . get_permalink($cr_roofing) . $code_pt . '">' . $bullet . $cr_roofing_txtLink . '</a></li>';
    echo '<li><a href="' . get_permalink($cr_produtores) . $code_pt . '">' . $bullet . $cr_produtores_txtLink . '</a></li>';
    echo $topoleiamais2;
} else {
    
}
?>