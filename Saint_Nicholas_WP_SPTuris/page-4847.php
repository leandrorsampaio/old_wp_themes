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
                            <script>(function(d, s, id) {
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
                        <p><a href="#se">- Catedral da S&eacute;</a></p>
                        <p><a href="#prefeitura">- Prefeitura de S&atilde;o Paulo</a></p>
                        <p><a href="#fonte">- Fonte Multim&iacute;dia</a></p>
                        <p><a href="#paulista">- Avenida Paulista</a></p>
                        <p><a href="#oscar">- Oscar Freire</a></p>
                        <p><a href="#coralibirapuera">- Coral do Ibirapuera</a></p>
                        <p><a href="#trianon">- Parque do Trianon</a></p>
                        <p><a href="#estaiadinha">- Estaiadinha</a></p>
                    </div>

                    <div class="galeria_menu_middle">
                        <p><a href="#pinheiros">- Pinheiros</a></p>
                        <p><a href="#arvoreibira">- &Aacute;rvore do Ibirapuera</a></p>
                        <p><a href="#estaiada">- Ponte Estaiada</a></p>
                        <p><a href="#aldo">- Pra&ccedil;a Aldo</a></p>
                        <p><a href="#cha">- Viaduto do Ch&aacute;</a></p>
                    </div>

                    <div class="galeria_menu_right">
                    </div>
                </div>
                <div id="contentPaginaInterna_setorPrincipal_boxGalerias">
                    <div id="gallery">
                        <h2><a name="se">Catedral da S&eacute;</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=53]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="prefeitura">Prefeitura de S&atilde;o Paulo</a></h2>
                        <?php
                        // Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=59]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div> 		
                    <div id="gallery">
                        <h2><a name="fonte">Fonte Multim&iacute;dia no Parque do Ibirapuera</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=55]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>					
                    <div id="gallery">
                        <h2><a name="paulista">Avenida Paulista</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=58]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>					
                    <div id="gallery">
                        <h2><a name="oscar">Oscar Freire</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=57]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="coralibirapuera">Coral Ibirapuera</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=60]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="trianon">Parque do Trianon</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=61]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    <div id="gallery">
                        <h2><a name="estaiadinha">Estaiadinha</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=62]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>

                    <div id="gallery">
                        <h2><a name="pinheiros">Pinheiros</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=63]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>

                    <div id="gallery">
                        <h2><a name="arvoreibira">&Aacute;rvore do Ibirapuera</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=64]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>

                    <div id="gallery">
                        <h2><a name="estaiada">Ponte Estaiada</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=65]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    
                    <div id="gallery">
                        <h2><a name="aldo">Para&ccedil;a Aldo</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=69]');
                        ?>
                        <p><a class="back-top" href="#topo">Voltar ao Topo</a></p>
                    </div>
                    
                    <div id="gallery">
                        <h2><a name="cha">Viaduto do Ch&aacute;</a></h2>
                        <?php
                        //Chama a galeria de imagens (Plugin WP)
                        echo do_shortcode('[nggallery id=70]');
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
