<?php get_header(); ?>
<div id="internaContent">
    <article>
        <div id="internaContent_article">
            <div id="internaContent_article_taxTitle_Responsivel">
                <div id="internaContent_taxTitle">
                    <?php
                    // Printa o Nome da Categoria Atual
                    $term = $wp_query->queried_object;
                    echo '<h1>' . $term->name . '</h1>';
                    ?>
                </div>
            </div>
            <?php
            global $maispalavras;
            $maispalavras = new WP_Query('orderby=ASC&alfabeto=' . $term->name . '&posts_per_page=-1');
            while ($maispalavras->have_posts()) : $maispalavras->the_post();
                ?>
                <section>
                    <div class="internaContent_article_tax">
                        <div class="internaContent_article_tax_imagem">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                // Conta caracteres da URL da imagem
                                $contador = get_field('palavra_img');
                                if ((strlen($contador)) < 3) {
                                    ?>
                                    <img src="<?php bloginfo('template_url'); ?>/images/palavra-imagem-padrao.jpg" alt="Imagem indispon&iacute;vel" title="Imagem indispon&iacute;vel" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php the_field('palavra_img'); ?>" alt="<?php the_field('palavra_credito'); ?>" title="<?php the_field('palavra_credito'); ?>" />
                                    <?php
                                }
                                ?>                                    
                            </a>
                            <p>Cr&eacute;ditos: <?php the_field('palavra_credito'); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="internaContent_article_tax_title"><?php the_title(); ?></a>
                    </div>
                </section>
                <?php
            endwhile;
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