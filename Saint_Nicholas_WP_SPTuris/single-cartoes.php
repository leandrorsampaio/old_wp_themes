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
                    <div id="cartaoSingle">
                        <h1 id="cartaoSingle_title">
                            Natal Iluminado - S&atilde;o Paulo 2014
                        </h1>
                        <p id="cartaoSingle_texto">
                            <?php echo $texto_correto; ?>
                        </p>
                        <div id="cartaoSingle_foto">
                            <img id="cartaoSingle_foto_img" src="<?php bloginfo('template_url') ?>/images/cartoes_imgs/f<?php echo $foto_correta; ?>.jpg" title="<?php echo $creditos; ?>" alt="<?php echo $creditos; ?>" />
                        </div>
                        <div id="cartaoSingle_share">
                            <div id="cartaoSingle_share_text">
                                <p id="cartaoSingle_share_text_p">Clique nos bot&otilde;es ao lado e compartilhe essa mensagem com algu&eacute;m especial:</p>
                            </div>
                            <div id="cartaoSingle_share_widget">
                                <div id="cartaoSingle_share_widget_face">
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-type="button_count"></div>
                                </div>
                                <div id="cartaoSingle_share_widget_twitter">
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-via="turismosaopaulo" data-lang="pt" data-hashtags="nataliluminado">Tweetar</a>
                                    <script>
                                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div id="cartaoSingle_chamada">
                            <p><a href="<?php echo get_permalink(24); ?>">Crie seu pr&oacute;prio Cart&atilde;o de Natal clicando aqui!</a></p>
                        </div>
                    </div>
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