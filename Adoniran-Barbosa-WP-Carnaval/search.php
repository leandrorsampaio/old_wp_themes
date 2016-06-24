<?php
// inclui o header
get_header();

// escolhe as cores
include ('sidebar-escolheacor.php');
?>
<div id="search" style="color: #1D8BCB;">
    <section id="search_section">
        <div id="search_section_head">
            <h1 id="search_section_head_title">
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
                ?></h1>
        </div>
        <div id="search_section_conteudo">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="search_section_result">
                        <h1 class="search_section_result_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <h2 class="search_section_result_data"><?php the_time('d F Y') ?> - <?php the_time('g:i') ?></h2>
                        <h3 class="search_section_result_resumo"><?php the_excerpt(); ?></h3>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <h1 id="texto404">Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
            <?php endif; ?>
            <?php
            if (function_exists('wp_paginate')) {
                wp_paginate();
            }
            ?>
        </div>
        <div id="noticias_section_servicebar" style="border-color: #1D8BCB">
            <div id="noticias_section_servicebar_rss">
                <img src="<?php bloginfo('template_url') ?>/images/noticias_section_servicebar_rss.png" style="background-color: #1D8BCB" />
                <img src="<?php bloginfo('template_url') ?>/images/noticias_section_servicebar_mail.png" style="background-color: #1D8BCB" />
                <a href="javascript:window.print();">
                    <img src="<?php bloginfo('template_url') ?>/images/noticias_section_servicebar_print.png" alt="Imprimir" style="background-color: #1D8BCB;" />
                </a>  
            </div>
            <div id="noticias_section_servicebar_cadastro">
                <img src="<?php bloginfo('template_url') ?>/images/noticias_section_servicebar_reply.png" style="background-color: #1D8BCB" />
                <iframe src="http://spturis.com.br/sistemas/mailer_carnaval/form.php" frameBorder=0 width=350 height=22 scrolling='no'></iframe>
            </div>
        </div>
    </section>
    <!-- Aside -->
    <aside id="aside">
        <?php
        include ('sidebar-maisnoticias.php');
        ?>
    </aside>
    <!-- Aside -->
</div>
<?php get_footer(); ?>