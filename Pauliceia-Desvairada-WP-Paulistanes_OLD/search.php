<?php get_header(); ?>
<div id="internaContent">
    <article>
        <div id="internaContent_article">



            <div id="search">

                <div id="search_titulo">
                    <?php
                    /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
                    $key = wp_specialchars($s, 1);
                    $count = $allsearch->post_count;
                    _e('');
                    _e
                            ('');
                    _e
                            ('Resultados para: ');
                    _e
                            ('<strong>&quot;');
                    echo $key;
                    _e
                            ('&quot;</strong>');
                    _e
                            ('<p><strong>');
                    echo $count;
                    _e
                            ('</strong>');
                    _e
                            (' resultado(s) encontrado(s)');
                    _e
                            ('</p>');
                    wp_reset_query();
                    ?>
                </div> 


                <div id="search_resultado">






                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>



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


                        <?php endwhile; ?>




                    <?php else : ?>
                        <h1>Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
                    <?php endif; ?>




                    <div class="search_resultado_pagination">
                        <div class="search_resultado_paginationCentralizador">
                            <!--- pega a paginacao (que esta nas functions --->
                            <?php pagination() ?>
                        </div>
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

