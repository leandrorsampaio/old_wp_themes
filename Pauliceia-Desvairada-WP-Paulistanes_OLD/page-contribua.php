<?php get_header(); ?>
<div id="internaContent">
    <article>
        <div id="internaContent_article">
            <?php
            // Looping Padrao
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div id="internaContent_article_page">
                        <h1 id="internaContent_article_page_title"><?php the_title(); ?></h1>
                        <?php include ('mod_socialShare.php'); ?>
                        <div id="internaContent_article_page_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
                }
            }
            // Limpa loop
            wp_reset_query();
            ?>
            <div id="internaContent_article_contribua">
                <div id="internaContent_article_contribuaBox">
                    <h3>Contribua</h3>
                    <div id="internaContent_article_contribuaBox_balaobico">
                        <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-contribua.png" alt="Elemento decorativo" />
                    </div>
                    <div id="internaContent_article_contribuaBox_wpComments">
                        <?php
                        // MÓDULO CONTRIBUA
                        $withcomments = "1";
                        comments_template(); // Get wp-comments.php template 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <aside>
        <div id="internaContent_sidebar">
            <?php get_sidebar('aside'); ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>