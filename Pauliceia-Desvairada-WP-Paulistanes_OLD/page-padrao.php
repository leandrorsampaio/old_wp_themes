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
        </div>
    </article>
    <aside>
        <div id="internaContent_sidebar">
            <?php get_sidebar('aside'); ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>