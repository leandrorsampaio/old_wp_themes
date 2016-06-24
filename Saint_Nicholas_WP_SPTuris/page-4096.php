<?php
get_header();
include ('sidebar-programador.php');
?>
<!-- ---------------------------------------- ESQUERDA ---------------------------------->
<?php while (have_posts()): the_post(); ?>
    <div id="contentCartao">
        <div id="contentCartao_setorPrincipal">
            <div id="contentCartao_setorPrincipal_imgTopo">
            </div>
            <div id="contentCartao_setorPrincipal_box">
                <div id="contentPaginaInterna_setorPrincipal_box_textos" style="width: 100%">
                    <h1 class="titulo_cartao">
                        <?php the_title(); ?>
                    </h1>
                    <div id="social_page">
                        <div id="social_gPlus">
                            <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                            <script type="text/javascript">
                                window.___gcfg = {lang: 'pt-BR'};
                                (function() {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div id="social_twitter">
                            <a class='twitter-share-button' data-count='none' expr:data-url='data:post.url' data-via='spturis' expr:data-text='data:post.title' href='http://twitter.com/share'>Twittar</a>
                            <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
                        </div>
                        <div id="social_face">
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <?php the_content(); ?>
                    <br/>
                    <br/>
                    <iframe style="width: 700px; height: 1600px; margin: 0 auto;" src="https://docs.google.com/forms/d/1l5S36rziYrUL2QAEXgKW12gdOCrV5512518e0Takhq8/viewform?c=0&w=1" width="700" height="1350"></iframe>
                </div>
            </div>
            <div id="contentCartao_setorPrincipal_imgFim">
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_query();
    ?>
</div>
<?php get_footer(); ?>