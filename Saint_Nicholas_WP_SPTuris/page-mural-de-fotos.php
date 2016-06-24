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
                    <?php the_content(); ?><br/>
                    <div class="galeria_menu"><a name="topo"></a>

                        <p><a href="#se">- Catedral da S&eacute;</a></p>
                        <p><a href="#praca">- Pra&ccedil;a da S&eacute;</a></p>
                        <p><a href="#prefeitura">- Prefeitura de S&atilde;o Paulo</a></p>
                        <p><a href="#fonte">- Fonte Multim&iacute;dia</a></p>
                        <p><a href="#arvore">- &Aacute;rvore do Ibirapuera</a></p>
                        <p><a href="#paulista">- Avenida Paulista</a></p>
                        <p><a href="#corais">- Corais nas <br> subprefeituras</a></p>
                        <p><a href="#23maio">- Av. 23 de Maio</a></p>
                        <p><a href="#mercado">- Mercado Municipal</a></p>

                    </div>
                    <div class="galeria_menu_middle">

                        <p><a href="#sumare">- Avenida Sumar&eacute;</a></p>
                        <p><a href="#smadureira">- Rua Sena Madureira</a></p>
                        <p><a href="#dpedro">- Av. Dom Pedro I</a></p>
                        <p><a href="#saoluis">- Av. S&atilde;o Luis</a></p>
                        <p><a href="#drarnaldo">- Av. Dr. Arnaldo</a></p>
                        <p><a href="#avpompeia">- Av. Pomp&eacute;ia</a></p>
                        <p><a href="#independencia">- Parque da <br>Independ&ecirc;ncia</a></p>
                        <p><a href="#outros">- Outros Locais</a></p>                       						                                                	
                    </div>
                    <div class="galeria_menu_right">


                    </div>
                </div>
                <div id="contentPaginaInterna_setorPrincipal_boxGalerias">
                    <div id="gallery">
                        <h2><a name="se">Catedral da S&eacute;</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 35]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="praca">Pra&ccedil;a da S&eacute;</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 37]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="prefeitura">Prefeitura de S&atilde;o Paulo</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 45]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div> 					
                    <div id="gallery">
                        <h2><a name="fonte">Fonte Multim&iacute;dia no Parque do Ibirapuera</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 36]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>					
                    <div id="gallery">
                        <h2><a name="arvore">&Aacute;rvore do Ibirapuera</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 42]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="paulista">Avenida Paulista</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 44]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>					
                    <div id="gallery">
                        <h2><a name="corais">Corais nas subprefeituras</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 43]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="23maio">Av. 23 de Maio</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 47]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="mercado">Mercado Municipal</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 48]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="sumare">Avenida Sumar&eacute;</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 32]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="smadureira">Rua Sena Madureira</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 33]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="dpedro">Av. Dom Pedro I</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 34]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>

                    <div id="gallery">
                        <h2><a name="saoluis">Av. S&atilde;o Luis</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 38]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="avpompeia">Av. Pomp&eacute;ia</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 39]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="drarnaldo">Av. Dr. Arnaldo</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 40]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="independencia">Parque da Independ&ecirc;ncia</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 46]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="outros">Outros locais</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id= 41]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <h3 class="boasNoticiasAnos" style="margin: 0 0 0 50px;">
                        Veja tamb&eacute;m as fotos do Natal Iluminado de 
                        <a class="boasNoticiasAnos_link" target="_blank" href="<?php echo get_permalink(4847); ?>">2014</a>
                        e
                        <a class="boasNoticiasAnos_link" target="_blank" href="<?php echo get_permalink(3155); ?>">2015</a>
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
