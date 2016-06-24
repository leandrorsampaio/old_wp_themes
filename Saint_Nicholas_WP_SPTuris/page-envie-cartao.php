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
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
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
                    <form action="http://spturis.com/sistemas/natal_cartoes_2013/redirect.php" method="post">
                        <!--- Quando for Internet Explorer 8, ISSO NÃO CARREGARÁ;. ---->
                        <!--[if !IE 8]><![IGNORE[--><![IGNORE[]]> 
                        <div id="gallery" style="margin:0;">
                            <h1 class="subtitulo_cartao">Primeiro, escolha uma das imagens abaixo:</h1>
                            <ul>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li> 
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f01.jpg" title="" target="blank" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f01_tb.jpg" title ="<?php echo $creditosf01; ?>" alt="<?php echo $creditosf01; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f01" checked />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Av. Paulista</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f02.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f02_tb.jpg" title ="<?php echo $creditosf02; ?>" alt="<?php echo $creditosf02; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f02" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Papai Noel da Prefeitura</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f03.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f03_tb.jpg" title ="<?php echo $creditosf03; ?>" alt="<?php echo $creditosf03; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f03" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Catedral da S&eacute; </p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f04.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f04_tb.jpg" title ="<?php echo $creditosf04; ?>" alt="<?php echo $creditosf04; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f04" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Estaiadinha</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f05.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f05_tb.jpg" title ="<?php echo $creditosf05; ?>" alt="<?php echo $creditosf05; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f05" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">&Aacute;rvore do Ibirapuera</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f06.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f06_tb.jpg" title ="<?php echo $creditosf06; ?>" alt="<?php echo $creditosf06; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f06" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Sede da Prefeitura</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f07.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f07_tb.jpg" title ="<?php echo $creditosf07; ?>" alt="<?php echo $creditosf07; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f07" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Pres&eacute;pio do Trianon</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f08.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f08_tb.jpg" title ="<?php echo $creditosf08; ?>" alt="<?php echo $creditosf08; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f08" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Guirlanda da Paulista</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f09.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f09_tb.jpg" title ="<?php echo $creditosf09; ?>" alt="<?php echo $creditosf09; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f09" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Fonte do Ibirapuera</p>
                                </div>
                                <div class="contentCartao_setorPrincipal_box_thumb">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f10.jpg" title="" target="blank">
                                            <img class="contentCartao_setorPrincipal_box_thumb_img" src="<?php bloginfo('template_url'); ?>/images/cartoes_imgs/f10_tb.jpg" title ="<?php echo $creditosf10; ?>" alt="<?php echo $creditosf10; ?>" />
                                        </a>
                                    </li>
                                    <input class="contentCartao_setorPrincipal_box_thumb_radio" type="radio" name="foto" value="f10" />
                                    <p class="contentCartao_setorPrincipal_box_thumb_texto">Fonte do Ibirapuera</p>
                                </div>
                            </ul>
                        </div>
                        <div id="textos">
                            <h1 class="subtitulo_cartao">Agora, escolha umas das belas mensagens abaixo:</h1>
                            <div class="textos_item">
                                <input class="textos_item_radio" type="radio" name="texto" value="t01" checked />
                                <div class="textos_aspas_esquerda"></div>
                                <div class="textos_item_texto"><p>Queremos ofertar o que h&aacute; de melhor em n&oacute;s neste Natal: carinho, gratid&atilde;o, amor e esperan&ccedil;a.  Que 2015 seja um ano maravilhoso, repleto de grandes conquistas. Boas festas!</p></div>
                                <div class="textos_aspas_direita"></div>
                            </div>
                            <div class="textos_item">
                                <input class="textos_item_radio" type="radio" name="texto" value="t02"  />
                                <div class="textos_aspas_esquerda_vermelha"></div>
                                <div class="textos_item_texto"><p>Que neste Natal estejamos atentos para apreciar o milagre da vida, reconhe&ccedil;amos as verdadeiras amizades e olhemos para o futuro com f&eacute; e esperan&ccedil;a de um mundo melhor. Boas festas!</p></div>
                                <div class="textos_aspas_direita_vermelha"></div>
                            </div>
                            <div class="textos_item">
                                <input class="textos_item_radio" type="radio" name="texto" value="t03"/>
                                <div class="textos_aspas_esquerda"></div>
                                <div class="textos_item_texto"><p>Um novo ano se aproxima e com ele a esperan&ccedil;a se renova. &Eacute; tempo de lembrar o passado com ternura, valorizar o presente e aguardar um futuro cheio de b&ecirc;n&ccedil;&atilde;os e prosperidade. Boas festas e feliz 2015!</p></div>
                                <div class="textos_aspas_direita"></div>
                            </div>
                            <div class="textos_item">
                                <input class="textos_item_radio" type="radio" name="texto" value="t04"  />
                                <div class="textos_aspas_esquerda_vermelha"></div>
                                <div class="textos_item_texto"><p>Que o Esp&iacute;rito de Natal ilumine nossas vidas, proteja nossos lares durante todo o ano e nos permita ficar ao lado de quem amamos.  Boas festas e pr&oacute;spero Ano Novo!</p></div>
                                <div class="textos_aspas_direita_vermelha"></div>
                            </div>
                            <div class="textos_item">
                                <input class="textos_item_radio" type="radio" name="texto" value="t05" />
                                <div class="textos_aspas_esquerda"></div>
                                <div class="textos_item_texto"><p>Que as luzes da cidade iluminem nossas vidas e que a chegada de um novo ano seja repleta de felicidade, sa&uacute;de e prosperidade. Boas festas e feliz 2015!</p></div>
                                <div class="textos_aspas_direita"></div>
                            </div>
                        </div>
                        <div id="botao">
                            <input class="textos_item_botao" type="submit" name="submit" value="Prosseguir" />
                        </div>
                    </form>
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