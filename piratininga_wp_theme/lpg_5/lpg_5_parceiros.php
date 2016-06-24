<!--<div class="content_block block-1x" style="margin-bottom: 0px !important;">
    <div class="content_block_box box-15y bgAzulClaro">
    </div>
</div>-->

<div class="content_block block-1x">
    <ul class="parceiros2">
        <?php
        $argsParceiros = array(
            'post_type' => 'parceiros',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );
        //
        global $queryParceiros;
        $queryParceiros = new WP_Query($argsParceiros);
        while ($queryParceiros->have_posts()) : $queryParceiros->the_post();
            //
            $parceirosID = get_the_ID();
            $parceirosTITLE = get_the_title();
            $link_address = get_field('parceiros_site');

            //
            echo '<li class="parceiros2_item">';
            echo '<div class="parceiros2_item_img"' .
            ' style="background-image: url(' . get_field('parceiros_logo') . ');">'
            . '</div>';
            echo '<div class="parceiros2_item_content">';
            echo '<a href="' . get_field('parceiros_site') . '" target="blank" >' . get_the_title() . '</a>';
            echo '<h2>' . get_field('parceiros_email') . '</h2>';
            echo '<h5 class="descricao">' . get_field('parceiros_descricao_pt') . '</h5>';
            echo '<h3 class="tel1">' . get_field('parceiros_telefone1') . '</h3>';
            echo '<h4 class="tel2">' . get_field('parceiros_telefone2') . '</h4>';
            echo '</div>';
            echo '</li>';
        //
        endwhile;
        wp_reset_query();
        ?>            
    </ul>
</div>

