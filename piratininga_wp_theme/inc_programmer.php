<?php

//------------------------------------
//------------ GERAL -----------
//------------------------------------
if (is_home()) {
    $getPermalink = get_bloginfo('wpurl') . '/';
    $isHome = 'homeDisplayNone';
} else {
    $getPermalink = get_permalink();
    $isHome = '';
}
//------------------------------------
//
//
//
//
//------------------------------------
//------------ SIDEBAR -----------
//------------------------------------
$sidebarInclude = $_SERVER['DOCUMENT_ROOT'];
$sidebarInclude .= '/csp/wp-content/themes/piratininga_wp_theme/inc_sidebar.php';
//------------------------------------
//
//
//
//
//------------------------------------
//------------ POST TYPES ------------
//------------------------------------
$pty_pqsp = 'pqsp';
$pty_historia = 'historia';
$pty_linhatempo = 'linhatempo';
//------------
$pty_planeje = 'planeje';
$pty_agencias = 'agencias';
$pty_hoteis = 'hoteis';
//------------
$pty_vivasp = 'vivasp';
$pty_compras = 'compras';
$pty_roteirosape = 'roteirosape';
$pty_roteirospoeperiodo = 'roteirosporperiodo';
$pty_roteirosportema = 'roteirosportema';
$pty_roteirosporregiao = 'roteirosporregiao';
//$pty_roteirosguiados = 'roteirosguiados';
$pty_atrativos = 'atrativos';
//------------
$pty_acontece = 'acontece';
$pty_agenda = 'agenda';
$pty_novidades = 'novidades';
$pty_dicas = 'dicas';
//------------
$pty_institucional = 'institucional';
$pty_parceiros = 'parceiros';
$pty_downloadscsp = 'downloadscsp';
$pty_comtur = 'comtur';
//------------
$pty_sliderhome = 'sliderhome';
$pty_destaqueshome = 'destaqueshome';
$pty_testesab = 'testesab';
$pty_newsletters = 'newsletters';
$pty_citacoes = 'citacoes';
//------------
global $getPty;
$getPty = get_post_type();
//------------------------------------
//
//
//
//
//------------------------------------
//------------ TAXONOMIAS -----------
//------------------------------------
$tax_teiroscategorias = 'teiroscategorias';
$tax_roteirosagencias = 'roteirosagencias';
$tax_hoteltipo = 'hoteltipo';
$tax_novidadescat = 'novidadescat';
$tax_downloadslang = 'downloadslang';
$tax_dicasprofissa = 'dicasprofissa';
$tax_dicasalfabeto = 'dicasalfabeto';
//------------------------------------
//
//
//
//
//------------------------------------
//------------ SINGLE ID`S -----------
//------------------------------------
$lpg_1_pqsp = 33;
$lpg_1_historia = 34;
$lpg_1_dadosefatos = 35;
$lpg_1_passeiovirtual = 36;
$lpg_1_linhadotempo = 37;
$lpg_1_razoes = 366;
//------------
$lpg_2_planeje = 42;
$lpg_2_mapadacidade = 44;
$lpg_2_mapainterativo = 45;
$lpg_2_comochegar = 46;
$lpg_2_ondeficar = 47;
$lpg_2_listahoteis = 48;
$lpg_2_triphoteis = 49;
$lpg_2_guiapratico = 50;
$lpg_2_transporteurbano = 51;
$lpg_2_agencias = 52;
//------------
$lpg_3_vivasp = 53;
$lpg_3_pontosturisticos = 54;
$lpg_3_compras = 55;
//$lpg_3_comprasfeiras = 56;
//$lpg_3_comprasoutlet = 57;
//$lpg_3_comprasluxo = 58;
//$lpg_3_comprasruas = 59;
//$lpg_3_comprasartesanato = 60;
//$lpg_3_comprasshoppings = 61;
//$lpg_3_compraspopular = 62;
$lpg_3_comerebeber = 63;
$lpg_3_tripcomerebeber = 64;
$lpg_3_noite = 65;
$lpg_3_tripnoite = 66;
$lpg_3_cultura = 67;
$lpg_3_esporte = 68;
$lpg_3_muitomaissp = 69;
$lpg_3_fiquemaisumdia = 70;
$lpg_3_arredores = 71;
$lpg_3_roteiros = 72;
$lpg_3_roteirostematicos = 73;
$lpg_3_roteirosporregiao = 74;
$lpg_3_roteirosguiados = 75;
$lpg_3_roteirosape = 76;
$lpg_3_roteirospoeperiodo = 77;
//
$lpg_3_roteiros_arteurbana = 689;
$lpg_3_roteiros_ipiranga = 682;
//------------
$lpg_4_acontece = 79;
$lpg_4_agenda = 80;
$lpg_4_novidades = 81;
$lpg_4_dicas = 82;
//------------
$lpg_5_institucional = 83;
$lpg_5_trade = 84;
$lpg_5_quemsomos = 85;
$lpg_5_app = 86;
$lpg_5_downloads = 87;
$lpg_5_famtour = 88;
$lpg_5_siteinspection = 792;
$lpg_5_comtur = 89;
$lpg_5_presstrips = 90;
$lpg_5_faleconosco = 91;
$lpg_5_privacidade = 92;
$lpg_5_parceiros = 93;
$lpg_5_faq = 583;
$lpg_5_sejaumparceiro = 865;
//------------
global $lpgID;
$lpgID = get_the_ID();
//------------------------------------
//
//
//
//
//------------------------------------
//------------ CORES POST TYPES ------
//------------------------------------
$cor_azul = array($pty_pqsp, $pty_historia, $pty_linhatempo);
$cor_amarelo = array($pty_planeje, $pty_agencias, $pty_hoteis);
$cor_vermelho = array($pty_vivasp, $pty_compras, $pty_roteirosape, $pty_roteirospoeperiodo, $pty_roteirosportema, $pty_roteirosporregiao, $pty_roteirosguiados, $pty_atrativos);
$cor_verde = array($pty_acontece, $pty_dicas);
$cor_azulclaro = array($pty_institucional, $pty_parceiros, $pty_downloadscsp);
$cor_semcor = array($pty_sliderhome, $pty_destaqueshome, $pty_testesab, $pty_newsletters, $pty_citacoes);
//------------
global $pty;
$pty = 0;
//------------
if ($getPty == $pty_pqsp || $getPty == $pty_historia || $getPty == $pty_linhatempo || is_404() || is_search()) {
    $pty = 1;
    $pty_cor = 'azul';
    $cssCorText = 'color: #133F6B;';
    $cssCorFundo = 'background-color: #133F6B;';
    $cssCorFundoDark = 'background-color: #032742;';
    $css_noAzul = '';
    $css_noAmarelo = 'visibility: hidden;';
    $css_noVermelho = 'visibility: hidden;';
    $css_noVerde = 'visibility: hidden;';
    $css_noAzulClaro = 'visibility: hidden;';
    $css_noSemCor = 'visibility: hidden;';
} elseif ($getPty == $pty_planeje || $getPty == $pty_agencias || $getPty == $pty_hoteis) {
    $pty = 2;
    $pty_cor = 'amarelo';
    $cssCorText = 'color: #FBB814;';
    $cssCorFundo = 'background-color: #FBB814;';
    $cssCorFundoDark = 'background-color: #F79D1F;';
    $css_noAzul = 'visibility: hidden;';
    $css_noAmarelo = '';
    $css_noVermelho = 'visibility: hidden;';
    $css_noVerde = 'visibility: hidden;';
    $css_noAzulClaro = 'visibility: hidden;';
    $css_noSemCor = 'visibility: hidden;';
} elseif ($getPty == $pty_vivasp || $getPty == $pty_compras || $getPty == $pty_roteirosape || $getPty == $pty_roteirospoeperiodo ||
        $getPty == $pty_roteirosportema || $getPty == $pty_roteirosporregiao || $getPty == $pty_atrativos || $getPty == $pty_roteirosguiados) {
    $pty = 3;
    $pty_cor = 'vermelho';
    $cssCorText = 'color: #E91F3D;';
    $cssCorFundo = 'background-color: #E91F3D;';
    $cssCorFundoDark = 'background-color: #C21F3D;';
    $css_noAzul = 'visibility: hidden;';
    $css_noAmarelo = 'visibility: hidden;';
    $css_noVermelho = '';
    $css_noVerde = 'visibility: hidden;';
    $css_noAzulClaro = 'visibility: hidden;';
    $css_noSemCor = 'visibility: hidden;';
    $getPtyGlobal = 'vermelho';
} elseif ($getPty == $pty_acontece || $getPty == $pty_dicas || $getPty == $pty_novidades || $getPty == $pty_agenda) {
    $pty = 4;
    $pty_cor = 'verde';
    $cssCorText = 'color: #65BB46;';
    $cssCorFundo = 'background-color: #65BB46;';
    $cssCorFundoDark = 'background-color: #5BA344;';
    $css_noAzul = 'visibility: hidden;';
    $css_noAmarelo = 'visibility: hidden;';
    $css_noVermelho = 'visibility: hidden;';
    $css_noVerde = '';
    $css_noAzulClaro = 'visibility: hidden;';
    $css_noSemCor = 'visibility: hidden;';
} elseif ($getPty == $pty_institucional || $getPty == $pty_parceiros || $getPty == $pty_downloadscsp) {
    $pty = 5;
    $pty_cor = 'azulClaro';
    $cssCorText = 'color: #1887C9;';
    $cssCorFundo = 'background-color: #1887C9;';
    $cssCorFundoDark = 'background-color: #1675A5;';
    $css_noAzul = 'visibility: hidden;';
    $css_noAmarelo = 'visibility: hidden;';
    $css_noVermelho = 'visibility: hidden;';
    $css_noVerde = 'visibility: hidden;';
    $css_noAzulClaro = '';
    $css_noSemCor = 'visibility: hidden;';
} elseif ($getPty == $pty_sliderhome || $getPty == $pty_destaqueshome || $getPty == $pty_testesab || $getPty == $pty_newsletters || $getPty == $pty_citacoes || is_home()) {
    $pty = 6;
    $pty_cor = '';
    $cssCorText = '';
    $cssCorFundo = '';
    $cssCorFundoDark = '';
    $css_noAzul = '';
    $css_noAmarelo = '';
    $css_noVermelho = '';
    $css_noVerde = '';
    $css_noAzulClaro = '';
    $css_noSemCor = '';
} else {
    $pty = 0;
    $cssCorText = '';
    $cssCorFundo = '';
    $cssCorFundoDark = '';
    $css_noAzul = '';
    $css_noAmarelo = '';
    $css_noVermelho = '';
    $css_noVerde = '';
    $css_noAzulClaro = '';
    $css_noSemCor = '';
}
//------------------------------------
//
//
//
//
//------------------------------------
//------------ IDIOMA ----------------
//------------------------------------
// 
global $idioma;
$idioma = 1;
$idiomaGet = $_GET['lang'];
if ($idiomaGet == 'pt') {
    $idioma = 1;
    $idiomaURL = '?lang=pt';
    //
    $idioma_interface_menu = 'Menu';
    $idioma_interface_idioma = 'Portugu&ecirc;s';
    $idioma_interface_busca = 'Buscar';
    $idioma_interface_mobMenuBack = 'Voltar para o conte&uacute;do';
    //
    $idioma_interface_title_pqsp = 'Porque S&atilde;o Paulo';
    $idioma_interface_title_planeje = 'Sua Viagem';
    $idioma_interface_title_vivasp = 'Viva S&atilde;o Paulo';
    $idioma_interface_title_acontece = 'Acontece';
    $idioma_interface_title_institucional = 'Institucional';
    //
    $idioma_interface_mobile_pqsp = 'Porque<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_planeje = 'Sua<br/>Viagem';
    $idioma_interface_mobile_vivasp = 'Viva<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_acontece = 'Acontece<br/>Aqui';
} elseif ($idiomaGet == 'en') {
    $idioma = 2;
    $idiomaURL = '?lang=en';
    //
    $idioma_interface_menu = 'Menu';
    $idioma_interface_idioma = 'English';
    $idioma_interface_busca = 'Search';
    $idioma_interface_mobMenuBack = 'Back to content';
    //
    $idioma_interface_title_pqsp = 'Why S&atilde;o Paulo';
    $idioma_interface_title_planeje = 'Your Trip';
    $idioma_interface_title_vivasp = 'Live S&atilde;o Paulo';
    $idioma_interface_title_acontece = 'Happens';
    $idioma_interface_title_institucional = 'Corporate';
    //
    $idioma_interface_mobile_pqsp = 'Why<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_planeje = 'Your<br/>Trip';
    $idioma_interface_mobile_vivasp = 'Live<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_acontece = 'Happens<br/>Here';
} elseif ($idiomaGet == 'es') {
    $idioma = 3;
    $idiomaURL = '?lang=es';
    //
    $idioma_interface_menu = 'Menu';
    $idioma_interface_idioma = 'Espa&ntilde;ol';
    $idioma_interface_busca = 'Buscar';
    $idioma_interface_mobMenuBack = 'Volver a la p&aacute;gina';
    //
    $idioma_interface_title_pqsp = 'Qu&eacute; S&atilde;o Paulo';
    $idioma_interface_title_planeje = 'Su Viaje';
    $idioma_interface_title_vivasp = 'Viva S&atilde;o Paulo';
    $idioma_interface_title_acontece = 'Sucede';
    $idioma_interface_title_institucional = 'Institucionales';
    //
    $idioma_interface_mobile_pqsp = 'Qu&eacute;<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_planeje = 'Su<br/>Viaje';
    $idioma_interface_mobile_vivasp = 'Viva<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_acontece = 'Sucede<br/>Ac&aacute;';
} else {
    $idioma = 1;
    $idiomaURL = '?lang=pt';
    //
    $idioma_interface_menu = 'Menu';
    $idioma_interface_idioma = 'Portugu&ecirc;s';
    $idioma_interface_busca = 'Buscar';
    $idioma_interface_mobMenuBack = 'Voltar para o conte&uacute;do';
    //
    $idioma_interface_title_pqsp = 'Porque S&atilde;o Paulo';
    $idioma_interface_title_planeje = 'Sua Viagem';
    $idioma_interface_title_vivasp = 'Viva S&atilde;o Paulo';
    $idioma_interface_title_acontece = 'Acontece';
    $idioma_interface_title_institucional = 'Institucional';
    //
    $idioma_interface_mobile_pqsp = 'Porque<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_planeje = 'Sua<br/>Viagem';
    $idioma_interface_mobile_vivasp = 'Viva<br/>S&atilde;o Paulo';
    $idioma_interface_mobile_acontece = 'Acontece<br/>Aqui';
}
//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ FILDS IDS -------------
//------------------------------------
$lang_title_pt = 'field_5515b68cc1dde';
$lang_title_en = 'field_5515b948c1de0';
$lang_title_es = 'field_5515b948c1ddf';
$lang_content_pt = 'field_5515b976c1de1'; //obs: lang_text_pt
$lang_content_en = 'field_551b06afbe368';
$lang_content_es = 'field_551b0688be367';
//------------
//
//
//------------
$chamadasAcontece_resumo_pt = 'field_558c653b4edcf';
$chamadasAcontece_resumo_en = 'field_558c6a1784418';
$chamadasAcontece_resumo_es = 'field_558c6a1684417';
//------------
//
//
//------------
$layoutpadrao_text_pt = 'field_5579e46de297e';
$layoutpadrao_text_en = 'field_5579e54fe297f';
$layoutpadrao_text_es = 'field_5579e551e2980';
//------------
//
//
//------------
$guiapratico_moeda_pt = 'field_5522db5871a71';
$guiapratico_religiao_pt = 'field_5522db7f71a72';
$guiapratico_cultura_pt = 'field_5522db9871a73';
$guiapratico_visto_pt = 'field_5522dbad71a74';
$guiapratico_perguntas_pt = 'field_5522dc4971a75';
$guiapratico_frases_pt = 'field_5522dc6f71a76';
$guiapratico_clima_pt = 'field_5522dc8471a77';
$guiapratico_comida_pt = 'field_5522dc9a71a78';
$guiapratico_cits_pt = 'field_5522dcb071a79';
$guiapratico_sustentavel_pt = 'field_5522dcc371a7a';
//
$guiapratico_moeda_en = 'field_5522dd1371a7c';
$guiapratico_religiao_en = 'field_5522dd1671a7d';
$guiapratico_cultura_en = 'field_5522dd2371a7e';
$guiapratico_visto_en = 'field_5522dd2d71a7f';
$guiapratico_perguntas_en = 'field_5522dd3471a80';
$guiapratico_frases_en = 'field_5522dd3d71a81';
$guiapratico_clima_en = 'field_5522dd4471a82';
$guiapratico_comida_en = 'field_5522dd4971a83';
$guiapratico_cits_en = 'field_5522dd5971a85';
$guiapratico_sustentavel_en = 'field_5522dd5071a84';
//
$guiapratico_moeda_es = 'field_5522df1c71a91';
$guiapratico_religiao_es = 'field_5522df1371a90';
$guiapratico_cultura_es = 'field_5522df0d71a8f';
$guiapratico_visto_es = 'field_5522df0771a8e';
$guiapratico_perguntas_es = 'field_5522df0071a8d';
$guiapratico_frases_es = 'field_5522ded471a8b';
$guiapratico_clima_es = 'field_5522def271a8c';
$guiapratico_comida_es = 'field_5522deca71a89';
$guiapratico_cits_es = 'field_5522dec571a88';
$guiapratico_sustentavel_es = 'field_5522dec171a87';
//
$guiapratico_moeda_titulo_pt = 'field_5568d07e71460';
$guiapratico_religiao_titulo_pt = 'field_5568d09071461';
$guiapratico_cultura_titulo_pt = 'field_5568d0ab71462';
$guiapratico_visto_titulo_pt = 'field_5568d1c571463';
$guiapratico_perguntas_titulo_pt = 'field_5568d1eb71464';
$guiapratico_frases_titulo_pt = 'field_5568d20871465';
$guiapratico_clima_titulo_pt = 'field_5568d21e71466';
$guiapratico_comida_titulo_pt = 'field_5568d23471467';
$guiapratico_cits_titulo_pt = 'field_5568d24a71468';
$guiapratico_sustentavel_titulo_pt = 'field_5568d25b71469';
//
$guiapratico_moeda_titulo_en = 'field_5568d2717146a';
$guiapratico_religiao_titulo_en = 'field_5568d2847146b';
$guiapratico_cultura_titulo_en = 'field_5568d29a7146c';
$guiapratico_visto_titulo_en = 'field_5568d2b17146d';
$guiapratico_perguntas_titulo_en = 'field_5568d4857146e';
$guiapratico_frases_titulo_en = 'field_5568d4977146f';
$guiapratico_clima_titulo_en = 'field_5568d4af71470';
$guiapratico_comida_titulo_en = 'field_5568d4c471471';
$guiapratico_cits_titulo_en = 'field_5568d4db71472';
$guiapratico_sustentavel_titulo_en = 'field_5568d4ef71473';
//
$guiapratico_moeda_titulo_es = 'field_5568d50171474';
$guiapratico_religiao_titulo_es = 'field_5568d51571475';
$guiapratico_cultura_titulo_es = 'field_5568d52c71476';
$guiapratico_visto_titulo_es = 'field_5568d54071477';
$guiapratico_perguntas_titulo_es = 'field_5568d55c71478';
$guiapratico_frases_titulo_es = 'field_5568d56e71479';
$guiapratico_clima_titulo_es = 'field_5568d5807147a';
$guiapratico_comida_titulo_es = 'field_5568d5987147b';
$guiapratico_cits_titulo_es = 'field_5568d5ac7147c';
$guiapratico_sustentavel_titulo_es = 'field_5568d5bc7147d';
//------------
//
//
//------------
$transpurbano_aeroporto_pt = 'field_551c6280de7d7';
$transpurbano_aluguelcarro_pt = 'field_551c630cde7db';
$transpurbano_metro_pt = 'field_551c634ede7de';
$transpurbano_trem_pt = 'field_551c6395de7e1';
$transpurbano_taxi_pt = 'field_551c63ddde7e5';
$transpurbano_bike_pt = 'field_551c6424de7e9';
$transpurbano_heli_pt = 'field_551c645cde7ed';
$transpurbano_onibus_pt = 'field_551c6595499df';
//
$transpurbano_aeroporto_en = 'field_551c62cfde7d8';
$transpurbano_aluguelcarro_en = 'field_551c6339de7dc';
$transpurbano_metro_en = 'field_551c6365de7df';
$transpurbano_trem_en = 'field_551c63b7de7e2';
$transpurbano_taxi_en = 'field_551c6400de7e8';
$transpurbano_bike_en = 'field_551c6439de7ea';
$transpurbano_heli_en = 'field_551c647ade7ee';
$transpurbano_onibus_en = 'field_551c64a3de7f0';
//
$transpurbano_aeroporto_es = 'field_551c62e3de7d9';
$transpurbano_aluguelcarro_es = 'field_551c6343de7dd';
$transpurbano_metro_es = 'field_551c6370de7e0';
$transpurbano_trem_es = 'field_551c63b9de7e3';
$transpurbano_taxi_es = 'field_551c6400de7e7';
$transpurbano_bike_es = 'field_551c6447de7eb';
$transpurbano_heli_es = 'field_551c6496de7ef';
$transpurbano_onibus_es = 'field_551c64b9de7f1';
//
$transpurbano_aeroporto_titulo_pt = 'field_5568e3a49476d';
$transpurbano_aluguelcarro_titulo_pt = 'field_5568e4645d3a5';
$transpurbano_metro_titulo_pt = 'field_5568e5965d3a6';
$transpurbano_trem_titulo_pt = 'field_5568e5ae5d3a7';
$transpurbano_taxi_titulo_pt = 'field_5568e5c65d3a8';
$transpurbano_bike_titulo_pt = 'field_5568e5dc5d3a9';
$transpurbano_heli_titulo_pt = 'field_5568e5ee5d3aa';
$transpurbano_onibus_titulo_pt = 'field_5568e5fe5d3ab';
//
$transpurbano_aeroporto_titulo_en = 'field_5568e60f5d3ac';
$transpurbano_aluguelcarro_titulo_en = 'field_5568e6225d3ad';
$transpurbano_metro_titulo_en = 'field_5568e7445d3ae';
$transpurbano_trem_titulo_en = 'field_5568e7575d3af';
$transpurbano_taxi_titulo_en = 'field_5568e76b5d3b0';
$transpurbano_bike_titulo_en = 'field_5568e78c5d3b1';
$transpurbano_heli_titulo_en = 'field_5568e79e5d3b2';
$transpurbano_onibus_titulo_en = 'field_5568e7b45d3b3';
//
$transpurbano_aeroporto_titulo_es = 'field_5568e7c95d3b4';
$transpurbano_aluguelcarro_titulo_es = 'field_5568e8245d3b5';
$transpurbano_metro_titulo_es = 'field_5568e83e5d3b6';
$transpurbano_trem_titulo_es = 'field_5568e8dd5d3b8';
$transpurbano_taxi_titulo_es = 'field_5568e92c5d3b9';
$transpurbano_bike_titulo_es = 'field_5568e93d5d3ba';
$transpurbano_heli_titulo_es = 'field_5568e9515d3bb';
$transpurbano_onibus_titulo_es = 'field_5568e9675d3bc';
//------------
//
//
//------------
$dicas_profissao_pt = 'field_558af80c65077';
$dicas_profissao_en = 'field_558af81d65079';
$dicas_profissao_es = 'field_558af8276507a';
$dicas_dica_pt = 'field_5522f065fe602';
$dicas_dica_en = 'field_5522f1dcfe609';
$dicas_dica_es = 'field_5522f1dbfe608';
$dicas_resumo_pt = 'field_55d244621530e';
$dicas_resumo_en = 'field_55d2449115310';
$dicas_resumo_es = 'field_55d244901530f';
//------------
//
//
//------------
$quemsomos_equipe_pt = 'field_5584724914845';
$quemsomos_equipe_en = 'field_55847e74df232';
$quemsomos_equipe_es = 'field_55848c19446a0';
//
$quemsomos_faleconosco_pt = 'field_55848c194469f';
$quemsomos_faleconosco_en = 'field_558d5c24c0d9e';
$quemsomos_faleconosco_es = 'field_558d5c49c0d9f';
//------------
//
//
//------------
$comochegar_ar_pt = 'field_5522ed16e112a';
$comochegar_terra_pt = 'field_5522ed84e112c';
$comochegar_expresso_pt = 'field_5522ed84e112b';
//
$comochegar_ar_en = 'field_5522ee08e112f';
$comochegar_terra_en = 'field_5522ee0ae1130';
$comochegar_expresso_en = 'field_5522ee0fe1131';
//
$comochegar_ar_es = 'field_5522ee4ce1132';
$comochegar_terra_es = 'field_5522ee57e1135';
$comochegar_expresso_es = 'field_5522ee56e1134';
//------------
//
//
//------------
$atas_comtur_pt = 'field_559442c490488';
$platum_comtur_pt = 'field_5594432334d76';
$futur_comtur_pt = 'field_5594435b022e2';
//------------
//
//
//------------
$transporte_faq_pt = 'field_5595a17ac0de8';
$feiras_faq_pt = 'field_5595a1c0c0deb';
$compras_faq_pt = 'field_5595a21fc0dee';
$citytour_faq_pt = 'field_5595a261c0df1';
$trocademoeda_faq_pt = 'field_5595a2bbc0df4';
$programacao_faq_pt = 'field_5595a2f7c0df7';
$alimentacao_faq_pt = 'field_5595a331c0dfa';
$agua_faq_pt = 'field_5595a360c0dfd';
$voltagem_faq_pt = 'field_5595a870c0e00';
$hospitais_faq_pt = 'field_5595a93bc0e03';
$idioma_faq_pt = 'field_5595a964c0e06';
//
$transporte_faq_en = 'field_5595a191c0de9';
$feiras_faq_en = 'field_5595a1f9c0dec';
$compras_faq_en = 'field_5595a22bc0def';
$citytour_faq_en = 'field_5595a295c0df2';
$trocademoeda_faq_en = 'field_5595a2d1c0df5';
$programacao_faq_en = 'field_5595a30dc0df8';
$alimentacao_faq_en = 'field_5595a347c0dfb';
$agua_faq_en = 'field_5595a373c0dfe';
$voltagem_faq_en = 'field_5595a883c0e01';
$hospitais_faq_en = 'field_5595a94bc0e04';
$idioma_faq_en = 'field_5595a972c0e07';
//
$transporte_faq_es = 'field_5595a1a7c0dea';
$feiras_faq_es = 'field_5595a20ac0ded';
$compras_faq_es = 'field_5595a23ec0df0';
$citytour_faq_es = 'field_5595a2a2c0df3';
$trocademoeda_faq_es = 'field_5595a2e0c0df6';
$programacao_faq_es = 'field_5595a31bc0df9';
$alimentacao_faq_es = 'field_5595a353c0dfc';
$agua_faq_es = 'field_5595a83ac0dff';
$voltagem_faq_es = 'field_5595a890c0e02';
$hospitais_faq_es = 'field_5595a956c0e05';
$idioma_faq_es = 'field_5595a97ec0e08';
//
$transporte_faq_titulo_pt = 'field_5596c13089a9d';
$feiras_faq_titulo_pt = 'field_5596c2b089aa0';
$compras_faq_titulo_pt = 'field_5596c32d89aa3';
$citytour_faq_titulo_pt = 'field_5596c39d89aa6';
$trocademoeda_faq_titulo_pt = 'field_5596c41589aa9';
$programacao_faq_titulo_pt = 'field_5596c48289aac';
$alimentacao_faq_titulo_pt = 'field_5596c4f389aaf';
$agua_faq_titulo_pt = 'field_5596c56889ab2';
$voltagem_faq_titulo_pt = 'field_5596c5d889ab5';
$hospitais_faq_titulo_pt = 'field_5596c68789ab8';
$idioma_faq_titulo_pt = 'field_5596c6f789abb';
//
$transporte_faq_titulo_en = 'field_5596c15f89a9e';
$feiras_faq_titulo_en = 'field_5596c2cc89aa1';
$compras_faq_titulo_en = 'field_5596c35789aa4';
$citytour_faq_titulo_en = 'field_5596c3ca89aa7';
$trocademoeda_faq_titulo_en = 'field_5596c44689aaa';
$programacao_faq_titulo_en = 'field_5596c4af89aad';
$alimentacao_faq_titulo_en = 'field_5596c52089ab0';
$agua_faq_titulo_en = 'field_5596c58989ab3';
$voltagem_faq_titulo_en = 'field_5596c64b89ab6';
$hospitais_faq_titulo_en = 'field_5596c6a789ab9';
$idioma_faq_titulo_en = 'field_5596c71489abc';
//
$transporte_faq_titulo_es = 'field_5596c17189a9f';
$feiras_faq_titulo_es = 'field_5596c2de89aa2';
$compras_faq_titulo_es = 'field_5596c37689aa5';
$citytour_faq_titulo_es = 'field_5596c3e789aa8';
$trocademoeda_faq_titulo_es = 'field_5596c46489aab';
$programacao_faq_titulo_es = 'field_5596c4cd89aae';
$alimentacao_faq_titulo_es = 'field_5596c54489ab1';
$agua_faq_titulo_es = 'field_5596c5a689ab4';
$voltagem_faq_titulo_es = 'field_5596c66389ab7';
$hospitais_faq_titulo_es = 'field_5596c6c989aba';
$idioma_faq_titulo_es = 'field_5596c72c89abd';
//------------
//
//
//------------
$lazer_agencias_titulo_pt = 'field_55b8f6052113f';
$lazer_agencias_titulo_en = 'field_55b8f63a21141';
$lazer_agencias_titulo_es = 'field_55b8f684a27d6';
$negocios_agencias_titulo_pt = 'field_55b8f6c00967c';
$negocios_agencias_titulo_en = 'field_55b8f6d10967d';
$negocios_agencias_titulo_es = 'field_55b8f6ea0967e';
//------------
//
//
//------------
$info_famtour_titulo_pt = 'field_55a57e477b64c';
$form_famtour_titulo_pt = 'field_55a57f3ce62f5';
//
$info_famtour_pt = 'field_55a57e6e7b64d';
$form_famtour_pt = 'field_55a58083e62f6';
//
$info_famtour_titulo_en = 'field_55a57eb7551ad';
$form_famtour_titulo_en = 'field_55a5809b2ac7e';
//
$info_famtour_en = 'field_55a57eca551ae';
$form_famtour_en = 'field_55a580aa2ac7f';
//
$info_famtour_titulo_es = 'field_55a57eec46eb8';
$form_famtour_titulo_es = 'field_55a580c42ac80';
//
$info_famtour_es = 'field_55a57f0046eb9';
$form_famtour_es = 'field_55a580d22ac81';
//------------
//
//
//------------
$divulgacao_siteinspec_titulo_pt = 'field_55c8f28b0f3b6';
$divulgacao_siteinspec_pt = 'field_55c8f2e90f3b9';
$divulgacao_siteinspec_titulo_en = 'field_55c8f2b40f3b7';
$divulgacao_siteinspec_en = 'field_55c8f2f50f3ba';
$divulgacao_siteinspec_titulo_es = 'field_55c8f2da0f3b8';
$divulgacao_siteinspec_es = 'field_55c8f3060f3bb';
//
$formulario_siteinspec_titulo_pt = 'field_55c8f3200f3bc';
$formulario_siteinspec_pt = 'field_55c8f3d70f3bf';
$formulario_siteinspec_titulo_en = 'field_55c8f3c10f3bd';
$formulario_siteinspec_en = 'field_55c8f3e90f3c0';
$formulario_siteinspec_titulo_es = 'field_55c8f3cb0f3be';
$formulario_siteinspec_es = 'field_55c8f3f60f3c1';
//------------
//
//
//------------
$slider_texto_pt = 'field_54f7520b2f0d0';
$slider_texto_en = 'field_5594635ac6ee1';
$slider_texto_es = 'field_5594635ac6ee0';
$slider_textmobile_pt = 'field_559463a1c6ee2';
$slider_textmobile_en = 'field_559463cec6ee3';
$slider_textmobile_es = 'field_559463e0c6ee4';
//------------
//
//
//------------
$feiras_compras_titulo_pt = 'field_55f8709b94a29';
$feiras_compras_titulo_en = 'field_55f871c294a2a';
$feiras_compras_titulo_es = 'field_55f871d994a2b';
$outlet_compras_titulo_pt = 'field_55f8720594a2c';
$outlet_compras_titulo_en = 'field_55f8721f94a2d';
$outlet_compras_titulo_es = 'field_55f8722d94a2e';
$luxo_compras_titulo_pt = 'field_55f8723b94a2f';
$luxo_compras_titulo_en = 'field_55f8724e94a30';
$luxo_compras_titulo_es = 'field_55f8725d94a31';
$ruastematicas_compras_titulo_pt = 'field_55f8726994a32';
$ruastematicas_compras_titulo_en = 'field_55f8727e94a33';
$ruastematicas_compras_titulo_es = 'field_55f8728794a34';
$artesanato_compras_titulo_pt = 'field_55f878b894a35';
$artesanato_compras_titulo_en = 'field_55f8795a94a36';
$artesanato_compras_titulo_es = 'field_55f87d6494a37';
$shoppings_compras_titulo_pt = 'field_55f87d7d94a38';
$shoppings_compras_titulo_en = 'field_55f87d9a94a39';
$shoppings_compras_titulo_es = 'field_55f87da694a3a';
$popular_compras_titulo_pt = 'field_55f87dc694a3b';
$popular_compras_titulo_en = 'field_55f87ddb94a3c';
$popular_compras_titulo_es = 'field_55f87ded94a3d';
//------------
//
//
//------------
$destaqueshome_title_pt = 'field_5596dd83de1b0';
$destaqueshome_title_en = 'field_5596dd9ede1b2';
$destaqueshome_title_es = 'field_5596dd9ede1b1';
$destaqueshome_resumo_pt = 'field_5596ddb8de1b3';
$destaqueshome_resumo_en = 'field_5596dde1de1b4';
$destaqueshome_resumo_es = 'field_5596ddf0de1b5';
//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ TRADUCAO FIELDS -------
//------------------------------------
if ($idioma == 3) {
    $lang_title = $lang_title_es;
    $lang_content = $lang_content_es;
    $chamadasAcontece_resumo = $chamadasAcontece_resumo_es;
    //
    $slider_texto = $slider_texto_es;
    $slider_textmobile = $slider_textmobile_es;
    $destaqueshome_title = $destaqueshome_title_es;
    $destaqueshome_resumo = $destaqueshome_resumo_es;
    //
    $layoutpadrao_text = $layoutpadrao_text_es;
    //
    $dicas_profissao = $dicas_profissao_es;
    $dicas_dica = $dicas_dica_es;
    $dicas_resumo = $dicas_resumo_ps;
    //
    $lang_guiapratico_moeda = $guiapratico_moeda_titulo_es;
    $lang_guiapratico_religiao = $guiapratico_religiao_titulo_es;
    $lang_guiapratico_cultura = $guiapratico_cultura_titulo_es;
    $lang_guiapratico_visto = $guiapratico_visto_titulo_es;
    $lang_guiapratico_perguntas = $guiapratico_perguntas_titulo_es;
    $lang_guiapratico_frases = $guiapratico_frases_titulo_es;
    $lang_guiapratico_clima = $guiapratico_clima_titulo_es;
    $lang_guiapratico_comida = $guiapratico_comida_titulo_es;
    $lang_guiapratico_cits = $guiapratico_cits_titulo_es;
    $lang_guiapratico_sustentavel = $guiapratico_sustentavel_titulo_es;
    //
    $lang_transpurbano_aeroporto = $transpurbano_aeroporto_titulo_es;
    $lang_transpurbano_aluguelcarro = $transpurbano_aluguelcarro_titulo_es;
    $lang_transpurbano_metro = $transpurbano_metro_titulo_es;
    $lang_transpurbano_trem = $transpurbano_trem_titulo_es;
    $lang_transpurbano_taxi = $transpurbano_taxi_titulo_es;
    $lang_transpurbano_bike = $transpurbano_bike_titulo_es;
    $lang_transpurbano_heli = $transpurbano_heli_titulo_es;
    $lang_transpurbano_onibus = $transpurbano_onibus_titulo_es;
    //
    $quemsomos_equipe = $quemsomos_equipe_es;
    $quemsomos_faleconosco = $quemsomos_faleconosco_es;
    //
    $transporte_faq = $transporte_faq_es;
    $feiras_faq = $feiras_faq_es;
    $compras_faq = $compras_faq_es;
    $citytour_faq = $citytour_faq_es;
    $trocademoeda_faq = $trocademoeda_faq_es;
    $programacao_faq = $programacao_faq_es;
    $alimentacao_faq = $alimentacao_faq_es;
    $agua_faq = $agua_faq_es;
    $voltagem_faq = $voltagem_faq_es;
    $hospitais_faq = $hospitais_faq_es;
    $idioma_faq = $idioma_faq_es;
    //
    $info_famtour = $info_famtour_es;
    $form_famtour = $form_famtour_es;
    //
    $comochegar_ar = $comochegar_ar_es;
    $comochegar_terra = $comochegar_terra_es;
    $comochegar_expresso = $comochegar_expresso_es;
    //
    $divulgacao_siteinspec = $divulgacao_siteinspec_es;
    $formulario_siteinspec = $formulario_siteinspec_es;
    //
    $compras_feiras = $feiras_compras_titulo_es;
    $compras_outlet = $outlet_compras_titulo_es;
    $compras_luxo = $luxo_compras_titulo_es;
    $compras_ruastematicas = $ruastematicas_compras_titulo_es;
    $compras_artesanato = $artesanato_compras_titulo_es;
    $compras_shoppings = $shoppings_compras_titulo_es;
    $compras_popular = $popular_compras_titulo_es;
} elseif ($idioma == 2) {
    $lang_title = $lang_title_en;
    $lang_content = $lang_content_en;
    $chamadasAcontece_resumo = $chamadasAcontece_resumo_en;
    //
    $slider_texto = $slider_texto_en;
    $slider_textmobile = $slider_textmobile_en;
    $destaqueshome_title = $destaqueshome_title_en;
    $destaqueshome_resumo = $destaqueshome_resumo_en;
    //
    $layoutpadrao_text = $layoutpadrao_text_en;
    //
    $dicas_profissao = $dicas_profissao_en;
    $dicas_dica = $dicas_dica_en;
    $dicas_resumo = $dicas_resumo_en;
    //
    $lang_guiapratico_moeda = $guiapratico_moeda_titulo_en;
    $lang_guiapratico_religiao = $guiapratico_religiao_titulo_en;
    $lang_guiapratico_cultura = $guiapratico_cultura_titulo_en;
    $lang_guiapratico_visto = $guiapratico_visto_titulo_en;
    $lang_guiapratico_perguntas = $guiapratico_perguntas_titulo_en;
    $lang_guiapratico_frases = $guiapratico_frases_titulo_en;
    $lang_guiapratico_clima = $guiapratico_clima_titulo_en;
    $lang_guiapratico_comida = $guiapratico_comida_titulo_en;
    $lang_guiapratico_cits = $guiapratico_cits_titulo_en;
    $lang_guiapratico_sustentavel = $guiapratico_sustentavel_titulo_en;
    //
    $lang_transpurbano_aeroporto = $transpurbano_aeroporto_titulo_en;
    $lang_transpurbano_aluguelcarro = $transpurbano_aluguelcarro_titulo_en;
    $lang_transpurbano_metro_ = $transpurbano_metro_titulo_en;
    $lang_transpurbano_trem = $transpurbano_trem_titulo_en;
    $lang_transpurbano_taxi = $transpurbano_taxi_titulo_en;
    $lang_transpurbano_bike = $transpurbano_bike_titulo_en;
    $lang_transpurbano_heli = $transpurbano_heli_titulo_en;
    $lang_transpurbano_onibus = $transpurbano_onibus_titulo_en;
    //
    $quemsomos_equipe = $quemsomos_equipe_en;
    $quemsomos_faleconosco = $quemsomos_faleconosco_en;
    //
    $transporte_faq = $transporte_faq_en;
    $feiras_faq = $feiras_faq_en;
    $compras_faq = $compras_faq_en;
    $citytour_faq = $citytour_faq_en;
    $trocademoeda_faq = $trocademoeda_faq_en;
    $programacao_faq = $programacao_faq_en;
    $alimentacao_faq = $alimentacao_faq_en;
    $agua_faq = $agua_faq_en;
    $voltagem_faq = $voltagem_faq_en;
    $hospitais_faq = $hospitais_faq_en;
    $idioma_faq = $idioma_faq_en;
    //
    $info_famtour = $info_famtour_en;
    $form_famtour = $form_famtour_en;
    //
    $comochegar_ar = $comochegar_ar_en;
    $comochegar_terra = $comochegar_terra_en;
    $comochegar_expresso = $comochegar_expresso_en;
    //
    $divulgacao_siteinspec = $divulgacao_siteinspec_en;
    $formulario_siteinspec = $formulario_siteinspec_en;
    //
    $compras_feiras = $feiras_compras_titulo_en;
    $compras_outlet = $outlet_compras_titulo_en;
    $compras_luxo = $luxo_compras_titulo_en;
    $compras_ruastematicas = $ruastematicas_compras_titulo_en;
    $compras_artesanato = $artenanato_compras_titulo_en;
    $compras_shoppings = $shoppings_compras_titulo_en;
    $compras_popular = $popular_compras_titulo_en;
} else {
    //
    // elseif: $idioma == 1
    //
    $lang_title = $lang_title_pt;
    $lang_content = $lang_content_pt;
    $chamadasAcontece_resumo = $chamadasAcontece_resumo_pt;
    //
    $slider_texto = $slider_texto_pt;
    $slider_textmobile = $slider_textmobile_pt;
    $destaqueshome_title = $destaqueshome_title_pt;
    $destaqueshome_resumo = $destaqueshome_resumo_pt;
    //
    $layoutpadrao_text = $layoutpadrao_text_pt;
    //
    $dicas_profissao = $dicas_profissao_pt;
    $dicas_dica = $dicas_dica_pt;
    $dicas_resumo = $dicas_resumo_pt;
    //
    $lang_guiapratico_moeda = $guiapratico_moeda_titulo_pt;
    $lang_guiapratico_religiao = $guiapratico_religiao_titulo_pt;
    $lang_guiapratico_cultura = $guiapratico_cultura_titulo_pt;
    $lang_guiapratico_visto = $guiapratico_visto_titulo_pt;
    $lang_guiapratico_perguntas = $guiapratico_perguntas_titulo_pt;
    $lang_guiapratico_frases = $guiapratico_frases_titulo_pt;
    $lang_guiapratico_clima = $guiapratico_clima_titulo_pt;
    $lang_guiapratico_comida = $guiapratico_comida_titulo_pt;
    $lang_guiapratico_cits = $guiapratico_cits_titulo_pt;
    $lang_guiapratico_sustentavel = $guiapratico_sustentavel_titulo_pt;
    //
    $lang_transpurbano_aeroporto = $transpurbano_aeroporto_titulo_pt;
    $lang_transpurbano_aluguelcarro = $transpurbano_aluguelcarro_titulo_pt;
    $lang_transpurbano_metro = $transpurbano_metro_titulo_pt;
    $lang_transpurbano_trem = $transpurbano_trem_titulo_pt;
    $lang_transpurbano_taxi = $transpurbano_taxi_titulo_pt;
    $lang_transpurbano_bike = $transpurbano_bike_titulo_pt;
    $lang_transpurbano_heli = $transpurbano_heli_titulo_pt;
    $lang_transpurbano_onibus = $transpurbano_onibus_titulo_pt;
    //
    $quemsomos_equipe = $quemsomos_equipe_pt;
    $quemsomos_faleconosco = $quemsomos_faleconosco_pt;
    //
    $transporte_faq = $transporte_faq_pt;
    $feiras_faq = $feiras_faq_pt;
    $compras_faq = $compras_faq_pt;
    $citytour_faq = $citytour_faq_pt;
    $trocademoeda_faq = $trocademoeda_faq_pt;
    $programacao_faq = $programacao_faq_pt;
    $alimentacao_faq = $alimentacao_faq_pt;
    $agua_faq = $agua_faq_pt;
    $voltagem_faq = $voltagem_faq_pt;
    $hospitais_faq = $hospitais_faq_pt;
    $idioma_faq = $idioma_faq_pt;
    //
    $info_famtour = $info_famtour_pt;
    $form_famtour = $form_famtour_pt;
    //
    $comochegar_ar = $comochegar_ar_pt;
    $comochegar_terra = $comochegar_terra_pt;
    $comochegar_expresso = $comochegar_expresso_pt;
    //
    $divulgacao_siteinspec = $divulgacao_siteinspec_pt;
    $formulario_siteinspec = $formulario_siteinspec_pt;
    //
    $compras_feiras = $feiras_compras_titulo_pt;
    $compras_outlet = $outlet_compras_titulo_pt;
    $compras_luxo = $luxo_compras_titulo_pt;
    $compras_ruastematicas = $ruastematicas_compras_titulo_pt;
    $compras_artesanato = $artesanato_compras_titulo_pt;
    $compras_shoppings = $shoppings_compras_titulo_pt;
    $compras_popular = $popular_compras_titulo_pt;
}
//------------
$lpg_1_pqsp_title = get_field_object($lang_title, $lpg_1_pqsp);
$lpg_1_historia_title = get_field_object($lang_title, $lpg_1_historia);
$lpg_1_dadosefatos_title = get_field_object($lang_title, $lpg_1_dadosefatos);
$lpg_1_passeiovirtual_title = get_field_object($lang_title, $lpg_1_passeiovirtual);
$lpg_1_linhadotempo_title = get_field_object($lang_title, $lpg_1_linhadotempo);
$lpg_1_razoes_title = get_field_object($lang_title, $lpg_1_razoes);
//------------
$lpg_2_planeje_title = get_field_object($lang_title, $lpg_2_planeje);
$lpg_2_mapadacidade_title = get_field_object($lang_title, $lpg_2_mapadacidade);
$lpg_2_mapainterativo_title = get_field_object($lang_title, $lpg_2_mapainterativo);
$lpg_2_comochegar_title = get_field_object($lang_title, $lpg_2_comochegar);
$lpg_2_ondeficar_title = get_field_object($lang_title, $lpg_2_ondeficar);
$lpg_2_listahoteis_title = get_field_object($lang_title, $lpg_2_listahoteis);
$lpg_2_triphoteis_title = get_field_object($lang_title, $lpg_2_triphoteis);
$lpg_2_guiapratico_title = get_field_object($lang_title, $lpg_2_guiapratico);
$lpg_2_transporteurbano_title = get_field_object($lang_title, $lpg_2_transporteurbano);
$lpg_2_agencias_title = get_field_object($lang_title, $lpg_2_agencias);
//------------
$lpg_3_vivasp_title = get_field_object($lang_title, $lpg_3_vivasp);
$lpg_3_pontosturisticos_title = get_field_object($lang_title, $lpg_3_pontosturisticos);
$lpg_3_compras_title = get_field_object($lang_title, $lpg_3_compras);
//$lpg_3_comprasfeiras_title = get_field_object($lang_title, $lpg_3_comprasfeiras);
//$lpg_3_comprasoutlet_title = get_field_object($lang_title, $lpg_3_comprasoutlet);
//$lpg_3_comprasluxo_title = get_field_object($lang_title, $lpg_3_comprasluxo);
//$lpg_3_comprasruas_title = get_field_object($lang_title, $lpg_3_comprasruas);
//$lpg_3_comprasartesanato_title = get_field_object($lang_title, $lpg_3_comprasartesanato);
//$lpg_3_comprasshoppings_title = get_field_object($lang_title, $lpg_3_comprasshoppings);
//$lpg_3_compraspopular_title = get_field_object($lang_title, $lpg_3_compraspopular);
$lpg_3_comerebeber_title = get_field_object($lang_title, $lpg_3_comerebeber);
$lpg_3_tripcomerebeber_title = get_field_object($lang_title, $lpg_3_tripcomerebeber);
$lpg_3_noite_title = get_field_object($lang_title, $lpg_3_noite);
$lpg_3_tripnoite_title = get_field_object($lang_title, $lpg_3_tripnoite);
$lpg_3_cultura_title = get_field_object($lang_title, $lpg_3_cultura);
$lpg_3_esporte_title = get_field_object($lang_title, $lpg_3_esporte);
$lpg_3_muitomaissp_title = get_field_object($lang_title, $lpg_3_muitomaissp);
$lpg_3_fiquemaisumdia_title = get_field_object($lang_title, $lpg_3_fiquemaisumdia);
$lpg_3_arredores_title = get_field_object($lang_title, $lpg_3_arredores);
$lpg_3_roteiros_title = get_field_object($lang_title, $lpg_3_roteiros);
$lpg_3_roteirostematicos_title = get_field_object($lang_title, $lpg_3_roteirostematicos);
$lpg_3_roteirosporregiao_title = get_field_object($lang_title, $lpg_3_roteirosporregiao);
$lpg_3_roteirosguiados_title = get_field_object($lang_title, $lpg_3_roteirosguiados);
$lpg_3_roteirosape_title = get_field_object($lang_title, $lpg_3_roteirosape);
$lpg_3_roteirospoeperiodo_title = get_field_object($lang_title, $lpg_3_roteirospoeperiodo);
//------------
$lpg_4_acontece_title = get_field_object($lang_title, $lpg_4_acontece);
$lpg_4_agenda_title = get_field_object($lang_title, $lpg_4_agenda);
$lpg_4_novidades_title = get_field_object($lang_title, $lpg_4_novidades);
$lpg_4_dicas_title = get_field_object($lang_title, $lpg_4_dicas);
//------------
$lpg_5_institucional_title = get_field_object($lang_title, $lpg_5_institucional);
$lpg_5_trade_title = get_field_object($lang_title, $lpg_5_trade);
$lpg_5_quemsomos_title = get_field_object($lang_title, $lpg_5_quemsomos);
$lpg_5_app_title = get_field_object($lang_title, $lpg_5_app);
$lpg_5_downloads_title = get_field_object($lang_title, $lpg_5_downloads);
$lpg_5_famtour_title = get_field_object($lang_title, $lpg_5_famtour);
$lpg_5_siteinspection_title = get_field_object($lang_title, $lpg_5_siteinspection);
$lpg_5_comtur_title = get_field_object($lang_title, $lpg_5_comtur);
$lpg_5_presstrips_title = get_field_object($lang_title, $lpg_5_presstrips);
$lpg_5_faleconosco_title = get_field_object($lang_title, $lpg_5_faleconosco);
$lpg_5_privacidade_title = get_field_object($lang_title, $lpg_5_privacidade);
$lpg_5_parceiros_title = get_field_object($lang_title, $lpg_5_parceiros);
$lpg_5_sejaumparceiro_title = get_field_object($lang_title, $lpg_5_sejaumparceiro);
$lpg_5_faq_title = get_field_object($lang_title, $lpg_5_faq);
//
$guiapratico_moeda_title = get_field_object($lang_guiapratico_moeda, $lpg_2_guiapratico);
$guiapratico_religiao_title = get_field_object($lang_guiapratico_religiao, $lpg_2_guiapratico);
$guiapratico_cultura_title = get_field_object($lang_guiapratico_cultura, $lpg_2_guiapratico);
$guiapratico_visto_title = get_field_object($lang_guiapratico_visto, $lpg_2_guiapratico);
$guiapratico_perguntas_title = get_field_object($lang_guiapratico_perguntas, $lpg_2_guiapratico);
$guiapratico_frases_title = get_field_object($lang_guiapratico_frases, $lpg_2_guiapratico);
$guiapratico_clima_title = get_field_object($lang_guiapratico_clima, $lpg_2_guiapratico);
$guiapratico_comida_title = get_field_object($lang_guiapratico_comida, $lpg_2_guiapratico);
$guiapratico_cits_title = get_field_object($lang_guiapratico_cits, $lpg_2_guiapratico);
$guiapratico_sustentavel_title = get_field_object($lang_guiapratico_sustentavel, $lpg_2_guiapratico);
//
$transpurbano_aeroporto_title = get_field_object($lang_transpurbano_aeroporto, $lpg_2_transporteurbano);
$transpurbano_aluguelcarro_title = get_field_object($lang_transpurbano_aluguelcarro, $lpg_2_transporteurbano);
$transpurbano_metro_title = get_field_object($lang_transpurbano_metro, $lpg_2_transporteurbano);
$transpurbano_trem_title = get_field_object($lang_transpurbano_trem, $lpg_2_transporteurbano);
$transpurbano_taxi_title = get_field_object($lang_transpurbano_taxi, $lpg_2_transporteurbano);
$transpurbano_bike_title = get_field_object($lang_transpurbano_bike, $lpg_2_transporteurbano);
$transpurbano_heli_title = get_field_object($lang_transpurbano_heli, $lpg_2_transporteurbano);
$transpurbano_onibus_title = get_field_object($lang_transpurbano_onibus, $lpg_2_transporteurbano);
//
$compras_feiras_title = get_field_object($compras_feiras, $lpg_3_compras);
$compras_outlet_title = get_field_object($compras_outlet, $lpg_3_compras);
$compras_luxo_title = get_field_object($compras_luxo, $lpg_3_compras);
$compras_ruastematicas_title = get_field_object($compras_ruastematicas, $lpg_3_compras);
$compras_artesanato_title = get_field_object($compras_artesanato, $lpg_3_compras);
$compras_shoppings_title = get_field_object($compras_shoppings, $lpg_3_compras);
$compras_popular_title = get_field_object($compras_popular, $lpg_3_compras);
//------------------------------------
//
//
//
//
//------------------------------------
//------------ LISTA MENU ------------
//------------------------------------
$menu_1 = '<a href="' . get_permalink($lpg_1_pqsp) . $idiomaURL . '" class="firstItem">' . $lpg_1_pqsp_title['value'] . '</a>';
$menu_1 .= '<a href="' . get_permalink($lpg_1_razoes) . $idiomaURL . '">' . $lpg_1_razoes_title['value'] . '</a>';
$menu_1 .= '<a href="' . get_permalink($lpg_1_historia) . $idiomaURL . '">' . $lpg_1_historia_title['value'] . '</a>';
$menu_1 .= '<a href="' . get_permalink($lpg_1_linhadotempo) . $idiomaURL . '">' . $lpg_1_linhadotempo_title['value'] . '</a>';
$menu_1 .= '<a href="' . get_permalink($lpg_1_dadosefatos) . $idiomaURL . '">' . $lpg_1_dadosefatos_title['value'] . '</a>';
$menu_1 .= '<a href="' . get_permalink($lpg_1_passeiovirtual) . $idiomaURL . '" class="lastItem">' . $lpg_1_passeiovirtual_title['value'] . '</a>';
//------------
$menu_2 = '<a href="' . get_permalink($lpg_2_planeje) . $idiomaURL . '" class="firstItem">' . $lpg_2_planeje_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_mapadacidade) . $idiomaURL . '">' . $lpg_2_mapadacidade_title['value'] . '</a>';
//$menu_2 .= '<a href="' . get_permalink($lpg_2_mapainterativo) . $idiomaURL . '" class="subItem">' . $lpg_2_mapainterativo_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_comochegar) . $idiomaURL . '">' . $lpg_2_comochegar_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_ondeficar) . $idiomaURL . '">' . $lpg_2_ondeficar_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_listahoteis) . $idiomaURL . '" class="subItem">' . $lpg_2_listahoteis_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_triphoteis) . $idiomaURL . '" class="hiddenItem">' . $lpg_2_triphoteis_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '">' . $lpg_2_guiapratico_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '">' . $lpg_2_transporteurbano_title['value'] . '</a>';
$menu_2 .= '<a href="' . get_permalink($lpg_2_agencias) . $idiomaURL . '" class="lastItem">' . $lpg_2_agencias_title['value'] . '</a>';
//------------
$menu_3 = '<a href="' . get_permalink($lpg_3_vivasp) . $idiomaURL . '" class="swiper-slideA3 firstItem">' . $lpg_3_vivasp_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_pontosturisticos) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_pontosturisticos_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_comerebeber) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_comerebeber_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_tripcomerebeber) . $idiomaURL . '" class="swiper-slideA3 hiddenItem">' . $lpg_3_tripcomerebeber_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_noite) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_noite_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_tripnoite) . $idiomaURL . '" class="swiper-slideA3 hiddenItem">' . $lpg_3_tripnoite_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_compras_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasfeiras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasfeiras_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasoutlet) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasoutlet_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasluxo) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasluxo_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasruas) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasruas_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasartesanato) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasartesanato_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_comprasshoppings) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_comprasshoppings_title['value'] . '</a>';
//$menu_3 .= '<a href="' . get_permalink($lpg_3_compraspopular) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_compraspopular_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_cultura) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_cultura_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_esporte) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_esporte_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_arredores) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_arredores_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteiros) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_roteiros_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteirostematicos) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_roteirostematicos_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteirosporregiao) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_roteirosporregiao_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteirosguiados) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_roteirosguiados_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteirosape) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_roteirosape_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_roteirospoeperiodo) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $lpg_3_roteirospoeperiodo_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_muitomaissp) . $idiomaURL . '" class="swiper-slideA3">' . $lpg_3_muitomaissp_title['value'] . '</a>';
$menu_3 .= '<a href="' . get_permalink($lpg_3_fiquemaisumdia) . $idiomaURL . '" class="swiper-slideA3 lastItem">' . $lpg_3_fiquemaisumdia_title['value'] . '</a>';
//------------
$menu_compras = '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 firstItem">' . $lpg_3_compras_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_feiras_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_outlet_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_luxo_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_ruastematicas_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_artesanato_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 subItem">' . $compras_shoppings_title['value'] . '</a>';
$menu_compras .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slideA3 lastItem subItem">' . $compras_popular_title['value'] . '</a>';
//------------
$menu_3b = '<a href="' . get_permalink($lpg_3_pontosturisticos) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_pontosturisticos_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_compras) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_compras_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_comerebeber) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_comerebeber_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_noite) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_noite_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_cultura) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_cultura_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_esporte) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_esporte_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_arredores) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_arredores_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_roteiros) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_roteiros_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_muitomaissp) . $idiomaURL . '" class="swiper-slide">' . $lpg_3_muitomaissp_title['value'] . '</a>';
$menu_3b .= '<a href="' . get_permalink($lpg_3_fiquemaisumdia) . $idiomaURL . '" class="swiper-slide lastItem">' . $lpg_3_fiquemaisumdia_title['value'] . '</a>';
//------------
$menu_4 = '<a href="' . get_permalink($lpg_4_acontece) . $idiomaURL . '" class="firstItem">' . $lpg_4_acontece_title['value'] . '</a>';
$menu_4 .= '<a href="' . get_permalink($lpg_4_agenda) . $idiomaURL . '">' . $lpg_4_agenda_title['value'] . '</a>';
$menu_4 .= '<a href="' . get_permalink($lpg_4_novidades) . $idiomaURL . '">' . $lpg_4_novidades_title['value'] . '</a>';
$menu_4 .= '<a href="' . get_permalink($lpg_4_dicas) . $idiomaURL . '" class="lastItem">' . $lpg_4_dicas_title['value'] . '</a>';
//------------
$menu_5 = '<a href="' . get_permalink($lpg_5_institucional) . $idiomaURL . '" class="firstItem">' . $lpg_5_institucional_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_quemsomos) . $idiomaURL . '">' . $lpg_5_quemsomos_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_quemsomos) . $idiomaURL . '" class="subItem">' . $lpg_5_faleconosco_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_privacidade) . $idiomaURL . '" class="subItem">' . $lpg_5_privacidade_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_parceiros) . $idiomaURL . '" class="subItem">' . $lpg_5_parceiros_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_sejaumparceiro) . $idiomaURL . '" class="subItem">' . $lpg_5_sejaumparceiro_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_faq) . $idiomaURL . '">' . $lpg_5_faq_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_trade) . $idiomaURL . '">' . $lpg_5_trade_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_famtour) . $idiomaURL . '" class="subItem">' . $lpg_5_famtour_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_siteinspection) . $idiomaURL . '" class="subItem">' . $lpg_5_siteinspection_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_comtur) . $idiomaURL . '" class="subItem">' . $lpg_5_comtur_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_presstrips) . $idiomaURL . '" class="subItem">' . $lpg_5_presstrips_title['value'] . '</a>';
//$menu_5 .= '<a href="' . get_permalink($lpg_5_app) . $idiomaURL . '">' . $lpg_5_app_title['value'] . '</a>';
$menu_5 .= '<a href="' . get_permalink($lpg_5_downloads) . $idiomaURL . '" class="lastItem">' . $lpg_5_downloads_title['value'] . '</a>';
//------------
$menu_guiapratico = '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="firstItem">' . $lpg_2_guiapratico_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_moeda_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_religiao_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_cultura_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_visto_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_perguntas_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_frases_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_clima_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_comida_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="subItem">' . $guiapratico_cits_title['value'] . '</a>';
$menu_guiapratico .= '<a href="' . get_permalink($lpg_2_guiapratico) . $idiomaURL . '" class="lastItem subItem">' . $guiapratico_sustentavel_title['value'] . '</a>';
//------------
$menu_transpurbano = '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="firstItem">' . $lpg_2_transporteurbano_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_aeroporto_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_aluguelcarro_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_metro_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_trem_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_taxi_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_bike_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="subItem">' . $transpurbano_heli_title['value'] . '</a>';
$menu_transpurbano .= '<a href="' . get_permalink($lpg_2_transporteurbano) . $idiomaURL . '" class="lastItem subItem">' . $transpurbano_onibus_title['value'] . '</a>';
//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ PAGINAS TABS ----------
//------------------------------------
if (is_home() || wp_is_mobile() || $lpgID == $lpg_1_historia || $lpgID == $lpg_2_transporteurbano || $lpgID == $lpg_2_guiapratico || $lpgID == $lpg_3_compras || $lpgID == $lpg_5_comtur || $lpgID == $lpg_5_faq || $lpgID == $lpg_5_famtour || $lpgID == $lpg_3_roteiros || $lpgID == $lpg_5_siteinspection || $lpgID == $lpg_2_comochegar) {
    $paginaComTab = 1;
} else {
    $paginaComTab = 0;
}

