<?php
get_header();
if (have_posts()):
    ?>
    <div id="content">
        <div id="content_left">
            <div id="content_left_carrousel">
                <div id="sliderFrame">
                    <div id="ribbon"></div>
                    <div id="slider">
                        <?php
                        $slider = new WP_Query('post_type=slider');
                        while ($slider->have_posts()) : $slider->the_post();
                            ?>
                            <a href="<?php
                    $values = the_field('link');
                    echo $values[0];
                            ?>">
                                <div class="slider_textarea">
                                    <p class="slider_title"><?php the_title(); ?></p>
                                    <p class="slider_subtitle"><?php the_field('legenda'); ?></p>
                                </div>
                                <span>
                                    <?php the_post_thumbnail('thumb-slider'); ?>
                                </span>
                            </a>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="group1-Wrapper">
                        <a onclick="imageSlider.previous()" class="group1-Prev"></a>
                        <a onclick="imageSlider.next()" class="group1-Next"></a>
                    </div>
                </div>
            </div>
            <div id="content_left_news-INDEX">
                <div id="content_left_news_title">
                    <h2 class="content_titles_h">&Uacute;ltimas Pesquisas</h2>
                </div>
                <ol id="posts">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="content_left_news_calls">
                            <div class="content_left_news_left">
                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                    <?php the_content(); ?>
                                </a>
                            </div>
                            <div class="content_left_news_right" id="post-<?php the_ID(); ?>">
                                <p class="content_left_news_right_categoria"><?php the_category() ?></p>

                                <p>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" class="content_left_news_right_titulo"><?php the_title(); ?></a>
                                </p>
                                <p class="content_left_news_right_texto">
                                    <a href="<?php the_permalink() ?>" rel="bookmark">Clique e saiba mais</a>
                                </p>
                            </div>
                        </div>
                        <?php comments_template(); // Get wp-comments.php template ?>
                    <?php endwhile; ?>
                </ol>
            <?php else: ?>
                <p><?php _e('Desculpe, pagsina nao encontrada'); ?></p>
            <?php endif; ?>
            <?php if (will_paginate()): ?>
            <?php endif; ?>
        </div>
    </div>
    <div id="content_right">



<!--BANNER UNICO (USADO NA COPA)
       
        <div class="content_right_destaksCOPADOMUNDO">
            <a href="http://www.observatoriodoturismo.com.br/?cat=103">
                <img class="content_right_destaksCOPADOMUNDO_img" src="<?php bloginfo( 'template_url' ); ?>/images/banner_copa.jpg" alt="Banner da Copa do Mundo" />
            </a>
        </div>
-->
        <div class="content_right_destaks">
            <img class="content_right_destaks_img" src="http://www.observatoriodoturismo.com.br/wp-content/uploads/2015/04/000222.jpg" alt="Anuario Estatistico" />
            <div class="content_right_destaks-ABOX">
                <a href="http://www.observatoriodoturismo.com.br/anuario-estatistico-2014/" class="content_right_destaks_legenda">
                    <h2 class="content_right_destaks_legenda_titulo">Anu&aacute;rio Estat&iacute;stico 2014</h2>
                    <p class="content_right_destaks_legenda_texto">Confira a nova publica&ccedil;&atilde;o do Observat&oacute;rio</p>
                </a>
            </div>
        </div>
        <div class="content_right_destaks">
            <img class="content_right_destaks_img" src="http://www.observatoriodoturismo.com.br/wp-content/uploads/2015/04/000111.jpg" alt="Copa do Mundo 2014" />
            <div class="content_right_destaks-ABOX">
                <a href="http://www.observatoriodoturismo.com.br/balanco-do-turismo-em-sao-paulo-copa-do-mundo/" class="content_right_destaks_legenda">
                    <h2 class="content_right_destaks_legenda_titulo">Copa do Mundo 2014</h2>
                    <p class="content_right_destaks_legenda_texto">Balan&ccedil;o da Copa do Mundo&trade; em S&atilde;o Paulo</p>
                </a>
            </div>
        </div>


        <?php get_sidebar(''); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>