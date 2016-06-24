<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="roteirosHeader" style="background-image: url(<?php echo get_field('roteirosporperiodo_capa'); ?>);">
            <div class="roteirosHeader">
                <a href="<?php echo get_permalink($lpg_2_guiapratico); ?>">
                    <i class="fa fa-book"></i>
                    <span>Guia do Viajante</span>
                </a>
                <?php
                $linkPdfGuia = '';
                if ($idioma == 1) {
                    if (get_field('roteirosporperiodo_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_es');
                    } elseif (get_field('roteirosporperiodo_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_en');
                    }
                } elseif ($idioma == 2) {
                    if (get_field('roteirosporperiodo_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_en');
                    } elseif (get_field('roteirosporperiodo_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_es');
                    }
                } elseif ($idioma == 3) {
                    if (get_field('roteirosporperiodo_wpfile_es')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_es');
                    } elseif (get_field('roteirosporperiodo_wpfile_pt')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_pt');
                    } elseif (get_field('roteirosporperiodo_wpfile_en')) {
                        $linkPdfGuia = get_field('roteirosporperiodo_wpfile_en');
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
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-vermelho">
            <?php echo get_field($layoutpadrao_text); ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last" style="margin-top: 5px;">
    <div class="content_block_box">



        <div class="sidebar roteirosSidebar">
            <div class="roteirosSidebar_box">
                <h4 class="roteirosSidebar_box_header">Outros dias na Semana</h4>
                <ul>

                    <?php
                    $argsRoteiros = array(
                        'post_type' => 'roteirosporperiodo',
                        'posts_per_page' => -1
                    );
                    //
                    global $queryRoteiros;
                    $queryRoteiros = new WP_Query($argsRoteiros);
                    while ($queryRoteiros->have_posts()) : $queryRoteiros->the_post();
                        //
                        $roteirosID = get_the_ID();
                        $roteirosTITLE = get_field_object($lang_title, $roteirosID);
                        echo '<li><a class="roteirosporperiodoLink" href="' . get_permalink() . '">' . $roteirosTITLE['value'] . '</a></li>';
                    //                       
                    endwhile;
                    wp_reset_query();
                    ?>

                </ul>
            </div>
        </div>





    </div>
</div>