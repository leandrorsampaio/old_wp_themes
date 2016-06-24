<div id="internaContent_sidebar_boxPraDoDia">
    <div id="internaContent_sidebar_boxPraDoDia_title">
        <a href="<?php echo bloginfo('url') . '/?page_id=13'; ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/pratoDoDia-title.png" alt="Prato do Dia" title="Prato do Dia" />
        </a>
    </div>
    <ul>    
        <?php
        //--------  Query Prato do Dia
        global $pratododia;
        $pratododia = new WP_Query('post_type=gastronomia&orderby=rand&posts_per_page=4');
        while ($pratododia->have_posts()) : $pratododia->the_post();
            ?>
            <li>
                <a href="<?php echo bloginfo('url') . '/?page_id=13'; ?>"><?php the_title(); ?></a>
            </li>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </ul>
</div>