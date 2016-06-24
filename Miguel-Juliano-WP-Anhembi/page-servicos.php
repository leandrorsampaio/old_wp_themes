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
                get_sidebar('servicos');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php
            while (have_posts()): the_post();
                ?>
                <article class="content_direita_articlev2">
                    <?php the_content(); ?>
                </article>
                <?php
            endwhile;
            ?>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 1 - Anuncie no Anhembi
                $servicos_box1 = new WP_Query('post_type=servicos&p=4775');
                while ($servicos_box1->have_posts()) : $servicos_box1->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 2 - TELECOM 
                //$servicos_box2 = new WP_Query('post_type=servicos&p=509'); antiga pagina telecom
                $servicos_box2 = new WP_Query('post_type=servicos&p=11339');
                while ($servicos_box2->have_posts()) : $servicos_box2->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 3 - Estacionamento
                $servicos_box3 = new WP_Query('post_type=servicos&p=519');
                while ($servicos_box3->have_posts()) : $servicos_box3->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 4 - Encontre Aqui
                $servicos_box4 = new WP_Query('post_type=servicos&p=520');
                while ($servicos_box4->have_posts()) : $servicos_box4->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 5 - Downloads
                $servicos_box5 = new WP_Query('post_type=servicos&p=1001');
                while ($servicos_box5->have_posts()) : $servicos_box5->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 6 - Onde Ficar
                $servicos_box6 = new WP_Query('post_type=servicos&p=1177');
                while ($servicos_box6->have_posts()) : $servicos_box6->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <!--            <div class="servicosHome_2col">
                            //<?php
//                //---------------------------------- BOX 7 - Mercadod de Eventos
//                $servicos_box7 = new WP_Query('page_id=1229');
//                while ($servicos_box7->have_posts()) : $servicos_box7->the_post();
//                    
                ?>
                                <a href="//<?php the_permalink(); ?>">
                                    //<?php the_post_thumbnail('thumb-servicos') ?>
                                </a>
                                <h2 class="servicosHome_2col_title">
                                    <a class="servicosHome_2col_title_link" href="//<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="servicosHome_2col_resumo">
                                    //<?php the_excerpt(); ?>
                                </div>
                                //<?php
//                endwhile;
//                wp_reset_postdata();
//                
                ?>
                        </div>-->
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 8 - Acessibilidade
                $servicos_box8 = new WP_Query('post_type=servicos&p=1929');
                while ($servicos_box8->have_posts()) : $servicos_box8->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="servicosHome_2col">
                <?php
                //---------------------------------- BOX 9 - Achados e Perdidos
                $servicos_box9 = new WP_Query('post_type=servicos&p=7317');
                while ($servicos_box9->have_posts()) : $servicos_box9->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-servicos') ?>
                    </a>
                    <h2 class="servicosHome_2col_title">
                        <a class="servicosHome_2col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="servicosHome_2col_resumo">
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