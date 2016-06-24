<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="ptyDicas_header">
            <div class="ptyDicas_header_foto" style="background-image: url(<?php echo get_field('dicas_retrato'); ?>);">
                <!--<p class="ptyDicas_header_foto_credito"><?php echo get_field('dicas_creditoretrato'); ?></p>-->
            </div>
            <div class="ptyDicas_header_info">
                <h3 class="ptyDicas_header_info_nome"><?php echo get_field('dicas_nome'); ?></h3>
                <?php
                $terms = get_the_terms($post->ID, 'dicasprofissa');
                if ($terms != null) {
                    foreach ($terms as $term) {
                        print '<p>' . $term->name . '</p>';
                        unset($term);
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="content_block_box">
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-verde">
            <?php echo get_field($dicas_dica); ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last">
    <div class="content_block_box">
        <?php
        // Sidebar
        include ($sidebarInclude);
        ?>
    </div>
</div>