//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ API GOOGLE CLIMA ------
//------------------------------------
//
/* funcao que converte fahrenheit para celsius */
function f2c($fahrenheit, $sinal) {
    $celsius = ((5 / 9) * ($fahrenheit - 32) * -1);
    return intval($celsius);
}

//
// Icones IF
function iconeClima($codigoyahoo) {
    if ($codigoyahoo <= 8) {
        $icone = "chuvaforte";
    } elseif ($codigoyahoo <= 16) {
        $icone = "chuva";
    } elseif ($codigoyahoo <= 18) {
        $icone = "chuvaforte";
    } elseif ($codigoyahoo <= 19) {
        $icone = "ensolarado";
    } elseif ($codigoyahoo <= 22) {
        $icone = "nublado";
    } elseif ($codigoyahoo <= 24) {
        $icone = "chuvaforte";
    } elseif ($codigoyahoo <= 26) {
        $icone = "nublado";
    } elseif ($codigoyahoo <= 27) {
        $icone = "noitenublada";
    } elseif ($codigoyahoo <= 28) {
        $icone = "nublado";
    } elseif ($codigoyahoo <= 29) {
        $icone = "noitenublada";
    } elseif ($codigoyahoo <= 30) {
        $icone = "nublado";
    } elseif ($codigoyahoo <= 31) {
        $icone = "noiteclara";
    } elseif ($codigoyahoo <= 32) {
        $icone = "ensolarado";
    } elseif ($codigoyahoo <= 33) {
        $icone = "noiteclara";
    } elseif ($codigoyahoo <= 34) {
        $icone = "ensolarado";
    } elseif ($codigoyahoo <= 35) {
        $icone = "chuvaforte";
    } elseif ($codigoyahoo <= 36) {
        $icone = "ensolarado";
    } elseif ($codigoyahoo <= 39) {
        $icone = "chuvaforte";
    } elseif ($codigoyahoo <= 43) {
        $icone = "chuva";
    } elseif ($codigoyahoo <= 44) {
        $icone = "nublado";
    } elseif ($codigoyahoo <= 47) {
        $icone = "chuvaforte";
    } else {
        $icone = "nublado";
    }
    return $icone;
}

