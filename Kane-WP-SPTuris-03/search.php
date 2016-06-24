<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: Resultado de Busca</p>
        </div>
        <div id="content_faixa_search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div id="content_socialSide">
        <a href="#" id="content_socialSide_rss" target="_blank"></a>
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
            <h1 class="contentSingle_colEsquerda_tituloCategoria"><?php
            /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
            $key = wp_specialchars($s, 1);
            $count = $allsearch->post_count;
            _e('');
            _e
                    ('');
            echo $count . ' ';
            _e
                    ('resultados para ');
            _e
                    ('<strong>&#8220;');
            echo $key;
            _e('&#8221;</strong>');
            wp_reset_query();
            ?>
            </h1>  
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2 class="contentSingle_colEsquerda_tituloPost_PagCategoria"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h3 class="contentSingle_colEsquerda_autorEshare_autor_serch">Por: <?php the_author(); ?> - em <?php the_time('d/m/Y') ?></h3>
                    <div id="contentSingle_colEsquerda_autorEshare_categoria_h3"><h3 class="contentSingle_colEsquerda_autorEshare_categoria">Categoria:</div><div id="contentSingle_colEsquerda_autorEshare_categoria_ul"><?php the_category('	&#124; '); ?></div> </h3>
                    <div class="contentSingle_colEsquerda_resumo_PagCategoria"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <div id="contentSingle_colEsquerda_pagination">
                <div id="contentSingle_colEsquerda_pagination_left">
                    <?php previous_posts_link('&laquo; Resultados Anteriores') ?>
                </div>
                <div id="contentSingle_colEsquerda_pagination_right">
                    <?php next_posts_link('Pr&oacute;ximos Resultados &raquo;') ?>
                </div>
            </div>
        <?php else : ?>
            <h1 id="texto404">Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
        <?php endif; ?>
    </div>
    <div id="contentSingle_colDireita">
        <?php get_sidebar('search'); ?>
    </div>
</div>
<?php get_footer(); ?>