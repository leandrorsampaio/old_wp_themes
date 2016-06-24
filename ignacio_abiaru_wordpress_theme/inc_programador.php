<?php

// IDIOMA URL CODE PADRAO
$code_pt = '?lang=pt';
$code_en = '?lang=en';
$code_es = '?lang=es';
// CUSTON FIELDS
$fieldKey_img_header = 'field_54242ef00eaa0';
$fieldKey_img_creditos = 'field_5424375ee9454';
$fieldKey_img_legenda = 'field_5424373fe9453';
$fieldKey_title_pt = 'field_5424181027b92';
$fieldKey_title_en = 'field_5424185227b94';
$fieldKey_title_es = 'field_5424185127b93';
$fieldKey_text_pt = 'field_5424188327b95'; //NAO CONFIGURADO
$fieldKey_text_en = 'field_542418bc27b97'; //NAO CONFIGURADO
$fieldKey_text_es = 'field_542418bb27b96'; //NAO CONFIGURADO
$fieldKey_slider_pt = 'field_549311cee43be'; //NAO CONFIGURADO 
$fieldKey_slider_en = 'field_549311e3e43c0'; //NAO CONFIGURADO
$fieldKey_slider_es = 'field_549311e3e43bf'; //NAO CONFIGURADO
// MAIN TITLE
$main_bemvindo = 'Bem-vindo';
$main_bemvindoV2 = 'Bem-</br>vindo';
$main_atracoes = 'Atra&ccedil;&otilde;es';
$main_roteiros = 'Roteiros';
//$main_sustentabilidade = 'Sustentabilidade';
//$main_sustentabilidadeV2 = 'Sustenta-</br>bilidade';
$main_sustentabilidade = 'Eco Friendly';
$main_sustentabilidadeV2 = 'Eco</br>Friendly';
$main_seueventoaqui = 'Seu Evento';
$main_seueventoaquiV2 = 'Seu</br>Evento';
$main_ondeficar = 'Onde Ficar';
$main_ondecomer = 'Onde Comer';
$main_comochegar = 'Como Chegar';
// BEM-VINDO
$bv_historia = 6;
$bv_apa = 12;
$bv_fauna = 13;
$bv_mapa = 14;
$bv_pat = 15;
$bv_dicas = 16;
$bv_seguranca = 967;
$bv_destaques = 17;
// ATRACOES (ANTIGOS)
//$at_parques = 10;
//$at_aldeias = 76;
//$at_rios = 77;
//$at_mirantes = 78;
//$at_fazendas = 79;
//$at_centrosecumenicos = 80;
//$at_pesqueiros = 81;
//$at_artesanato = 82;
//$at_patrimonio = 83;
//$at_golf = 84;
//$at_marinas = 85;
//$at_centrocultural = 86;
//$at_planetario = 87;
//$at_borboletario = 88;
//$at_aventura = 89;
//$at_flores = 90;
// ATRACOES
$at_parques = 130;
$at_aldeias = 115;
$at_rios = 129;
$at_mirantes = 128;
$at_fazendas = 127;
$at_centrosecumenicos = 126;
$at_pesqueiros = 125;
$at_artesanato = 124;
$at_patrimonio = 123;
$at_golf = 122;
$at_marinas = 121;
$at_centrocultural = 120;
$at_planetario = 119;
$at_borboletario = 118;
$at_aventura = 117;
$at_flores = 116;
// ROTEIROS
$rt_mata = 5;
$rt_historia = 26;
$rt_religioso = 27;
$rt_cicloturismo = 28;
$rt_nautico = 29;
// ONDE FICAR
$of_camping = 35;
$of_alojamento = 34;
$of_pousadas = 33;
// ONDE COMER
$oc_comidaderua = 49;
$oc_mercado = 48;
$oc_buteco = 47;
$oc_pesqueiros = 46;
$oc_restaurantes = 45;
$oc_caipira = 44;
$oc_cafes = 43;
// COMO CHEGAR
$ch_onibus = 55;
$ch_carro = 56;
$ch_trem = 57;
$ch_bicicleta = 58;
$ch_agencias = 59;
$ch_guias = 60;
// CONSUMO RESPONSAVEL
$cr_produtos = 51;
$cr_artesanato = 52;
$cr_responsabilidade = 53;
$cr_roofing = 54;
$cr_produtores = 92;
// AGRO ECOLOGIA
//$ae_produtores = 61;
// SEU EVENTO AQUI
$se_seuevento = 62;
// Taxonomias / categorias das atracoes
$tax_parques = 'parques';
$tax_aldeias = 'aldeias';
$tax_rios = 'rios-e-cachoeiras';
$tax_mirantes = 'mirantes';
$tax_fazendas = 'fazendas-e-sitios';
$tax_centrosecumenicos = 'centros-ecumenicos';
$tax_pesqueiros = 'pesqueiros';
$tax_artesanato = 'artesanato';
$tax_patrimonio = 'patrimonio-historico';
$tax_golf = 'golf';
$tax_marinas = 'marinas';
$tax_centrocultural = 'centro-cultural';
$tax_planetario = 'planetario';
$tax_borboletarios = 'borboletarios';
$tax_aventura = 'aventura';
$tax_flores = 'flores';
// Demais Páginas
$dp_contato = 624;
$dp_expediente = 673;
$dp_homemobile = 831;
$dp_404 = 993;
//
//
//
//
//
//
//
//
// Somente para as singles de Atracoes
// Pega e testa a taxonomia da single (atracoestipo)
$tax_parques_menu = 0;
$tax_aldeias_menu = 0;
$tax_rios_menu = 0;
$tax_mirantes_menu = 0;
$tax_fazendas_menu = 0;
$tax_centrosecumenicos_menu = 0;
$tax_pesqueiros_menu = 0;
$tax_artesanato_menu = 0;
$tax_patrimonio_menu = 0;
$tax_golf_menu = 0;
$tax_marinas_menu = 0;
$tax_centrocultural_menu = 0;
$tax_planetario_menu = 0;
$tax_borboletarios_menu = 0;
$tax_aventura_menu = 0;
$tax_flores_menu = 0;
$terms = wp_get_object_terms($post->ID, 'atracoestipo');
if (!empty($terms)) :
    $tipo = array();
    foreach ($terms as $term) {
        $tipo = $term->slug;
    }
