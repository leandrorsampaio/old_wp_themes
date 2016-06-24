<?php
get_header();
?>
<div class="A1-cultura interna_topo_title">
    <a>
        <p>Busca</p>
    </a>
</div>
</div>
<div id="interna_topo_collapse">
    <?php get_sidebar('menu_responsivo'); ?>
</div>

<div class="interna_content">
    <div class="interna_content_article">
        <?php
        /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
        $key = wp_specialchars($s, 1);
        $count = $allsearch->post_count;
        _e('');
        _e
                ('');
        _e
                ('<strong>Resultados para: ');
        _e
                ('&quot;');
        echo $key;
        _e
                ('&quot; / Results for:');
        _e
                ('&quot;');
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
                (' / ');
        _e
                ('<strong>');
        echo $count;
        _e
                ('</strong>');
        _e
                (' <i>result(s) found</i></p>');

        wp_reset_query();
        ?>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

                $post_type = get_post_type($post->ID);

                if ($post_type == 'roteiro') {
                    $pagina = 52;
                } elseif ($post_type == 'compras') {
                    $pagina = 31;
                } elseif ($post_type == 'cultura') {
                    $pagina = 15;
                } elseif ($post_type == 'diversao') {
                    $pagina = 50;
                } elseif ($post_type == 'eventos') {
                    $pagina = 37;
                } elseif ($post_type == 'gastronomia') {
                    $pagina = 33;
                } elseif ($post_type == 'noite') {
                    $pagina = 35;
                } elseif ($post_type == 'topdez') {
                    $pagina = 39;
                } else {
                    
                }
                ?>
                <article>
                    <h1 class="search_result_title"><a href="<?php echo get_permalink($pagina); ?>"><?php the_title(); ?></a></h1>
                    <p><?php the_excerpt(); ?></p>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <h1>Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
        <?php
        endif;
        if (function_exists('wp_paginate')) {
            wp_paginate();
        }
        ?>
    </div>    
</div>
<?php
get_footer();
?>
