<?php

// Cria variaveis globais
global $idioma;
global $idiomaSlug;
global $monta_link_pt;
global $monta_link_en;
global $monta_link_es;
// Redes sociais
global $facebook;
global $twitter;
global $youtube;
global $instagram;
global $pinterest;
global $flickr;
global $foursquare;
global $gplus;
global $outra;
// Titles
global $title_categorias;
global $title_mapa;
global $title_monumentos;
global $title_informacoes;
global $title_siga;
global $title_porperto;
global $title_vejamais;
global $title_aviso;
// Audios
global $audio_pt;
global $audio_en;
global $audio_es;
global $titulo_pt;
global $titulo_en;
global $titulo_es;
// Video
global $video_pt;
global $video_en;
global $video_es;
// Slider
global $slider_img1;
global $slider_desc1;
global $slider_img2;
global $slider_desc2;
global $slider_img3;
global $slider_desc3;
global $slider_img4;
global $slider_desc4;



// Pega o SLUG da taxonomia idiomas e transforma em variavel
$terms = wp_get_object_terms($post->ID, 'idioma');
if (!empty($terms)) :
    $tipo = array();
    foreach ($terms as $term) {
        $tipo = $term->slug;
    }
endif;

// Tradução categorias
if ($tipo == en) {
    $idioma = en;
    $idiomaSlug = 'en';
    // titles
    $cat_arquiteturahistorica = 'Historic Architecture';
    $cat_arquiteturareligiosa = 'Religious Architecture';
    $cat_biblioteca = 'Library';
    $cat_centrodecultura = 'Cultural Center';
    $cat_monumento = 'Monument';
    $cat_museu = 'Museum';
    $cat_parque = 'Park';
    $cat_patrimôniocultural = 'Cultural Heritage';
    $cat_praca = 'Square';
    $cat_teatro = 'Theater';

} elseif ($tipo == es) {
    $idioma = es;
    $idiomaSlug = 'es';
    // titles
    $title_categorias = 'Categor&iacute;as';
    $title_mapa = 'Mapa';
    $title_monumentos = 'Monumentos';
    $title_informacoes = '+ Informaci&oacute;n';
    $title_siga = 'Seguir!';
    $title_porperto = '+ Muy Cerca';
    $title_vejamais = '+ Ver M&aacute;s';
    $title_aviso = 'Este sitio web es exclusiva para los dispositivos m&oacute;viles!';
} else {
    $idioma = pt;
    $idiomaSlug = 'pt';
    // titles
    $title_categorias = 'Categorias';
    $title_mapa = 'Mapa';
    $title_monumentos = 'Monumentos';
    $title_informacoes = '+ Informa&ccedil;&otilde;es';
    $title_siga = 'Siga!';
    $title_porperto = '+ Por perto';
    $title_vejamais = '+ Veja Mais';
    $title_aviso = 'Este site &eacute; exclusivo para dispositivos m&oacute;veis!';
}








// Transoformando as variaveis de acordo com os idiomas
if ($tipo == en) {
    $idioma = en;
    $idiomaSlug = 'en';
    // titles
    $title_categorias = 'Categories';
    $title_mapa = 'Maps';
    $title_monumentos = 'Monuments';
    $title_informacoes = '+ Information';
    $title_siga = 'Follow!';
    $title_porperto = '+ Close By';
    $title_vejamais = '+ See More';
    $title_aviso = 'This website is exclusive for mobile devices!';
} elseif ($tipo == es) {
    $idioma = es;
    $idiomaSlug = 'es';
    // titles
    $title_categorias = 'Categor&iacute;as';
    $title_mapa = 'Mapa';
    $title_monumentos = 'Monumentos';
    $title_informacoes = '+ Informaci&oacute;n';
    $title_siga = 'Seguir!';
    $title_porperto = '+ Muy Cerca';
    $title_vejamais = '+ Ver M&aacute;s';
    $title_aviso = 'Este sitio web es exclusiva para los dispositivos m&oacute;viles!';
} else {
    $idioma = pt;
    $idiomaSlug = 'pt';
    // titles
    $title_categorias = 'Categorias';
    $title_mapa = 'Mapa';
    $title_monumentos = 'Monumentos';
    $title_informacoes = '+ Informa&ccedil;&otilde;es';
    $title_siga = 'Siga!';
    $title_porperto = '+ Por perto';
    $title_vejamais = '+ Veja Mais';
    $title_aviso = 'Este site &eacute; exclusivo para dispositivos m&oacute;veis!';
}



// ID´s das Paginas
$PracaRoosevelt_PT = 462;
$PracaRoosevelt_EN = 482;
$PracaRoosevelt_ES = 483;

$boulevardsaojoao_PT = 388;
$boulevardsaojoao_EN = 497;
$boulevardsaojoao_ES = 502;

