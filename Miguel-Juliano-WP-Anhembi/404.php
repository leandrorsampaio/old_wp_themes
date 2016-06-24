<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <?php
                $id = 1883;
                $post = get_page($id);
                echo $post->post_title;
                ?>
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
            <div id="error404">
                <h1>
                    Erro 404: <h2>
                        P&aacute;gina n&atilde;o encontrada
                    </h2>
                </h1>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404.png">
                <?php
                $page_404 = new WP_Query('page_id=1883');
                while ($page_404->have_posts()) : $page_404->the_post();
                    the_content();
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div id="destaques_noticiasRel_box">
                <h1>Veja mais:</h1><br/>
                <?php
                $relacionadas = new WP_Query('posts_per_page=3');
                while ($relacionadas->have_posts()) : $relacionadas->the_post();
                    ?>
                    <div id="destaques_noticiasRel_conteudo">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-destaques-servico');
                            } else {
                                ?>
                                <img class="oportunidadesInternas_query_article_thumb" src="<?php bloginfo('template_url'); ?>/images/oportunidadesInternas_query_article_thumb.png" />
                                <?php
                            }
                            ?>
                        </a>
                        <br/>
                        <p class="destaques_noticiasRel_conteudo_date">
                            <?php the_time("d/m/y") ?> |  
                            <?php the_time(); ?> </p> <br/>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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