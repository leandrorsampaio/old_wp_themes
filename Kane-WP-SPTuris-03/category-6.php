<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > <?php the_category(' &gt; '); ?></p>
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
    <div id="contentSingle_colEsquerda">
        <div id="contentSingle_colEsquerda_tituloCategoriaEicones">
            <div id="contentSingle_colEsquerda_tituloCategoria_icones_pagCategoria">
                <a id="contentSingle_colEsquerda_tituloCategoria_icones_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a> 
            </div>
            <h1 class="contentSingle_colEsquerda_tituloCategoria"><?php the_category(); ?></h1>  
        </div>
        <div id="multimidia">
            <div id="multimidia_main"></div>
            <div id="multimidia_smals">
                <?php
                query_posts('posts_per_page=120&cat=6');
                ?>
                <?php while (have_posts()): the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="multimidia_smals_box">
                            <div class="multimidia_smals_box_bg"></div>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-multimidia');
                            } else {
                                
                            }
                            ?>
                            <h5 class="multimidia_smals_box_title"><?php the_title(); ?></h5>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <div id="contentSingle_colDireita">
        <?php get_sidebar('category'); ?>
    </div>
</div>
<?php get_footer(); ?>