$largosaobento_PT = 401;
$largosaobento_EN = 503;
$largosaobento_ES = 505;

$largosaofrancisco_PT = 406; 
$largosaofrancisco_EN = 507;
$largosaofrancisco_ES = 508; 

$largodoarouche_PT = 391;
$largodoarouche_EN = 509;
$largodoarouche_ES = 511;

$largodocafe_PT = 24;
$largodocafe_EN = 512;
$largodocafe_ES = 516;

$largodopaissandu_PT = 396;
$largodopaissandu_EN = 518;
$largodopaissandu_ES = 521;

$pateodocollegio_PT = 411;
$pateodocollegio_EN = 522;
$pateodocollegio_ES = 523;

$pracacoronelfernandoprestes_PT = 421;
$pracacoronelfernandoprestes_EN = 528;
$pracacoronelfernandoprestes_ES = 529;

$pracadaliberdade_PT = 426;
$pracadaliberdade_EN = 531;
$pracadaliberdade_ES = 532;

$pracadaluz_PT = 432;
$pracadaluz_EN = 534;
$pracadaluz_ES = 535;

$pracadarepublica_PT = 436;
$pracadarepublica_EN = 537;
$pracadarepublica_ES = 539;

$pracadase_PT = 21;
$pracadase_EN = 540;
$pracadase_ES = 541;

$pracadopatriarca_PT = 437;
$pracadopatriarca_EN = 543;
$pracadopatriarca_ES = 544;

$pracadomjosegaspar_PT = 446;
$pracadomjosegaspar_EN = 545;
$pracadomjosegaspar_ES = 547;

$pracajulioprestes_PT = 450;
$pracajulioprestes_EN = 549;
$pracajulioprestes_ES = 551;

$pracaramosdeazevedo_PT = 456;
$pracaramosdeazevedo_EN = 553;
$pracaramosdeazevedo_ES = 554;

$valedoanhangabau_PT = 23;
$valedoanhangabau_EN = 556;
$valedoanhangabau_ES = 559;

$becopinto_PT = 139;
$becopinto_EN = 561;
$becopinto_ES = 562;

$bibliotecamariodeandrade_PT = 202;
$bibliotecamariodeandrade_EN = 563;
$bibliotecamariodeandrade_ES = 564;

$caixacultural_PT = 207;
$caixacultural_EN = 567;
$caixacultural_ES = 568;

$casadaboia_PT = 212;
$casadaboia_EN = 570;
$casadaboia_ES = 572;

$casadaimagem_PT = 217;
$casadaimagem_EN = 573;
$casadaimagem_ES = 574;

$catavento_PT = 221; 
$catavento_EN = 575;
$catavento_ES = 576;

$catedraldase_PT = 226;
$catedraldase_EN = 577;
$catedraldase_ES = 578;

$ccbb_PT = 231;
$ccbb_EN = 579;
$ccbb_ES = 580;

$conjuntofranciscano_PT = 236;
$conjuntofranciscano_EN = 581;
$conjuntofranciscano_ES = 582;

$edificioalexandremackenzie_PT = 241;
$edificioalexandremackenzie_EN = 583;
$edificioalexandremackenzie_ES = 584;

$edificioaltinoarantes_PT = 246;
$edificioaltinoarantes_EN = 585;
$edificioaltinoarantes_ES = 586;

$edificiocopan_PT = 251;
$edificiocopan_EN = 588;
$edificiocopan_ES = 589;

$prediohistoricodoscorreios_PT = 368;
$prediohistoricodoscorreios_EN = 590;
$prediohistoricodoscorreios_ES = 592;

$edificioitalia_PT = 22;
$edificioitalia_EN = 594;
$edificioitalia_ES = 595;

$edificiomartinelli_PT = 261; 
$edificiomartinelli_EN = 597;
$edificiomartinelli_ES = 598;

$edificiomatarazzo_PT = 266; 
$edificiomatarazzo_EN = 600;
$edificiomatarazzo_ES = 602;

$BMFBOVESPA_PT = 271;
$BMFBOVESPA_EN = 603;
$BMFBOVESPA_ES = 605;

$estacaodaluz_PT = 158; 
$estacaodaluz_EN = 606;
$estacaodaluz_ES = 608;

$estacaojulioprestes_PT = 25; 
$estacaojulioprestes_EN = 610;
$estacaojulioprestes_ES = 611;

$estacaopinacoteca_PT = 173;
$estacaopinacoteca_EN = 552;
$estacaopinacoteca_ES = 555;

$faculdadededireitodaUSP_PT = 276;
$faculdadededireitodaUSP_EN = 616;
$faculdadededireitodaUSP_ES = 617;

$galeriaolido_PT = 280;
$galeriaolido_EN = 619;
$galeriaolido_ES = 620;