//
// Traduz dia das semanas
function diaDaSemana($diaEng, $idiomaFunc2) {
    $idiomaFunc = $idiomaFunc2;
    if ($diaEng == 'Mon') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'Seg';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Lun';
        } else {
            $diaDaSemana = 'Mon';
        }
    } elseif ($diaEng == 'Tue') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'Ter';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Mar';
        } else {
            $diaDaSemana = 'Tue';
        }
    } elseif ($diaEng == 'Wed') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'Qua';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Mi&eacute;';
        } else {
            $diaDaSemana = 'Wed';
        }
    } elseif ($diaEng == 'Thu') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'Qui';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Jue';
        } else {
            $diaDaSemana = 'Thu';
        }
    } elseif ($diaEng == 'Fri') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'Sex';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Vie';
        } else {
            $diaDaSemana = 'Fri';
        }
    } elseif ($diaEng == 'Sat') {
        if ($idiomaFunc == 1) {
            $diaDaSemana = 'S&aacute;b';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'S&aacute;b';
        } else {
            $diaDaSemana = 'Sat';
        }
    } elseif ($diaEng == 'Sun') {
        if ($idiomaFunc2 == 1) {
            $diaDaSemana = 'Dom';
        } elseif ($idiomaFunc == 3) {
            $diaDaSemana = 'Dom';
        } else {
            $diaDaSemana = 'Sun';
        }
    }
    return $diaDaSemana;
}

