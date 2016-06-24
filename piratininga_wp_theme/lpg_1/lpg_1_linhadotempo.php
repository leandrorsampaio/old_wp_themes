<div class="content_block block-1x">
    <div class="ldt">
        <div class="ldt_title">
            <h1>Conhe&ccedil;a a Linha do Tempo da Cidade</h1>
        </div>
        <div class="ldt_linha">
            <?php
            $argsLdt = array(
                'post_type' => 'linhatempo',
                'posts_per_page' => -1
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
                $ltdID = get_the_ID();
                $ltdTITLE = get_field_object($lang_title, $ltdID);
                $ltdCONTENT = get_field_object($lang_content, $ltdID);
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
                <div class="ldt_linha_item <?php echo $clear; ?>">
                    <div class="ldt_linha_item_esqMark <?php echo $noEsq; ?>" style="margin-top: <?php echo rand(150, 300); ?>px;">
                        <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_esq.png" alt="" />
                    </div>
                    <div class="ldt_linha_item_content">
                        <p class="ldt_linha_item_content_ano"><?php echo get_field('linhadotempo_data'); ?></p>
                        <h6 class="ldt_linha_item_content_titulo"><?php echo $ltdTITLE['value']; ?></h6>
                        <img class="ldt_linha_item_content_img" src="<?php echo get_field('linhadotempo_imagem'); ?>" alt="" />
                        <p class="ldt_linha_item_content_credito"><?php echo get_field('linhadotempo_credito'); ?></p>
                        <div class="ldt_linha_item_content_text wpWysiwyg wpWysiwyg-azul">
                            <?php echo $ltdCONTENT['value']; ?>
                        </div>    
                    </div>
                    <div class="ldt_linha_item_dirMark <?php echo $noDir; ?>" style="margin-top: <?php echo rand(15, 130); ?>px;">
                        <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_dir.png" alt="" />
                    </div>
                </div>
                <?php
                $contator = $contator + 1;
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div class="ldt_title">
            <h1>Nasceu!</h1>
        </div>
    </div>
</div>