<?php
//Id das escolas
include ('sidebar-idescolas.php');

// inclui o header
get_header();

//looping
while (have_posts()): the_post();

    // escolhe as cores
    include ('sidebar-escolheacor.php');
    ?>
    <div id="unidosdodesign" style="color: <?php echo $cor1; ?>;">
        <section id="unidosdodesign_section">
            <a id="unidosdodesign_section_titleLink" href="<?php the_permalink(); ?>">
                <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                <img id="unidosdodesign_section_titleLink_bandeiraThumb" src="<?php echo $url_thumbnail; ?>" alt="Bandeira da Escola <?php the_title(); ?>" style="border-color: <?php echo $cor1; ?>;" />
                <h1 id="unidosdodesign_section_titleLink_text"><?php the_field('nome_completo'); ?></h1>
            </a>
            <div id="unidosdodesign_section_slider" style="background-color: <?php echo $cor1; ?>;">
                <div id="unidosdodesign_section_slider_wrap">
                    <?php
                    //---------------------------------- Query Galerias
                    $box1 = new WP_Query('post_type=galerias&posts_per_page=1&p=' . get_field('id_galeria_principal'));
                    while ($box1->have_posts()) : $box1->the_post();
                        ?>
                        <div id="unidosdodesign_section_slider_wrap_big">
                            <?php
                            $images = get_posts(array("post_type" => "attachment", "post_parent" => $post->ID, "orderby" => "menu_order", "numberposts" => -1));
                            $contador = 1;
                            foreach ($images as $image) {
                                $urls = array();
                                list ($url) = wp_get_attachment_image_src($image->ID, $s);
                                $caption = $image->post_excerpt;
                                ?>
                                <div id="normal<?php echo $contador; ?>">
                                    <a href="<?php echo $url ?>" target="blank" title="Clique para ver em tamanho maior">
                                        <img src="<?php echo $url ?>" alt="Imagem destaque da Escola de Samba" />
                                    </a>
                                    <p class="caption"><?php echo $caption; ?></p>
                                </div>
                                <?php
                                $contador++;
                            }
                            ?>
                        </div>
                        <div id="unidosdodesign_section_slider_wrap_thumbs">
                            <?php
                            $images = get_posts(array("post_type" => "attachment", "post_parent" => $post->ID, "orderby" => "menu_order", "numberposts" => -1));
                            $contador = 1;
                            foreach ($images as $image) {
                                $urls = array();
                                list ($url) = wp_get_attachment_image_src($image->ID, $s);
                                ?>

                                <a href="javascript: changeImage(<?php echo $contador; ?>);" style="border-color: <?php echo $cor2; ?>">
                                    <img src="<?php echo $url ?>" alt="Thumb" />
                                </a>
                                <?php
                                $contador++;
                            }
                            ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div id="unidosdodesign_section_bandeira">
                <img id="unidosdodesign_section_bandeira_img" src="<?php the_field('bandeira_da_escola'); ?>" alt="Bandeira da Escola <?php the_title(); ?>" style="border-color: <?php echo $cor1; ?>;" />
            </div>
            <div id="unidosdodesign_section_ficha">
                <div id="unidosdodesign_section_ficha_texto">
                    <?php
                    the_field('ficha_tecnica');
                    ?>
                </div>
                <!-- CARNACARDIOGRAMA OLD
                <?php
                //if (is_single(array($mooca, $provadefogo, $tradicaoalbertinense, $camisa12, $coloradodobras, $torcidajovem, $barroca, $dbosco, $tup, $usaolucas, $uirapuru, $uimperial ))) {
                //    
                //} else {
                //    ?>
                    <a href = "<?php //the_field('carna_cardiograma'); ?>" target = "blank" style = "color: <?php //echo $cor1; ?>; font-family: 'MuseoSans500', arial, sans-serif!important;">
                        Veja o Carna-cardiograma da escola!
                    </a>
                //    <?php
                //}
                //?>
                -->
            </div>
            <div id = "unidosdodesign_section_ficha_dados">
                <div id = "unidosdodesign_section_ficha_dadosCores">
                    <h5>Cores:</h5>
                    <div id = "unidosdodesign_section_ficha_cores" style = "border-color: <?php echo $cor1; ?>;" >
                        <?php
                        // Verifica se existe terceira e quarta cor
                        $teste_cor3 = get_field("cor_3");
                        $teste_cor4 = get_field("cor_4");

                        if ($teste_cor4) {
                            ?> 
                            <div class="unidosdodesign_section_ficha_cores_4coresBox" style="background-color: <?php echo $cor1; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_4coresBox" style="background-color: <?php echo $cor2; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_4coresBox" style="background-color: <?php echo $cor3; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_4coresBox" style="background-color: <?php echo $cor4; ?>;"></div>                        
                            <?php
                        } elseif ($teste_cor3) {
                            ?>
                            <div class="unidosdodesign_section_ficha_cores_3coresBox" style="background-color: <?php echo $cor1; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_3coresBox" style="background-color: <?php echo $cor2; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_3coresBox" style="background-color: <?php echo $cor3; ?>;"></div>
                            <?php
                        } else {
                            ?>
                            <div class="unidosdodesign_section_ficha_cores_2coresBox" style="background-color: <?php echo $cor1; ?>;"></div>
                            <div class="unidosdodesign_section_ficha_cores_2coresBox" style="background-color: <?php echo $cor2; ?>;"></div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="unidosdodesign_section_social">
                    <div id="unidosdodesign_section_social_texto">
                        <h6 style="color: <?php echo $cor1; ?>;">Sua Escola nota 10 nas redes sociais</h6>
                    </div>
                    <div id="unidosdodesign_section_social_flecha">
                        <img src="<?php bloginfo('template_url') ?>/images/unidosdodesign_section_social-flechav2.png" alt="seta indicativa" style="background-color: <?php echo $cor1; ?>;" />
                    </div>
                    <div id="unidosdodesign_section_social_widgets">
                        <div id="unidosdodesign_section_social_widgets_gPlus">
                            <!-- Place this tag where you want the share button to render. -->
                            <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                            <!-- Place this tag after the last share tag. -->
                            <script type="text/javascript">
                                window.___gcfg = {lang: 'pt-BR'};

                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div id="unidosdodesign_section_social_widgets_twitter">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-text="Veja a página da minha escola de samba no site do carnaval de sp" data-via="turismosaopaulo" data-lang="pt" data-hashtags="carnavalsp">Tweetar</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        <div id="unidosdodesign_section_social_widgets_face">
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
                </div>
            </div>
            <!-- Samba -->
            <?php
            include ('sidebar-samba.php');
            ?>
            <!-- Samba -->
            <!-- boxGaleria -->
            <?php
            include ('sidebar-boxgaleria.php');
            ?>
            <!-- boxGaleria -->
            <!-- Leia Mais -->
            <?php
            include ('sidebar-leiamais.php');
            ?>
            <!-- Leia Mais -->
        </section>
        <!-- Aside -->
        <aside id="aside">
            <?php
            include ('sidebar-publicidade.php');
            include ('sidebar-maisescolas.php');
            include ('sidebar-maisnoticias.php');
            ?>
        </aside>
        <!-- Aside -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>