<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > <span id="content_faixa_bread_txt2">Saiu na m&iacutedia</span></p>
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
        <div id="contentSingle_colEsquerda_tituloCategoriaEicones-MARCASP">
            <div id="contentSingle_colEsquerda_tituloCategoria_icones_pagCategoria">
                <a id="contentSingle_colEsquerda_tituloCategoria_icones_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a> 
            </div>
            <h1 class="contentSingle_colEsquerda_tituloCategoria">Saiu na m&iacutedia</h1>  
        </div>
        <div id="contentSingle_colEsquerda_saiuNaMidia">
            <?php wp_nav_menu(array('theme_location' => 'menu-midia', 'container' => false)); ?>
        </div>
        <?php while (have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
                <h2 class="contentSingle_colEsquerda_tituloPost_PagCategoria"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h3 class="contentSingle_colEsquerda_autorEshare_autor">Por: <?php the_author(); ?> - em <?php the_time('d/m/Y') ?></h3>
                <div class="contentSingle_colEsquerda_resumo_PagCategoria"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
        <div id="contentSingle_colEsquerda_pagination">
            <div id="contentSingle_colEsquerda_pagination_left">
                <?php previous_posts_link('&laquo; Textos Anteriores') ?>
            </div>
            <div id="contentSingle_colEsquerda_pagination_right">
                <?php next_posts_link('Pr&oacute;ximos Textos &raquo;') ?>
            </div>
        </div>
    </div>
    <div id="contentSingle_colDireita">
        <?php get_sidebar('category'); ?>
    </div>
</div>

<?php get_footer(); ?>