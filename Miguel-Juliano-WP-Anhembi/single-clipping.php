<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
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
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo get_permalink(1848); ?>">
                    <?php
                    $post_id = 1848;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
                -
                <a href="<?php echo get_permalink(1231); ?>">
                    <?php
                    $post_id = 1231;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('clipping');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div class="content_direita_article_titleBox">
                        <a class="content_direita_article_link" href="<?php the_permalink(); ?>">
                            <h2 class="content_direita_article_link_textSingle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div class="content_direita_Sub"></div>
                    <div class="content_direita_article_theContent">
                        <div id="content_direita_article_theContent_topBar">
                            <div id="recursos">
                                <div id="recursos_print">
                                    <a id="recursos_print_link" target="_self" href="javaScript:window.print()"></a> 
                                </div>
                                <div id="recursos_sendEmail">
                                    <?php
                                    if (function_exists('wp_email')) {
                                        email_link();
                                    }
                                    ?>
                                </div>
                                <div id="recursos_pdf">
                                    <a id="recursos_pdf_link" href="<?php bloginfo('url') ?>/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>" rel="nofollow"></a>
                                </div>
                                <div id="recursos_textSize">
                                    <p id="recursos_textSize_title">Texto:</p>
                                    <ul class="resizer">
                                        <li class="small">
                                            <a id="btn_small" href="#"></a>
                                        </li>
                                        <li class="medium">
                                            <a id="btn_medium" href="#"></a>
                                        </li>
                                        <li class="large">
                                            <a id="btn_large" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="social">
                                <div id="social_gPlus">
                                    <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                                    <script type="text/javascript">
                                        window.___gcfg = {lang: 'pt-BR'};

                                        (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/plusone.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                        })();
                                    </script>
                                </div>
                                <div id="social_twitter">
                                    <a class='twitter-share-button' data-count='none' expr:data-url='data:post.url' data-via='spturis' 
                                       expr:data-text='data:post.title' href='http://twitter.com/share'>Twittar</a>
                                    <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
                                </div>
                                <div id="social_face">
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" 
                                         data-action="recommend"></div>
                                </div>                            
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            wp_reset_query();
            ?>
            <div id="clippingRelacionadas_box">
                <h1>Mais not&iacute;cias</h1><br/>
                <?php
                //Query que chamar� todas as noticias de Clipping
                $telecom_telefonia = new WP_Query('post_type=clipping&posts_per_page=4&orderby=rand');
                while ($telecom_telefonia->have_posts()) : $telecom_telefonia->the_post();
                    ?>
                    <div id="clippingRelacionadas_conteudo">
                        <p class="clippingRelacionadas_conteudo_date">
                            <?php the_time("d/m/y") ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <div class="clippingRelacionadas_conteudo_resumo">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

