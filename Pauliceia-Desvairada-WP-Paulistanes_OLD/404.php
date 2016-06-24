<?php get_header(); ?>
<div id="internaContent">
    <article>
            <div id="internaContent_article_404">
                <?php include ('mod_socialShare.php'); ?>
                <img src="<?php bloginfo('template_url'); ?>/images/404.png" />
                <h1>404.</h1>
                <?php
                //--------  Query erro_404
                global $erro_404;
                $erro_404 = new WP_Query('page_id=110');
                while ($erro_404->have_posts()) : $erro_404->the_post();
                    ?>
                    <div id="internaContent_article_404_content">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>

            </div>
    </article>
</div>
<?php get_footer(); ?>