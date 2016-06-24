<?php

// Sidebar Programador
include 'inc_programador.php';
// Complementacao design
$pontaAzulMenu = '<span class="selecionado_point"></span>';
$menuAtual = 'class="selecionado"';
$menuAtualFirst = 'class="selecionado menu_firstborder"';
// Identifica o Menu
$idiomaMenu = $_GET['lang'];
if ($idiomaMenu) {
    
} else {
    $idiomaMenu = 'pt';
}
// Monta HTML Menu
$menuSidebarAbre = '<aside class="sidebarWrap"><nav class="sidebarWrap_menu"><ul>';
$menuSidebarFecha = '</ul></nav></aside>';
// Testa se eh pagina de busca ou demais
if (is_search()) {
    echo $menuSidebarAbre . '<li><a ' . $menuAtualFirst . '>' . 'RESULTADO' . '</a></li>' . $pontaAzulMenu . $menuSidebarFecha;
} else {
    echo $menuSidebarAbre;
    if (is_single(array($bv_historia, $bv_apa, $bv_fauna, $bv_mapa, $bv_pat, $bv_dicas, $bv_seguranca, $bv_destaques)) || get_post_type() == 'post') {
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
        if (is_single($bv_historia)) {
            $bv_historia_atual1 = $menuAtualFirst;
            $bv_historia_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_apa)) {
            $bv_apa_atual1 = $menuAtual;
            $bv_apa_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_fauna)) {
            $bv_fauna_atual1 = $menuAtual;
            $bv_fauna_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_mapa)) {
            $bv_mapa_atual1 = $menuAtual;
            $bv_mapa_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_pat)) {
            $bv_pat_atual1 = $menuAtual;
            $bv_pat_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_dicas)) {
            $bv_dicas_atual1 = $menuAtual;
            $bv_dicas_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_seguranca)) {
            $bv_seguranca_atual1 = $menuAtual;
            $bv_seguranca_atual2 = $pontaAzulMenu;
        } elseif (is_single($bv_destaques) || get_post_type() == 'post') {
            $bv_destaques_atual1 = $menuAtual;
            $bv_destaques_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($bv_historia) . '?lang=' . $idiomaMenu . '"' . $bv_historia_atual1 . '>' . $bv_historia_txtLink . '</a></li>' . $bv_historia_atual2;
        echo '<li><a href="' . get_permalink($bv_apa) . '?lang=' . $idiomaMenu . '"' . $bv_apa_atual1 . '>' . $bv_apa_txtLink . '</a></li>' . $bv_apa_atual2;
        echo '<li><a href="' . get_permalink($bv_fauna) . '?lang=' . $idiomaMenu . '"' . $bv_fauna_atual1 . '>' . $bv_fauna_txtLink . '</a></li>' . $bv_fauna_atual2;
        echo '<li><a href="' . get_permalink($bv_mapa) . '?lang=' . $idiomaMenu . '"' . $bv_mapa_atual1 . '>' . $bv_mapa_txtLink . '</a></li>' . $bv_mapa_atual2;
        echo '<li><a href="' . get_permalink($bv_pat) . '?lang=' . $idiomaMenu . '"' . $bv_pat_atual1 . '>' . $bv_pat_txtLink . '</a></li>' . $bv_pat_atual2;
        echo '<li><a href="' . get_permalink($bv_dicas) . '?lang=' . $idiomaMenu . '"' . $bv_dicas_atual1 . '>' . $bv_dicas_txtLink . '</a></li>' . $bv_dicas_atual2;
        echo '<li><a href="' . get_permalink($bv_seguranca) . '?lang=' . $idiomaMenu . '"' . $bv_seguranca_atual1 . '>' . $bv_seguranca_txtLink . '</a></li>' . $bv_seguranca_atual2;
        echo '<li><a href="' . $linkultimopost . '?lang=' . $idiomaMenu . '"' . $bv_destaques_atual1 . '>' . $bv_destaques_txtLink . '</a></li>' . $bv_destaques_atual2;
    } elseif (is_page(array($at_parques, $at_aldeias, $at_rios, $at_mirantes, $at_fazendas, $at_centrosecumenicos, $at_pesqueiros, $at_artesanato, $at_patrimonio, $at_golf, $at_marinas, $at_centrocultural, $at_planetario, $at_borboletario, $at_aventura, $at_flores)) || get_post_type() == 'atracoes') {
        if (is_page($at_parques) || $tax_parques_menu == 1) {
            $at_parques_atual1 = $menuAtualFirst;
            $at_parques_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_aldeias) || $tax_aldeias_menu == 1) {
            $at_aldeias_atual1 = $menuAtual;
            $at_aldeias_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_rios) || $tax_rios_menu == 1) {
            $at_rios_atual1 = $menuAtual;
            $at_rios_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_mirantes) || $tax_mirantes_menu == 1) {
            $at_mirantes_atual1 = $menuAtual;
            $at_mirantes_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_fazendas) || $tax_fazendas_menu == 1) {
            $at_fazendas_atual1 = $menuAtual;
            $at_fazendas_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_centrosecumenicos) || $tax_centrosecumenicos_menu == 1) {
            $at_centrosecumenicos_atual1 = $menuAtual;
            $at_centrosecumenicos_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_pesqueiros) || $tax_pesqueiros_menu == 1) {
            $at_pesqueiros_atual1 = $menuAtual;
            $at_pesqueiros_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_artesanato) || $tax_artesanato_menu == 1) {
            $at_artesanato_atual1 = $menuAtual;
            $at_artesanato_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_patrimonio) || $tax_patrimonio_menu == 1) {
            $at_patrimonio_atual1 = $menuAtual;
            $at_patrimonio_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_golf) || $tax_golf_menu == 1) {
            $at_golf_atual1 = $menuAtual;
            $at_golf_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_marinas) || $tax_marinas_menu == 1) {
            $at_marinas_atual1 = $menuAtual;
            $at_marinas_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_centrocultural) || $tax_centrocultural_menu == 1) {
            $at_centrocultural_atual1 = $menuAtual;
            $at_centrocultural_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_planetario) || $tax_planetario_menu == 1) {
            $at_planetario_atual1 = $menuAtual;
            $at_planetario_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_borboletario) || $tax_borboletarios_menu == 1) {
            $at_borboletario_atual1 = $menuAtual;
            $at_borboletario_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_aventura) || $tax_aventura_menu == 1) {
            $at_aventura_atual1 = $menuAtual;
            $at_aventura_atual2 = $pontaAzulMenu;
        } elseif (is_page($at_flores) || $tax_flores_menu == 1) {
            $at_flores_atual1 = $menuAtual;
            $at_flores_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($at_parques) . '?lang=' . $idiomaMenu . '"' . $at_parques_atual1 . '>' . $at_parques_txtLink . '</a></li>' . $at_parques_atual2;
        echo '<li><a href="' . get_permalink($at_aldeias) . '?lang=' . $idiomaMenu . '"' . $at_aldeias_atual1 . '>' . $at_aldeias_txtLink . '</a></li>' . $at_aldeias_atual2;
        echo '<li><a href="' . get_permalink($at_rios) . '?lang=' . $idiomaMenu . '"' . $at_rios_atual1 . '>' . $at_rios_txtLink . '</a></li>' . $at_rios_atual2;
        echo '<li><a href="' . get_permalink($at_mirantes) . '?lang=' . $idiomaMenu . '"' . $at_mirantes_atual1 . '>' . $at_mirantes_txtLink . '</a></li>' . $at_mirantes_atual2;
        echo '<li><a href="' . get_permalink($at_fazendas) . '?lang=' . $idiomaMenu . '"' . $at_fazendas_atual1 . '>' . $at_fazendas_txtLink . '</a></li>' . $at_fazendas_atual2;
        echo '<li><a href="' . get_permalink($at_centrosecumenicos) . '?lang=' . $idiomaMenu . '"' . $at_centrosecumenicos_atual1 . '>' . $at_centrosecumenicos_txtLink . '</a></li>' . $at_centrosecumenicos_atual2;
        echo '<li><a href="' . get_permalink($at_pesqueiros) . '?lang=' . $idiomaMenu . '"' . $at_pesqueiros_atual1 . '>' . $at_pesqueiros_txtLink . '</a></li>' . $at_pesqueiros_atual2;
        echo '<li><a href="' . get_permalink($at_artesanato) . '?lang=' . $idiomaMenu . '"' . $at_artesanato_atual1 . '>' . $at_artesanato_txtLink . '</a></li>' . $at_artesanato_atual2;
        echo '<li><a href="' . get_permalink($at_patrimonio) . '?lang=' . $idiomaMenu . '"' . $at_patrimonio_atual1 . '>' . $at_patrimonio_txtLink . '</a></li>' . $at_patrimonio_atual2;
        echo '<li><a href="' . get_permalink($at_golf) . '?lang=' . $idiomaMenu . '"' . $at_golf_atual1 . '>' . $at_golf_txtLink . '</a></li>' . $at_golf_atual2;
        echo '<li><a href="' . get_permalink($at_marinas) . '?lang=' . $idiomaMenu . '"' . $at_marinas_atual1 . '>' . $at_marinas_txtLink . '</a></li>' . $at_marinas_atual2;
        echo '<li><a href="' . get_permalink($at_centrocultural) . '?lang=' . $idiomaMenu . '"' . $at_centrocultural_atual1 . '>' . $at_centrocultural_txtLink . '</a></li>' . $at_centrocultural_atual2;
        //PLANETARIO echo '<li><a href="' . get_permalink($at_planetario) . '?lang=' . $idiomaMenu . '"' . $at_planetario_atual1 . '>' . $at_planetario_txtLink . '</a></li>' . $at_planetario_atual2;
        echo '<li><a href="' . get_permalink($at_borboletario) . '?lang=' . $idiomaMenu . '"' . $at_borboletario_atual1 . '>' . $at_borboletario_txtLink . '</a></li>' . $at_borboletario_atual2;
        echo '<li><a href="' . get_permalink($at_aventura) . '?lang=' . $idiomaMenu . '"' . $at_aventura_atual1 . '>' . $at_aventura_txtLink . '</a></li>' . $at_aventura_atual2;
        echo '<li><a href="' . get_permalink($at_flores) . '?lang=' . $idiomaMenu . '"' . $at_flores_atual1 . '>' . $at_flores_txtLink . '</a></li>' . $at_flores_atual2;
    } elseif (is_single(array($rt_mata, $rt_historia, $rt_religioso, $rt_cicloturismo, $rt_nautico))) {
        if (is_single($rt_mata)) {
            $rt_mata_atual1 = $menuAtualFirst;
            $rt_mata_atual2 = $pontaAzulMenu;
        } elseif (is_single($rt_historia)) {
            $rt_historia_atual1 = $menuAtual;
            $rt_historia_atual2 = $pontaAzulMenu;
        } elseif (is_single($rt_religioso)) {
            $rt_religioso_atual1 = $menuAtual;
            $rt_religioso_atual2 = $pontaAzulMenu;
        } elseif (is_single($rt_cicloturismo)) {
            $rt_cicloturismo_atual1 = $menuAtual;
            $rt_cicloturismo_atual2 = $pontaAzulMenu;
        } elseif (is_single($rt_nautico)) {
            $rt_nautico_atual1 = $menuAtual;
            $rt_nautico_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($rt_mata) . '?lang=' . $idiomaMenu . '"' . $rt_mata_atual1 . '>' . $rt_mata_txtLink . '</a></li>' . $rt_mata_atual2;
        echo '<li><a href="' . get_permalink($rt_historia) . '?lang=' . $idiomaMenu . '"' . $rt_historia_atual1 . '>' . $rt_historia_txtLink . '</a></li>' . $rt_historia_atual2;
        echo '<li><a href="' . get_permalink($rt_religioso) . '?lang=' . $idiomaMenu . '"' . $rt_religioso_atual1 . '>' . $rt_religioso_txtLink . '</a></li>' . $rt_religioso_atual2;
        echo '<li><a href="' . get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu . '"' . $rt_cicloturismo_atual1 . '>' . $rt_cicloturismo_txtLink . '</a></li>' . $rt_cicloturismo_atual2;
        echo '<li><a href="' . get_permalink($rt_nautico) . '?lang=' . $idiomaMenu . '"' . $rt_nautico_atual1 . '>' . $rt_nautico_txtLink . '</a></li>' . $rt_nautico_atual2;
    } elseif (is_single(array($of_camping, $of_alojamento, $of_pousadas))) {
        if (is_single($of_camping)) {
            $of_camping_atual1 = $menuAtualFirst;
            $of_camping_atual2 = $pontaAzulMenu;
        } elseif (is_single($of_alojamento)) {
            $of_alojamento_atual1 = $menuAtual;
            $of_alojamento_atual2 = $pontaAzulMenu;
        } elseif (is_single($of_pousadas)) {
            $of_pousadas_atual1 = $menuAtual;
            $of_pousadas_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($of_camping) . '?lang=' . $idiomaMenu . '"' . $of_camping_atual1 . '>' . $of_camping_txtLink . '</a></li>' . $of_camping_atual2;
        echo '<li><a href="' . get_permalink($of_alojamento) . '?lang=' . $idiomaMenu . '"' . $of_alojamento_atual1 . '>' . $of_alojamento_txtLink . '</a></li>' . $of_alojamento_atual2;
        echo '<li><a href="' . get_permalink($of_pousadas) . '?lang=' . $idiomaMenu . '"' . $of_pousadas_atual1 . '>' . $of_pousadas_txtLink . '</a></li>' . $of_pousadas_atual2;
    } elseif (is_single(array($oc_comidaderua, $oc_mercado, $oc_buteco, $oc_pesqueiros, $oc_restaurantes, $oc_caipira, $oc_cafes))) {
        if (is_single($oc_comidaderua)) {
            $oc_comidaderua_atual1 = $menuAtualFirst;
            $oc_comidaderua_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_mercado)) {
            $oc_mercado_atual1 = $menuAtual;
            $oc_mercado_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_buteco)) {
            $oc_buteco_atual1 = $menuAtual;
            $oc_buteco_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_pesqueiros)) {
            $oc_pesqueiros_atual1 = $menuAtual;
            $oc_pesqueiros_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_restaurantes)) {
            $oc_restaurantes_atual1 = $menuAtual;
            $oc_restaurantes_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_caipira)) {
            $oc_caipira_atual1 = $menuAtual;
            $oc_caipira_atual2 = $pontaAzulMenu;
        } elseif (is_single($oc_cafes)) {
            $oc_cafes_atual1 = $menuAtual;
            $oc_cafes_atual2 = $pontaAzulMenu;
        } else {
            
        }
        //COMIDA DE RUA echo '<li><a href="' . get_permalink($oc_comidaderua) . '?lang=' . $idiomaMenu . '"' . $oc_comidaderua_atual1 . '>' . $oc_comidaderua_txtLink . '</a></li>' . $oc_comidaderua_atual2;
        echo '<li><a href="' . get_permalink($oc_mercado) . '?lang=' . $idiomaMenu . '"' . $oc_mercado_atual1 . '>' . $oc_mercado_txtLink . '</a></li>' . $oc_mercado_atual2;
        echo '<li><a href="' . get_permalink($oc_buteco) . '?lang=' . $idiomaMenu . '"' . $oc_buteco_atual1 . '>' . $oc_buteco_txtLink . '</a></li>' . $oc_buteco_atual2;
        echo '<li><a href="' . get_permalink($oc_pesqueiros) . '?lang=' . $idiomaMenu . '"' . $oc_pesqueiros_atual1 . '>' . $oc_pesqueiros_txtLink . '</a></li>' . $oc_pesqueiros_atual2;
        echo '<li><a href="' . get_permalink($oc_restaurantes) . '?lang=' . $idiomaMenu . '"' . $oc_restaurantes_atual1 . '>' . $oc_restaurantes_txtLink . '</a></li>' . $oc_restaurantes_atual2;
        echo '<li><a href="' . get_permalink($oc_caipira) . '?lang=' . $idiomaMenu . '"' . $oc_caipira_atual1 . '>' . $oc_caipira_txtLink . '</a></li>' . $oc_caipira_atual2;
        echo '<li><a href="' . get_permalink($oc_cafes) . '?lang=' . $idiomaMenu . '"' . $oc_cafes_atual1 . '>' . $oc_cafes_txtLink . '</a></li>' . $oc_cafes_atual2;
    } elseif (is_single(array($ch_onibus, $ch_carro, $ch_trem, $ch_bicicleta, $ch_agencias, $ch_guias))) {
        if (is_single($ch_onibus)) {
            $ch_onibus_atual1 = $menuAtualFirst;
            $ch_onibus_atual2 = $pontaAzulMenu;
        } elseif (is_single($ch_carro)) {
            $ch_carro_atual1 = $menuAtual;
            $ch_carro_atual2 = $pontaAzulMenu;
        } elseif (is_single($ch_trem)) {
            $ch_trem_atual1 = $menuAtual;
            $ch_trem_atual2 = $pontaAzulMenu;
        } elseif (is_single($ch_bicicleta)) {
            $ch_bicicleta_atual1 = $menuAtual;
            $ch_bicicleta_atual2 = $pontaAzulMenu;
        } elseif (is_single($ch_agencias)) {
            $ch_agencias_atual1 = $menuAtual;
            $ch_agencias_atual2 = $pontaAzulMenu;
        } elseif (is_single($ch_guias)) {
            $ch_guias_atual1 = $menuAtual;
            $ch_guias_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($ch_onibus) . '?lang=' . $idiomaMenu . '"' . $ch_onibus_atual1 . '>' . $ch_onibus_txtLink . '</a></li>' . $ch_onibus_atual2;
        echo '<li><a href="' . get_permalink($ch_carro) . '?lang=' . $idiomaMenu . '"' . $ch_carro_atual1 . '>' . $ch_carro_txtLink . '</a></li>' . $ch_carro_atual2;
        echo '<li><a href="' . get_permalink($ch_trem) . '?lang=' . $idiomaMenu . '"' . $ch_trem_atual1 . '>' . $ch_trem_txtLink . '</a></li>' . $ch_trem_atual2;
        echo '<li><a href="' . get_permalink($ch_bicicleta) . '?lang=' . $idiomaMenu . '"' . $ch_bicicleta_atual1 . '>' . $ch_bicicleta_txtLink . '</a></li>' . $ch_bicicleta_atual2;
        echo '<li><a href="' . get_permalink($ch_agencias) . '?lang=' . $idiomaMenu . '"' . $ch_agencias_atual1 . '>' . $ch_agencias_txtLink . '</a></li>' . $ch_agencias_atual2;
        echo '<li><a href="' . get_permalink($ch_guias) . '?lang=' . $idiomaMenu . '"' . $ch_guias_atual1 . '>' . $ch_guias_txtLink . '</a></li>' . $ch_guias_atual2;
    } elseif (is_single(array($cr_produtos, $cr_artesanato, $cr_responsabilidade, $cr_roofing, $cr_produtores))) {
        if (is_single($cr_produtos)) {
            $cr_produtos_atual1 = $menuAtualFirst;
            $cr_produtos_atual2 = $pontaAzulMenu;
        } elseif (is_single($cr_artesanato)) {
            $cr_artesanato_atual1 = $menuAtual;
            $cr_artesanato_atual2 = $pontaAzulMenu;
        } elseif (is_single($cr_responsabilidade)) {
            $cr_responsabilidade_atual1 = $menuAtual;
            $cr_responsabilidade_atual2 = $pontaAzulMenu;
        } elseif (is_single($cr_roofing)) {
            $cr_roofing_atual1 = $menuAtual;
            $cr_roofing_atual2 = $pontaAzulMenu;
        } elseif (is_single($cr_produtores)) {
            $cr_produtores_atual1 = $menuAtual;
            $cr_produtores_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($cr_produtos) . '?lang=' . $idiomaMenu . '"' . $cr_produtos_atual1 . '>' . $cr_produtos_txtLink . '</a></li>' . $cr_produtos_atual2;
        echo '<li><a href="' . get_permalink($cr_produtores) . '?lang=' . $idiomaMenu . '"' . $cr_produtores_atual1 . '>' . $cr_produtores_txtLink . '</a></li>' . $cr_produtores_atual2;
        //ARTESANATO echo '<li><a href="' . get_permalink($cr_artesanato) . '?lang=' . $idiomaMenu . '"' . $cr_artesanato_atual1 . '>' . $cr_artesanato_txtLink . '</a></li>' . $cr_artesanato_atual2;
        echo '<li><a href="' . get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu . '"' . $cr_responsabilidade_atual1 . '>' . $cr_responsabilidade_txtLink . '</a></li>' . $cr_responsabilidade_atual2;
        // ROOFING echo '<li><a href="' . get_permalink($cr_roofing) . '?lang=' . $idiomaMenu . '"' . $cr_roofing_atual1 . '>' . $cr_roofing_txtLink . '</a></li>' . $cr_roofing_atual2;
        //
        ////} elseif (is_single(array($ae_produtores))) {
        //  if (is_single($ae_produtores)) {
        //      $ae_produtores_atual1 = $menuAtualFirst;
        //      $ae_produtores_atual2 = $pontaAzulMenu;
        //  } else {
        //      
        //  }
        //  echo '<li><a href="' . get_permalink($ae_produtores) . '?lang=' . $idiomaMenu . '"' . $ae_produtores_atual1 . '>' . $ae_produtores_txtLink . '</a></li>' . $ae_produtores_atual2;
    } elseif (is_single(array($se_seuevento))) {
        if (is_single($se_seuevento)) {
            $se_seuevento_atual1 = $menuAtualFirst;
            $se_seuevento_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($se_seuevento) . '?lang=' . $idiomaMenu . '"' . $se_seuevento_atual1 . '>' . $se_seuevento_txtLink . '</a></li>' . $se_seuevento_atual2;
    } elseif (is_single(array($dp_contato, $dp_expediente))) {
        if (is_single($dp_contato)) {
            $dp_contato_atual1 = $menuAtualFirst;
            $dp_contato_atual2 = $pontaAzulMenu;
        } elseif (is_single($dp_expediente)) {
            $dp_expediente_atual1 = $menuAtualFirst;
            $dp_expediente_atual2 = $pontaAzulMenu;
        } else {
            
        }
        echo '<li><a href="' . get_permalink($dp_contato) . '?lang=' . $idiomaMenu . '"' . $dp_contato_atual1 . '>' . $dp_contato_txtLink . '</a></li>' . $dp_contato_atual2;
        echo '<li><a href="' . get_permalink($dp_expediente) . '?lang=' . $idiomaMenu . '"' . $dp_expediente_atual1 . '>' . $dp_expediente_txtLink . '</a></li>' . $dp_expediente_atual2;
    } else {
        
    }
    echo $menuSidebarFecha;
}
?>