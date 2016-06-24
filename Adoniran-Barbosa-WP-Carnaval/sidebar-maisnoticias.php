<div class="aside_box"  style="border-color: <?php echo $cor1; ?>;">
    <h5 class="aside_box_title"  style="color: <?php echo $cor1; ?>;">Leia mais:</h5>
    <ul id="asideBox-leiamais_lista">
        <?php
        //---------------------------------- Query Noticias
        $asideposts = new WP_Query('posts_per_page=6&orderby=rand&anocarnaval=2016&post_type=post');
        while ($asideposts->have_posts()) : $asideposts->the_post();
            ?>
            <li class="asideBox-leiamais_lista_item">
                <a class="asideBox-leiamais_lista_item_link" href="<?php the_permalink(); ?>">
                    <img class="asideBox-leiamais_lista_item_link_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                    <?php the_title(); ?>
                </a>
            </li>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
</div>    