<?php wp_footer(); ?>
<div id="footer">
    <div id="footer_logo">
        <?php
        $recent = new WP_Query('pagename=rodape');
        while ($recent->have_posts()) : $recent->the_post();
            ?>
            <div id="footer_logo_bloco1">
                <div id="footer_logo_bloco1_title">
                    <h1 class="footer_logo_blocos_titulo">Parceiros:</h1>
                </div>
                <?php the_field('parceiros'); ?> 
            </div>
            <div id="footer_logo_bloco2">
                <div id="footer_logo_bloco2_title">
                    <h1 class="footer_logo_blocos_titulo">Apoio:</h1>
                </div>
                <?php the_field('apoio'); ?> 
            </div>
            <div id="footer_logo_bloco3">
                <div id="footer_logo_bloco3_title">
                    <h1 class="footer_logo_blocos_titulo">Realiza&ccedil;&atilde;o:</h1>
                </div>
                <?php the_field('realizacao'); ?> 
            </div>
        <?php endwhile; ?>
    </div>
</div>