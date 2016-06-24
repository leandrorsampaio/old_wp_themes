<div class="content_block block-1x">
    <ul class="roteirosLandingPage">
        <li class="roteirosLandingPage_intro wpWysiwyg wpWysiwyg-branco">
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
        </li>
        <?php
        //
        //     
        if (is_single($lpg_3_roteirospoeperiodo)) {
            //
            $varPost_type = $pty_roteirospoeperiodo;
            //
        } elseif (is_single($lpg_3_roteirostematicos)) {
            //
            $varPost_type = $pty_roteirosportema;
            //
        } elseif (is_single($lpg_3_roteirosporregiao)) {
            //
            $varPost_type = $pty_roteirosporregiao;
            //
        } elseif (is_single($lpg_3_roteirosguiados)) {
            //
            $varPost_type = $pty_roteirosguiados;
            //
        } elseif (is_single($lpg_3_roteirosape)) {
            //
            $varPost_type = $pty_roteirosape;
            //
        }
        //
        //
        $argsRoteirosPorPeriodo = array(
            'post_type' => $varPost_type,
            'posts_per_page' => -1,
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
            echo '<li class="roteirosLandingPage_item">';
            echo '<a class="roteirosLandingPage_item_link" href="' . get_permalink() . '" style="border-radius: 3px; background-image: url(' . get_field('roteirossub_thumbnail') . ');">';
            echo '<span>' . get_field('roteirossub_descricao') . '</span>';
            echo '</a>';
            echo '</li>';
        //
        endwhile;
        wp_reset_query();
        ?>            
    </ul>
</div>