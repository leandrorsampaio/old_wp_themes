<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > <?php the_category(' &gt; '); ?></p>
        </div>
        <div id="content_faixa_search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div id="content_socialSide">
        <a id="content_socialSide_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a>
        <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="content_socialSide_face"></a>
        <a href="http://twitter.com/#!/TurismoSaoPaulo" id="content_socialSide_twitter" target="_blank"></a>
        <div id="content_socialSide_dobra">
            <img src="<?php bloginfo('template_url') ?>/images/socialSide-dobra.png"/>
        </div>
    </div>

    <div id="contentSingle_colEsquerda">
        <div id="contentSingle_colEsquerda_tituloCategoriaEicones-MARCASP">
            <div id="contentSingle_colEsquerda_tituloCategoria_icones_pagCategoria">
                <a id="contentSingle_colEsquerda_tituloCategoria_icones_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a> 
            </div>
            <a class="contentSingle_colEsquerda_tituloCategoria_marcaSP" href="<?php echo get_permalink(169); ?>">
                <h1 class="contentSingle_colEsquerda_tituloCategoria">Marca SP</h1>
            </a>
        </div>
        <div id="contentSingle_colEsquerda_marcaSP">
            <?php wp_nav_menu(array('theme_location' => 'menu-marcasp', 'container' => false)); ?>
        </div>



        <?php
        $apresentacao = new WP_Query('post_type=servicos&p=513');
        while ($apresentacao->have_posts()) : $apresentacao->the_post();
            ?>
            <div id="contentSingle_colEsquerda_autorEshare">
                <div id="contentSingle_colEsquerda_autorEshare_share">
                    <div id="contentSingle_colEsquerda_autorEshare_share_google">
                        <!-- Coloque esta tag onde você deseja que o botão +1 seja renderizado -->
                        <g:plusone size="medium"></g:plusone>
                        <!-- Coloque esta chamada de renderização conforme necessário -->
                        <script type="text/javascript">
                            window.___gcfg = {lang: 'pt-BR'};

                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </div>
                    <div id="contentSingle_colEsquerda_autorEshare_share_twitter">
                        <a class='twitter-share-button' data-count='none' expr:data-url='data:post.url' data-via='spturis' expr:data-text='data:post.title' href='http://twitter.com/share'>Twittar</a>
                        <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
                    </div>
                    <div id="contentSingle_colEsquerda_autorEshare_share_face">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                    </div>
                </div>
            </div>
            <div id="contentSingle_colEsquerda_theContent"><?php the_content(); ?></div>        
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <div id="contentSingle_colEsquerda_pagination">
            <div id="contentSingle_colEsquerda_pagination_left">
                <?php previous_posts_link('&laquo; Textos Anteriores') ?>
            </div>
            <div id="contentSingle_colEsquerda_pagination_right">
                <?php next_posts_link('Pr&oacute;ximos Textos &raquo;') ?>
            </div>
        </div>
    </div>
    <div id="contentSingle_colDireita">
        <?php get_sidebar('category'); ?>
    </div>
</div>

<?php get_footer(); ?>