//
// Traduzindo
if ($idioma == 3) {
    $sol_icone = 'style="margin-left: 11%;"';
    $nascente = 'Salida del Sol';
    $poente = 'Puesta del Sol';
    $vento = 'Viento';
    $humidade = 'Humedad';
    $pressao = 'Presi&oacute;n';
    $visibilidade = 'Visibilidad';
} elseif ($idioma == 2) {
    $sol_icone = 'style="margin-left: 6%; "';
    $nascente = 'Sunrise';
    $poente = 'Sunset';
    $vento = 'Wind';
    $humidade = 'Humidity';
    $pressao = 'Pressure';
    $visibilidade = 'Visibility';
} else {
    $sol_icone = 'style="margin-left: 4%;"';
    $nascente = 'Nascente';
    $poente = 'Poente';
    $vento = 'Vento';
    $humidade = 'Humidade';
    $pressao = 'Press&atilde;o';
    $visibilidade = 'Visibilidade';
}

function diaSemana($clima_diaSemana) {
    if ($clima_diaSemana == 'Monday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'Lunes';
        } elseif ($idioma == 2) {
            $clima_diaSemana = 'Monday';
        } else {
            $clima_diaSemana = 'Segunda';
        }
    } elseif ($clima_diaSemana == 'Tuesday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'Martes';
        } elseif ($idioma == 2) {
            $clima_diaSemana = 'Tuesday';
        } else {
            $clima_diaSemana = 'Ter&ccedil;a';
        }
    } elseif ($clima_diaSemana == 'Wednesday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'Mi&eacute;rcoles';
        } elseif ($idioma == 2) {
            $clima_diaSemana == 'Wednesday';
        } else {
            $clima_diaSemana = 'Quarta';
        }
    } elseif ($clima_diaSemana == 'Thursday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'Jueves';
        } elseif ($idioma == 2) {
            $clima_diaSemana = 'Thursday';
        } else {
            $clima_diaSemana = 'Quinta';
        }
    } elseif ($clima_diaSemana == 'Friday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'Viernes';
        } elseif ($idioma == 2) {
            
        } else {
            $clima_diaSemana = 'Sexta';
        }
    } elseif ($clima_diaSemana == 'Saturday') {
        if ($idioma == 3) {
            $clima_diaSemana = 'S&aacute;bado';
        } elseif ($idioma == 2) {
            
        } else {
            $clima_diaSemana = 'S&aacute;bado';
        }
    } else {
        if ($idioma == 3) {
            $clima_diaSemana = 'Domingo';
        } elseif ($idioma == 2) {
            
        } else {
            $clima_diaSemana = 'Domingo';
        }
    }
    return $clima_diaSemana;
}

