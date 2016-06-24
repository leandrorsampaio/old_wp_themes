<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
                       <div id="traductor">
                <?php get_sidebar('traducao'); ?>
            </div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                Resultado da Busca
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php get_sidebar('publicidade'); ?>
                <?php get_sidebar('destaques-internas'); ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->   
        <div id="content_direita">
            <div id="searchContent">
                <div id="search_titulo">
                    <?php
                    /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
                    $key = wp_specialchars($s, 1);
                    $count = $allsearch->post_count;
                    _e('');
                    _e
                            ('');
                    _e
                            ('Resultados para: ');
                    _e
                            ('<strong>&quot;');
                    echo $key;
                    _e
                            ('&quot;</strong>');
                    _e
                            ('<p><strong>');
                    echo $count;
                    _e
                            ('</strong>');
                    _e
                            (' resultado(s) encontrado(s)');
                    _e
                            ('</p>');
                    wp_reset_query();
                    ?>
                </div> 
                <div id="searchContent_pagination">
                    <!--- pega a paginacao (que esta nas functions --->
                    <?php pagination() ?>
                </div>
                <div id="searchContentSub"></div>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="searchContent_result">
                            <h1 class="searchContent_result_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <h2 class="searchContent_result_data"><?php the_time('d F Y') ?> - <?php the_time('g:i') ?></h2>
                            <h3 class="searchContent_result_resumo"><?php the_excerpt(); ?></h3>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h1 id="texto404">Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
                <?php endif; ?>
                <div id="searchContent_pagination">
                    <?php pagination() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>