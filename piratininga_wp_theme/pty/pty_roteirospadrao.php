<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="roteirosHeader" style="background-image: url(<?php echo get_field('roteirossub_capa'); ?>);">
            <div class="roteirosHeader_red">
                <a href="<?php echo get_permalink($lpg_2_guiapratico); ?>">
                    <i class="fa fa-book"></i>
                    <span>Guia do Viajante</span>
                </a>
                <?php
                $linkPdfGuia = '';
                if ($idioma == 1) {
                    if (get_field('roteirossub_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_es');
                    } elseif (get_field('roteirosporperiodo_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_en');
                    }
                } elseif ($idioma == 2) {
                    if (get_field('roteirossub_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_en');
                    } elseif (get_field('roteirosporperiodo_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_es');
                    }
                } elseif ($idioma == 3) {
                    if (get_field('roteirossub_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_es');
                    } elseif (get_field('roteirosporperiodo_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirossub_wpfile_en');
                    }
                }
                ?>
                <a href="<?php echo $linkPdfGuia; ?>" target="_blank">
                    <i class="fa fa-cloud-download"></i>
                    <span>Download do guia</span>
                </a>
                <a href="<?php echo get_permalink($lpg_3_roteiros); ?>">
                    <i class="fa fa-map"></i>
                    <span>Mais Roteiros</span>
                </a>
                <a href="<?php echo get_permalink($lpg_2_guiapratico); ?>">
                    <i class="fa fa-info-circle"></i>
                    <span>Contrais de Informa&ccedil;&otilde;es</span>
                </a>
            </div>
        </div>
        <?php
        if ($getPty == $pty_roteirosape) {
            // MAPA ROEIROS A PE
            echo '<div class="roteirosIframe"><iframe src="' . get_field('ape_iframe') . '" height="480"></iframe></div>';
        }
        ?>
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-vermelho">
            <?php echo get_field($layoutpadrao_text); ?>
        </div>
    </div>
    <div class="content_block_box roteirosLandingPageLeiaMais">
        <h5 class="roteirosLandingPageLeiaMaisTitle">Conhe&ccedil;a Tamb&eacute;m</h5>
        <ul class="roteirosLandingPage">
            <?php
            $argsRoteirosPorPeriodo = array(
                'post_type' => $getPty,
                'posts_per_page' => 4,
                'orderby' => 'title',
                'order' => 'ASC',
                'roteiroscategorias' => 'principal',
            );
            //
            global $queryRoteirosPorPeriodo;
            $queryRoteirosPorPeriodo = new WP_Query($argsRoteirosPorPeriodo);
            while ($queryRoteirosPorPeriodo->have_posts()) : $queryRoteirosPorPeriodo->the_post();
                //
                $RoteirosPorPeriodoID = get_the_ID();
                $RoteirosPorPeriodoTITLE = get_the_title();
                //
                echo '<li class="roteirosLandingPage_item roteirosVejaMais">';
                echo '<a class="roteirosLandingPage_item_link" href="' . get_permalink() . '" style="background-image: url(' . get_field('roteirossub_thumbnail') . ');">';
                echo '<span>' . get_field('roteirossub_descricao') . '</span>';
                echo '</a>';
                echo '</li>';
            //
            endwhile;
            wp_reset_query();
            ?>            
        </ul>
    </div>
