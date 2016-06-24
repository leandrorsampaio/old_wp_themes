<?php get_header(); ?>
<div id="all_content">
    <!-- ---------------------------------------- SLIDER ---------------------------------->
    <div id="highlights">
        <div id="slider">
            <?php
            $slider = new WP_Query('post_type=destaque');
            while ($slider->have_posts()) : $slider->the_post();
                ?>
                <a href="
                <?php
                $values = the_field('link_lider_home');
                echo $values[0];
                ?>
                   ">
                    <div id="highlights_pattern"></div>
                    <div class="slider_title" >
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php the_post_thumbnail('thumb-slider'); ?>
                </a>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div id="content">
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
        <!------------------------------------------ BLOCO 2 ---------------------------------->
        <div id="content_bloco2">
            <div class="content_bloco2_boxX">
                <?php
                //---------------------------------- BOX 1 - Query "Feiras e Exposicoes"
                $box1 = new WP_Query('post_type=seueventoaqui&p=2215');
                while ($box1->have_posts()) : $box1->the_post();
                    ?>
                    <article class="content_bloco2_boxX_article">
                        <a class="content_bloco2_boxX_article_aTitle" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
                                <?php the_title(); ?>
                            </h1>
                        </a>
                        <a class="content_bloco2_boxX_article_aImg-pavilhao" href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-homeFaixa1');
                            } else {
                                ?>
                                <img class="content_bloco2_boxX_article_aImg_image" src="<?php bloginfo('template_url'); ?>/images/homeFaixa1-sem-imagem.jpg" />
                                <?php
                            }
                            ?>
                        </a>
                        <a class="content_bloco2_boxX_article_aText" href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="content_bloco2_boxX">
                <?php
                //---------------------------------- BOX 2 - Query "Congressos e convencoes"
                $box2 = new WP_Query('post_type=seueventoaqui&p=2302');
                while ($box2->have_posts()) : $box2->the_post();
                    ?>
                    <article class="content_bloco2_boxX_article" <?php post_class(); ?>>
                        <a class="content_bloco2_boxX_article_aTitle" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
                                <?php the_title(); ?>
                            </h1>
                        </a>
                        <a class="content_bloco2_boxX_article_aImg-palacio" href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-homeFaixa1');
                            } else {
                                ?>
                                <img class="content_bloco2_boxX_article_aImg_image" src="<?php bloginfo('template_url'); ?>/images/homeFaixa1-sem-imagem.jpg" />
                                <?php
                            }
                            ?>
                        </a>
                        <a class="content_bloco2_boxX_article_aText" href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a> 
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="content_bloco2_boxX">
                <?php
                //---------------------------------- BOX 3 - Query "Shows e Comemoracoes"
                $box3 = new WP_Query('post_type=seueventoaqui&p=2303');
                while ($box3->have_posts()) : $box3->the_post();
                    ?>
                    <article class="content_bloco2_boxX_article" <?php post_class(); ?>>
                        <a class="content_bloco2_boxX_article_aTitle_h1" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
                                <?php the_title(); ?>
                            </h1>
                        </a>
                        <a class="content_bloco2_boxX_article_aImg-polo" href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-homeFaixa1');
                            } else {
                                ?>
                                <img class="content_bloco2_boxX_article_aImg_image" src="<?php bloginfo('template_url'); ?>/images/homeFaixa1-sem-imagem.jpg" />
                                <?php
                            }
                            ?>
                        </a>
                        <a class="content_bloco2_boxX_article_aText" href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div id="content_bloco2_box4">
                <div id="content_bloco2_box4_destaques">
                    <a id="content_bloco2_box4_destaques_aTitle" href="<?php echo get_permalink(1848); ?>">
                        <h1 id="content_bloco2_box4_destaques_aTitle_h">Destaques</h1>
                    </a>
                    <?php
                    //---------------------------------- BOX 4 - Query "Destaques" (pots comuns)
                    $box3 = new WP_Query('posts_per_page=3');
                    while ($box3->have_posts()) : $box3->the_post();
                        ?>
                        <div class="content_bloco2_box4_destaques_post">
                            <article>
                                <a class="content_bloco2_box4_destaques_post_link" href="<?php the_permalink(); ?>">
                                    <h2 class="content_bloco2_box4_destaques_post_link_h">
                                        <?php the_title(); ?>
                                    </h2>
                                </a>
                            </article>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
                $box_news = new WP_Query('page_id=1699');
                while ($box_news->have_posts()) : $box_news->the_post();
                    ?>
                    <div id="content_bloco2_box4_chamadas">
                        <a id="content_bloco2_box4_chamadas_link" href="<?php the_permalink(); ?>">
                            <p id="content_bloco2_box4_chamadas_link_p">Fique ligado nos melhores eventos, shows e atra&ccedil;&otilde;es da cidade. Clique aqui e receba nossa news!</p>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!------------------------------------------ BLOCO 3 ---------------------------------->
        <div id="content_bloco3">
            <div id="content_bloco3_boxDownload">
                <?php get_sidebar('homebox-download'); ?>
            </div>
            <div class="content_bloco3_boxSeparator"></div>
            <div id="content_bloco3_boxMidia">
                <?php get_sidebar('homebox-midia'); ?>
            </div>
            <div id="content_bloco3_boxTelecom">
                <?php get_sidebar('homebox-telecom'); ?>
            </div>
            <div class="content_bloco3_boxSeparator"></div>
            <div id="content_bloco3_boxAgenda">
                <a href="http://www.anhembi.com.br/agenda">
                    <h3 id="content_bloco3_boxMidia_Sidebar_title">Agenda de Eventos</h3>
                </a>
                <iframe src="http://www.spturis.com/intranet/modulos/booking/anhembisite_indexbox.php" width="284" height="250" frameborder="0" style="overflow:hidden;" seamless></iframe>
            </div>
        </div>
        <!------------------------------------------ BLOCO 4 ---------------------------------->
        <div id="content_bloco4">
            <div id="content_bloco4_boxOportunidades">
                <div id="content_bloco4_boxOportunidades_top">
                    <?php
                    //---------------------------------- Query "Oportunidades" - Topo (Title e resumo)
                    $boxoporttitle = new WP_Query('page_id=1224');
                    while ($boxoporttitle->have_posts()) : $boxoporttitle->the_post();
                        ?>
                        <h2 id="content_bloco4_boxOportunidades_top_title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </div>
                    <div id="content_bloco4_boxOportunidades_resumo">
                        <span id="content_bloco4_boxOportunidades_resumo_span">
                            <?php the_excerpt(); ?>
                        </span>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
                //---------------------------------- Query "Oportunidades"
                $boxoport = new WP_Query('post_type=oportunidades&posts_per_page=3');
                while ($boxoport->have_posts()) : $boxoport->the_post();
                    ?>
                    <article class="content_bloco4_boxOportunidades_article">
                        <!--[if lte IE 8]>
                        <div class="content_bloco4_boxOportunidades_article">
                        <![endif]-->
                        <h3 class="content_bloco4_boxOportunidades_article_title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <a class="content_bloco4_boxOportunidades_article_thumb" href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-homeOportunidades');
                            } else {
                                ?>
                                <img class="content_bloco4_boxOportunidades_article_thumb" src="<?php bloginfo('template_url'); ?>/images/content_bloco4_boxOportunidades_article_thumb.gif" />
                                <?php
                            }
                            ?>
                        </a>
                        <a class="content_bloco4_boxOportunidades_article_resumo" href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                        <!--[if lte IE 8]>
                        </div>
                        <![endif]-->
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <!------------------------------------------ BLOCO 4 Twitter New -->
            <div id="content_bloco4_boxTwitter">
                <iframe src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/twitter_widget/twitter_widget-home.html" scrolling="no" frameborder="0"></iframe>
            </div>
            <div id="content_bloco4_boxTwitter_bird">
                <a href="http://twitter.com/anhembiparque" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/twitter_bird_index.gif" alt="Logo do Twitter" />
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>