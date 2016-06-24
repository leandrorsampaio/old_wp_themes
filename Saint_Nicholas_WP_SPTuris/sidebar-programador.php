<?php

// sidebar programador
//
$f01_t01 = 1744;
$f01_t02 = 1746;
$f01_t03 = 1748;
$f01_t04 = 1750;
$f01_t05 = 1752;
// FOTO 02
$f02_t01 = 1754;
$f02_t02 = 1756;
$f02_t03 = 1758;
$f02_t04 = 1760;
$f02_t05 = 1762;
// FOTO 03
$f03_t01 = 1764;
$f03_t02 = 1766;
$f03_t03 = 1768;
$f03_t04 = 1770;
$f03_t05 = 1772;
// FOTO 04
$f04_t01 = 1774;
$f04_t02 = 1776;
$f04_t03 = 1778;
$f04_t04 = 1780;
$f04_t05 = 1782;
// FOTO 05
$f05_t01 = 1784;
$f05_t02 = 1786;
$f05_t03 = 1787;
$f05_t04 = 1788;
$f05_t05 = 1789;
// FOTO 06
$f06_t01 = 1790;
$f06_t02 = 1794;
$f06_t03 = 1798;
$f06_t04 = 1799;
$f06_t05 = 1801;
// FOTO 07
$f07_t01 = 1804;
$f07_t02 = 1806;
$f07_t03 = 1808;
$f07_t04 = 1810;
$f07_t05 = 1812;
// FOTO 08
$f08_t01 = 1814;
$f08_t02 = 1819;
$f08_t03 = 1821;
$f08_t04 = 1823;
$f08_t05 = 1825;
// FOTO 09
$f09_t01 = 1827;
$f09_t02 = 1829;
$f09_t03 = 1831;
$f09_t04 = 1833;
$f09_t05 = 1835;
// FOTO 10
$f10_t01 = 1837;
$f10_t02 = 1839;
$f10_t03 = 1841;
$f10_t04 = 1843;
$f10_t05 = 1845;

$texto_01 = 'Queremos ofertar o que h&aacute; de melhor em n&oacute;s neste Natal: carinho, gratid&atilde;o, amor e esperan&ccedil;a.  Que 2014 seja um ano maravilhoso, repleto de grandes conquistas. Boas festas!';
$texto_02 = 'Que neste Natal estejamos atentos para apreciar o milagre da vida, reconhe&ccedil;amos as verdadeiras amizades e olhemos para o futuro com f&eacute; e esperan&ccedil;a de um mundo melhor. Boas festas!';
$texto_03 = 'Um novo ano se aproxima e com ele a esperan&ccedil;a se renova. &eacute; tempo de lembrar o passado com ternura, valorizar o presente e aguardar um futuro cheio de b&ecirc;n&ccedil;&atilde;os e prosperidade. Boas festas e feliz 2014!';
$texto_04 = 'Que o Esp&iacute;rito de Natal ilumine nossas vidas, proteja nossos lares durante todo o ano e nos permita ficar ao lado de quem amamos.  Boas festas e pr&oacute;spero Ano Novo!';
$texto_05 = 'Que as luzes da cidade iluminem nossas vidas e que a chegada de um novo ano seja repleta de felicidade, sa&uacute;de e prosperidade. Boas festas e feliz 2014! ';

$creditosf01 = 'Av. Paulista - Natal Iluminado 2014 - Foto: Jefferson Pancieri / SPTuris.';
$creditosf02 = 'Papai Noel da Prefeitura - Natal Iluminado 2014 - Foto: Jos&eacute; Cordeiro / SPTuris.';
$creditosf03 = 'Catedral da S&eacute; - Natal Iluminado 2014 - Foto: Alexandre Diniz / SPTuris.';
$creditosf04 = 'Estaiadinha - Natal Iluminado 2014 - Foto: Jos&eacute; Cordeiro / SPTuris.';
$creditosf05 = '&Aacute;rvore do Trianon - Natal Iluminado 2014 - Foto: Jos&eacute; Cordeiro / SPTuris.';
$creditosf06 = 'Sede da Prefeitura - Natal Iluminado 2014 - Foto: Jefferson Pancieri / SPTuris.';
$creditosf07 = 'Pres&eacute;pio do Trianon - Natal Iluminado 2014 - Foto: Jefferson Pancieri / SPTuris.';
$creditosf08 = 'Guirlanda da Paulista - Natal Iluminado 2014 - Foto: Jefferson Pancieri / SPTuris.';
$creditosf09 = 'Fonte do Ibirapuera - Natal Iluminado 2014 - Foto: Alexandre Diniz / SPTuris.';
$creditosf10 = 'Fonte do Ibirapuera - Natal Iluminado 2014 - Foto: Jos&eacute; Cordeiro / SPTuris.';

