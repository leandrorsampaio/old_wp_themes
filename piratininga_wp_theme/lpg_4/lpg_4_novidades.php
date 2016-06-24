<div class="content_block block-1x">
    <div class="novidadesHome">
        <div class="novidadesHome_destaques">
            <?php
            $argsNovidades = array(
                'post_type' => 'novidades',
                'posts_per_page' => 12,
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
                . ' novidadesHome_destaques_item" '
                . 'style="background-image: url(' . get_field('chamadasAcontece_img') . ');">';
                echo '<span>Categoria' . '</span>';
                echo '<div class="novidadesHome_destaques_item_content">';
                echo '<h3>' . $novidadesTITLE['value'] . '</h3>';
                echo '<p>' . $novidadesRESUMO['value'] . '</p>';
                echo '</div>';
                echo '</a>';
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>