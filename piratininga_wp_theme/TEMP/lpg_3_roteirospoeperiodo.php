<div class="content_block block-1x">
    <div class="homeroteirosporperiodo">
        <div class="roteirosporperiodo_cards">
            <div class="roteirosporperiodo_intro">
                <?php 
                if ($idioma == 3) {
                    $fieldName = 'layoutpadrao_text_es';
                } elseif ($idioma == 2) {
                    $fieldName = 'layoutpadrao_text_en';
                } else {
                    $fieldName = 'layoutpadrao_text_pt';
                }
                //
                echo get_field($fieldName); 
                ?>
            </div>
            <?php
            $argsRoteirosPorPeriodo = array(
                'post_type' => 'roteirosporperiodo',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            //
            global $queryRoteirosPorPeriodo;
            $queryRoteirosPorPeriodo = new WP_Query($argsRoteirosPorPeriodo);
            while ($queryRoteirosPorPeriodo->have_posts()) : $queryRoteirosPorPeriodo->the_post();
                //
                $RoteirosPorPeriodoID = get_the_ID();
                $RoteirosPorPeriodoTITLE = get_the_title();
                //
                echo '<div class="roteirosporperiodo_item">';
                echo '<a class="link_roteirosporperiodo" href="' . get_permalink() . '">';
                echo '<div class="roteirosporperiodo_item_img img_roteirosporperiodo"' .
                ' style="background-image: url(' . get_field('roteirosporperiodo_thumbnail') . ');">'
                . '</div>';
                echo '<p>' . get_field('roteirosporperiodo_descricao') . '</p>';
                echo '</a>';
                echo '</div>';
            //
            endwhile;
            wp_reset_query();
            ?>            
        </div>
    </div>
</div>