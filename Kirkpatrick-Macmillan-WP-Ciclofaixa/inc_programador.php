<?php

global $roteiros;
global $vias;
global $precisa;
global $friendly;
global $news;
global $etiqueta;
global $transporte;
global $porai;


$roteiros = 14;
$roteiros_paulista = 517;
$roteiros_centro = 513;
$roteiros_farialima = 514;
$roteiros_x1 = 515;
$roteiros_x2 = 516;

$vias = 12;
$vias_CE = 550;
$vias_ZN = 551;
$vias_ZS = 552;
$vias_ZO = 553;
$vias_ZL = 554;

$transporte_mobile = 985;
$transporte_TR = 57;
$transporte_MT = 684;

$porai_mobile = 983;
$porai_site = 59;
$porai_app = 874;



$precisa = 29;
$friendly = 21;
//$news = 23;
$news = 583;
$allNews = 583;

$etiqueta = 17;
$transporte = 57;
$transporte_v2 = 'Bike no Trem e no Metr&ocirc';
$porai = 59;

$index_mobile = 560;
$index_desktop = 571;

$contato = 591;

if (wp_is_mobile()) {
    $NoDisplay = 'NoDisplay ';
    $NoMargin = 'NoMargin ';
    $widith100 = 'widith100 ';
    $visHidden = 'visHidden ';
    $mob_turismoReceptivo_content = 'mob_turismoReceptivo_content ';
    $allMobile = 'allMobile ';
    $textMobile = 'textMobile ';
    $titleMobile = 'titleMobile ';
} else {
    $NoDisplay = '';
    $NoMargin = '';
    $widith100 = '';
    $visHidden = '';
    $mob_turismoReceptivo_content = '';
    $allMobile = '';
    $textMobile = '';
    $titleMobile = '';
}
?>