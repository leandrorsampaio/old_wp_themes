<?php

$total = '14';
$formato = '.png';
$url = get_template_directory_uri() . '/images/carinhas';

$inicio = '1';
$carinha = mt_rand($inicio, $total);
$img_name = $carinha . $formato;

echo "<img src=\"$url/$img_name\" alt=\"$img_name\" />";
?>