endif;
if ($tipo == $tax_parques) {
    $tax_parques_menu = 1;
} elseif ($tipo == $tax_aldeias) {
    $tax_aldeias_menu = 1;
} elseif ($tipo == $tax_rios) {
    $tax_rios_menu = 1;
} elseif ($tipo == $tax_mirantes) {
    $tax_mirantes_menu = 1;
} elseif ($tipo == $tax_fazendas) {
    $tax_fazendas_menu = 1;
} elseif ($tipo == $tax_centrosecumenicos) {
    $tax_centrosecumenicos_menu = 1;
} elseif ($tipo == $tax_pesqueiros) {
    $tax_pesqueiros_menu = 1;
} elseif ($tipo == $tax_artesanato) {
    $tax_artesanato_menu = 1;
} elseif ($tipo == $tax_patrimonio) {
    $tax_patrimonio_menu = 1;
} elseif ($tipo == $tax_golf) {
    $tax_golf_menu = 1;
} elseif ($tipo == $tax_marinas) {
    $tax_marinas_menu = 1;
} elseif ($tipo == $tax_centrocultural) {
    $tax_centrocultural_menu = 1;
} elseif ($tipo == $tax_planetario) {
    $tax_planetario_menu = 1;
} elseif ($tipo == $tax_borboletarios) {
    $tax_borboletarios_menu = 1;
} elseif ($tipo == $tax_aventura) {
    $tax_aventura_menu = 1;
} elseif ($tipo == $tax_flores) {
    $tax_flores_menu = 1;
} else {
    
}
//
//
//
//
//
//
//
// ESCOLHE LINGUAGEM IDIOMA
$idiomaMenu = $_GET['lang'];
if ($idiomaMenu == 'pt') {
    $fieldKey_title_lang = $fieldKey_title_pt;
} elseif ($idiomaMenu == 'en') {
    $fieldKey_title_lang = $fieldKey_title_en;
} elseif ($idiomaMenu == 'es') {
    $fieldKey_title_lang = $fieldKey_title_es;
} else {
    $fieldKey_title_lang = $fieldKey_title_pt;
}
//
//
//
//
//
//
// NOME DAS PAGINAS BEM VINDO
$bv_historia_txtLinkPT = get_field_object($fieldKey_title_lang, $bv_historia);
$bv_historia_txtLinkEN = get_field_object($fieldKey_title_lang, $bv_historia);
$bv_historia_txtLinkES = get_field_object($fieldKey_title_lang, $bv_historia);
$bv_apa_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_apa);
$bv_apa_txtLinkEN = get_field_object($fieldKey_title_en, $bv_apa);
$bv_apa_txtLinkES = get_field_object($fieldKey_title_es, $bv_apa);
$bv_fauna_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_fauna);
$bv_fauna_txtLinkEN = get_field_object($fieldKey_title_en, $bv_fauna);
$bv_fauna_txtLinkES = get_field_object($fieldKey_title_es, $bv_fauna);
$bv_mapa_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_mapa);
$bv_mapa_txtLinkEN = get_field_object($fieldKey_title_en, $bv_mapa);
$bv_mapa_txtLinkES = get_field_object($fieldKey_title_es, $bv_mapa);
$bv_pat_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_pat);
$bv_pat_txtLinkEN = get_field_object($fieldKey_title_en, $bv_pat);
$bv_pat_txtLinkES = get_field_object($fieldKey_title_es, $bv_pat);
$bv_dicas_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_dicas);
$bv_dicas_txtLinkEN = get_field_object($fieldKey_title_en, $bv_dicas);
$bv_dicas_txtLinkES = get_field_object($fieldKey_title_es, $bv_dicas);
$bv_seguranca_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_seguranca);
$bv_seguranca_txtLinkEN = get_field_object($fieldKey_title_en, $bv_seguranca);
$bv_seguranca_txtLinkES = get_field_object($fieldKey_title_es, $bv_seguranca);
$bv_destaques_txtLinkPT = get_field_object($fieldKey_title_pt, $bv_destaques);
$bv_destaques_txtLinkEN = get_field_object($fieldKey_title_en, $bv_destaques);
$bv_destaques_txtLinkES = get_field_object($fieldKey_title_es, $bv_destaques);
// NOME DAS PAGINAS ATRACOES
$at_parques_txtLinkPT = get_field_object($fieldKey_title_pt, $at_parques);
$at_parques_txtLinkEN = get_field_object($fieldKey_title_en, $at_parques);
$at_parques_txtLinkES = get_field_object($fieldKey_title_es, $at_parques);
$at_aldeias_txtLinkPT = get_field_object($fieldKey_title_pt, $at_aldeias);
$at_aldeias_txtLinkEN = get_field_object($fieldKey_title_en, $at_aldeias);
$at_aldeias_txtLinkES = get_field_object($fieldKey_title_es, $at_aldeias);
$at_rios_txtLinkPT = get_field_object($fieldKey_title_pt, $at_rios);
$at_rios_txtLinkEN = get_field_object($fieldKey_title_en, $at_rios);
$at_rios_txtLinkES = get_field_object($fieldKey_title_es, $at_rios);
$at_mirantes_txtLinkPT = get_field_object($fieldKey_title_pt, $at_mirantes);
$at_mirantes_txtLinkEN = get_field_object($fieldKey_title_en, $at_mirantes);
$at_mirantes_txtLinkES = get_field_object($fieldKey_title_es, $at_mirantes);
$at_fazendas_txtLinkPT = get_field_object($fieldKey_title_pt, $at_fazendas);
$at_fazendas_txtLinkEN = get_field_object($fieldKey_title_en, $at_fazendas);
$at_fazendas_txtLinkES = get_field_object($fieldKey_title_es, $at_fazendas);
$at_centrosecumenicos_txtLinkPT = get_field_object($fieldKey_title_pt, $at_centrosecumenicos);
$at_centrosecumenicos_txtLinkEN = get_field_object($fieldKey_title_en, $at_centrosecumenicos);
$at_centrosecumenicos_txtLinkES = get_field_object($fieldKey_title_es, $at_centrosecumenicos);
$at_pesqueiros_txtLinkPT = get_field_object($fieldKey_title_pt, $at_pesqueiros);
$at_pesqueiros_txtLinkEN = get_field_object($fieldKey_title_en, $at_pesqueiros);
$at_pesqueiros_txtLinkES = get_field_object($fieldKey_title_es, $at_pesqueiros);
$at_artesanato_txtLinkPT = get_field_object($fieldKey_title_pt, $at_artesanato);
$at_artesanato_txtLinkEN = get_field_object($fieldKey_title_en, $at_artesanato);
$at_artesanato_txtLinkES = get_field_object($fieldKey_title_es, $at_artesanato);
$at_patrimonio_txtLinkPT = get_field_object($fieldKey_title_pt, $at_patrimonio);
$at_patrimonio_txtLinkEN = get_field_object($fieldKey_title_en, $at_patrimonio);
$at_patrimonio_txtLinkES = get_field_object($fieldKey_title_es, $at_patrimonio);
$at_golf_txtLinkPT = get_field_object($fieldKey_title_pt, $at_golf);
$at_golf_txtLinkEN = get_field_object($fieldKey_title_en, $at_golf);
$at_golf_txtLinkES = get_field_object($fieldKey_title_es, $at_golf);
$at_marinas_txtLinkPT = get_field_object($fieldKey_title_pt, $at_marinas);
$at_marinas_txtLinkEN = get_field_object($fieldKey_title_en, $at_marinas);
$at_marinas_txtLinkES = get_field_object($fieldKey_title_es, $at_marinas);
$at_centrocultural_txtLinkPT = get_field_object($fieldKey_title_pt, $at_centrocultural);
$at_centrocultural_txtLinkEN = get_field_object($fieldKey_title_en, $at_centrocultural);
$at_centrocultural_txtLinkES = get_field_object($fieldKey_title_es, $at_centrocultural);
$at_planetario_txtLinkPT = get_field_object($fieldKey_title_pt, $at_planetario);
$at_planetario_txtLinkEN = get_field_object($fieldKey_title_en, $at_planetario);
$at_planetario_txtLinkES = get_field_object($fieldKey_title_es, $at_planetario);
$at_borboletario_txtLinkPT = get_field_object($fieldKey_title_pt, $at_borboletario);
$at_borboletario_txtLinkEN = get_field_object($fieldKey_title_en, $at_borboletario);
$at_borboletario_txtLinkES = get_field_object($fieldKey_title_es, $at_borboletario);
$at_aventura_txtLinkPT = get_field_object($fieldKey_title_pt, $at_aventura);
$at_aventura_txtLinkEN = get_field_object($fieldKey_title_en, $at_aventura);
$at_aventura_txtLinkES = get_field_object($fieldKey_title_es, $at_aventura);
$at_flores_txtLinkPT = get_field_object($fieldKey_title_pt, $at_flores);
$at_flores_txtLinkEN = get_field_object($fieldKey_title_en, $at_flores);
$at_flores_txtLinkES = get_field_object($fieldKey_title_es, $at_flores);
// NOME DAS PAGINAS ROTEIROS
$rt_mata_txtLinkPT = get_field_object($fieldKey_title_lang, $rt_mata);
$rt_mata_txtLinkEN = get_field_object($fieldKey_title_lang, $rt_mata);
$rt_mata_txtLinkES = get_field_object($fieldKey_title_lang, $rt_mata);
$rt_historia_txtLinkPT = get_field_object($fieldKey_title_lang, $rt_historia);
$rt_historia_txtLinkEN = get_field_object($fieldKey_title_lang, $rt_historia);
$rt_historia_txtLinkES = get_field_object($fieldKey_title_lang, $rt_historia);
$rt_religioso_txtLinkPT = get_field_object($fieldKey_title_lang, $rt_religioso);
$rt_religioso_txtLinkEN = get_field_object($fieldKey_title_lang, $rt_religioso);
$rt_religioso_txtLinkES = get_field_object($fieldKey_title_lang, $rt_religioso);
$rt_cicloturismo_txtLinkPT = get_field_object($fieldKey_title_lang, $rt_cicloturismo);
$rt_cicloturismo_txtLinkEN = get_field_object($fieldKey_title_lang, $rt_cicloturismo);
$rt_cicloturismo_txtLinkES = get_field_object($fieldKey_title_lang, $rt_cicloturismo);
$rt_nautico_txtLinkPT = get_field_object($fieldKey_title_lang, $rt_nautico);
$rt_nautico_txtLinkEN = get_field_object($fieldKey_title_lang, $rt_nautico);
$rt_nautico_txtLinkES = get_field_object($fieldKey_title_lang, $rt_nautico);
// NOME DAS PAGINAS ONDE FICAR
$of_camping_txtLinkPT = get_field_object($fieldKey_title_lang, $of_camping);
$of_camping_txtLinkEN = get_field_object($fieldKey_title_lang, $of_camping);
$of_camping_txtLinkES = get_field_object($fieldKey_title_lang, $of_camping);
$of_alojamento_txtLinkPT = get_field_object($fieldKey_title_lang, $of_alojamento);
$of_alojamento_txtLinkEN = get_field_object($fieldKey_title_lang, $of_alojamento);
$of_alojamento_txtLinkES = get_field_object($fieldKey_title_lang, $of_alojamento);
$of_pousadas_txtLinkPT = get_field_object($fieldKey_title_lang, $of_pousadas);
$of_pousadas_txtLinkEN = get_field_object($fieldKey_title_lang, $of_pousadas);
$of_pousadas_txtLinkES = get_field_object($fieldKey_title_lang, $of_pousadas);
// NOME DAS PAGINAS ONDE COMER
$oc_comidaderua_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_comidaderua);
$oc_comidaderua_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_comidaderua);
$oc_comidaderua_txtLinkES = get_field_object($fieldKey_title_lang, $oc_comidaderua);
$oc_mercado_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_mercado);
$oc_mercado_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_mercado);
$oc_mercado_txtLinkES = get_field_object($fieldKey_title_lang, $oc_mercado);
$oc_buteco_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_buteco);
$oc_buteco_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_buteco);
$oc_buteco_txtLinkES = get_field_object($fieldKey_title_lang, $oc_buteco);
$oc_pesqueiros_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_pesqueiros);
$oc_pesqueiros_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_pesqueiros);
$oc_pesqueiros_txtLinkES = get_field_object($fieldKey_title_lang, $oc_pesqueiros);
$oc_restaurantes_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_restaurantes);
$oc_restaurantes_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_restaurantes);
$oc_restaurantes_txtLinkES = get_field_object($fieldKey_title_lang, $oc_restaurantes);
$oc_caipira_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_caipira);
$oc_caipira_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_caipira);
$oc_caipira_txtLinkES = get_field_object($fieldKey_title_lang, $oc_caipira);
$oc_cafes_txtLinkPT = get_field_object($fieldKey_title_lang, $oc_cafes);
$oc_cafes_txtLinkEN = get_field_object($fieldKey_title_lang, $oc_cafes);
$oc_cafes_txtLinkES = get_field_object($fieldKey_title_lang, $oc_cafes);
// NOME DAS PAGINAS COMO CHEGAR
$ch_onibus_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_onibus);
$ch_onibus_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_onibus);
$ch_onibus_txtLinkES = get_field_object($fieldKey_title_lang, $ch_onibus);
$ch_carro_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_carro);
$ch_carro_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_carro);
$ch_carro_txtLinkES = get_field_object($fieldKey_title_lang, $ch_carro);
$ch_trem_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_trem);
$ch_trem_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_trem);
$ch_trem_txtLinkES = get_field_object($fieldKey_title_lang, $ch_trem);
$ch_bicicleta_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_bicicleta);
$ch_bicicleta_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_bicicleta);
$ch_bicicleta_txtLinkES = get_field_object($fieldKey_title_lang, $ch_bicicleta);
$ch_agencias_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_agencias);
$ch_agencias_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_agencias);
$ch_agencias_txtLinkES = get_field_object($fieldKey_title_lang, $ch_agencias);
$ch_guias_txtLinkPT = get_field_object($fieldKey_title_lang, $ch_guias);
$ch_guias_txtLinkEN = get_field_object($fieldKey_title_lang, $ch_guias);
$ch_guias_txtLinkES = get_field_object($fieldKey_title_lang, $ch_guias);
// NOME DAS PAGINAS CONSUMO RESPONSAVEL
$cr_produtos_txtLinkPT = get_field_object($fieldKey_title_lang, $cr_produtos);
$cr_produtos_txtLinkEN = get_field_object($fieldKey_title_lang, $cr_produtos);
$cr_produtos_txtLinkES = get_field_object($fieldKey_title_lang, $cr_produtos);
$cr_artesanato_txtLinkPT = get_field_object($fieldKey_title_lang, $cr_artesanato);
$cr_artesanato_txtLinkEN = get_field_object($fieldKey_title_lang, $cr_artesanato);
$cr_artesanato_txtLinkES = get_field_object($fieldKey_title_lang, $cr_artesanato);
$cr_responsabilidade_txtLinkPT = get_field_object($fieldKey_title_lang, $cr_responsabilidade);
$cr_responsabilidade_txtLinkEN = get_field_object($fieldKey_title_lang, $cr_responsabilidade);
$cr_responsabilidade_txtLinkES = get_field_object($fieldKey_title_lang, $cr_responsabilidade);
$cr_roofing_txtLinkPT = get_field_object($fieldKey_title_lang, $cr_roofing);
$cr_roofing_txtLinkEN = get_field_object($fieldKey_title_lang, $cr_roofing);
$cr_roofing_txtLinkES = get_field_object($fieldKey_title_lang, $cr_roofing);
$cr_produtores_txtLinkPT = get_field_object($fieldKey_title_lang, $cr_produtores);
$cr_produtores_txtLinkEN = get_field_object($fieldKey_title_lang, $cr_produtores);
$cr_produtores_txtLinkES = get_field_object($fieldKey_title_lang, $cr_produtores);
// NOME DAS PAGINAS AGRO ECOLOGIA
//$ae_produtores_txtLinkPT = get_field_object($fieldKey_title_lang, $ae_produtores);
//$ae_produtores_txtLinkEN = get_field_object($fieldKey_title_lang, $ae_produtores);
//$ae_produtores_txtLinkES = get_field_object($fieldKey_title_lang, $ae_produtores);
// NOME DAS PAGINAS SEU EVENTO AQUI
$se_seuevento_txtLinkPT = get_field_object($fieldKey_title_lang, $se_seuevento);
$se_seuevento_txtLinkEN = get_field_object($fieldKey_title_lang, $se_seuevento);
$se_seuevento_txtLinkES = get_field_object($fieldKey_title_lang, $se_seuevento);
// DEMAIS PAGINAS
$dp_contato_txtLinkPT = get_field_object($fieldKey_title_lang, $dp_contato);
$dp_contato_txtLinkEN = get_field_object($fieldKey_title_lang, $dp_contato);
$dp_contato_txtLinkES = get_field_object($fieldKey_title_lang, $dp_contato);
$dp_expediente_txtLinkPT = get_field_object($fieldKey_title_lang, $dp_expediente);
$dp_expediente_txtLinkEN = get_field_object($fieldKey_title_lang, $dp_expediente);
$dp_expediente_txtLinkES = get_field_object($fieldKey_title_lang, $dp_expediente);
//
//
//
//
//
//
if ($idiomaMenu == 'en') {
    //BEM VINDO
    $bv_historia_txtLink = $bv_historia_txtLinkEN['value'];
    $bv_apa_txtLink = $bv_apa_txtLinkEN['value'];
    $bv_fauna_txtLink = $bv_fauna_txtLinkEN['value'];
    $bv_mapa_txtLink = $bv_mapa_txtLinkEN['value'];
    $bv_pat_txtLink = $bv_pat_txtLinkEN['value'];
    $bv_dicas_txtLink = $bv_dicas_txtLinkEN['value'];
    $bv_seguranca_txtLink = $bv_seguranca_txtLinkEN['value'];
    $bv_destaques_txtLink = $bv_destaques_txtLinkEN['value'];
    //ATRACOES
    $at_parques_txtLink = $at_parques_txtLinkEN['value'];
    $at_aldeias_txtLink = $at_aldeias_txtLinkEN['value'];
    $at_rios_txtLink = $at_rios_txtLinkEN['value'];
    $at_mirantes_txtLink = $at_mirantes_txtLinkEN['value'];
    $at_fazendas_txtLink = $at_fazendas_txtLinkEN['value'];
    $at_centrosecumenicos_txtLink = $at_centrosecumenicos_txtLinkEN['value'];
    $at_pesqueiros_txtLink = $at_pesqueiros_txtLinkEN['value'];
    $at_artesanato_txtLink = $at_artesanato_txtLinkEN['value'];
    $at_patrimonio_txtLink = $at_patrimonio_txtLinkEN['value'];
    $at_golf_txtLink = $at_golf_txtLinkEN['value'];
    $at_marinas_txtLink = $at_marinas_txtLinkEN['value'];
    $at_centrocultural_txtLink = $at_centrocultural_txtLinkEN['value'];
    $at_planetario_txtLink = $at_planetario_txtLinkEN['value'];
    $at_borboletario_txtLink = $at_borboletario_txtLinkEN['value'];
    $at_aventura_txtLink = $at_aventura_txtLinkEN['value'];
    $at_flores_txtLink = $at_flores_txtLinkEN['value'];
    //ROTEIROS
    $rt_mata_txtLink = $rt_mata_txtLinkEN['value'];
    $rt_historia_txtLink = $rt_historia_txtLinkEN['value'];
    $rt_religioso_txtLink = $rt_religioso_txtLinkEN['value'];
    $rt_cicloturismo_txtLink = $rt_cicloturismo_txtLinkEN['value'];
    $rt_nautico_txtLink = $rt_nautico_txtLinkEN['value'];
    //ONDE FICAR
    $of_camping_txtLink = $of_camping_txtLinkEN['value'];
    $of_alojamento_txtLink = $of_alojamento_txtLinkEN['value'];
    $of_pousadas_txtLink = $of_pousadas_txtLinkEN['value'];
    //ONDE COMER
    $oc_comidaderua_txtLink = $oc_comidaderua_txtLinkEN['value'];
    $oc_mercado_txtLink = $oc_mercado_txtLinkEN['value'];
    $oc_buteco_txtLink = $oc_buteco_txtLinkEN['value'];
    $oc_pesqueiros_txtLink = $oc_pesqueiros_txtLinkEN['value'];
    $oc_restaurantes_txtLink = $oc_restaurantes_txtLinkEN['value'];
    $oc_caipira_txtLink = $oc_caipira_txtLinkEN['value'];
    $oc_cafes_txtLink = $oc_cafes_txtLinkEN['value'];
    // COMO CHEGAR
    $ch_onibus_txtLink = $ch_onibus_txtLinkEN['value'];
    $ch_carro_txtLink = $ch_carro_txtLinkEN['value'];
    $ch_trem_txtLink = $ch_trem_txtLinkEN['value'];
    $ch_bicicleta_txtLink = $ch_bicicleta_txtLinkEN['value'];
    $ch_agencias_txtLink = $ch_agencias_txtLinkEN['value'];
    $ch_guias_txtLink = $ch_guias_txtLinkEN['value'];
    // CONSUMO RESPONSAVEL
    $cr_produtos_txtLink = $cr_produtos_txtLinkEN['value'];
    $cr_artesanato_txtLink = $cr_artesanato_txtLinkEN['value'];
    $cr_responsabilidade_txtLink = $cr_responsabilidade_txtLinkEN['value'];
    $cr_roofing_txtLink = $cr_roofing_txtLinkEN['value'];
    $cr_produtores_txtLink = $cr_produtores_txtLinkEN['value'];
    // AGRO ECOLOGIA
    //$ae_produtores_txtLink = $ae_produtores_txtLinkEN['value'];
    // SEU EVENTO AQUI
    $se_seuevento_txtLink = $se_seuevento_txtLinkEN['value'];
    // DEMAIS PAGINAS
    $dp_contato_txtLink = $dp_contato_txtLinkEN['value'];
    $dp_expediente_txtLink = $dp_expediente_txtLinkEN['value'];
} elseif ($idiomaMenu == 'es') {
    //BEM VINDO
    $bv_historia_txtLink = $bv_historia_txtLinkES['value'];
    $bv_apa_txtLink = $bv_apa_txtLinkES['value'];
    $bv_fauna_txtLink = $bv_fauna_txtLinkES['value'];
    $bv_mapa_txtLink = $bv_mapa_txtLinkES['value'];
    $bv_pat_txtLink = $bv_pat_txtLinkES['value'];
    $bv_dicas_txtLink = $bv_dicas_txtLinkES['value'];
    $bv_seguranca_txtLink = $bv_seguranca_txtLinkES['value'];
    $bv_destaques_txtLink = $bv_destaques_txtLinkES['value'];
    //ATRACOES
    $at_parques_txtLink = $at_parques_txtLinkES['value'];
    $at_aldeias_txtLink = $at_aldeias_txtLinkES['value'];
    $at_rios_txtLink = $at_rios_txtLinkES['value'];
    $at_mirantes_txtLink = $at_mirantes_txtLinkES['value'];
    $at_fazendas_txtLink = $at_fazendas_txtLinkES['value'];
    $at_centrosecumenicos_txtLink = $at_centrosecumenicos_txtLinkES['value'];
    $at_pesqueiros_txtLink = $at_pesqueiros_txtLinkES['value'];
    $at_artesanato_txtLink = $at_artesanato_txtLinkES['value'];
    $at_patrimonio_txtLink = $at_patrimonio_txtLinkES['value'];
    $at_golf_txtLink = $at_golf_txtLinkES['value'];
    $at_marinas_txtLink = $at_marinas_txtLinkES['value'];
    $at_centrocultural_txtLink = $at_centrocultural_txtLinkES['value'];
    $at_planetario_txtLink = $at_planetario_txtLinkES['value'];
    $at_borboletario_txtLink = $at_borboletario_txtLinkES['value'];
    $at_aventura_txtLink = $at_aventura_txtLinkES['value'];
    $at_flores_txtLink = $at_flores_txtLinkES['value'];
    //ROTEIROS
    $rt_mata_txtLink = $rt_mata_txtLinkES['value'];
    $rt_historia_txtLink = $rt_historia_txtLinkES['value'];
    $rt_religioso_txtLink = $rt_religioso_txtLinkES['value'];
    $rt_cicloturismo_txtLink = $rt_cicloturismo_txtLinkES['value'];
    $rt_nautico_txtLink = $rt_nautico_txtLinkES['value'];
    //ONDE FICAR
    $of_camping_txtLink = $of_camping_txtLinkES['value'];
    $of_alojamento_txtLink = $of_alojamento_txtLinkES['value'];
    $of_pousadas_txtLink = $of_pousadas_txtLinkES['value'];
    //ONDE COMER
    $oc_comidaderua_txtLink = $oc_comidaderua_txtLinkES['value'];
    $oc_mercado_txtLink = $oc_mercado_txtLinkES['value'];
    $oc_buteco_txtLink = $oc_buteco_txtLinkES['value'];
    $oc_pesqueiros_txtLink = $oc_pesqueiros_txtLinkES['value'];
    $oc_restaurantes_txtLink = $oc_restaurantes_txtLinkES['value'];
    $oc_caipira_txtLink = $oc_caipira_txtLinkES['value'];
    $oc_cafes_txtLink = $oc_cafes_txtLinkES['value'];
    // COMO CHEGAR
    $ch_onibus_txtLink = $ch_onibus_txtLinkES['value'];
    $ch_carro_txtLink = $ch_carro_txtLinkES['value'];
    $ch_trem_txtLink = $ch_trem_txtLinkES['value'];
    $ch_bicicleta_txtLink = $ch_bicicleta_txtLinkES['value'];
    $ch_agencias_txtLink = $ch_agencias_txtLinkES['value'];
    $ch_guias_txtLink = $ch_guias_txtLinkES['value'];
    // CONSUMO RESPONSAVEL
    $cr_produtos_txtLink = $cr_produtos_txtLinkES['value'];
    $cr_artesanato_txtLink = $cr_artesanato_txtLinkES['value'];
    $cr_responsabilidade_txtLink = $cr_responsabilidade_txtLinkES['value'];
    $cr_roofing_txtLink = $cr_roofing_txtLinkES['value'];
    $cr_produtores_txtLink = $cr_produtores_txtLinkES['value'];
    // AGRO ECOLOGIA
    //$ae_produtores_txtLink = $ae_produtores_txtLinkES['value'];
    // SEU EVENTO AQUI
    $se_seuevento_txtLink = $se_seuevento_txtLinkES['value'];
    // DEMAIS PAGINAS
    $dp_contato_txtLink = $dp_contato_txtLinkES['value'];
    $dp_expediente_txtLink = $dp_expediente_txtLinkES['value'];
} else {
    //BEM VINDO
    $bv_historia_txtLink = $bv_historia_txtLinkPT['value'];
    $bv_apa_txtLink = $bv_apa_txtLinkPT['value'];
    $bv_fauna_txtLink = $bv_fauna_txtLinkPT['value'];
    $bv_mapa_txtLink = $bv_mapa_txtLinkPT['value'];
    $bv_pat_txtLink = $bv_pat_txtLinkPT['value'];
    $bv_dicas_txtLink = $bv_dicas_txtLinkPT['value'];
    $bv_seguranca_txtLink = $bv_seguranca_txtLinkPT['value'];
    $bv_destaques_txtLink = $bv_destaques_txtLinkPT['value'];
    //ATRACOES
    $at_parques_txtLink = $at_parques_txtLinkPT['value'];
    $at_aldeias_txtLink = $at_aldeias_txtLinkPT['value'];
    $at_rios_txtLink = $at_rios_txtLinkPT['value'];
    $at_mirantes_txtLink = $at_mirantes_txtLinkPT['value'];
    $at_fazendas_txtLink = $at_fazendas_txtLinkPT['value'];
    $at_centrosecumenicos_txtLink = $at_centrosecumenicos_txtLinkPT['value'];
    $at_pesqueiros_txtLink = $at_pesqueiros_txtLinkPT['value'];
    $at_artesanato_txtLink = $at_artesanato_txtLinkPT['value'];
    $at_patrimonio_txtLink = $at_patrimonio_txtLinkPT['value'];
    $at_golf_txtLink = $at_golf_txtLinkPT['value'];
    $at_marinas_txtLink = $at_marinas_txtLinkPT['value'];
    $at_centrocultural_txtLink = $at_centrocultural_txtLinkPT['value'];
    $at_planetario_txtLink = $at_planetario_txtLinkPT['value'];
    $at_borboletario_txtLink = $at_borboletario_txtLinkPT['value'];
    $at_aventura_txtLink = $at_aventura_txtLinkPT['value'];
    $at_flores_txtLink = $at_flores_txtLinkPT['value'];
    //ROTEIROS
    $rt_mata_txtLink = $rt_mata_txtLinkPT['value'];
    $rt_historia_txtLink = $rt_historia_txtLinkPT['value'];
    $rt_religioso_txtLink = $rt_religioso_txtLinkPT['value'];
    $rt_cicloturismo_txtLink = $rt_cicloturismo_txtLinkPT['value'];
    $rt_nautico_txtLink = $rt_nautico_txtLinkPT['value'];
    //ONDE FICAR
    $of_camping_txtLink = $of_camping_txtLinkPT['value'];
    $of_alojamento_txtLink = $of_alojamento_txtLinkPT['value'];
    $of_pousadas_txtLink = $of_pousadas_txtLinkPT['value'];
    //ONDE COMER
    $oc_comidaderua_txtLink = $oc_comidaderua_txtLinkPT['value'];
    $oc_mercado_txtLink = $oc_mercado_txtLinkPT['value'];
    $oc_buteco_txtLink = $oc_buteco_txtLinkPT['value'];
    $oc_pesqueiros_txtLink = $oc_pesqueiros_txtLinkPT['value'];
    $oc_restaurantes_txtLink = $oc_restaurantes_txtLinkPT['value'];
    $oc_caipira_txtLink = $oc_caipira_txtLinkPT['value'];
    $oc_cafes_txtLink = $oc_cafes_txtLinkPT['value'];
    // COMO CHEGAR
    $ch_onibus_txtLink = $ch_onibus_txtLinkPT['value'];
    $ch_carro_txtLink = $ch_carro_txtLinkPT['value'];
    $ch_trem_txtLink = $ch_trem_txtLinkPT['value'];
    $ch_bicicleta_txtLink = $ch_bicicleta_txtLinkPT['value'];
    $ch_agencias_txtLink = $ch_agencias_txtLinkPT['value'];
    $ch_guias_txtLink = $ch_guias_txtLinkPT['value'];
    // CONSUMO RESPONSAVEL
    $cr_produtos_txtLink = $cr_produtos_txtLinkPT['value'];
    $cr_artesanato_txtLink = $cr_artesanato_txtLinkPT['value'];
    $cr_responsabilidade_txtLink = $cr_responsabilidade_txtLinkPT['value'];
    $cr_roofing_txtLink = $cr_roofing_txtLinkPT['value'];
    $cr_produtores_txtLink = $cr_produtores_txtLinkPT['value'];
    // NOME DAS PAGINAS AGRO ECOLOGIA
    //$ae_produtores_txtLink = $ae_produtores_txtLinkPT['value'];
    // NOME DAS PAGINAS SEU EVENTO AQUI
    $se_seuevento_txtLink = $se_seuevento_txtLinkPT['value'];
    // DEMAIS PAGINAS
    $dp_contato_txtLink = $dp_contato_txtLinkPT['value'];
    $dp_expediente_txtLink = $dp_expediente_txtLinkPT['value'];
}
?>