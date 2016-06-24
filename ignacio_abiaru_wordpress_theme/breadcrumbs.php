<?php
// Sidebar Programador
include 'inc_programador.php';
//
if (!wp_is_mobile()) {
    $separadorhome = ' > ';
} else {
    $separadorhome = '';
}
if (is_search()) {
    $breadcrumbsname = $separadorhome . 'Resultado de Busca';
} elseif (is_single(array($bv_historia, $bv_apa, $bv_fauna, $bv_mapa, $bv_pat, $bv_dicas, $bv_destaques)) || get_post_type() == 'post') {
    $breadcrumbsname = $separadorhome . 'Bem-Vindo';
} elseif (is_page(array($at_parques, $at_aldeias, $at_rios, $at_mirantes, $at_fazendas, $at_centrosecumenicos, $at_pesqueiros, $at_artesanato, $at_patrimonio, $at_golf, $at_marinas, $at_centrocultural, $at_planetario, $at_borboletario, $at_aventura, $at_flores)) || get_post_type() == 'atracoes') {
    // Para a area de atracoes
    if ($tipo == $tax_parques) {
        $tax_breadcrumbs = ' > Parques';
    } elseif ($tipo == $tax_aldeias) {
        $tax_breadcrumbs = ' > Aldeias';
    } elseif ($tipo == $tax_rios) {
        $tax_breadcrumbs = ' > Rios';
    } elseif ($tipo == $tax_mirantes) {
        $tax_breadcrumbs = ' > Mirantes';
    } elseif ($tipo == $tax_fazendas) {
        $tax_breadcrumbs = ' > Fazendas';
    } elseif ($tipo == $tax_centrosecumenicos) {
        $tax_breadcrumbs = ' > Centros Ecum&ecirc;nicos';
    } elseif ($tipo == $tax_pesqueiros) {
        $tax_breadcrumbs = ' > Pesquiros';
    } elseif ($tipo == $tax_artesanato) {
        $tax_breadcrumbs = ' > Artesanato';
    } elseif ($tipo == $tax_patrimonio) {
        $tax_breadcrumbs = ' > Patrim&ocirc;nio Hist&oacute;rico';
    } elseif ($tipo == $tax_golf) {
        $tax_breadcrumbs = ' > Golf';
    } elseif ($tipo == $tax_marinas) {
        $tax_breadcrumbs = ' > Marinas';
    } elseif ($tipo == $tax_centrocultural) {
        $tax_breadcrumbs = ' > Centro Cultural';
    } elseif ($tipo == $tax_planetario) {
        $tax_breadcrumbs = ' > Planet&aacute;rio';
    } elseif ($tipo == $tax_borboletarios) {
        $tax_breadcrumbs = ' > Borbolet&aacute;rio';
    } elseif ($tipo == $tax_aventura) {
        $tax_breadcrumbs = ' > Aventura';
    } elseif ($tipo == $tax_flores) {
        $tax_breadcrumbs = ' > Flores';
    } else {
        $tax_breadcrumbs = '';
    }
    $breadcrumbsname = $separadorhome . 'Atra&ccedil;&otilde;es' . $tax_breadcrumbs;
} elseif (is_single(array($rt_mata, $rt_historia, $rt_religioso, $rt_cicloturismo, $rt_nautico))) {
    $breadcrumbsname = $separadorhome . 'Roteiros';
} elseif (is_single(array($of_camping, $of_alojamento, $of_pousadas))) {
    $breadcrumbsname = $separadorhome . 'Onde Ficar';
} elseif (is_single(array($oc_comidaderua, $oc_mercado, $oc_buteco, $oc_pesqueiros, $oc_restaurantes, $oc_caipira, $oc_cafes))) {
    $breadcrumbsname = $separadorhome . 'Onde Comer';
} elseif (is_single(array($ch_onibus, $ch_carro, $ch_trem, $ch_bicicleta, $ch_agencias, $ch_guias))) {
    $breadcrumbsname = $separadorhome . 'Como Chegar';
} elseif (is_single(array($cr_produtos, $cr_artesanato, $cr_responsabilidade, $cr_roofing, $cr_produtores))) {
    //$breadcrumbsname = $separadorhome . 'Sustentabilidade';
    $breadcrumbsname = $separadorhome . 'Eco Friendly';
} elseif (is_single(array($se_seuevento))) {
    $breadcrumbsname = $separadorhome . 'Seu Evento Aqui';
} elseif (is_single($dp_404)) {
    $breadcrumbsname = $separadorhome . '404';
}
//
if (is_home() || is_single(831)) {
    
} else {
    if (wp_is_mobile()) {
        echo '<div class="breadcrumbsMobile"></div>';
    }
    ?>
    <div class="breadcrumbs">
        <div class="breadcrumbs_miolo">
            <p class="breadcrumbs_miolo_text">
                <?php
                if (wp_is_mobile()) {
                    
                } else {
                    echo '<a class="breadcrumbs_miolo_text_link" href="' . get_bloginfo('url') . '">Home</a>';
                }
                ?>
                <span class="breadcrumbs_miolo_text_link"><?php echo $breadcrumbsname; ?></span>
            </p>
        </div>
    </div>
    <div class="avisoSpturis">
        <p class="avisoSpturis_spturis">Visite: entre em contato com um guia ou agente local.</p>
    </div>
    <?php
}
?>