<a href="<?php echo get_permalink(25); ?>">
    <img id="contentHome_setor2_boxBig_header_imgSino" src="<?php bloginfo('stylesheet_directory'); ?>/images/contentHome_setor2_boxBig_header_imgSino.png" alt="Sino de Natal" />
</a>
<aside>
    <?php
    !dynamic_sidebar('homebox-noticias');
    ?>
</aside>
<div id="contentHome_setor2_boxBig_content">
    <ul>
            <?php
//--------- Query "Notícias"
            $noticias = new WP_Query('posts_per_page=4');
            while ($noticias->have_posts()) : $noticias->the_post();
                ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <h1 class="negrito">
                        <?php the_title(); ?>
                    </h1>
                </a>
            </li>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>            
    </ul>
</div>



