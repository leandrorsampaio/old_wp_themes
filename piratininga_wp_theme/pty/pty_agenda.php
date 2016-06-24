<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-verde">
            <?php echo get_field($content_theContent); ?>
        </div>
    </div>
    <div class="content_block_box" <?php echo $noTranslate; ?>>
        <div class="readMoreAcontece">
            <h4 class="readMoreAcontece_title">Mais: Categoria</h4>
            <?php
            $argsReadMore = array(
                'post_type' => array('novidades', 'agenda'),
                'posts_per_page' => 6,
                'orderby' => 'rand'
            );
            //
            global $queryReadMore;
            $queryReadMore = new WP_Query($argsReadMore);
            while ($queryReadMore->have_posts()) : $queryReadMore->the_post();
                //
                $readMoreID = get_the_ID();
                $readMoreTITLE = get_field_object($lang_title, $readMoreID);
                echo '<a href="' . get_permalink() . '" class="readMoreAcontece_link">';
                echo $readMoreTITLE['value'];
                echo '</a>';
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last" <?php echo $noTranslate; ?>>
    <div class="content_block_box">
        <?php
        // Sidebar
        include ($sidebarInclude);
        ?>
    </div>
</div>
