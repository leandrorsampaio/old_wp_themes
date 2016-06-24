<?php

// Sidebar Programador
include 'inc_programador.php';
// Condiona a exibição desse codigo inteiro se for da area de atracoes
if (is_page(array($at_parques, $at_aldeias, $at_rios, $at_mirantes, $at_fazendas, $at_centrosecumenicos, $at_pesqueiros, $at_artesanato, $at_patrimonio, $at_golf, $at_marinas, $at_centrocultural, $at_planetario, $at_borboletario, $at_aventura, $at_flores))) {
    // Identifica a página mae de atracoes (page)
    if (is_page($at_parques)) {
        $atracoestipo = $tax_parques;
    } elseif (is_page($at_aldeias)) {
        $atracoestipo = $tax_aldeias;
    } elseif (is_page($at_rios)) {
        $atracoestipo = $tax_rios;
    } elseif (is_page($at_mirantes)) {
        $atracoestipo = $tax_mirantes;
    } elseif (is_page($at_fazendas)) {
        $atracoestipo = $tax_fazendas;
    } elseif (is_page($at_centrosecumenicos)) {
        $atracoestipo = $tax_centrosecumenicos;
    } elseif (is_page($at_pesqueiros)) {
        $atracoestipo = $tax_pesqueiros;
    } elseif (is_page($at_artesanato)) {
        $atracoestipo = $tax_artesanato;
    } elseif (is_page($at_patrimonio)) {
        $atracoestipo = $tax_patrimonio;
    } elseif (is_page($at_golf)) {
        $atracoestipo = $tax_golf;
    } elseif (is_page($at_marinas)) {
        $atracoestipo = $tax_marinas;
    } elseif (is_page($at_centrocultural)) {
        $atracoestipo = $tax_centrocultural;
    } elseif (is_page($at_planetario)) {
        $atracoestipo = $tax_planetario;
    } elseif (is_page($at_borboletario)) {
        $atracoestipo = $tax_borboletarios;
    } elseif (is_page($at_aventura)) {
        $atracoestipo = $tax_aventura;
    } elseif (is_page($at_flores)) {
        $atracoestipo = $tax_flores;
    }
    echo '<div class="atracoesThumbs">';
    // Monta os parametros da query
    $args = array(
        'post_type' => 'atracoes',
        'posts_per_page' => -1,
        'atracoestipo' => $atracoestipo,
    );
    global $destaquequery;
    $destaquequery = new WP_Query($args);
    while ($destaquequery->have_posts()) : $destaquequery->the_post();
        if (get_field('thumbbolinhas')) {
            $bgBolinha = get_field('thumbbolinhas');
        } else {
            $bgBolinha = get_bloginfo('template_url') . '/images/parquesbolinha.jpg';
        }
        $fieldTitle = get_field($fieldTitleLang);
        echo '<a style="background: url(' . $bgBolinha . ')center;" class="atracoesThumbs_item" href="' . get_permalink() . '">' . $fieldTitle . '</a>';
    endwhile;
    wp_reset_query();
    echo '<div class="atracoesThumbs">';
} else {
    // se nao for da area de atracoes nada acontece.
}
?>