//
/* configuracao */
$local = "sao paulo, br";
$ylocalecode = "BRXX0232";
$where_in_world = "455827";
$numero_de_dias = "7";
/* chamadas da API do Yahoo */
$yql_query = "select * from weather.forecast where woeid=455827&format=json&diagnostics=true&callback=";
$yql_query_url = "https://query.yahooapis.com/v1/public/yql?q=$yql_query";
$yql_query_url = str_replace(" ", "%20", $yql_query_url); // gambiarra ftw
$json_contents = file_get_contents($yql_query_url); // pega o json da mulecada
/* converte o json em OBJETO */
$json = json_decode($json_contents);
/*
 * // pode usar essa parada aqui pra debugar ou listar os caminhos completos desse json
  echo "<pre>";
  print_r($json);
  echo "</pre>";
 */
//
// PHP
$clima_diaSemana = date("l");
$clima_data = date("d.m.y");
//
// Atual
$clima_temp_F = $json->query->results->channel->item->condition->temp;
$clima_temp = (f2c($clima_temp_F)) * -1;
//$clima_condicaoTxt = $json->query->results->channel->item->condition->text;
$clima_condicaoCod_original = $json->query->results->channel->item->condition->code;
$clima_condicaoCod = iconeClima($clima_condicaoCod_original);
//
// Astronomia
$clima_solPoente = $json->query->results->channel->astronomy->sunset;
$clima_solNascente = $json->query->results->channel->astronomy->sunrise;
//
// Vento
$clima_velVento = $json->query->results->channel->wind->speed;
$clima_tempVento = $json->query->results->channel->wind->chill;
//
// Atmosferico
$clima_pressao = $json->query->results->channel->atmosphere->pressure;
$clima_visibilidade = $json->query->results->channel->atmosphere->visibility;
$clima_humidade = $json->query->results->channel->atmosphere->humidity;
//
// Forecast
$clima_forecast = $json->query->results->channel->item->forecast;
//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ BING TRADUTOR API -----
//------------------------------------
if ($getPty == $pty_agenda || $getPty == $pty_novidades) {
    $noTranslate = 'translate=no';
    $avisoTxt_en = 'Sorry, this content is available only in Portuguese. If you want to translate this content automatically, use the Bing Translator tool by clicking in the button.';
    $avisoTxt_es = 'Lo sentimos, este contenido est&aacute; disponible s&oacute;lo en portugu&eacute;s. Si quieres traducir el contenido de forma autom&aacute;tica a trav&eacute;s de la herramienta Bing Translator haga clic en el bot&oacute;n.';
} else {
    $noTranslate = '';
    $avisoTxt_en = '';
    $avisoTxt_es = '';
}