</div>
<div class="content_block block-3x block-last" style="margin-top: 5px;">
    <div class="content_block_box">
        <div class="sidebar roteirosSidebar">
            <div class="roteirosSidebar_box">
                <?php
                if ($getPty == $pty_roteirospoeperiodo) {
                    $varPostTypeRoteiro = $pty_roteirospoeperiodo;
                    $classPeriodo = 'roteirosSidebar_box_header_roteiroPeriodo';
                } elseif ($getPty == $pty_roteirosportema) {
                    $varPostTypeRoteiro = $pty_roteirosportema;
                    $classPeriodo = '';
                } elseif ($getPty == $pty_roteirosporregiao) {
                    $varPostTypeRoteiro = $pty_roteirosporregiao;
                    $classPeriodo = '';
                } elseif ($getPty == $pty_roteirosape) {
                    $varPostTypeRoteiro = $pty_roteirosape;
                    $classPeriodo = '';
                }
                ?>
                <h4 class="roteirosSidebar_box_header">Veja tamb&eacute;m</h4>
                <ul class="noLeftMargin <?php echo $classPeriodo; ?>">
                    <?php
                    //
                    //
                     
                    //
                    //
                    $argsRoteiros = array(
                        'post_type' => $varPostTypeRoteiro,
                        'posts_per_page' => -1,
                        'roteiroscategorias' => 'principal',
                    );
                    //
                    //
                    // So contando quanto itens temos
                    $contSidebar1 = 1;
                    global $queryRoteirosCont;
                    $queryRoteirosCont = new WP_Query($argsRoteiros);
                    while ($queryRoteirosCont->have_posts()) : $queryRoteirosCont->the_post();
                        //
                        $contSidebar1 = $contSidebar1 + 1;
                    //
                    endwhile;
                    wp_reset_query();
                    //
                    $resultSidebar1 = $contSidebar1 / 3;
                    //
                    //
                    //
                    //
                    //
                    $contSidebar2 = 1;
                    $queryRoteiros = new WP_Query($argsRoteiros);
                    while ($queryRoteiros->have_posts()) : $queryRoteiros->the_post();
                        //
                        if ($contSidebar2 > $resultSidebar1) {
                            $ietmAbre = '</ul><ul class=" ' . $classPeriodo . '">';
                            $contSidebar2 = 1;
                        } else {
                            $sidebarBreak = '';
                            $ietmAbre = '';
                        }
                        echo $ietmAbre;
                        $roteirosID = get_the_ID();
                        $roteirosTITLE = get_field_object($lang_title, $roteirosID);
                        echo '<li><a class="roteirosporperiodoLink" href="' . get_permalink() . '">' . $roteirosTITLE['value'] . '</a></li>';
                        //  
                        $contSidebar2 = $contSidebar2 + 1;
                    //
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
                <?php
                //
                //
                //
                //
                //
                //
                //
                //
                //
                // CATEGORIAS SECUNDARIAS
                $terms = wp_get_object_terms($post->ID, 'roteiroscategorias');
                if (!empty($terms)) :
                    $tipo = array();
                    foreach ($terms as $term) {
                        $tipo = $term->slug;
                    }
                endif;
                if ($tipo == 'artistas-urbanos') {
                    $artistasUrbanos = 1;
                } else {
                    $artistasUrbanos = 0;
                }
                //
                //
                if ($lpgID == $lpg_3_roteiros_arteurbana || $lpgID == $lpg_3_roteiros_ipiranga || $artistasUrbanos == 1) {
                    //
                    if ($lpgID == $lpg_3_roteiros_arteurbana || $artistasUrbanos == 1) {
                        $titleRoteiroSidebar = 'Artistas Urbanos';
                        $varTaxRoteiroscategorias = 'artistas-urbanos';
                    } elseif ($lpgID == $lpg_3_roteiros_ipiranga) {
                        $titleRoteiroSidebar = 'Ipiranga';
                        $varTaxRoteiroscategorias = 'ipiranga-itens';
                    }
                    ?>
                    <h4 class="roteirosSidebar_box_header"><?php echo $titleRoteiroSidebar; ?></h4>
                    <ul class="noLeftMargin">
                        <?php
                        $argsRoteiros = array(
                            'post_type' => $varPostTypeRoteiro,
                            'posts_per_page' => -1,
                            'roteiroscategorias' => $varTaxRoteiroscategorias
                        );
                        //
                        //
                        //
                        //
                        //
                        //
                        // So contando quanto itens temos
                        $contSidebar2 = 1;
                        global $queryRoteirosCont;
                        $queryRoteirosCont = new WP_Query($argsRoteiros);
                        while ($queryRoteirosCont->have_posts()) : $queryRoteirosCont->the_post();
                            //
                            $contSidebar2 = $contSidebar2 + 1;
                        //
                        endwhile;
                        wp_reset_query();
                        //
                        $resultSidebar2 = $contSidebar2 / 3;
                        //
                        //
                        //
                        //
                        //
                        //
                        //
                        //
                        $contSidebar2B = 1;
                        global $queryRoteiros;
                        $queryRoteiros = new WP_Query($argsRoteiros);
                        while ($queryRoteiros->have_posts()) : $queryRoteiros->the_post();
                            //
                            if ($contSidebar2B > $resultSidebar2) {
                                $ietmAbre = '</ul><ul>';
                                $contSidebar2B = 1;
                            } else {
                                $sidebarBreak = '';
                                $ietmAbre = '';
                            }
                            echo $ietmAbre;
                            //
                            //
                            $roteirosID = get_the_ID();
                            $roteirosTITLE = get_field_object($lang_title, $roteirosID);
                            //
                            //
                            // Artistas 
                            if ($lpgID == $lpg_3_roteiros_arteurbana || $artistasUrbanos == 1) {
                                echo '<li><a class="roteirosporperiodoLink roteirosporperiodoLink-artistas" style="background-image: url(' . get_field('roteirossub_thumbnail') . ');" '
                                . 'href="' . get_permalink() . '"><p>' . $roteirosTITLE['value'] . '</p></a></li>';
                            } else {
                                echo '<li><a class="roteirosporperiodoLink" href="' . get_permalink() . '">' . $roteirosTITLE['value'] . '</a></li>';
                            }
                            //
                            $contSidebar2B = $contSidebar2B + 1;
                        //                       
                        endwhile;
                        wp_reset_query();
                        ?>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>