$galeriaprestesmaia_PT = 285;
$galeriaprestesmaia_EN = 622;
$galeriaprestesmaia_ES = 623;

$galeriadorock_PT = 290;
$galeriadorock_EN = 625;    
$galeriadorock_ES = 626;

$igrejaordemnossasenhoracarmo_PT = 295;
$igrejaordemnossasenhoracarmo_EN = 628;
$igrejaordemnossasenhoracarmo_ES = 629;

$igrejadesantaifigenia_PT = 118;
$igrejadesantaifigenia_EN = 631;
$igrejadesantaifigenia_ES = 632;

$igrejasantoantonio_PT = 300;
$igrejasantoantonio_EN = 634;
$igrejasantoantonio_ES = 635;

$igrejabeatoanchieta_PT = 129;
$igrejabeatoanchieta_EN = 639;
$igrejabeatoanchieta_ES = 640;

$igrejansrarosariohomenspretos_PT = 305;
$igrejansrarosariohomenspretos_EN = 645;
$igrejansrarosariohomenspretos_ES = 646;

$igrejansradaboamorte_PT = 310;
$igrejansradaboamorte_EN = 643;
$igrejansradaboamorte_ES = 644;

$igrejansradaconsolacao_PT = 315;
$igrejansradaconsolacao_EN = 641;
$igrejansradaconsolacao_ES = 642;

$largodamemoria_PT = 320;
$largodamemoria_EN = 633;
$largodamemoria_ES = 636;

$mercadodeflores_PT = 321; 
$mercadodeflores_EN = 627;
$mercadodeflores_ES = 630;

$mercadomunicipal_PT = 143; 
$mercadomunicipal_EN = 621; 
$mercadomunicipal_ES = 624;

 $mosteirodesaobento_PT = 9;
 $mosteirodesaobento_EN = 615;
 $mosteirodesaobento_ES = 618;

 $museuanchieta_PT = 134;
 $museuanchieta_EN = 609;
 $museuanchieta_ES = 613;

 $museudaenergia_PT = 191;
 $museudaenergia_EN = 604;
 $museudaenergia_ES = 607;

 $museudotribunaldejustica_PT = 328;
 $museudotribunaldejustica_EN = 599;
 $museudotribunaldejustica_ES = 601;

 $museulinguaportuguesa_PT = 163;
 $museulinguaportuguesa_EN = 593;
 $museulinguaportuguesa_ES = 596;

$museuartesacra_PT = 196;
$museuartesacra_EN = 587;
$museuartesacra_ES = 591;

$palaciojustica_PT = 333;
$palaciojustica_EN = 566;
$palaciojustica_ES = 571;

$parquedaluz_PT = 165;
$parquedaluz_EN = 557;
$parquedaluz_ES = 560;

$pinacotecaestado_PT = 152;
$pinacotecaestado_EN = 612;
$pinacotecaestado_ES = 614;

$pracadasartes_PT = 338;
$pracadasartes_EN = 546;
$pracadasartes_ES = 548;

$salasaopaulo_PT = 178;
$salasaopaulo_EN = 538;
$salasaopaulo_ES = 542;

$secretariaestadojusticadefesacidadania_PT = 343;
$secretariaestadojusticadefesacidadania_EN = 530;
$secretariaestadojusticadefesacidadania_ES = 533;

$solarmarquesadesantos_PT = 348;
$solarmarquesadesantos_EN = 515;
$solarmarquesadesantos_ES = 517;

$teatromunicipal_PT = 353;
$teatromunicipal_EN = 524;
$teatromunicipal_ES = 526;

$tribunaldejustica_PT = 358;
$tribunaldejustica_EN = 513;
$tribunaldejustica_ES = 514;

$viadutoboavista_PT = 359;
$viadutoboavista_EN = 506;
$viadutoboavista_ES = 510;

$viadutodocha_PT = 26; 
$viadutodocha_EN = 500;
$viadutodocha_ES = 504;

$viadutosantaifigenia_PT = 123; 
$viadutosantaifigenia_EN = 498;
$viadutosantaifigenia_ES = 499;

$antigo_banco_de_sao_paulo_PT = 100; 
$antigo_banco_de_sao_paulo_EN = 725;
$antigo_banco_de_sao_paulo_ES = 728;

$pracaantonioprado_PT = 416; 
$pracaantonioprado_EN = 525; 
$pracaantonioprado_ES = 527; 



    





