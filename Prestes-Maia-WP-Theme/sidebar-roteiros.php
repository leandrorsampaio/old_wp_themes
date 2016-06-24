<div id="aside_title">
    Roteiros
</div>
<!--<div id="asideMenu_line">
</div>-->
<div id="asideMenu_label"></div>
<div id="asideMenu_lista">
    <ul id="asideMenu_ul">
        <?php
        $roteiros = new WP_Query('post_type=roteiros');
        if ($roteiros->have_posts()) {
            while ($roteiros->have_posts()) : $roteiros->the_post();
                ?>
                <li class="asideMenu_li">      
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php
            endwhile;
        }
        wp_reset_query();
        ?>
    </ul>
</div>