if (is_single(array($f01_t01, $f01_t02, $f01_t03, $f01_t04, $f01_t05))) {
    $foto_correta = '01';
} elseif (is_single(array($f02_t01, $f02_t02, $f02_t03, $f02_t04, $f02_t05))) {
    $foto_correta = '02';
} elseif (is_single(array($f03_t01, $f03_t02, $f03_t03, $f03_t04, $f03_t05))) {
    $foto_correta = '03';
} elseif (is_single(array($f04_t01, $f04_t02, $f04_t03, $f04_t04, $f04_t05))) {
    $foto_correta = '04';
} elseif (is_single(array($f05_t01, $f05_t02, $f05_t03, $f05_t04, $f05_t05))) {
    $foto_correta = '05';
} elseif (is_single(array($f06_t01, $f06_t02, $f06_t03, $f06_t04, $f06_t05))) {
    $foto_correta = '06';
} elseif (is_single(array($f07_t01, $f07_t02, $f07_t03, $f07_t04, $f07_t05))) {
    $foto_correta = '07';
} elseif (is_single(array($f08_t01, $f08_t02, $f08_t03, $f08_t04, $f08_t05))) {
    $foto_correta = '08';
} elseif (is_single(array($f09_t01, $f09_t02, $f09_t03, $f09_t04, $f09_t05))) {
    $foto_correta = '09';
} elseif (is_single(array($f10_t01, $f10_t02, $f10_t03, $f10_t04, $f10_t05))) {
    $foto_correta = '10';
} else {
    $foto_correta = '01';
}



if (is_single(array($f01_t01, $f02_t01, $f03_t01, $f04_t01, $f05_t01, $f06_t01, $f07_t01, $f08_t01, $f09_t01, $f10_t01))) {
    $texto_correto = $texto_01;
} elseif (is_single(array($f01_t02, $f02_t02, $f03_t02, $f04_t02, $f05_t02, $f06_t02, $f07_t02, $f08_t02, $f09_t02, $f10_t02))) {
    $texto_correto = $texto_02;
} elseif (is_single(array($f01_t03, $f02_t03, $f03_t03, $f04_t03, $f05_t03, $f06_t03, $f07_t03, $f08_t03, $f09_t03, $f10_t03))) {
    $texto_correto = $texto_03;
} elseif (is_single(array($f01_t04, $f02_t04, $f03_t04, $f04_t04, $f05_t04, $f06_t04, $f07_t04, $f08_t04, $f09_t04, $f10_t04))) {
    $texto_correto = $texto_04;
} elseif (is_single(array($f01_t05, $f02_t05, $f03_t05, $f04_t05, $f05_t05, $f06_t05, $f07_t05, $f08_t05, $f09_t05, $f10_t05))) {
    $texto_correto = $texto_05;
} else {
    $texto_correto = $texto_01;
}

if (is_single(array($f01_t01, $f01_t02, $f01_t03, $f01_t04, $f01_t05))) {
    $creditos = $creditosf01;
} elseif (is_single(array($f02_t01, $f02_t02, $f02_t03, $f02_t04, $f02_t05))) {
    $creditos = $creditosf02;
} elseif (is_single(array($f03_t01, $f03_t02, $f03_t03, $f03_t04, $f03_t05))) {
    $creditos = $creditosf03;
} elseif (is_single(array($f04_t01, $f04_t02, $f04_t03, $f04_t04, $f04_t05))) {
    $creditos = $creditosf04;
} elseif (is_single(array($f05_t01, $f05_t02, $f05_t03, $f05_t04, $f05_t05))) {
    $creditos = $creditosf05;
} elseif (is_single(array($f06_t01, $f06_t02, $f06_t03, $f06_t04, $f06_t05))) {
    $creditos = $creditosf06;
} elseif (is_single(array($f07_t01, $f07_t02, $f07_t03, $f07_t04, $f07_t05))) {
    $creditos = $creditosf07;
} elseif (is_single(array($f08_t01, $f08_t02, $f08_t03, $f08_t04, $f08_t05))) {
    $creditos = $creditosf08;
} elseif (is_single(array($f09_t01, $f09_t02, $f09_t03, $f09_t04, $f09_t05))) {
    $creditos = $creditosf09;
} elseif (is_single(array($f10_t01, $f10_t02, $f10_t03, $f10_t04, $f10_t05))) {
    $creditos = $creditosf10;
} else {
    $creditos = $creditosf01;
}
?>
