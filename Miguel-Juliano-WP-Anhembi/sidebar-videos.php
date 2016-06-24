<?php
//chama os widgets para essa sidebar cadastrados no admin do WP 
!dynamic_sidebar('videos');
?>
<center>
    <br/>
    <?php
    $videos = new WP_Query('post_type=Videos&posts_per_page=4&orderby=rand');
    while ($videos->have_posts()) : $videos->the_post();
        ?>
        <div class="videosSidebar_thumb">
            <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumb-videos-sidebar');
                } else {
                    ?>
                    <img class="oportunidadesInternas_query_article_thumb" src="<?php bloginfo('template_url'); ?>/images/video_thumb.png" style="width: 160px; height: 132px;"/>
                    <?php
                }
                ?>
            </a>
        </div>
        <div class="videosSidebar_faixa">
            <h2 class="videosSidebar_titulo">
                <a class="videosSidebar_titulo_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</center>