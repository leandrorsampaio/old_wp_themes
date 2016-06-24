<?php get_header(); ?>
<section>
    <div id="content-index">
        <div id="homeInicio">
            <div class="homeInicio_quad1 quadX">
                <h1>
                    SITE<br/>
                    OFICIAL DE<br/>
                    <span>CARNAVAL</span><br/>
                    DA CIDADE<br/>
                    DE S&Atilde;O<br/>
                    PAULO
                </h1>
                <p>Guia completo do Carnaval paulistano. Muita divers&atilde;o e alegria!</p>
            </div>
            <div class="homeInicio_quad2 quadX">
                <h2 class="homeInicio_title">Carna-Cardiograma</h2>
                <a href="http://carnaval.spturis.com.br/carna-cardiograma/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/carnacardiogramachamada.gif" alt="Carna cardiograma chamada" />
                </a>
                <p class="homeInicio_text">Veja aqui a trajet&oacute;ria de t&iacute;tulos de sua escola desde a inaugura&ccedil;&atilde;o do Samb&oacute;dromo</p>
            </div>
            <div class="homeInicio_quad3 quadX">
                <h2 class="homeInicio_title">Sambas-Enredo 2016</h2>
                <a href="http://carnaval.spturis.com.br/biblioteca-de-sambas-enredo/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chamadaindex2.gif" alt="Bilbioteca do samba chamada" />
                </a>
                <p class="homeInicio_text">Escolha o seu samba-enredo favorito, prepare o samba no p&eacute; e pule o Carnaval!</p>
            </div>
            <div class="homeInicio_quad4 quadX">
                <h2 class="homeInicio_title">Servi&ccedil;os</h2>
                <a href="http://carnaval.spturis.com.br/carnaval-de-sao-paulo/servicos/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/servicoschamada.gif" alt="Servicos Link" />
                </a>
                <p class="homeInicio_text">N&atilde;o se perca no Samb&oacute;dromo! Clique aqui e saiba como se localizar no Anhembi.</p>
            </div>
            <div class="homeInicio_quad5 quadX">
                <h2 class="homeInicio_title">Mapa do Samba</h2>
                <a href="http://carnaval.spturis.com.br/mapa-samba/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mapasambachamada.gif" alt="Mapa do Samba Link" />
                </a>
                <p class="homeInicio_text">Saiba onde est&atilde;o localizadas as quadras e as concentra&ccedil;&otilde;es das escolas e blocos.</p>
            </div>
            <div class="homeInicio_quad6 quadX">
                <h2 class="homeInicio_title">Linha do Tempo</h2>
                <a href="http://carnaval.spturis.com.br/carnaval-de-sao-paulo/delorean/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/linhadotempochamada.jpg" alt="Linha do Tempo Link" />
                </a>
                <p class="homeInicio_text">Veja a hist&oacute;ria do Carnaval paulistano em imagens, v&iacute;deos e &aacute;udios.</p>
            </div>
        </div>
        <?php
        //--------  Inicia a query e o loop
        global $parangoles;
        $parangoles = new WP_Query('post_type[]=post&post_type[]=galerias&post_type[]=social&posts_per_page=25');
        while ($parangoles->have_posts()) : $parangoles->the_post();
            ?>
            <div class="parangole">
                <article>
                    <?php
                    // ----------- IF existe Thumb
                    // Se for do post_type Xoxial
                    $url = get_field('url');

                    if (get_post_type() == 'social') {
                        // Identifica se é facebook ou twitter para mostrar o thumb default
                        if (has_term('facebook', 'redes')) {
                            ?>
                            <a href="<?php echo $url; ?>" target="blank">
                                <img src="<?php bloginfo('template_url') ?>/images/face.png">
                            </a>
                            <?php
                        } elseif (has_term('twitter', 'redes')) {
                            ?>
                            <a href="<?php echo $url; ?>" target="blank">
                                <img src="<?php bloginfo('template_url') ?>/images/twitter.png">
                            </a>
                            <?php
                        }
                    }
                    // Se for galeria, ele testa para dar o thumb default
                    elseif (get_post_type() == 'galerias') {
                        if (has_post_thumbnail()) {
                            echo '<a href="';
                            echo the_permalink();
                            echo '">';
                            the_post_thumbnail('thumb-parangole');
                        } else {
                            ?> 
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php bloginfo('template_url') ?>/images/thumb_galeria_default.jpg">
                            </a>
                            <?
                        }
                    }
                    // Se for qqr outro post_type, ele testa para ver se existe thumb
                    else {
                        if (has_post_thumbnail()) {
                            echo '<a href="';
                            echo the_permalink();
                            echo '">';
                            the_post_thumbnail('thumb-parangole');
                        } else {
                            ?> 
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php bloginfo('template_url') ?>/images/thumb_default_news.jpg">
                            </a>
                            <?
                        }
                    }
                    ?>
                    </a>
                    <div class="parangole_content">
                        <?php
                        // Post Types
                        $galerias = 'galerias';
                        $xoxial = 'social';

                        // Custom Field Redes Sociais
                        $url = get_field('url');

                        //--------------------- IF GALERIAS 
                        if (get_post_type() == $galerias) {
                            ?>
                            <img src = "<?php bloginfo('template_url') ?>/images/parangole_label-galeria2.png">
                            <div class = "parangole_texto">
                                <a href = "<?php the_permalink(); ?>">
                                    Galeria: <br/>
                                    <?php echo substr(the_title($before = '', $after = '', FALSE), 0, 40); ?>
                                </a>
                            </div>
                            <?
                            //---------------- IF XOXIAL
                        } elseif (get_post_type() == $xoxial) {
                            // Identifica se é facebook ou twitter para mudar a cor do label
                            if (has_term('facebook', 'redes')) {
                                ?>
                                <img src = "<?php bloginfo('template_url') ?>/images/parangole_label-face.png">
                            <?php } elseif (has_term('twitter', 'redes')) {
                                ?>
                                <img src = "<?php bloginfo('template_url') ?>/images/parangole_label-twitter.png">
                            <?php }
                            ?>
                            <div class = "parangole_texto">
                                <a href = "<?php echo $url; ?>" target="blank">
                                    <?php echo substr(the_title($before = '', $after = '', FALSE), 0, 50); ?>
                                </a>
                            </div>
                            <?
                            //--------------- NOTÍCIAS
                        } else {
                            ?>
                            <img src = "<?php bloginfo('template_url') ?>/images/parangole_label-noticias.png">
                            <div class = "parangole_texto">
                                <a href = "<?php the_permalink(); ?>">
                                    Not&iacute;cia:<br/>
                                    <?php echo substr(the_title($before = '', $after = '', FALSE), 0, 50); ?>(...)
                                </a>
                            </div>
                        <?php }
                        ?>
                    </div>
                </article>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
</section>
<?php get_footer(); ?>