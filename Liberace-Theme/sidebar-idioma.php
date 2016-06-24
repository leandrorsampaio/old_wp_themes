<?php
//
// Taxonomias (idioma)
//
$terms = wp_get_object_terms($post->ID, 'idioma');
if (!empty($terms)) :
    $tipo = array();
    foreach ($terms as $term) {
        $tipo = $term->slug;
    }
endif;
if ($tipo == en) {
    $idioma = en;
} else {
    $idioma = pt;
}
?>