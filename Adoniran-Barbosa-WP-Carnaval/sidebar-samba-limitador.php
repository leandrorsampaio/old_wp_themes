<?php
// Limitador de Caracteres - Autores
$contadorAutor = $autordosamba;
if ((strlen($contadorAutor)) < 100) {
$limitador = substr($contadorAutor, 0, 65);
$autordosamba = $limitador;
} else {
$limitador = substr($contadorAutor, 0, 60);
$autordosamba = $limitador . '(...)';
}
// Limitador de Caracteres - Título
$contadorTitulo = $titulosamba;
if ((strlen($contadorTitulo)) < 60) {
$limitador = substr($contadorTitulo, 0, 60);
$titulosamba = $limitador;
} else {
$limitador = substr($contadorTitulo, 0, 55);
$titulosamba = $limitador . '(...)';
}
?>