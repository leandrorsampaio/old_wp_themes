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
            <div id="internaContent_article_dialetos">
                <?php
                //--------  Query Dialetos
                global $dialetos;
                $dialetos = new WP_Query('post_type=dialetos&orderby=rand&posts_per_page=-1');
                while ($dialetos->have_posts()) : $dialetos->the_post();
                    ?>
                    <div class="internaContent_article_dialetos_regiao">
                        <h2 class="internaContent_article_dialetos_regiao_title"><?php the_title(); ?></h2>
                        <div class="internaContent_article_dialetos_regiao_imagem">
                            <img src="<?php the_field('regiao_img_interna'); ?>" alt="<?php the_field('regiao_creditos_interna'); ?>" title="<?php the_field('regiao_creditos_interna'); ?>" />
                            <p>Cr&eacute;ditos: <?php the_field('regiao_creditos_interna'); ?></p>
                        </div>
                        <div class="internaContent_article_dialetos_regiao_content">
                            <?php the_content(); ?>
                        </div>
                        <div class="internaContent_article_dialetos_regiao_exemplo">
                            <?php the_field('regiao_ex'); ?>
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