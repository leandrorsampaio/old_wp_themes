<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
                       <div id="traductor">
                <?php get_sidebar('traducao'); ?>
            </div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">    
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo get_permalink(1848); ?>">
                    <?php
                    $post_id = 1848;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
                -
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Principal ---------------------------------->
        <div id="content_direita">
            <div id="content_videos">
                <div id="videosDestaque">
                    <?php get_sidebar('videos_destaque'); ?>
                </div>
                <!--- Quando for Internet Explorer 7, não carregará esta query. ---->
                <!--[if !IE 7]><![IGNORE[--><![IGNORE[]]> 
                <?php
                $videos = new WP_Query('post_type=videos&posts_per_page=-1');
                while ($videos->have_posts()) : $videos->the_post();
                    ?>
                    <article <?php post_class(); ?>>
                        <div class="videosMosaico"> 
                            <a href="<?php the_permalink(); ?>"> 
                                <div class="videosMosaico_thumb">
                                    <div class="videosMosaico_thumb_bg"></div>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumb-videos');
                                    } else {
                                        ?>
                                        <img class="oportunidadesInternas_query_article_thumb" src="<?php bloginfo('template_url'); ?>/images/video_thumb.png" />
                                        <?php
                                    }
                                    ?>
                                    <h1 class="videosMosaico_thumb_title">
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
                <!--<![endif]-->
                <!--- Quando for Internet Explorer 7, carregará ESTA query. --->
                <!--[if IE 7]> 
                <?php
                if (have_posts()) :
                    query_posts('post_type=videos&posts_per_page=-1');
                    while (have_posts()): the_post();
                        ?>
                                                                                <article <?php post_class(); ?>>
                                                                                    <div class="videosMosaico"> 
                                                                                        <a href="<?php the_permalink(); ?>"> 
                                                                                            <div class="videosMosaico_thumb_IE">
                                                                                                <div class="videosMosaico_thumb_bg"></div>
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumb-videos');
                        } else {
                            ?>
                                                        <img class="oportunidadesInternas_query_article_thumb" src="<?php bloginfo('template_url'); ?>/images/video_thumb.png" />
                            <?php
                        }
                        ?>
                                                                                                    <h1 class="videosMosaico_thumb_title_IE">
                        <?php the_title(); ?>
                                                                                                    </h1>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </article>
                        <?php
                    endwhile;
                endif;
                ?>
               <![endif]-->
            </div>            
        </div>
    </div>
</div>
<?php get_footer(); ?>



