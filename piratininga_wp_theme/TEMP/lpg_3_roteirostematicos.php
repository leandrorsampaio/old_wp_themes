<div class="content_block block-1x">
    <ul class="roteirosLandingPage">
        <li class="roteirosLandingPage_intro">
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
        if ($getPty == $pty_roteirospoeperiodo) {
            $varPost_type = 'roteirospoeperiodo';
        } elseif ($getPty == $pty_roteirosportema) {
            $varPost_type = 'roteirosportema';
        } elseif ($getPty == $pty_roteirosporregiao) {
            $varPost_type = 'roteirosporregiao';
        } elseif ($getPty == $pty_roteirosguiados) {
            $varPost_type = 'roteirosguiados';
        }
        //
        //
        $argsRoteirosPorPeriodo = array(
            'post_type' => $varPost_type,
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
            echo '<li class="roteirosLandingPage_item">';
            echo '<a class="roteirosLandingPage_item_link" href="' . get_permalink() . '" style="background-image: url(' . get_field('roteirosportema_thumbnail') . ');">';
            echo '<span>' . get_field('roteirosportema_descricao') . '</span>';
            echo '</a>';
            echo '</li>';
        //
        endwhile;
        wp_reset_query();
        ?>            
    </ul>
</div>