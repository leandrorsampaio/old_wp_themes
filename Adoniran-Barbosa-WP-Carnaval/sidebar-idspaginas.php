<?php

// ------------- ID's das paginas fixas
$carnavalDeSP = 594;
$calendario = 598;
$carnavalDeRua = 610;
$censoDoSamba = 604;
$corteDoCarnaval = 608;
$historia = 600;
$linhaDoTempo = 69;
$preCarnaval = 596;
$roteirosTuristicos = 612;
$sambodromo = 614;
$servicos = 606;
$imprensa = 616;
$informacoes = 617;
$releases = 619;
//------------ Determinado quais páginas usarão o submenu
if (is_page(array($carnavalDeSP, $calendario, $carnavalDeRua, $censoDoSamba, $corteDoCarnaval, $historia, $preCarnaval, $roteirosTuristicos, $sambodromo, $servicos, $imprensa, $informacoes, $releases))) {
    $menu = 1;
} else {
    
}
//------------ Determinado o tipo de menu
if (is_page(array($carnavalDeSP, $calendario, $carnavalDeRua, $censoDoSamba, $corteDoCarnaval, $historia, $preCarnaval, $roteirosTuristicos, $sambodromo, $servicos))) {
    $tipo = 1;
} elseif (is_page(array($imprensa, $informacoes, $releases))) {
    $tipo = 2;
}
?>


