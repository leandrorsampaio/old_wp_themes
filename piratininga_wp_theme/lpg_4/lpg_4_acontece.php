<div class="content_block block-1x">
    <div class="homeAcontece">
        <div class="swiper-container homeAcontece_slider">
            <div class="swiper-wrapper homeAcontece_slider_wrapper">
                <?php
                $argsNovidades = array(
                    'post_type' => array('novidades', 'agenda'),
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                );
                //
                global $queryNovidades;
                $queryNovidades = new WP_Query($argsNovidades);
                while ($queryNovidades->have_posts()) : $queryNovidades->the_post();
                    //
                    $novidadesID = get_the_ID();
                    $novidadesTITLE = get_field_object($lang_title, $novidadesID);
                    $novidadesRESUMO = get_field_object($chamadasAcontece_resumo, $novidadesID);
                    echo '<a href="' . get_permalink() . '" class="swiper-slide'
                    . ' homeAcontece_slider_wrapper_box" '
                    . 'style="background-image: url(' . get_field('chamadasAcontece_img') . ');">';
                    echo '<span>Categoria' . '</span>';
                    echo '<div class="homeAcontece_slider_wrapper_box_content">';
                    echo '<h3>' . $novidadesTITLE['value'] . '</h3>';
                    echo '<p>' . $novidadesRESUMO['value'] . '</p>';
                    echo '</div>';
                    echo '</a>';
                //
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="swiper-button-next"></div>  <!-- Add NEXT btn -->
            <div class="swiper-button-prev"></div>  <!-- Add PREV btn -->
        </div>
        <!-- Initialize Swiper -->
        <script>
            // pega o tamanho relativo do device
            var tamanhodevice2 = window.innerWidth;
            // se for tamanho medium criar variavel para menos itens exibidos no carrossel
            if (tamanhodevice2 < 1025) {
                var numeroItens2 = 1;
                var numeroItens3 = 15;
            } else {
                var numeroItens2 = 3;
                var numeroItens3 = 25;
            }
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: numeroItens2,
                paginationClickable: true,
                spaceBetween: numeroItens3,
                freeMode: true,
                centeredSlides: true,
                autoplay: 5000,
                autoplayDisableOnInteraction: false,
                loop: true
            });
        </script>
        <div class="homeAcontece_dicas">
            <div class="homeAcontece_dicas_fotos">
                <?php
                $argsLdt = array(
                    'post_type' => 'dicas',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                );
                //
                global $queryLdt;
                $queryLdt = new WP_Query($argsLdt);
                while ($queryLdt->have_posts()) : $queryLdt->the_post();
                    ?>
                    <a href="<?php echo get_permalink($lpg_4_dicas); ?>" 
                       class="homeAcontece_dicas_fotos_img" 
                       style="background-image: url(<?php echo get_field('dicas_retrato'); ?>);">
                        <div class="homeAcontece_dicas_fotos_img_bg">
                            <h4><?php echo get_field('dicas_nome'); ?></h4>
                        </div>
                    </a>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <a href="<?php echo get_permalink($lpg_4_dicas); ?>" class="homeAcontece_dicas_info">
                <h1>Dicas de Quem ama S&atilde;o Paulo</h1>
                <p>Ous sd uis asdu iu g guasdgioiuag uidgas d iy aifd iyafdias
                    dui siud pais hdoas hdohsa od asdas daskh asdy uoasud g iugasidi d</p>
                <p>
                    Ous sd uis</br>
                    Ous sd uis</br>
                    Ous sd uis
                </p>
            </a>
        </div>
        <div class="homeAcontece_topMes">
            <h3>TOP 5</h3>
            <?php
            $argsTOPMES = array(
                'post_type' => array('novidades', 'agenda'),
                'posts_per_page' => 5,
                'orderby' => 'rand'
            );
            //
            global $queryTOPMES;
            $queryTOPMES = new WP_Query($argsTOPMES);
            while ($queryTOPMES->have_posts()) : $queryTOPMES->the_post();
                //
                $topMesID = get_the_ID();
                $topMesTITLE = get_field_object($lang_title, $topMesID);
                //
                echo '<a href="' . get_permalink() . '" class="cardAgenda_item">';
                echo '<div class="cardAgenda_item_img"' .
                ' style="background-image: url(' . get_field('chamadasAcontece_img') . ');">'
                . '</div>';
                echo '<div class="cardAgenda_item_content">';
                echo '<h5>' . $topMesTITLE['value'] . '</h5>';
                echo '<p>Categoria</p>';
                echo '</div>';
                echo '</a>';
            //
            endwhile;
            wp_reset_query();
            ?>            
        </div>
    </div>
</div>