//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ API BANDO DE DADOS ----
//------------------------------------
//
function bancoDeDados($wpFildBanco, $nomeDB, $catDB) {
    //
    $idBanco = $wpFildBanco;
    //
    // definição de variáveis GET de consulta
    $key = "2e236f3d14d05a47ecd182fa098d3aa8"; // CHAVE SPTURIS
    $str = "0"; // INICIA PELO PRIMEIRO REGISTRO
    $qtd = "999"; // LISTARÁ APENAS 30 REGISTROS
    // definição da URL de consulta
    $url = "http://intranet.spturis.com.br/intranet/modulos/calendario_de_eventos/service.php?key=$key";
    // adiciona str à consulta
    if (is_numeric($str)) {
        $url .= "&str=$str";
    }
    // adiciona qtd à consulta
    if (is_numeric($qtd)) {
        $url .= "&qtd=$qtd";
    }
    // definição das variáveis POST de consulta
    $tipo = "atrativo"; // eventos permantes 
    $id_evento = $idBanco; // COMENTADO // TRARÁ COMO RESULTADO SOMENTE O PARQUE IBIRAPUERA
    //

    
    
    
    
    /*
      if ($nomeDB != 'Nome+de+um+local') {
      $nomeDB = $_GET['nomeDB'];
      } else {

      }
      if ($catDB != 'nada') {
      $catDB = $_GET['catDB'];
      } else {

      }
      //

      $categoria = "15"; // CATEGORIA "ESPECIAL"
      $nome = "conjunto";
     */






    // INICIO DA CONEXAO DE CONSULTA
    $con_curl = curl_init(); // prepara uma conexao curl que será usada no serviço
    $post_fields = array(); // cria uma matriz de variaveis que será envia por POST ao serviço
    /* verifica se a variável contém conteúdo e adiciona à matriz para envio */
    if (!empty($nome)) {
        $post_fields['nome'] = $nome;
    }
    if (!empty($dt_ini)) {
        $post_fields['dt_ini'] = $dt_ini;
    }
    if (!empty($dt_fim)) {
        $post_fields['dt_fim'] = $dt_fim;
    }
    if (!empty($tipo)) {
        $post_fields['tipo'] = $tipo;
    }
    if (!empty($categoria)) {
        $post_fields['categoria'] = $categoria;
    }
    if (!empty($id_evento)) {
        $post_fields['id_evento'] = $id_evento;
    }
    /* configura a conexão ao serviço, definindo a url (dados GET) e a matriz enviada no pacote (dados POST) */
    curl_setopt_array($con_curl, array(
        CURLOPT_VERBOSE => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $post_fields
    ));
    // EXECUTA A CONSULTA NA CONEXÃO CRIADA E CONFIGURADA.
    // O resultado da consulta será guardado na variável local $response
    $response = curl_exec($con_curl);
    // Informação extra de debug da consulta curl
    $info = curl_getinfo($con_curl);
    // Fecha a conexão do curl
    curl_close($con_curl);
    /* Após a consulta, deve-se verificar a resposta recebida */
    if (count($response) > 0) {
        // CASO HAJA RESULTADOS
        /* converte o json em OBJETO */
        $json = json_decode($response);
    } else {
        // CASO NAO HAJA
        $json = NULL;
    }
    /* PARA MANIPULAR O RESULTADO */
    // verifica se há resultado
    if (is_null($json)) {
        exit("nenhum resultado");
    }
    return $json;
}

