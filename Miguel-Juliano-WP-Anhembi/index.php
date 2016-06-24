<?php get_header(); ?>
<div id="all_content">
    <!-- ---------------------------------------- SLIDER ---------------------------------->
    <div id="highlights">
        <div id="sliderFrame">
            <div id="ribbon"></div>
            <div id="slider" style="margin: 0 auto!important;">
                <?php
                $slider = new WP_Query('post_type=destaque');
                while ($slider->have_posts()) : $slider->the_post();
                    ?>
                    <a href="<?php the_field('link_lider_home'); ?>">
                        <div id="highlights_pattern"></div>
                        <div class="slider_title" >
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <?php the_excerpt(); ?>
                            <p class="slider_title_creditos">Foto: <?php the_field('creditos_lider_home'); ?></p>
                        </div>
                        <?php the_post_thumbnail('thumb-slider'); ?>
                    </a>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
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
            <?php
            //---------------------------------- QUERY AVISOS HOME (OPENADS)
            $box3 = new WP_Query('posts_per_page=1&post_type=avisoshome');
            while ($box3->have_posts()) : $box3->the_post();
                $booteste = get_field('avisoshome_boo');
                if ($booteste == 1) {
                    ?>
                    <div class="avisoHome">
                        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
                        <script language='JavaScript' type='text/javascript'>
                            <!--
                           if (!document.phpAds_used)
                                document.phpAds_used = ',';
                            phpAds_random = new String(Math.random());
                            phpAds_random = phpAds_random.substring(2, 11);

                            document.write("<" + "script language='JavaScript' type='text/javascript' src='");
                            document.write("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
                            document.write("&amp;what=zone:40");
                            document.write("&amp;exclude=" + document.phpAds_used);
                            if (document.referrer)
                                document.write("&amp;referer=" + escape(document.referrer));
                            document.write("'><" + "/script>");
                            //-->
                        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a0e112be' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:40&amp;n=a0e112be' border='0' alt=''></a></noscript>
                    </div>
                    <?php
                } else {
                    // sem banner OpenAds
                }
            endwhile;
            wp_reset_postdata();
            ?>
            <div id="content_bloco2_boxAgenda">
                <!---------------------------------- BOX 1 - AGENDA -->
                <a href="http://www.anhembi.com.br/agenda">
                    <h3 id="content_bloco3_boxMidia_Sidebar_title">Agenda de Eventos</h3>
                    <span class="content_bloco2_vejaMais">veja mais</span>
                </a>
                <iframe src="http://intranet.spturis.com.br/intranet/modulos/booking/anhembisite_indexbox.php" width="284" height="250" frameborder="0" style="overflow:hidden;" seamless></iframe>
            </div>

            <div id="content_bloco2_box4">
                <div id="content_bloco2_box4_destaques">
                    <a id="content_bloco2_box4_destaques_aTitle" href="<?php echo get_permalink(1848); ?>">
                        <h1 id="content_bloco2_box4_destaques_aTitle_h">Destaques</h1>
                    </a>
                    <a id="content_bloco2_box4_destaques_aTitle" href="<?php echo get_permalink(2138); ?>">
                        <span class="content_bloco2_vejaMais">veja mais</span>
                    </a>
                    <?php
//---------------------------------- BOX 2 - Query "Destaques" (pots comuns)
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
                <div id="content_bloco2_boxNews">
                    <h1>Acompanhe os melhores eventos da cidade!</h1>
                    <iframe src="http://spturis.com/sistemas/mailer_anhembi/mailer_newsletter_form_small_home.php" frameBorder=0 width=258 height=70 scrolling='no'></iframe>  
                </div>
            </div>
            <div id="content_bloco2_boxFace">
                <!---------------------------------- ÁREA FACEBOOK --->
                <div id="fb-root"></div>
                <script>
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-like-box" data-href="http://www.facebook.com/AnhembiParque" data-width="347" data-height="279" data-show-faces="false" data-stream="true" data-header="false">
                </div>
            </div>

        </div>
        <!------------------------------------------ BLOCO 3 ---------------------------------->
        <div id="content_bloco3_">
            <div class="content_blocos_title">
                Saiba onde fazer seu evento
            </div>
            <div class="content_bloco2_boxX">
                <?php
//---------------------------------- BOX 1 - Query "Feiras e Exposicoes"
                $box1 = new WP_Query('post_type=seueventoaqui&p=2215');
                while ($box1->have_posts()) : $box1->the_post();
                    ?>
                    <article class="content_bloco2_boxX_article">
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
                        <a class="content_bloco2_boxX_article_aTitle" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
    <?php the_title(); ?>
                            </h1>
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
                        <a class="content_bloco2_boxX_article_aTitle" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
    <?php the_title(); ?>
                            </h1>
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
                        <a class="content_bloco2_boxX_article_aTitle_h1" href="<?php the_permalink(); ?>">
                            <h1 class="content_bloco2_boxX_article_aTitle_h1">
    <?php the_title(); ?>
                            </h1>
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
                <article class="content_bloco2_boxX_article">
                    <a class="content_bloco2_boxX_article_aImg-360" href="http://www.anhembi.com.br/360/index.html" target="_blank">
                        <img class="content_bloco2_boxX_article_aImg_image" src="<?php bloginfo('template_url'); ?>/images/banner360-home.jpg" />
                    </a>
                    <a class="content_bloco2_boxX_article_aTitle_h1" href="http://www.anhembi.com.br/360/index.html" target="_blank">
                        <h1 class="content_bloco2_boxX_article_aTitle_h1">Anhembi 360&ordm;</h1>
                    </a>
                    <a class="content_bloco2_boxX_article_aText" href="http://www.anhembi.com.br/360/index.html" target="_blank">
                        Confira aqui os espa&ccedil;os do Anhembi em uma visita virtuial em 360&ordm;.
                    </a>
                </article>
            </div>
        </div>
        <!------------------------------------------ BLOCO 4 ---------------------------------->
        <div id="content_bloco3__">
            <div class="content_blocos_title_servicos">
                O que voc&ecirc; encontra aqui
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/anuncie-no-anhembi/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_anuncie.png" border="0" title="Anuncie" />
                    <div class="content_bloco4_boxServico_title">
                        Anuncie no Anhembi
                    </div>
                </a>
            </div>

            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/tabelas-telecom-2015/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_telecom1.png" border="0" title="Telecom" />
                    <div class="content_bloco4_boxServico_title">
                        Internet e telefonia
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/downloads/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_downloads.png" border="0" title="Downloads" />
                    <div class="content_bloco4_boxServico_title">
                        <span>Downloads</span>
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/encontre-aqui/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_conta.png" border="0" title="Localize-se" />
                    <div class="content_bloco4_boxServico_title">
                        Restaurantes, bancos, etc
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/servicos-estacionamento/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_estacione.png" border="0" title="Estacionamento" />
                    <div class="content_bloco4_boxServico_title">
                        <span>Estacionamento</span>
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/hoteis/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_onde1.png" border="0" title="Onde ficar" />
                    <div class="content_bloco4_boxServico_title">
                        <span>Hot&eacute;is</span>
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/acessibilidade/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_acess.png" border="0" title="Acessibilidade" />
                    <div class="content_bloco4_boxServico_title">
                        <span>Acessibilidade</span>
                    </div>
                </a>
            </div>
            <div class="content_bloco4_boxServico">
                <a href="http://www.anhembi.com.br/servicos/achados-perdidos/">
                    <img src="<?php bloginfo('url') ?>/wp-content/uploads/icone_encontrei.png" border="0" title="Acessibilidade" />
                    <div class="content_bloco4_boxServico_title">
                        Achados e Perdidos
                    </div>
                </a>
            </div>

        </div>
        <!------------------------------------------ BLOCO 5 ---------------------------------->
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
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAnhembiParque&amp;width=380&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:380px; height:290px;" allowTransparency="true"></iframe>
            </div>
            <!--
            <div id="content_bloco4_boxTwitter_bird">
                <a href="http://twitter.com/anhembiparque" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/twitter_bird_index.gif" alt="Logo do Twitter" />
                </a>
            </div>
            -->
        </div>
    </div>
</div>
<?php get_footer(); ?>