// Verificando URL´S para a montagem dos links das bandeiras 
if (is_single($PracaRoosevelt_PT) || is_single($PracaRoosevelt_EN) || is_single($PracaRoosevelt_ES)) {
    $link_pt = $PracaRoosevelt_PT;
    $link_en = $PracaRoosevelt_EN;
    $link_es = $PracaRoosevelt_ES;
} elseif (is_single($boulevardsaojoao_PT) || is_single($boulevardsaojoao_EN) || is_single($boulevardsaojoao_ES)) {
    $link_pt = $boulevardsaojoao_PT;
    $link_en = $boulevardsaojoao_EN;
    $link_es = $boulevardsaojoao_ES;
} elseif (is_single($largosaobento_PT) || is_single($largosaobento_EN) || is_single($largosaobento_ES)) {
    $link_pt = $largosaobento_PT;
    $link_en = $largosaobento_EN;
    $link_es = $largosaobento_ES;
} elseif (is_single($largosaofrancisco_PT) || is_single($largosaofrancisco_EN) || is_single($largosaofrancisco_ES)) {
    $link_pt = $largosaofrancisco_PT;
    $link_en = $largosaofrancisco_EN;
    $link_es = $largosaofrancisco_ES;
} elseif (is_single($largodocafe_PT) || is_single($largodocafe_EN) || is_single($largodocafe_ES)) {
    $link_pt = $largodocafe_PT;
    $link_en = $largodocafe_EN;
    $link_es = $largodocafe_ES;
} elseif (is_single($largodopaissandu_PT) || is_single($largodopaissandu_EN) || is_single($largodopaissandu_ES)) {
    $link_pt = $largodopaissandu_PT;
    $link_en = $largodopaissandu_EN;
    $link_es = $largodopaissandu_ES;
} elseif (is_single($pateodocollegio_PT) || is_single($pateodocollegio_EN) || is_single($pateodocollegio_ES)) {
    $link_pt = $pateodocollegio_PT;
    $link_en = $pateodocollegio_EN;
    $link_es = $pateodocollegio_ES;
} elseif (is_single($pracacoronelfernandoprestes_PT) || is_single($pracacoronelfernandoprestes_EN) || is_single($pracacoronelfernandoprestes_ES)) {
    $link_pt = $pracacoronelfernandoprestes_PT;
    $link_en = $pracacoronelfernandoprestes_EN;
    $link_es = $pracacoronelfernandoprestes_ES;
} elseif (is_single($pracadaliberdade_PT) || is_single($pracadaliberdade_EN) || is_single($pracadaliberdade_ES)) {
    $link_pt = $pracadaliberdade_PT;
    $link_en = $pracadaliberdade_EN;
    $link_es = $pracadaliberdade_ES;
} elseif (is_single($pracadaluz_PT) || is_single($pracadaluz_EN) || is_single($pracadaluz_ES)) {
    $link_pt = $pracadaluz_PT;
    $link_en = $pracadaluz_EN;
    $link_es = $pracadaluz_ES;
} elseif (is_single($pracadarepublica_PT) || is_single($pracadarepublica_EN) || is_single($pracadarepublica_ES)) {
    $link_pt = $pracadarepublica_PT;
    $link_en = $pracadarepublica_EN;
    $link_es = $pracadarepublica_ES;
} elseif (is_single($pracadase_PT) || is_single($pracadase_EN) || is_single($pracadase_ES)) {
    $link_pt = $pracadase_PT;
    $link_en = $pracadase_EN;
    $link_es = $pracadase_ES;
} elseif (is_single($pracadopatriarca_PT) || is_single($pracadopatriarca_EN) || is_single($pracadopatriarca_ES)) {
    $link_pt = $pracadopatriarca_PT;
    $link_en = $pracadopatriarca_EN;
    $link_es = $pracadopatriarca_ES;
} elseif (is_single($pracadomjosegaspar_PT) || is_single($pracadomjosegaspar_EN) || is_single($pracadomjosegaspar_ES)) {
    $link_pt = $pracadomjosegaspar_PT;
    $link_en = $pracadomjosegaspar_EN;
    $link_es = $pracadomjosegaspar_ES;
} elseif (is_single($pracajulioprestes_PT) || is_single($pracajulioprestes_EN) || is_single($pracajulioprestes_ES)) {
    $link_pt = $pracajulioprestes_PT;
    $link_en = $pracajulioprestes_EN;
    $link_es = $pracajulioprestes_ES;
} elseif (is_single($pracaramosdeazevedo_PT) || is_single($pracaramosdeazevedo_EN) || is_single($pracaramosdeazevedo_ES)) {
    $link_pt = $pracaramosdeazevedo_PT;
    $link_en = $pracaramosdeazevedo_EN;
    $link_es = $pracaramosdeazevedo_ES;
} elseif (is_single($valedoanhangabau_PT) || is_single($valedoanhangabau_EN) || is_single($valedoanhangabau_ES)) {
    $link_pt = $valedoanhangabau_PT;
    $link_en = $valedoanhangabau_EN;
    $link_es = $valedoanhangabau_ES;
} elseif (is_single($becopinto_PT) || is_single($becopinto_EN) || is_single($becopinto_ES)) {
    $link_pt = $becopinto_PT;
    $link_en = $becopinto_EN;
    $link_es = $becopinto_ES;
} elseif (is_single($bibliotecamariodeandrade_PT) || is_single($bibliotecamariodeandrade_EN) || is_single($bibliotecamariodeandrade_ES)) {
    $link_pt = $bibliotecamariodeandrade_PT;
    $link_en = $bibliotecamariodeandrade_EN;
    $link_es = $bibliotecamariodeandrade_ES;
} elseif (is_single($caixacultural_PT) || is_single($caixacultural_EN) || is_single($caixacultural_ES)) {
    $link_pt = $caixacultural_PT;
    $link_en = $caixacultural_EN;
    $link_es = $caixacultural_ES;
} elseif (is_single($casadaboia_PT) || is_single($casadaboia_EN) || is_single($casadaboia_ES)) {
    $link_pt = $casadaboia_PT;
    $link_en = $casadaboia_EN;
    $link_es = $casadaboia_ES;
} elseif (is_single($casadaimagem_PT) || is_single($casadaimagem_EN) || is_single($casadaimagem_ES)) {
    $link_pt = $casadaimagem_PT;
    $link_en = $casadaimagem_EN;
    $link_es = $casadaimagem_ES;
} elseif (is_single($catavento_PT) || is_single($catavento_EN) || is_single($catavento_ES)) {
    $link_pt = $catavento_PT;
    $link_en = $catavento_EN;
    $link_es = $catavento_ES;
} elseif (is_single($catedraldase_PT) || is_single($catedraldase_EN) || is_single($catedraldase_ES)) {
    $link_pt = $catedraldase_PT;
    $link_en = $catedraldase_EN;
    $link_es = $catedraldase_ES;
} elseif (is_single($ccbb_PT) || is_single($ccbb_EN) || is_single($ccbb_ES)) {
    $link_pt = $ccbb_PT;
    $link_en = $ccbb_EN;
    $link_es = $ccbb_ES;
} elseif (is_single($conjuntofranciscano_PT) || is_single($conjuntofranciscano_EN) || is_single($conjuntofranciscano_ES)) {
    $link_pt = $conjuntofranciscano_PT;
    $link_en = $conjuntofranciscano_EN;
    $link_es = $conjuntofranciscano_ES;
} elseif (is_single($edificioalexandremackenzie_PT) || is_single($edificioalexandremackenzie_EN) || is_single($edificioalexandremackenzie_ES)) {
    $link_pt = $edificioalexandremackenzie_PT;
    $link_en = $edificioalexandremackenzie_EN;
    $link_es = $edificioalexandremackenzie_ES;
} elseif (is_single($edificioaltinoarantes_PT) || is_single($edificioaltinoarantes_EN) || is_single($edificioaltinoarantes_ES)) {
    $link_pt = $edificioaltinoarantes_PT;
    $link_en = $edificioaltinoarantes_EN;
    $link_es = $edificioaltinoarantes_ES;
} elseif (is_single($edificiocopan_PT) || is_single($edificiocopan_EN) || is_single($edificiocopan_ES)) {
    $link_pt = $edificiocopan_PT;
    $link_en = $edificiocopan_EN;
    $link_es = $edificiocopan_ES;
} elseif (is_single($prediohistoricodoscorreios_PT) || is_single($prediohistoricodoscorreios_EN) || is_single($prediohistoricodoscorreios_ES)) {
    $link_pt = $prediohistoricodoscorreios_PT;
    $link_en = $prediohistoricodoscorreios_EN;
    $link_es = $prediohistoricodoscorreios_ES   ;
} elseif (is_single($edificioitalia_PT) || is_single($edificioitalia_EN) || is_single($edificioitalia_ES)) {
    $link_pt = $edificioitalia_PT;
    $link_en = $edificioitalia_EN;
    $link_es = $edificioitalia_ES;
} elseif (is_single($edificiomartinelli_PT) || is_single($edificiomartinelli_EN) || is_single($edificiomartinelli_ES)) {
    $link_pt = $edificiomartinelli_PT;
    $link_en = $edificiomartinelli_EN;
    $link_es = $edificiomartinelli_ES;
} elseif (is_single($edificiomatarazzo_PT) || is_single($edificiomatarazzo_EN) || is_single($edificiomatarazzo_ES)) {
    $link_pt = $edificiomatarazzo_PT;
    $link_en = $edificiomatarazzo_EN;
    $link_es = $edificiomatarazzo_ES;
} elseif (is_single($BMFBOVESPA_PT) || is_single($BMFBOVESPA_EN) || is_single($BMFBOVESPA_ES)) {
    $link_pt = $BMFBOVESPA_PT;
    $link_en = $BMFBOVESPA_EN;
    $link_es = $BMFBOVESPA_ES;
} elseif (is_single($estacaodaluz_PT) || is_single($estacaodaluz_EN) || is_single($estacaodaluz_ES)) {
    $link_pt = $estacaodaluz_PT;
    $link_en = $estacaodaluz_EN;
    $link_es = $estacaodaluz_ES;
}  elseif (is_single($estacaojulioprestes_PT) || is_single($estacaojulioprestes_EN) || is_single($estacaojulioprestes_ES)) {
    $link_pt = $estacaojulioprestes_PT;
    $link_en = $estacaojulioprestes_EN;
    $link_es = $estacaojulioprestes_ES;
}  elseif (is_single($estacaopinacoteca_PT) || is_single($estacaopinacoteca_EN) || is_single($estacaopinacoteca_ES)) {
    $link_pt = $estacaopinacoteca_PT;
    $link_en = $estacaopinacoteca_EN;
    $link_es = $estacaopinacoteca_ES;
}  elseif (is_single($faculdadededireitodaUSP_PT) || is_single($faculdadededireitodaUSP_EN) || is_single($faculdadededireitodaUSP_ES)) {
    $link_pt = $faculdadededireitodaUSP_PT;
    $link_en = $faculdadededireitodaUSP_EN;
    $link_es = $faculdadededireitodaUSP_ES;
}  elseif (is_single($galeriaolido_PT) || is_single($galeriaolido_EN) || is_single($galeriaolido_ES)) {
    $link_pt = $galeriaolido_PT;
    $link_en = $galeriaolido_EN;
    $link_es = $galeriaolido_ES;
}  elseif (is_single($galeriaprestesmaia_PT) || is_single($galeriaprestesmaia_EN) || is_single($galeriaprestesmaia_ES)) {
    $link_pt = $galeriaprestesmaia_PT;
    $link_en = $galeriaprestesmaia_EN;
    $link_es = $galeriaprestesmaia_ES;
}  elseif (is_single($galeriadorock_PT) || is_single($galeriadorock_EN) || is_single($galeriadorock_ES)) {
    $link_pt = $galeriadorock_PT;
    $link_en = $galeriadorock_EN;
    $link_es = $galeriadorock_ES;
}  elseif (is_single($igrejaordemnossasenhoracarmo_PT) || is_single($igrejaordemnossasenhoracarmo_EN) || is_single($igrejaordemnossasenhoracarmo_ES)) {
    $link_pt = $igrejaordemnossasenhoracarmo_PT;
    $link_en = $igrejaordemnossasenhoracarmo_EN;
    $link_es = $igrejaordemnossasenhoracarmo_ES;
} elseif (is_single($igrejadesantaifigenia_PT) || is_single($igrejadesantaifigenia_EN) || is_single($igrejadesantaifigenia_ES)) {
    $link_pt = $igrejadesantaifigenia_PT;
    $link_en = $igrejadesantaifigenia_EN;
    $link_es = $igrejadesantaifigenia_ES;
} elseif (is_single($igrejasantoantonio_PT) || is_single($igrejasantoantonio_EN) || is_single($igrejasantoantonio_ES)) {
    $link_pt = $igrejasantoantonio_PT;
    $link_en = $igrejasantoantonio_EN;
    $link_es = $igrejasantoantonio_ES;
} elseif (is_single($igrejabeatoanchieta_PT) || is_single($igrejabeatoanchieta_EN) || is_single($igrejabeatoanchieta_ES)) {
    $link_pt = $igrejabeatoanchieta_PT;
    $link_en = $igrejabeatoanchieta_EN;
    $link_es = $igrejabeatoanchieta_ES;
} elseif (is_single($igrejansrarosariohomenspretos_PT) || is_single($igrejansrarosariohomenspretos_EN) || is_single($igrejansrarosariohomenspretos_ES)) {
    $link_pt = $igrejansrarosariohomenspretos_PT;
    $link_en = $igrejansrarosariohomenspretos_EN;
    $link_es = $igrejansrarosariohomenspretos_ES;
} elseif (is_single($igrejansradaboamorte_PT) || is_single($igrejansradaboamorte_EN) || is_single($igrejansradaboamorte_ES)) {
    $link_pt = $igrejansradaboamorte_PT;
    $link_en = $igrejansradaboamorte_EN;
    $link_es = $igrejansradaboamorte_ES;
} elseif (is_single($igrejansradaconsolacao_PT) || is_single($igrejansradaconsolacao_EN) || is_single($igrejansradaconsolacao_ES)) {
    $link_pt = $igrejansradaconsolacao_PT;
    $link_en = $igrejansradaconsolacao_EN;
    $link_es = $igrejansradaconsolacao_ES;
} elseif (is_single($igrejansradaconsolacao_PT) || is_single($igrejansradaconsolacao_EN) || is_single($igrejansradaconsolacao_ES)) {
    $link_pt = $igrejansradaconsolacao_PT;
    $link_en = $igrejansradaconsolacao_EN;
    $link_es = $igrejansradaconsolacao_ES;
} elseif (is_single($largodamemoria_PT) || is_single($largodamemoria_EN) || is_single($largodamemoria_ES)) {
    $link_pt = $largodamemoria_PT;
    $link_en = $largodamemoria_EN;
    $link_es = $largodamemoria_ES;
} elseif (is_single($mercadodeflores_PT) || is_single($mercadodeflores_EN) || is_single($mercadodeflores_ES)) {
    $link_pt = $mercadodeflores_PT;
    $link_en = $mercadodeflores_EN;
    $link_es = $mercadodeflores_ES;
} elseif (is_single($mercadomunicipal_PT) || is_single($mercadomunicipal_EN) || is_single($mercadomunicipal_ES)) {
    $link_pt = $mercadomunicipal_PT;
    $link_en = $mercadomunicipal_EN;
    $link_es = $mercadomunicipal_ES;
} elseif (is_single($mosteirodesaobento_PT) || is_single($mosteirodesaobento_EN) || is_single( $mosteirodesaobento_ES)) {
    $link_pt = $mosteirodesaobento_PT;
    $link_en = $mosteirodesaobento_EN;
    $link_es = $mosteirodesaobento_ES;
} elseif (is_single($museuanchieta_PT) || is_single($museuanchieta_EN) || is_single($museuanchieta_ES)) {
    $link_pt = $museuanchieta_PT;
    $link_en = $museuanchieta_EN;
    $link_es = $museuanchieta_ES;
} elseif (is_single($museudaenergia_PT) || is_single($museudaenergia_EN) || is_single($museudaenergia_ES)) {
    $link_pt = $museudaenergia_PT;
    $link_en = $museudaenergia_EN;
    $link_es = $museudaenergia_ES;
} elseif (is_single($museudotribunaldejustica_PT) || is_single($museudotribunaldejustica_EN) || is_single($museudotribunaldejustica_ES)) {
    $link_pt = $museudotribunaldejustica_PT;
    $link_en = $museudotribunaldejustica_EN;
    $link_es = $museudotribunaldejustica_ES;
} elseif (is_single($museulinguaportuguesa_PT) || is_single($museulinguaportuguesa_EN) || is_single($museulinguaportuguesa_ES)) {
    $link_pt = $museulinguaportuguesa_PT;
    $link_en = $museulinguaportuguesa_EN;
    $link_es = $museulinguaportuguesa_ES;
} elseif (is_single($museuartesacra_PT) || is_single($museuartesacra_EN) || is_single($museuartesacra_ES)) {
    $link_pt = $museuartesacra_PT;
    $link_en = $museuartesacra_EN;
    $link_es = $museuartesacra_ES;
} elseif (is_single($palaciojustica_PT) || is_single($palaciojustica_EN) || is_single($palaciojustica_ES)) {
    $link_pt = $palaciojustica_PT;
    $link_en = $palaciojustica_EN;
    $link_es = $palaciojustica_ES;
} elseif (is_single($parquedaluz_PT) || is_single($parquedaluz_EN) || is_single($parquedaluz_ES)) {
    $link_pt = $parquedaluz_PT;
    $link_en = $parquedaluz_EN;
    $link_es = $parquedaluz_ES;
} elseif (is_single($pinacotecaestado_PT) || is_single($pinacotecaestado_EN) || is_single($pinacotecaestado_ES)) {
    $link_pt = $pinacotecaestado_PT;
    $link_en = $pinacotecaestado_EN;
    $link_es = $pinacotecaestado_ES;
} elseif (is_single($pracadasartes_PT) || is_single($pracadasartes_EN) || is_single($pracadasartes_ES)) {
    $link_pt = $pracadasartes_PT;
    $link_en = $pracadasartes_EN;
    $link_es = $pracadasartes_ES;
} elseif (is_single($salasaopaulo_PT) || is_single($salasaopaulo_EN) || is_single($salasaopaulo_ES)) {
    $link_pt = $salasaopaulo_PT;
    $link_en = $salasaopaulo_EN;
    $link_es = $salasaopaulo_ES;
} elseif (is_single($secretariaestadojusticadefesacidadania_PT) || is_single($secretariaestadojusticadefesacidadania_EN) || is_single($secretariaestadojusticadefesacidadania_ES)) {
    $link_pt = $secretariaestadojusticadefesacidadania_PT;
    $link_en = $secretariaestadojusticadefesacidadania_EN;
    $link_es = $secretariaestadojusticadefesacidadania_ES;
} elseif (is_single($solarmarquesadesantos_PT) || is_single($solarmarquesadesantos_EN) || is_single($solarmarquesadesantos_ES)) {
    $link_pt = $solarmarquesadesantos_PT;
    $link_en = $solarmarquesadesantos_EN;
    $link_es = $solarmarquesadesantos_ES;
} elseif (is_single($teatromunicipal_PT) || is_single($teatromunicipal_EN) || is_single($teatromunicipal_ES)) {
    $link_pt = $teatromunicipal_PT;
    $link_en = $teatromunicipal_EN;
    $link_es = $teatromunicipal_ES;
} elseif (is_single($tribunaldejustica_PT) || is_single($tribunaldejustica_EN) || is_single($tribunaldejustica_ES)) {
    $link_pt = $tribunaldejustica_PT;
    $link_en = $tribunaldejustica_EN;
    $link_es = $tribunaldejustica_ES;
} elseif (is_single($viadutoboavista_PT) || is_single($viadutoboavista_EN) || is_single($viadutoboavista_ES)) {
    $link_pt = $viadutoboavista_PT;
    $link_en = $viadutoboavista_EN;
    $link_es = $viadutoboavista_ES;
} elseif (is_single($viadutodocha_PT) || is_single($viadutodocha_EN) || is_single($viadutodocha_ES)) {
    $link_pt = $viadutodocha_PT;
    $link_en = $viadutodocha_EN;
    $link_es = $viadutodocha_ES;
} elseif (is_single($viadutosantaifigenia_PT) || is_single($viadutosantaifigenia_EN) || is_single($viadutosantaifigenia_ES)) {
    $link_pt = $viadutosantaifigenia_PT;
    $link_en = $viadutosantaifigenia_EN;
    $link_es = $viadutosantaifigenia_ES;
} elseif (is_single($antigo_banco_de_sao_paulo_PT) || is_single($antigo_banco_de_sao_paulo_EN) || is_single($antigo_banco_de_sao_paulo_ES)) {
    $link_pt = $antigo_banco_de_sao_paulo_PT;
    $link_en = $antigo_banco_de_sao_paulo_EN;
    $link_es = $antigo_banco_de_sao_paulo_ES;
} elseif (is_single($largodoarouche_PT) || is_single($largodoarouche_EN) || is_single($largodoarouche_ES)) {
    $link_pt = $largodoarouche_PT;
    $link_en = $largodoarouche_EN;
    $link_es = $largodoarouche_ES;
} elseif (is_single($pracaantonioprado_PT) || is_single($pracaantonioprado_EN) || is_single($pracaantonioprado_ES)) {
    $link_pt = $pracaantonioprado_PT;
    $link_en = $pracaantonioprado_EN;
    $link_es = $pracaantonioprado_ES;
}

