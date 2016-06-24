<?php header('Location: /index.php');?>
<?php // get_header(); ?>
<!--<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        ---------------------------------------- BLOCO 1 --------------------------------
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo get_permalink(1810); ?>">
                    <?php
                    $post_id = 1810;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
                - 
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        ---------------------------------------- Esquerda --------------------------------
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('inteligencia');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        ---------------------------------------- Direita --------------------------------
        <div id="content_direita">
            <article class="content_direita_article">
                <div class="content_direita_article_titleBox">
                    <a class="content_direita_article_link" href="<?php the_permalink(); ?>">
                        <h2 class="content_direita_article_link_textSingle"><?php the_title(); ?></h2>
                    </a>
                </div>
                <div id="content_direita_article_theContent_topBar">
                    <div id="recursos">
                        <div id="recursos_print">
                            <a id="recursos_print_link" target="_self" href="javaScript:window.print()"></a> 
                        </div>
                        <div id="recursos_sendEmail">
                            <?php
                            if (function_exists('wp_email')) {
                                email_link();
                            }
                            ?>
                        </div>
                        <div id="recursos_pdf">
                            <a id="recursos_pdf_link" href="<?php bloginfo('url') ?>/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>" rel="nofollow"></a>
                        </div>
                        <div id="recursos_textSize">
                            <p id="recursos_textSize_title">Texto:</p>
                            <ul class="resizer">
                                <li class="small">
                                    <a id="btn_small" href="#"></a>
                                </li>
                                <li class="medium">
                                    <a id="btn_medium" href="#"></a>
                                </li>
                                <li class="large">
                                    <a id="btn_large" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content_direita_article_theContent">
                    <?php the_content(); ?>
                </div>
            </article>
            <div id="inteligenciaBloco3">
                --------- Box Últimos Artigos ----------
                <div id="inteligenciaSingle_Box">
                    <h1 class="inteligenciaSingle_Box_title">
                        Leia Mais
                    </h1>
                    <?php
                    query_posts('post_type=inteligencia&posts_per_page=3');
                    while (have_posts()): the_post();
                        ?>
                        <div class="inteligenciaSingle_posts">
                            <a href="<?php the_permalink(); ?>">
                            </a>
                            <h2 class="destaques3col_box_title">
                                <a class="destaques3col_box_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <p class="destaques3col_box_date">
                                    <?php the_time("d/m/y") ?>
                                </p>
                            </h2>
                            <div class="destaques3col_box_resumo">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query()
                    ?>
                </div>
                --------- Fim - Box Últimos Artigos ----------
            </div>
        </div>
    </div>-->
    <?php // get_footer();
    ?>