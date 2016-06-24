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
            <h1 class="contentSingle_colEsquerda_tituloCategoria"><?php printf(__('Tag: %s'), '<span>' . single_tag_title('', false) . '</span>'); ?></h1>  
        </div>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h2 class="contentSingle_colEsquerda_tituloPost_PagCategoria"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <h3 class="contentSingle_colEsquerda_autorEshare_autor_serch">Por: <?php the_author(); ?> - em <?php the_time('d/m/Y') ?></h3>
                <div id="contentSingle_colEsquerda_autorEshare_categoria_h3"><h3 class="contentSingle_colEsquerda_autorEshare_categoria">Categoria:</h3></div><div id="contentSingle_colEsquerda_autorEshare_categoria_ul"><?php the_category('	&#124; '); ?></div> 
                <div id="contentSingle_colEsquerda_autorEshare_tags_h3"><h3 class="contentSingle_colEsquerda_autorEshare_tags">Tags:</h3></div><div id="contentSingle_colEsquerda_autorEshare_tags_ul"><?php if (the_tags('', ', ', ' ')); ?></div> 
                <div class="contentSingle_colEsquerda_resumo_PagCategoria"><?php the_excerpt(); ?></div>


    <?php endwhile; ?>
            
<?php endif; ?>

       <div id="contentSingle_colEsquerda_pagination">
                <div id="contentSingle_colEsquerda_pagination_left">
                    <?php previous_posts_link('&laquo; Resultados Anteriores') ?>
                </div>
                <div id="contentSingle_colEsquerda_pagination_right">
                    <?php next_posts_link('Pr&oacute;ximos Resultados &raquo;') ?>
                </div>
            </div>

    </div><!--#content-->

</div>
<?php get_footer(); ?>