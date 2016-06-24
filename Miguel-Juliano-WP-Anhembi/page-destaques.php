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
                get_sidebar('destaques');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <!----------- SLIDER Destaques Noticias ------------>
            <div id="destaquesNoticias">
                <div id="slider">
                    <?php
                    //Query Slider Destaques
                    query_posts('post_type=destaqueshome');
                    while (have_posts()): the_post();
                        ?>
                        <a href="<?php
                    $values = the_field('link_slider_destaques');
                    echo $values[0];
                        ?>">
                            <div class="sliderNoticias_title" >
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <p class="sliderNoticias_title_creditos">Foto: <?php the_field('creditos_slider_destaques'); ?></p>
                            </div>
                            <?php the_post_thumbnail('thumb-destaques-noticias') ?>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!----------- FIM SLIDER Destaques Noticias ------------>
            <div class="destaques3col_"> 
                <!---------------------------- BOX NOTICIAS ---->    
                <h2 class="destaques3col_title">
                    <a class="destaques3col_title_link" href="<?php echo get_permalink(2138); ?>">
                        &Uacute;ltimas Not&iacute;cias
                    </a> 
                </h2>
                <div class="destaques3col_box" style="
                     margin: 0 0 25px;
                     border: 1px solid #F68725;
                     padding: 10px;
                     height: 700px;
                     width: 280px;">
                     <?php
                     //Query Slider Destaques
                     query_posts('posts_per_page=12');
                     while (have_posts()): the_post();
                         ?> 
                        <p class="destaques3col_box_date">
                            <?
                            the_time("d/m/y")
                            ?>  
                        </p>
                        <a href="<?php the_permalink(); ?>">
                        </a>
                        <h2 class="destaques3col_box_title">
                            <a class="destaques3col_box_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <br/><br/>
                        </h2>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?> 
                    <div id="destaques3col_box_leiaMais" style="
                         width: 260px;
                         margin: -15px 0 0 96px;
                         ">
                        <a class="destaques3col_leiaMais_link" href="<?php echo get_permalink(2138); ?>">
                            + Todas as not&iacute;cias
                        </a>
                    </div>
                </div>
                <!----------------------------- AREA DO CLIPPING ----> 
                <!--
                <h1 class="destaques3col_titleClipping">
                    <a class="destaques3col_title_link" href="<?php echo get_permalink(1231); ?>"><?php
                    $id = 1231;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?></a>: Seu evento na m&iacute;dia
                </h1>
                <div class="destaques3col_box" style="  
                     margin: 0 0 25px;
                     border: 1px solid #F68725;
                     padding: 10px;
                     height: 319px;
                     width: 280px;">
                     <?php
                     //Query Slider Destaques
                     query_posts('post_type=clipping&posts_per_page=4');
                     while (have_posts()): the_post();
                         ?> 
                        <p class="destaques3col_box_date">
                            <?
                            the_time("d/m/y")
                            ?>  
                        </p>
                        <a href="<?php the_permalink(); ?>">
                        </a>
                        <h2 class="destaques3col_box_title">
                            <a class="destaques3col_box_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <br/><br/>
                        </h2>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    <div id="destaques3col_box_leiaMaisClipping" style="
                         margin: 0 0 0 141px;">
                        <a class="destaques3col_leiaMaisClipping_link" href="<?php echo get_permalink(1231); ?>">
                            + Leia Mais 
                        </a>
                    </div>
                </div>
                -->
                <!---- FIM - AREA DO CLIPPING ----> 
               
            </div>
            <div class="destaques2col">
                <!---- AREA FACEBOOK ---->        
                <h1 class="destaques3col_title_facebook" 
                    style="font-family: 'antique_olive_romanregular', arial, sans-serif;
                    font-size: 13px;
                    text-align: left;
                    color: #212121;
                    text-transform: uppercase;
                    margin: 35px 0 0;
                    background: url(images/icon-face.png) right no-repeat;
                    height: 0!important;
                    display: table;">
                    compartilhe
                </h1>
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-like-box" data-href="http://www.facebook.com/AnhembiParque" data-width="359" data-height="339" data-show-faces="false" data-stream="true" data-header="false">
                </div>

            </div>
            <!---- FIM - AREA FACEBOOK ---->
            <!---- AREA TWITTER ---->       
            <div class="destaques2col">
                <h1 class="destaques3col_title_twitter" 
                    style="  font-family: 'antique_olive_romanregular', arial, sans-serif;
                    font-size: 13px;
                    text-align: left;
                    color: #212121;
                    text-transform: uppercase;
                    background: url(images/icon-twitter.png) right no-repeat;
                    height: 0!important;
                    display: table;
                    margin: 13px 0 0;">
                    Siga-nos
                </h1>
                <a class="twitter-timeline" href="https://twitter.com/anhembiparque" data-widget-id="263988531762962432">Tweets by @anhembiparque</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <!---- FIM - AREA TWITTER ---->
            </div>
        </div>         
    </div>
</div>
</div>
<?php get_footer(); ?>