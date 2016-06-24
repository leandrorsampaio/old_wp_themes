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
                get_sidebar('destaques');
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
                <div id="noticiasGeral">
                    <?php
                    $noticias = new WP_Query('posts_per_page=-1');
                    while ($noticias->have_posts()) : $noticias->the_post();
                        ?>
                        <h1 class="noticiasGeral_Artigos_title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>                        
                            </a>
                        </h1>
                        <h2 class="clippingBloco2_Artigos_date">
                            <?php the_time("d/m/y") ?> - <?php the_time(); ?>
                        </h2>
                        <div id="noticiasGeral_Artigos_resumo">  
                            <?php the_excerpt(); ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php pagination(); ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>