//
//
function categoriasDB($catDB_ext) {
    //
    $catDB = $catDB_ext;
    //
    // Categorias Function
    $catDB_10 = 'Cinema e Literatura';
    $catDB_08 = 'Congressos';
    $catDB_15 = 'Especial';
    $catDB_13 = 'Esportes';
    $catDB_09 = 'Exposi&ccedil;&otilde;es';
    $catDB_07 = 'Feiras e Neg&oacute;cios';
    $catDB_16 = 'Gastronomia';
    $catDB_14 = 'Infantil';
    $catDB_12 = 'M&uacute;sica e Shows';
    $catDB_11 = 'Teatro e Dan&ccedil;a';
    //
    if ($catDB == 10) {
        $catDB = $catDB_10;
    } elseif ($catDB == 08) {
        $catDB = $catDB_08;
    } elseif ($catDB == 15) {
        $catDB = $catDB_15;
    } elseif ($catDB == 13) {
        $catDB = $catDB_13;
    } elseif ($catDB == 09) {
        $catDB = $catDB_09;
    } elseif ($catDB == 07) {
        $catDB = $catDB_07;
    } elseif ($catDB == 16) {
        $catDB = $catDB_16;
    } elseif ($catDB == 14) {
        $catDB = $catDB_14;
    } elseif ($catDB == 12) {
        $catDB = $catDB_12;
    } elseif ($catDB == 11) {
        $catDB = $catDB_11;
    } else {
        $catDB = $catDB_15;
    }
    return $catDB;
}

