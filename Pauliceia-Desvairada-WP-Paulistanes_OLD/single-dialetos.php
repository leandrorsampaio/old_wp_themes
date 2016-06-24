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
                    <div id="internaContent_article_palavra">
                        <h1 id="internaContent_article_palavra_title"><?php the_title(); ?></h1>
                        <?php include ('mod_socialShare.php'); ?>
                        <div id="internaContent_article_palavra_imagem">
                            <img src="<?php the_field('regiao_img'); ?>" alt="<?php the_field('regiao_credito'); ?>" title="<?php the_field('regiao_credito'); ?>" />
                            <p>Cr&eacute;ditos: <?php the_field('regiao_credito'); ?></p>
                        </div>
                        <div id="internaContent_article_palavra_texto">
                            <?php the_content(); ?>
                        </div>
                        <div id="internaContent_article_palavra_exemplo">
                            <?php the_field('regiao_ex') ?>
                        </div>
                    </div>
                    <?php
                }
            }
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