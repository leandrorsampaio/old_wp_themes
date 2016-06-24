<?php

// ALFABETO - Taxonomia ID´s  
$palavra_01 = 182; //Trampo 182
$palavra_02 = 443; //Demorô 443
$palavra_03 = 228; //Salve 228
$palavra_04 = 216; //Suave 216
$palavra_05 = 208; //Sussa 208
$palavra_06 = 165; //Vazar 165
$palavra_07 = 168; //Tenso 168
$palavra_08 = 187; //Treta 187
$palavra_09 = 193; //Truta 193
$palavra_10 = 82; //Zoado 82
$palavra_11 = 262; //Rango 262
$palavra_12 = 296; //Pacas 296
$palavra_13 = 310; //Níver 310
$palavra_14 = 369; //Ibira 369
$palavra_15 = 416; //Farol 416

// $palavra_do_dia = $palavra_15; // var palavra do dia (a q vai para a query)
$dia_do_mes = date("d"); // pega o dia do mes - de 01 a 31

if ($dia_do_mes == 01 || $dia_do_mes == 16 || $dia_do_mes == 31) {
    $palavra_do_dia = $palavra_01; 
} elseif ($dia_do_mes == 02 || $dia_do_mes == 17) {
    $palavra_do_dia = $palavra_02; 
} elseif ($dia_do_mes == 03 || $dia_do_mes == 17) {
    $palavra_do_dia = $palavra_03; 
} elseif ($dia_do_mes == 04 || $dia_do_mes == 19) {
    $palavra_do_dia = $palavra_04; 
} elseif ($dia_do_mes == 05 || $dia_do_mes == 20) {
    $palavra_do_dia = $palavra_05; 
} elseif ($dia_do_mes == 06 || $dia_do_mes == 21) {
    $palavra_do_dia = $palavra_06; 
} elseif ($dia_do_mes == 07 || $dia_do_mes == 22) {
    $palavra_do_dia = $palavra_07; 
} elseif ($dia_do_mes == 08 || $dia_do_mes == 23) {
    $palavra_do_dia = $palavra_08; 
} elseif ($dia_do_mes == 09 || $dia_do_mes == 24) {
    $palavra_do_dia = $palavra_09; 
} elseif ($dia_do_mes == 10 || $dia_do_mes == 25) {
    $palavra_do_dia = $palavra_10; 
} elseif ($dia_do_mes == 11 || $dia_do_mes == 26) {
    $palavra_do_dia = $palavra_11; 
} elseif ($dia_do_mes == 12 || $dia_do_mes == 27) {
    $palavra_do_dia = $palavra_12; 
} elseif ($dia_do_mes == 13 || $dia_do_mes == 28) {
    $palavra_do_dia = $palavra_13; 
} elseif ($dia_do_mes == 14 || $dia_do_mes == 29) {
    $palavra_do_dia = $palavra_14; 
} elseif ($dia_do_mes == 15 || $dia_do_mes == 30) {
    $palavra_do_dia = $palavra_15; 
} else {
    $palavra_do_dia = $palavra_15; 
}

// monta a chamada da query
$query_palavra_do_dia = 'p=' . $palavra_do_dia;

?>