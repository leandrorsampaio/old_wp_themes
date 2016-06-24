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
                <a href="<?php echo get_permalink(509); ?>">
                    <?php
                    $post_id = 509;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('telecom');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <article class="content_direita_article">
                <?php the_content(); ?>
            </article>
            <div class="servicos_4col">
                <?php
                //---------------------------------- Box 1 - Telecom - Internet
                $telecom_blox1 = new WP_Query('post_type=servicos&p=512');
                while ($telecom_blox1->have_posts()) : $telecom_blox1->the_post();
                    ?>
                    <h2 class="servicos_4col_title">
                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                    </a>
                    <div class="servicos_4col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicos_4col">
                <?php
                //---------------------------------- Box 2 - Telecom - Telefonia
                $servicos_mais = new WP_Query('post_type=servicos&p=513');
                while ($servicos_mais->have_posts()) : $servicos_mais->the_post();
                    ?>
                    <h2 class="servicos_4col_title">
                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                    </a>
                    <div class="servicos_4col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicos_4col">
                <?php
                //---------------------------------- Box 3 - Telecom - Instalacao
                $servicos_mais = new WP_Query('post_type=servicos&p=515');
                while ($servicos_mais->have_posts()) : $servicos_mais->the_post();
                    ?>

                    <h2 class="servicos_4col_title_instalacao">
                        <a class="servicos_4col_title_instalacao_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                    </a>
                    <div class="servicos_4col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicos_4col">
                <?php
                //---------------------------------- Box 4 - Telecom - Locacao
                $servicos_mais = new WP_Query('post_type=servicos&p=514');
                while ($servicos_mais->have_posts()) : $servicos_mais->the_post();
                    ?>
                    <h2 class="servicos_4col_title">
                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                    </a>
                    <div class="servicos_4col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <span class="servicos_tarja">
                <a href="<?php echo get_permalink(2610); ?>"> <img src="<?php bloginfo('template_url'); ?>/images/tarja_telecom.jpg"/></a>
            </span>
        </div>
    </div>
</div>
<?php get_footer(); ?>