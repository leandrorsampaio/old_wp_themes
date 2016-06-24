<?php get_header(); ?>
<div id="blank">
    <div id="section_ldt">
        <div id="section_ldt-title">
            <h1> <?php the_title(); ?></h1>
        </div>                                              
        <div id="deLorean-line">
            <div id="section_content-deLorean">
                <?php
                //------------- identifica o ano (taxonomia anosldt)
                $ano = get_terms('anosldt', 'orderbyname');
                foreach ($ano as $term) :
                    $nome_ano = $term->name;
                    ?>
                    <div class="ldt-year">
                        <div class="ldt-year-label">
                            <a name="<?php echo $nome_ano; ?>"></a>
                            <?php echo $nome_ano; ?>
                        </div>  
                    </div>
                    <?php
                    $term_name = $term->slug;
                    $args = array(
                        'post_type' => 'ldt', //nome do post_type
                        'anosldt' => "$term_name", //nome da taxonomia que você quer puxar
                        'orderby' => 'name',
                        'posts_per_page' => '-1'
                    );
                    ?>
                    <div id="direita">
                        <?php
                        // ################################## COLUNA DIREITA
                        //--------  Inicia a query e o loop
                        $deLorean2 = new WP_Query($args);
                        while ($deLorean2->have_posts()) : $deLorean2->the_post();
                            include ('sidebar-deloreancor.php');
                            ////////// IF ---- qual coluna o post se encaixará: direita
                            $coluna = get_field('colunas');
                            if (($coluna == 'direita')) {
                                ?>
                                <div id="content-deLorean-right">
                                    <span class="deLorean_corner-right"></span>
                                    <div class="deLorean-right">
                                        <h1 class="<?php echo $catColorRight; ?>"><?php the_title(); ?></h1><br/>
                                        <?php the_content(); ?>
                                        <!--
                                        <div class="deLorean_xoxial">
                                            <div class="deLorean_xoxial-face">
                                                <script>
                                                    //(function(d, s, id) {
                                                    //var js, fjs = d.getElementsByTagName(s)[0];
                                                    //if (d.getElementById(id)) return;
                                                    //js = d.createElement(s); js.id = id;
                                                    //js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                                    //fjs.parentNode.insertBefore(js, fjs);
                                                    //}(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                                            </div>
                                            <div class="deLorean_xoxial-twitter">
                                                <a href="https://twitter.com/share" class="twitter-share-button" data-text="Veja um fato hist&oacute;rico na Linha do Tempo do Carnaval de S&atilde;o Paulo!" data-via="turismosaopaulo" data-lang="pt" data-hashtags="carnavalsp">Twittar</a>
                                                <script>//!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <?php
                            } else {
                                
                            }
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                    <div id="esquerda">
                        <?php
                        // ################################## COLUNA DIREITA
                        //--------  Inicia a query e o loop

                        $deLorean = new WP_Query($args);
                        while ($deLorean->have_posts()) : $deLorean->the_post();

                            include ('sidebar-deloreancor.php');
                            ////////// IF ---- qual coluna o post se encaixará: direita
                            $coluna = get_field('colunas');
                            if (($coluna == 'esquerda')) {
                                ?>
                                <div id="content-deLorean-left">
                                    <span class="deLorean_corner"></span>
                                    <div class="deLorean">
                                        <h1 class="<?php echo $catColorRight; ?>"><?php the_title(); ?></h1><br/>
                                        <?php the_content(); ?>
                                        <!--
                                        <div class="deLorean_xoxial">
                                            <div class="deLorean_xoxial-face">
                                                <script>
                                                    //(function(d, s, id) {
                                                    //var js, fjs = d.getElementsByTagName(s)[0];
                                                    //if (d.getElementById(id)) return;
                                                    //js = d.createElement(s); js.id = id;
                                                    //js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                                    //fjs.parentNode.insertBefore(js, fjs);
                                                    //}(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                                            </div>
                                            <div class="deLorean_xoxial-twitter">
                                                <a href="https://twitter.com/share" class="twitter-share-button" data-text="Veja um fato hist&oacute;rico na Linha do Tempo do Carnaval de S&atilde;o Paulo!" data-via="turismosaopaulo" data-lang="pt" data-hashtags="carnavalsp">Twittar</a>
                                                <script>//!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <?php
                            } else {
                                
                            }
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <!--        <div id ="back-top">
                        <a id="back-top_arrow" href ="#top">
                            <span id="back-top_span">
                                <img src="<?php bloginfo('template_url') ?>/images/back-top.png" />
                            </span>
                        </a>
                    </div>-->
            <div id="section_ldt-case">
                <div id="ldt-ruler">
                    <?php
                    //------------- identifica o ano (taxonomia anosldt)
                    $ano = get_terms('anosldt', 'orderbyname');
                    foreach ($ano as $term) :
                        $nome_ano = $term->name;
                        ?>
                        <ul>
                            <li>
                                <a href="#<?php echo $nome_ano; ?>">
                                    <?php echo $nome_ano; ?>
                                </a>
                            </li>
                        </ul>            
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>