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
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('destaques-internas');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div class="content_direita_article_titleBox">
                        <a class="content_direita_article_link" href="<?php the_permalink(); ?>">
                            <h2 class="content_direita_article_link_textSingle" name="teste"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div class="content_direita_Sub"></div>
                    <div id="content_direita_article_theContent_topBar">
                        <div id="recursos">
                            <div id="recursos_print">
                                <a id="recursos_print_link" target="_self" href="javaScript:window.print()"></a> 
                            </div>
                            <div id="recursos_sendEmail">
                                <script>
                                    function open_win()
                                    {
                                        window.open("","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400");
                                    }
                                </script>
                                <form action="http://spturis.com/sistemas/mailer_anhembi/mailer_noticia_form.php" name="telecomForm" method="post" target="foo" onSubmit="window.open('', 'foo', 'width=450,height=300,status=yes,resizable=yes,scrollbars=yes')" >
                                    <input type="hidden" name="page_link" value="<?php echo get_permalink($post->ID); ?>">
                                    <input type="hidden" name="page_title" value="<?php the_title(); ?>">
                                    <input id="recursos_sendEmail_btn" type="submit" value="">
                                </form>
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
                        <div id="social">
                            <div id="social_gPlus">
                                <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                                <script type="text/javascript">
                                    window.___gcfg = {lang: 'pt-BR'};

                                    (function() {
                                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </div>
                            <div id="social_twitter">
                                <a class='twitter-share-button' data-count='none' expr:data-url='data:post.url' data-via='spturis' expr:data-text='data:post.title' href='http://twitter.com/share'>Twittar</a>
                                <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
                            </div>
                            <div id="social_face">
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                            </div>                            
                        </div>
                        <h6 class="content_direita_article_destaques_data"><?php the_date('d/m/Y'); ?> <?php the_time(); ?> </h6>
                    </div>
                    <div class="content_direita_article_theContent">
                        <div class="content_direita_article_theContent_destaques">
                            <?php the_content(); ?>
                        </div>
                        <div id="content_direita_article_serviceBar">
                            <div id="content_direita_article_serviceBar_thumb">
                                <?php the_post_thumbnail('thumb-destaques-servico') ?>
                            </div>
                            <?php
                            //verifica se o CAMPO VARIAVEL "DATA" esta vazio. Se estiver, renderiza a div de servicos
                            $datadoevento = get_post_custom_values('DATA');
                            if (isset($datadoevento)) {
                                ?>
                                <div id="content_direita_article_serviceBar_infos">
                                    <h4>Servi&ccedil;o</h4>
                                    <?php
                                    if (get_post_custom_values('SITE')) {
                                        echo '<h5>Site oficial</h5>';
                                        echo '<a href="http://' . implode(get_post_custom_values('SITE')) . '" target="_blank">' . implode(get_post_custom_values('SITE')) . '</a>';
                                    }
                                    if (get_post_custom_values('DATA')) {
                                        echo '<h5>Data</h5>';
                                        echo '<p>' . implode(get_post_custom_values('DATA')) . '</p>';
                                    }
                                    if (get_post_custom_values('HORARIO')) {
                                        echo '<h5>Hor&aacute;rio</h5>';
                                        echo '<p>' . implode(get_post_custom_values('HORARIO')) . '</p>';
                                    }
                                    if (get_post_custom_values('LOCAL')) {
                                        echo '<h5>Local</h5>';
                                        echo '<p>' . implode(get_post_custom_values('LOCAL')) . '</p>';
                                        echo '<a href="http://www.anhembiexpo.com.br/como-chegar/">(Veja o mapa)</a>';
                                    }
                                    if (get_post_custom_values('ESTACIONAMENTO')) {
                                        echo '<h5>Estacionamento</h5>';
                                        echo '<p>' . implode(get_post_custom_values('ESTACIONAMENTO')) . '</p>';
                                    }
                                    if (get_post_custom_values('CREDENCIAMENTO')) {
                                        echo '<h5>Credenciamento</h5>';
                                        echo '<p>' . implode(get_post_custom_values('CREDENCIAMENTO')) . '</p>';
                                    }
                                    if (get_post_custom_values('INGRESSOS')) {
                                        echo '<h5>Ingressos</h5>';
                                        echo '<p>' . implode(get_post_custom_values('INGRESSOS')) . '</p>';
                                    }
                                    if (get_post_custom_values('CONTATO')) {
                                        echo '<h5>Contato</h5>';
                                        echo '<p>' . implode(get_post_custom_values('CONTATO')) . '</p>';
                                    }
                                    ?>
                                </div>
                                <?php
                            } else {
                                
                            }
                            ?>
                        </div>
                    </div>
                </article>
                <?php
            endwhile;
            wp_reset_query();
            ?>
            <div id="destaques_noticiasRel_box">
                <h1>Mais eventos no Anhembi</h1><br/>
                <?php
                //Query get_the_tags
                $test = "";
                $posttags = get_the_tags();
                if ($posttags) {
                    foreach ($posttags as $tag) {
                        $test .= ',' . $tag->name;
                    }
                }
                $test = substr($test, 1); // remove first comma
                //---------------------------------- BOX 1 - Query "Feiras e Exposições"
                $tag_query = new WP_Query('tag=' . $test . '&posts_per_page=3');
                while ($tag_query->have_posts()) : $tag_query->the_post();
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
                        </a><br/>
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

