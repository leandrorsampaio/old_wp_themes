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
            <div id="internaContent_article_gastronomia">
                <?php
                //--------  Query Gastronomia
                global $gastronomia;
                $gastronomia = new WP_Query(array(
                            'post_type' => 'gastronomia',
                            'posts_per_page' => '-1',
                            'orderby' => 'title',
                            'order' => 'ASC',
                        ));
                while ($gastronomia->have_posts()) : $gastronomia->the_post();
                    ?>
                    <div class="internaContent_article_gastronomia_item">
                        <h2 class="internaContent_article_gastronomia_item_title"><?php the_title(); ?></h2>
                        <div class="internaContent_article_gastronomia_item_imagem">
                            <img src="<?php the_field('gastro_img'); ?>" alt="<?php the_field('gastro_creditos'); ?>" title="<?php the_field('gastro_creditos'); ?>" />
                        </div>
                        <p>Cr&eacute;ditos: <?php the_field('gastro_creditos'); ?></p>
                        <div class="internaContent_article_gastronomia_item_chamada">
                            <?php the_field('gastro_chamada'); ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
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