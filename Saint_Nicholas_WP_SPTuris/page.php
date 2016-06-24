<?php get_header(); ?>
<!-- ---------------------------------------- ESQUERDA ---------------------------------->
<div id="contentPaginaInterna">
    <?php while (have_posts()): the_post(); ?>
        <div id="contentPaginaInterna_setorPrincipal">
            <div id="contentPaginaInterna_setorPrincipal_imgTopo"> </div>
            <div id="contentPaginaInterna_setorPrincipal_box">
                <div id="contentPaginaInterna_setorPrincipal_box_textos">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div id="social_page">
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
                            <a class='twitter-share-button' data-count='none' expr:data-url='data:post.url' data-via='spturis' expr:data-text='data:post.title' href='http://twitter.com/share'>Twittar</a>
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
                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                        </div>                            
                    </div>
                    <br/>
                    <?php the_content(); ?>
                </div>     
            </div>
            <div id="contentPaginaInterna_setorPrincipal_imgFim"> </div>                        
        </div>
        <?php
    endwhile;
    wp_reset_query();
    ?>
    <!-- ---------------------------------------- DIREITA ---------------------------------->
    <div id="contentPaginaInterna_barraLateral"> 
        <div id="contentPaginaInterna_barraLateral_imgTopo"> </div>
        <div id="contentPaginaInterna_barraLateral_imgMiolo">
            <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo">
                <?php get_sidebar('geral'); ?>
            </div>
        </div>                  
        <div id="contentPaginaInterna_barraLateral_imgFim"> </div>
    </div>
</div>
<?php get_footer(); ?>
