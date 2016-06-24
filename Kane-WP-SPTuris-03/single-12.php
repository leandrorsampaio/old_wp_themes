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
        <?php while (have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
                <div id="contentSingle_colEsquerda_tituloCategoriaEicones-MARCASP">
                    <div id="contentSingle_colEsquerda_tituloCategoria_icones">
                        <a id="contentSingle_colEsquerda_tituloCategoria_icones_imprimir" target="_self" href="javaScript:window.print()"></a> 
                        <a id="contentSingle_colEsquerda_tituloCategoria_icones_pdf" href="http://imprensa.spturis.com.br/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>" rel="nofollow"></a>
                        <?php
                        if (function_exists('wp_email')) {
                            email_link();
                        }
                        ?>
                        <a id="contentSingle_colEsquerda_tituloCategoria_icones_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a> 
                    </div>
                    <h1 class="contentSingle_colEsquerda_tituloCategoria">
                        <a class="contentSingle_colEsquerda_tituloCategoria_marcaSP" href="<?php echo get_permalink(169); ?>">
                            <h1 class="contentSingle_colEsquerda_tituloCategoria">Marca SP</h1>
                        </a>
                    </h1>  
                </div>
                <div id="contentSingle_colEsquerda_marcaSP">
                    <?php wp_nav_menu(array('theme_location' => 'menu-marcasp', 'container' => false)); ?>
                </div>
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
            </article>
            <?php
        endwhile;
        wp_reset_query();
        ?>
        <div id="contentSingle_colEsquerda_noticiasRelacionadas">
            <h3 id="contentSingle_colEsquerda_noticiasRelacionadas_title">Outras not&iacute;cias:</h3>
            <?php
            $test = "";
            $posttags = get_the_tags();
            if ($posttags) {
                foreach ($posttags as $tag) {
                    $test .= ',' . $tag->name;
                }
            }
            $test = substr($test, 1); // remove first comma
            query_posts('tag=' . $test . '&posts_per_page=5');
            while (have_posts()) : the_post();
                ?>
                <p class="contentSingle_colEsquerda_noticiasRelacionadas_texto">+ <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div id="contentSingle_colEsquerda_rodape">
            <iframe src="<?php bloginfo('template_url') ?>/newsletter.php" frameBorder=0 width=600 height=31 scrolling='no'></iframe>  
        </div>
    </div>
    <div id="contentSingle_colDireita">
        <div id="contentSingle_colDireita_maisPosts">
            <h3 id="contentSingle_colDireita_maisPosts_title">Saiba mais:</h3>
            <?php
            query_posts('cat=12&posts_per_page=6');
            ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="contentSingle_colDireita_maisPosts_article"<?php post_class(); ?>>
                    <p class="contentSingle_colDireita_maisPosts_article_texto">
                        + <a class="contentSingle_colDireita_maisPosts_article_texto_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </p>
                </article>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <?php get_sidebar('marca-sp'); ?>
    </div>
</div>
<?php get_footer(); ?>