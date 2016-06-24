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
                <a href="<?php echo get_permalink(1848); ?>">
                    <?php
                    $post_id = 1848;
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
                get_sidebar('clipping');
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
            <div id="content_direita_singleWpContent">
                <?php the_content(); ?>
                <div id="clippingBloco1">
                    <?php
                    //Query que chamara as 3 ultimas noticias principais de Clipping
                    query_posts('post_type=clipping&posts_per_page=3');
                    while (have_posts()): the_post();
                        ?>
                        <div id="clippingBloco1_Artigos">
                            <h1 class="clippingBloco1_Artigos_title">
                                <a class="clippingBloco1_Artigos_title_link" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumb-posts') ?> 
                                    <?php the_title(); ?>                        
                                </a>
                            </h1>
                            <h2 class="clippingBloco1_Artigos_date">
                                <?php the_time("d/m/y") ?>
                            </h2>
                            <div id="clippingBloco1_Artigos_resumo">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="clippingBloco2">
                    <?php
                    //Query que chamará todas as noticias de Clipping
                    query_posts('post_type=clipping&offset=3');
                    while (have_posts()): the_post();
                        ?>
                        <h1 class="clippingBloco2_Artigos_title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>                        
                            </a>
                        </h1>
                        <h2 class="clippingBloco2_Artigos_date">
                            <?php the_time("d/m/y") ?>
                        </h2>
                        <div id="clippingBloco2_Artigos_resumo">  
                            <?php the_excerpt(); ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>