//
//
//
function cardsDB($jsonExt) {
    $json = $jsonExt;

    if ($idioma == 3) {
        $eve_titulo = 'eve_titulo_es';
        $eve_resumo = 'eve_lead_es';
    } elseif ($idioma == 2) {
        $eve_titulo = 'eve_titulo_en';
        $eve_resumo = 'eve_lead_en';
    } else {
        $eve_titulo = 'eve_titulo_br';
        $eve_resumo = 'eve_lead_br';
    }

    foreach ($json as $obj_evento) {
        //
        $catText = categoriasDB($obj_evento->cat_id);
        //
        if ($obj_evento->eve_img_url) {
            $imgUrl_x = $obj_evento->eve_img_url;
            $imgUrl = str_replace(' ', '%20', $imgUrl_x);
        } else {
            $imgUrl = get_bloginfo('template_url') . '/images/300_pattern_VERMELHO.png';
        }
        //
        $card = '<span class="lpgAtrativos_box_img" style="background-image: url(' . $imgUrl . ');">';
        $card .= '<p class="lpgAtrativos_box_img_credito">Foto: ' . $obj_evento->eve_img_creditos . '</p>';
        $card .= '</span>';
        $card .= '<div class="lpgAtrativos_box_content">';
        $card .= '<span class="lpgAtrativos_box_title">' . $obj_evento->$eve_titulo . '</span>';
        $card .= '<span class="lpgAtrativos_box_resumo">' . $obj_evento->$eve_resumo . '</span>';
        $card .= '<span class="lpgAtrativos_box_end">' . $obj_evento->loc_endereco . ', ' . $obj_evento->loc_numero . '</br>Bairro: ' . $obj_evento->loc_bairro . ' - Regi&atilde;o ' . $obj_evento->loc_zona . '</span>';
        $card .= '<span class="lpgAtrativos_box_cat">' . $catText . '</span>';
        $card .= '</div>';
    }
    return $card;
}

//------------------------------------
//
//
//
//
//
//------------------------------------
//------------ ----------
//------------------------------------
?>

