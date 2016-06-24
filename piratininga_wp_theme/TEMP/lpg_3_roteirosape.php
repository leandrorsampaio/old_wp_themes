<div class="content_block block-1x">



    <div class="homeDownloads">
        <div class="homeDownloads_cards">
            <?php
            $argsRoteirosape = array(
                'post_type' => 'roteirosape',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'downloadslang' => $taxonomiaNome
            );
//
            global $queryRoteirosape;
            $queryRoteirosape = new WP_Query($argsRoteirosape);
            while ($queryRoteirosape->have_posts()) : $queryRoteirosape->the_post();
                //
                $RoteirosapeID = get_the_ID();
                $RoteirosapeTITLE = get_the_title();

                //
                echo '<div class="roteirosape_item">';
                echo '<div class="roteirosape_item_img"' .
                ' style="background-image: url(' . get_field('roteirosape_thumbnail') . ');">'
                . '</div>';
                echo '<div class="roteirosape_item_content">';
                echo '<h2>' . get_the_title() . '</h2>';
                echo '<h3 class="formato"> <b>Formato:</b> ' . get_field('roteirosape_formato') . '</h3>';
                echo '<h4 class="versao"> <b>Vers&atilde;o:</b> ' . get_field('roteirosape_versao') . '</h4>';
                echo '<p class="descricao">' . get_field('roteirosape_descricao') . '</p>';
                echo '<p>' . get_field('roteirosape_linkfile') . '</p>';
                echo '</div>';
                echo '</div>';
//
            endwhile;
            wp_reset_query();
            ?>            
        </div>
    </div>
</div>



