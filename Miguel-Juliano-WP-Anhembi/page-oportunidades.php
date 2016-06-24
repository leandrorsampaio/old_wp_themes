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
                <a href="<?php echo get_permalink(1831); ?>">
                    <?php
                    $post_id = 1831;
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
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('oportunidades');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <!--- Quando for Internet Explorer 8, trocará uma div por outra ---->
        <!--[if !IE 8]><![IGNORE[--><![IGNORE[]]> 
        <div id="content_direita">
            <!--<![endif]-->
            <!--[if IE 8]> 
             <div id="content_direita_IE">
            <!--<![endif]-->
            <div id="oportunidadesInternas">
                <div class="content_direita_article">
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
                </div>
                <div id="oportunidadesInternas_query">
                    <?php
                    //---------------------------------- Query "Oportunidades"
                    $boxoport = new WP_Query('post_type=oportunidades&posts_per_page=16');
                    while ($boxoport->have_posts()) : $boxoport->the_post();
                        ?>
                        <div class="oportunidadesInternas_query_article">
                            <h3 class="oportunidadesInternas_query_article_title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <a class="oportunidadesInternas_query_article_thumb" href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-homeOportunidades');
                                } else {
                                    ?>
                                    <img class="oportunidadesInternas_query_article_thumb" src="<?php bloginfo('template_url'); ?>/images/oportunidadesInternas_query_article_thumb.jpg" />
                                    <?php
                                }
                                ?>
                            </a>
                            <div class="oportunidadesInternas_query_article_text">
                                <div class="oportunidadesInternas_query_article_customField_title">
                                    <?php
                                    if (get_post_custom_values('LOCAL')) {
                                        echo '<a class="oportunidadesInternas_query_article_customField" href="';
                                        echo the_permalink();
                                        echo '">' . implode(get_post_custom_values('LOCAL')) . '</a>';
                                    }
                                    ?>
                                </div>
                                <a class="oportunidadesInternas_query_article_resumo" href="<?php the_permalink(); ?>">
                                    <?php the_excerpt(); ?>
                                    <br/>
                                    <p class="oportunidadesInternas_query_article_resumo">
                                        <?php the_field('descricao'); ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>