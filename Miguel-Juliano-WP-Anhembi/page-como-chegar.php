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
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('mapa');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <div id="comoChegar">
                <h4 id="comoChegar_title">Escolha a sua forma<br/>de chegar ao Anhembi</h4>
                <ul id="comoChegar_lista">
                    <li class="comoChegar_lista_item">
                        <a href="#metro" id="comoChegar_lista_item_linkMetro" title="Metr&ocirc;"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#onibus" id="comoChegar_lista_item_linkOnibus" title="&Ocirc;nibus"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#bike" id="comoChegar_lista_item_linkBike" title="Bicicleta"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#carro" id="comoChegar_lista_item_linkCarro" title="Carro"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#taxi" id="comoChegar_lista_item_linkTaxi" title="T&aacute;xi"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#helicoptero" id="comoChegar_lista_item_linkHelicoptero" title="Helic&oacute;ptero"></a>
                    </li>
                    <li class="comoChegar_lista_item">
                        <a href="#aviao" id="comoChegar_lista_item_linkAviao" title="Avi&atilde;o"></a>
                    </li>
                </ul>
            </div>
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
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
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconMetro"></div>
                            <h1 class="comoChegarSub_title">Metr&ocirc;</h1>
                            <a name="metro"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('metro'); ?>    
                            </div>
                        </div>
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconOnibus"></div>
                            <h1 class="comoChegarSub_title">&Ocirc;nibus</h1>
                            <a name="onibus"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('onibus'); ?>    
                            </div>
                        </div>
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconBike"></div>
                            <h1 class="comoChegarSub_title">Bicicleta</h1>
                            <a name="bike"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('bicicleta'); ?>    
                            </div>
                        </div>
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconCarro"></div>
                            <h1 class="comoChegarSub_title">Carro</h1>
                            <a name="carro"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('carro'); ?>    
                            </div>
                        </div>
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconTaxi"></div>
                            <h1 class="comoChegarSub_title">T&aacute;xi</h1>
                            <a name="taxi"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('taxi'); ?>    
                            </div>
                        </div>
                        <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconHelicoptero"></div>
                            <h1 class="comoChegarSub_title">Helic&oacute;ptero</h1>
                            <a name="helicoptero"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('helicoptero'); ?>    
                            </div>
                            <div class="comoChegar_fields_item">
                            <div id="comoChegarSub_iconAviao"></div>
                            <h1 class="comoChegarSub_title">Avi&atilde;o</h1>
                            <a name="aviao"></a>
                            <div class="comoChegar_fields_text">
                                <?php the_field('aviao'); ?>    
                            </div>
                        </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>