<?php get_header(); ?>
<div id="highlightsBackground">
    <div id="highlights">
        <div class="slider-wrapper theme-default">
            <div id="slider">
                <?php query_posts('post_type=destaque') ?> 
                <?php while (have_posts()): the_post(); ?>
                    <a href="<?php the_field("LINK"); ?>">
                        <div class="slider_title" >
                            <h2><?php the_title(); ?></h2>
                            <p>Cr&eacute;ditos: <?php the_field("creditos_slider"); ?></p>
                        </div>
                        <?php the_post_thumbnail('thumb-slider') ?>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<div id="highlights_faixa"></div>
<div id="content">
    <div id="content_faixa">
        <div id="content_faixa_bread">
        </div>
        <div id="content_faixa_search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div id="content_socialSide">
        <a id="content_socialSide_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a>
        <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="content_socialSide_face"></a>
        <a href="http://twitter.com/#!/TurismoSaoPaulo" id="content_socialSide_twitter" target="_blank"></a>
        <div id="content_socialSide_dobra">
            <img src="<?php bloginfo('template_url') ?>/images/socialSide-dobra.png"/>
        </div>
    </div>
    <div id="releases">
        <h4 class="content_destaques_boxX_title">Releases</h4>
        <div class="content_destaques_box4">
            <a href="<?php echo get_bloginfo('url') . '/category/releases/cidade-de-sao-paulo';?>">
                <img src="<?php bloginfo('template_url') ?>/images/release_cds.png" alt="">
            </a>
        </div>
        <div class="content_destaques_box5">
            <a href="<?php echo get_bloginfo('url') . '/category/releases/anhembi';?>">
                <img src="<?php bloginfo('template_url') ?>/images/release_anhembi.png" alt="">
            </a>
        </div>
        <div class="content_destaques_box6">
            <a href="<?php echo get_bloginfo('url') . '/category/releases/autodromo-de-interlagos';?>">
                <img src="<?php bloginfo('template_url') ?>/images/release_auto.png" alt="">
            </a>
        </div>
    </div>
    <div id="content_destaques">
        <div class="content_destaques_box1">
            <h4 class="content_destaques_boxX_title">Releases Gerais</h4>
            <?php
            wp_reset_query();
            ?>
            <?php
            query_posts('posts_per_page=4&cat=1');
            ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="content_destaques_boxX_article"> 
                    <article>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </article>
                </div>
            <?php endwhile; ?> 
        </div>
        <div class="content_destaques_box2">
            <h4 class="content_destaques_boxX_title">Saiu na M&iacute;dia</h4>
            <?php
            wp_reset_query();
            ?>
            <?php
            query_posts('posts_per_page=4&cat=3');
            ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="content_destaques_boxX_article"> 
                    <article>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </article>
                </div>
            <?php endwhile; ?>             
        </div>
        <div class="content_destaques_box3">
            <h4 class="content_destaques_boxX_title">Marca S&atilde;o Paulo</h4>
            <div id="content_destaques_marcaSp">
                <a id="content_destaques_marcaSp_img" href="http://imprensa.spturis.com.br/category/marca_sp"></a>
                <div id="content_destaques_marcaSp_txt"><a href="http://imprensa.spturis.com.br/category/marca_sp"> Adote essa marca e <br/>Viva tudo isso!</a></div>
            </div>
        </div>
    </div>
    <div id="content_videos">
        <h4>V&iacute;deos</h4>
        <div id="content_videos_embed1">
            <?php get_sidebar('video-home-1'); ?>
        </div>
        <div id="content_videos_embed2">
            <?php get_sidebar('video-home-2'); ?>
        </div>
        <div id="content_videos_embed3">
            <?php get_sidebar('video-home-3'); ?>
        </div>
    </div>
    <div id="content_fotos">
        <h4 class="content_fotos_title">Fotos</h4>
        <?php
        //$usuario = wp_get_current_user();
        //if ($usuario->ID == 0) {
        ?>
        <!-- <a div class="BoxFotos" href="<?php //bloginfo('template_url')   ?>/cadastro-e-policy"></a> -->
        <?php
        //} else {
        ?>
        <a div class="BoxFotos" href="<?php bloginfo('site_url') ?>/fotos"></a>
        <?php
        //}
        ?>
    </div>

    <div id="content_socialBox">

        <h4 class="content_socialBox_title">Social Media</h4>
        <div class="facebook">
            <i class="fa fa-facebook-official"></i>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/AnhembiParque">Anhembi</a></li>
                <li> <a target="_blank" href="https://www.facebook.com/TurismoemSP">Cidade de São Paulo</a></li>
                <li><a target="_blank" href="https://www.facebook.com/autodromodeinterlagos">Interlagos</a></li>
                <li><a target="_blank" href="https://www.facebook.com/experiencesaopaulo">Experience São Paulo</a></li>
                <li><a target="_blank" href="https://www.facebook.com/spturis">SPTuris</a></li>
                <li><a target="_blank" href="https://www.facebook.com/observatoriodeturismoeeventos">Observat&oacute;rio de Turismo e Eventos</a></li>
            </ul>
        </div>
        <div class="twitter">
            <i class="fa fa-twitter-square"></i>
            <ul>
                <li><a target="_blank" href="https://twitter.com/anhembiparque">Anhembi</a></li>
                <li> <a target="_blank" href="https://twitter.com/turismosaopaulo">Cidade de São Paulo</a></li>
                <li><a target="_blank" href="https://twitter.com/InterlagosTrack">Autódromo de Interlagos</a></li>
            </ul>
        </div>
        <div class="youtube">
            <i class="fa fa-youtube-square"></i>
            <ul>
                <li><a target="_blank" href="https://www.youtube.com/user/anhembiparque">Anhembi</a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/spturis">Cidade de São Paulo</a></li>
            </ul>
        </div>
        <div class="linkedin">
            <i class="fa fa-linkedin-square"></i>
            <ul>
                <li><a target="_blank" href="https://www.linkedin.com/company/s-o-paulo-turismo-s.a.?trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1425652122649%2Ctas%3Asao+paulo+turismo">SPTuris</a></li>
            </ul>
        </div>



        <div class="fb-like-box" data-href="https://www.facebook.com/TurismoemSP" data-width="532" data-height="178px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    </div>
</div>   
</div>
<?php get_footer(); ?>
