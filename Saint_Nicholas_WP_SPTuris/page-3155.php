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
                    <div id="social_mural">
                        <div id="social_gPlus">
                            <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                            <script type="text/javascript">
                                window.___gcfg = {lang: 'pt-BR'};

                                (function () {
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
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                        </div>                            
                    </div>
                    <br/>
                    <?php the_content(); ?>
                    <br/>
                    <div class="galeria_menu"><a name="topo"></a>
                        <p><a href="#arvoreibira">- &Aacute;rvore do Ibirapuera</a></p>
                        <p><a href="#trianon">- Parque Trianon</a></p>
                        <p><a href="#oscar">- Oscar Freire</a></p>
                        <p><a href="#onibus">- &Ocirc;nibus Iluminado</a></p>
                        <p><a href="#aclimacao">- Av. Aclima&ccedil;&atilde;o</a></p>
                        <p><a href="#donpedroi">- Av. Dom Pedro I</a></p>
                        <p><a href="#saoluis">- Av. S&atilde;o Luis</a></p>
                        <p><a href="#sumare">- Av. Sumar&eacute;</a></p>
                        <p><a href="#matarazzo">- Edif&iacute;cio Matarazzo</a></p>
                        <p><a href="#cambuci">- Largo do Cambuci</a></p>
                    </div>
                    <div class="galeria_menu_middle">
                        <p><a href="#passandu">- Largo do Paissandu</a></p>
                        <p><a href="#rosario">- Largo do Ros&aacute;rio</a></p>
                        <p><a href="#toco">- Pra&ccedil;a da Toco</a></p>
                        <p><a href="#vasquez">- Pra&ccedil;a Dr. Jo&atilde;o Batista Vasquez</a></p>
                        <p><a href="#mendes">- Pra&ccedil;a Jo&atilde;o Mendes</a></p>
                        <p><a href="#julio">- >Pra&ccedil;a Julio Mesquita</a></p>
                        <p><a href="#roosevelt">- Pra&ccedil;a Roosevelt</a></p>
                        <p><a href="#bento">- Pra&ccedil;a Bento Ramos</a></p>
                        <p><a href="#bagatelle">- Pra&ccedil;a Campo de Bagatelle</a></p>
                        <p><a href="#vale">- Vale do Anhangaba&uacute;</a></p>
                    </div>
                    <!--
                    <div class="galeria_menu_right">
                    </div>
                    -->
                </div>
                <div id="contentPaginaInterna_setorPrincipal_boxGalerias">
                    <div id="gallery">
                        <h2><a name="arvoreibira">&Aacute;rvore do Ibirapuera - patroc&iacute;nio da Coca-Cola</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=71]');
                        ?>

                        <h2><a name="trianon">Parque Trianon</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=72]');
                        ?>

                        <h2><a name="oscar">Oscar Freire</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=73]');
                        ?>

                        <h2><a name="onibus">&Ocirc;nibus Iluminado</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=74]');
                        ?>




                        <h2><a name="aclimacao">Av. Aclima&ccedil;&atilde;o</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=75]');
                        ?>

                        <h2><a name="donpedroi">Av. Dom Pedro I</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=76]');
                        ?>

                        <h2><a name="saoluis">Av. S&atilde;o Luis</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=77]');
                        ?>

                        <h2><a name="sumare">Av. Sumar&eacute;</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=78]');
                        ?>

                        <h2><a name="matarazzo">Edif&iacute;cio Matarazzo</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=79]');
                        ?>

                        <h2><a name="cambuci">Largo do Cambuci</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=80]');
                        ?>

                        <h2><a name="passandu">Largo do Paissandu</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=81]');
                        ?>

                        <h2><a name="rosario">Largo do Ros&aacute;rio</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=82]');
                        ?>

                        <h2><a name="toco">Pra&ccedil;a da Toco</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=83]');
                        ?>

                        <h2><a name="vasquez">Pra&ccedil;a Dr. Jo&atilde;o Batista Vasquez</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=84]');
                        ?>

                        <h2><a name="mendes">Pra&ccedil;a Jo&atilde;o Mendes</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=85]');
                        ?>

                        <h2><a name="julio">Pra&ccedil;a Julio Mesquita</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=86]');
                        ?>

                        <h2><a name="roosevelt">Pra&ccedil;a Roosevelt</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=87]');
                        ?>

                        <h2><a name="bento">Pra&ccedil;a Bento Ramos</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=88]');
                        ?>

                        <h2><a name="bagatelle">Pra&ccedil;a Campo de Bagatelle</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=89]');
                        ?>

                        <h2><a name="vale">Vale do Anhangaba&uacute;</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=90]');
                        ?>



                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>



                    <br/>
                    <br/>
                    <br/>

                    <h3 class="boasNoticiasAnos" style="margin: 0 0 0 50px;">
                        Veja tamb&eacute;m as fotos do Natal Iluminado de 
                        <a class="boasNoticiasAnos_link" target="_blank" href="<?php echo get_permalink(17); ?>">2013</a>
                        e
                        <a class="boasNoticiasAnos_link" target="_blank" href="<?php echo get_permalink(4847); ?>">2014</a>
                    </h3>

                </div>
                <div id="contentPaginaInterna_setorPrincipal_imgFim"> </div>                        
            </div>
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
