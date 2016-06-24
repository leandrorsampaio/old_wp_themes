<div class="content_block block-1x">
    <div class="dicas">
        <div class="dicas_title">
            <h1>Conhe&ccedil;a as dicas de quem ama S&atilde;o Paulo</h1>
        </div>
        <div class="dicas_linha">
            <?php
            $argsLdt = array(
                'post_type' => 'dicas',
                'posts_per_page' => -1,
                'orderby' => 'rand'
            );
            //
            $contator = 0;
            //
            //
        //
        global $queryLdt;
            $queryLdt = new WP_Query($argsLdt);
            while ($queryLdt->have_posts()) : $queryLdt->the_post();
                //
                $dicasID = get_the_ID();
                $dicasJOB = get_field_object($dicas_profissao, $ltdID);
                $dicasCONTENT = get_field_object($dicas_dica, $ltdID);
                //
                if ($contator % 2 == 0) {
                    $noEsq = ' wpNone ';
                    $noDir = ' ';
                    $clear = ' wpClearBoth ';
                } else {
                    $noEsq = ' ';
                    $noDir = ' wpNone ';
                    $clear = ' ';
                }
                ?>
                <div class="dicas_linha_item <?php echo $clear; ?>">
                    <div class="dicas_linha_item_esqMark <?php echo $noEsq; ?>" style="margin-top: <?php echo rand(150, 300); ?>px;">
                        <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_verde_esq.png" alt="" />
                    </div>
                    <div class="dicas_linha_item_box">
                        <div class="dicas_linha_item_box_foto" style="background-image: url(<?php echo get_field('dicas_retrato'); ?>);">
                            <p class="dicas_linha_item_box_foto_credito"><?php echo get_field('dicas_creditoretrato'); ?></p>
                        </div>
                        <div class="dicas_linha_item_box_info">
                            <h3 class="dicas_linha_item_box_info_nome"><?php echo get_field('dicas_nome'); ?></h3>
                            <p class="dicas_linha_item_box_info_job"><?php echo $dicasJOB['value']; ?></p>
                            <div class="dicas_linha_item_box_info_text wpWysiwyg wpWysiwyg-branco">
                                <?php echo $dicasCONTENT['value']; ?>
                            </div>    
                        </div>
                    </div>
                    <div class="dicas_linha_item_dirMark <?php echo $noDir; ?>" style="margin-top: <?php echo rand(15, 130); ?>px;">
                        <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_verde_dir.png" alt="" />
                    </div>
                </div>
                <?php
                $contator = $contator + 1;
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div class="dicas_title">
            <h1>S&atilde;o Paulo &eacute; amor!</h1>
        </div>
    </div>
</div>