// Monta link para os botoes de traducao
$url_site = get_bloginfo('url');
$monta_link_pt = $url_site . '/?page_id=' . $link_pt;
$monta_link_en = $url_site . '/?page_id=' . $link_en;
$monta_link_es = $url_site . '/?page_id=' . $link_es;





// cria variavel global para a query
global $ref_id;
$ref_id = $link_pt;

// Faz a query
if ($ref_id) {
    $args = array(
        p => $ref_id,
    );
    $queryPT = new WP_Query($args);
    while ($queryPT->have_posts()) : $queryPT->the_post();

        // Pega os dados dos audios
        $audio_pt = get_field('audio_pt');
        $audio_en = get_field('audio_en');
        $audio_es = get_field('audio_es');
        $titulo_pt = get_field('titulo_pt');
        $titulo_en = get_field('titulo_en');
        $titulo_es = get_field('titulo_es');
        // pega os dados dos videos
        $video_pt = get_field('video_pt');
        $video_en = get_field('video_en');
        $video_es = get_field('video_es');
        // Pega os dados do Slider
        $slider_img1 = get_field('slider_img1');
        $slider_desc1 = get_field('slider_desc1');
        $slider_img2 = get_field('slider_img2');
        $slider_desc2 = get_field('slider_desc2');
        $slider_img3 = get_field('slider_img3');
        $slider_desc3 = get_field('slider_desc3');
        $slider_img4 = get_field('slider_img4');
        $slider_desc4 = get_field('slider_desc4');
       
        // Pega os dados das Redes sociais
        $facebook = get_field('facebook');
        $twitter = get_field('twitter');
        $youtube = get_field('youtube');
        $instagram = get_field('instagram');
        $pinterest = get_field('pinterest');
        $flickr = get_field('flickr');
        $foursquare = get_field('foursquare');
        $gplus = get_field('gplus');
        $outra = get_field('outra');

    endwhile;
    wp_reset_query();
} else {
    
}
?>