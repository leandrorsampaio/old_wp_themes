<?php get_header(); ?>
<div id="contentHome">
    <div href="<?php bloginfo('url'); ?>" id="contentHome_boxLogo">
        <a href="<?php bloginfo('url'); ?>"><img id="contentHome_boxLogo_imgLogo" src="<?php bloginfo('template_url') ?>/images/logo2015_home.png"></a>
    </div>
    <a href="<?php bloginfo('url'); ?>/?p=107" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-seueventoaqui.png" 
             alt="aquiSignpost designed by Joe Harrison from The Noun Project"
             title="aquiSignpost designed by Joe Harrison from The Noun Project"
             />
        <h2>&Aacute;reas<br/>Loc&aacute;veis</h2>
    </a>
    <div href="#" id="contentHome_boxService">
        <div id="CORRECAOcontentHome_boxService_corecao-1">
            <div id="contentHome_boxService_flags">
                <!--
                <a href="#" id="contentHome_boxService_flags_pt" ></a>
                <a href="#" id="contentHome_boxService_flags_en" ></a>
                <a href="#" id="contentHome_boxService_flags_es" ></a>
                -->
                <?php
                //chama os widgets para essa sidebar cadastrados no admin do WP
                !dynamic_sidebar('traducao');
                ?>
            </div>
            <div id="contentHome_boxService_clima">
                <?php

                $result = file_get_contents('http://weather.yahooapis.com/forecastrss?w=455827&u=c');
                
                if($result!=""){
                
                $xml = simplexml_load_string($result);
                $xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');
                $location = $xml->channel->xpath('yweather:location');
                if (!empty($location)) {
                    foreach ($xml->channel->item as $item) {
                        $current = $item->xpath('yweather:condition');
                        $forecast = $item->xpath('yweather:forecast');
                        $current = $current[0];
                        $temperatura = $current['temp'];
                        $codigoyahoo = $current['code'];
                        if ($codigoyahoo <= 8) {
                            $icone = "chuvaforte";
                        } elseif ($codigoyahoo <= 16) {
                            $icone = "chuva";
                        } elseif ($codigoyahoo <= 18) {
                            $icone = "chuvaforte";
                        } elseif ($codigoyahoo <= 19) {
                            $icone = "ensolarado";
                        } elseif ($codigoyahoo <= 22) {
                            $icone = "nublado";
                        } elseif ($codigoyahoo <= 24) {
                            $icone = "chuvaforte";
                        } elseif ($codigoyahoo <= 26) {
                            $icone = "nublado";
                        } elseif ($codigoyahoo <= 27) {
                            $icone = "noitenublada";
                        } elseif ($codigoyahoo <= 28) {
                            $icone = "nublado";
                        } elseif ($codigoyahoo <= 29) {
                            $icone = "noitenublada";
                        } elseif ($codigoyahoo <= 30) {
                            $icone = "nublado";
                        } elseif ($codigoyahoo <= 31) {
                            $icone = "noiteclara";
                        } elseif ($codigoyahoo <= 32) {
                            $icone = "ensolarado";
                        } elseif ($codigoyahoo <= 33) {
                            $icone = "noiteclara";
                        } elseif ($codigoyahoo <= 34) {
                            $icone = "ensolarado";
                        } elseif ($codigoyahoo <= 35) {
                            $icone = "chuvaforte";
                        } elseif ($codigoyahoo <= 36) {
                            $icone = "ensolarado";
                        } elseif ($codigoyahoo <= 39) {
                            $icone = "chuvaforte";
                        } elseif ($codigoyahoo <= 43) {
                            $icone = "chuva";
                        } elseif ($codigoyahoo <= 44) {
                            $icone = "nublado";
                        } elseif ($codigoyahoo <= 47) {
                            $icone = "chuvaforte";
                        } else {
                            $icone = "nublado";
                        }
                        $verifica = 1;
                    }
                } else {
                    $verifica = 2;
                }
                if ($verifica == 1) {
                    ?>
                    <p id="contentHome_boxService_clima_texto">
                        <img id="contentHome_boxService_clima_texto_icone" src="<?php bloginfo('template_url') ?>/images/<?php echo $icone; ?>.png" 
                             alt="Este &iacute;cone foi desenhado por Adam Whitcroft, dispon&iacute;vel em thenounproject.com/adamwhitcroft"
                             title="Este &iacute;cone foi desenhado por Adam Whitcroft, dispon&iacute;vel em thenounproject.com/adamwhitcroft" 
                             /> | <?php echo $temperatura; ?>
                        <span>&deg;C</span>
                    </p>
                    <?php
                } else {
                    echo "<!-- Modulo do clima Yahoo Offline. -->";
                }

			}else{
				    echo "<!-- Modulo do clima Yahoo Offline. -->";
				}

                ?>
            </div>
        </div>
        <div id="CORRECAOcontentHome_boxService_corecao-2">
            <div id="contentHome_boxService_social">
                <a id="contentHome_boxService_social_face" href="https://www.facebook.com/autodromodeinterlagos" target="_blank"></a>
                <a id="contentHome_boxService_social_twitter" href="https://twitter.com/InterlagosTrack" target="_blank"></a>
            </div>
            <div id="contentHome_boxService_search">
                <form>
                    <input id="contentHome_boxService_search_input" type="text" value="Buscar" name="s" maxlength="21" onclick="this.value = ''">
                    <input class="contentHome_boxService_search_btn" type="submit" id="searchsubmit" value="" >
                </form>
            </div>
        </div>
    </div>
    <?php
    // LOOPING BOX HOME
    $slider2 = new WP_Query('post_type=boxes&p=21');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    // LOOPING BOX HOME
    $slider2 = new WP_Query('post_type=boxes&p=22');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <a href="<?php bloginfo('url'); ?>/?p=2" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-conheca.png" 
             alt="aquiSignpost designed by Joe Harrison from The Noun Project"
             title="aquiSignpost designed by Joe Harrison from The Noun Project"
             />
        <h2>Conhe&ccedil;a<br/>Interlagos</h2>
    </a>
    <!-- AGENDA 
    <div id="contentHome_boxAgenda">
        <ul id="contentHome_boxAgenda_lista">
            <li class="contentHome_boxAgenda_lista_item">
                <a href="#" class="contentHome_boxAgenda_lista_item_link">
                    <h4>00/00</h4>
                    <p>F&oacute;rmula Truck Etapa Interlagos SP</p>
                </a>
            </li>
            <li class="contentHome_boxAgenda_lista_item">
                <a href="#" class="contentHome_boxAgenda_lista_item_link">
                    <h4>00/00</h4>
                    <p>F&oacute;rmula Renault Brasil 2013</p>
                </a>
            </li>
            <li class="contentHome_boxAgenda_lista_itemExtra1">
                <a href="#" class="contentHome_boxAgenda_lista_item_link">
                    <h4>00/00</h4>
                    <p>Festival Loolapalooza S&atilde;o Paulo</p>
                </a>
            </li>
            <li class="contentHome_boxAgenda_lista_itemExtra2">
                <a href="#" class="contentHome_boxAgenda_lista_item_link">
                    <h4>00/00</h4>
                    <p>Corrida Noturna Nike 5km Noturna</p>
                </a>
            </li>
        </ul>
        <a href="<?php bloginfo('url'); ?>/?p=68" id="contentHome_boxAgenda_vejaMais">Veja mais eventos</a>
    </div>
    -->
    <a href="<?php bloginfo('url'); ?>/?p=79" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-noticias.png" 
             alt="aquiSignpost designed by John Caserta from The Noun Project"
             title="aquiSignpost designed by John Caserta from The Noun Project"
             style="margin: 11% 0 0 4%;" 
             />
        <h2>Not&iacute;cias</h2>
    </a>
    <?php
    // LOOPING BOX HOME
    // TEMPORARIO PARA A FALTA DA AGENDA
    $slider2 = new WP_Query('post_type=boxes&p=24');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <!-- AGENDA 
    <a href="<?php bloginfo('url'); ?>/?p=68" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-agenda.png" 
             alt="aquiSignpost designed by Joe Harrison from The Noun Project"
             title="aquiSignpost designed by Joe Harrison from The Noun Project"
             />
        <h2>Calend&aacute;rio<br/>de Eventos</h2>
    </a>
    -->
    <?php
    // LOOPING BOX HOME
    // TEMPORARIO PARA A FALTA DA AGENDA
    $slider2 = new WP_Query('post_type=boxes&p=16');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    // LOOPING BOX HOME
    $slider2 = new WP_Query('post_type=boxes&p=307');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    // LOOPING BOX HOME
    $slider2 = new WP_Query('post_type=boxes&p=305');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    // LOOPING BOX HOME
    
    $slider2 = new WP_Query('post_type=boxes&p=306');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <!--
                    <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
                       style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
                       title="<?php the_field('box_creditos'); ?>"
                       alt="<?php the_field('box_creditos'); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
            -->
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <img src="<?php bloginfo('template_url') ?>/images/icone-dicionario.png" 
                     alt=""
                     title=""
                     />
                <h2>DICION&Aacute;RIO DO<br/>AUTOMOBILISMO</h2>
            </a>
        <?php } else { ?>
            <!--
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            -->
            
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    // LOOPING BOX HOME
    // TEMPORARIO PARA A FALTA DA AGENDA
    $slider2 = new WP_Query('post_type=boxes&p=310');
    while ($slider2->have_posts()) : $slider2->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        if ((strlen($url_thumbnail)) > 5) {
            ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare" 
               style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center; background-color:#fbaf22; background-repeat: no-repeat;"
               title="<?php the_field('box_creditos'); ?>"
               alt="<?php the_field('box_creditos'); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
        <?php } else { ?>
            <a href="<?php the_field('box_link'); ?>" class="contentHome_boxSquare">
                <h1><?php the_title(); ?></h1>
            </a>
            <?php
        }
    endwhile;
    wp_reset_postdata();
    ?>
    <a href="<?php bloginfo('url'); ?>/?p=75" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-comochegar.png" 
             alt="aquiSignpost designed by Joe Harrison from The Noun Project"
             title="aquiSignpost designed by Joe Harrison from The Noun Project"
             />
        <h2>Como<br/>Chegar</h2>
    </a>
    <a href="<?php bloginfo('url'); ?>/?p=71" class="contentHome_boxSquare">
        <img src="<?php bloginfo('template_url') ?>/images/icone-faleconosco.png" 
             alt="aquiSignpost designed by Joe Harrison from The Noun Project"
             title="aquiSignpost designed by Joe Harrison from The Noun Project"
             />
        <h2>Fale<br/>Conosco</h2>
    </a>
    <div id="contentHome_footer">
        <div id="contentHome_footer_centralizador">
            <a href="http://www.cidadedesaopaulo.com/sp/" target="blank" id="contentHome_footer_centralizador_logoCSP">
                <img src="<?php bloginfo('template_url') ?>/images/logos-footer-sp.png">
            </a>
            <a href="http://spturis.com" target="blank" id="contentHome_footer_centralizador_logoSPTuris">
                <img src="<?php bloginfo('template_url') ?>/images/logos-footer-spt.png">
            </a>
            <a href="http://www.capital.sp.gov.br" target="blank" id="contentHome_footer_centralizador_logoPrefeitura">
                <img src="<?php bloginfo('template_url') ?>/images/logos-footer-prefeitura.png">
            </a>
        </div>
        <p id="contentHome_footer_text">Todas as informa&ccedil;&otilde;es est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. Todos os direitos Reservados</p>
    </div>
</div>
<?php
// LOOPING SLIDER HOME
$slider = new WP_Query('post_type=slider&posts_per_page=1&orderby=rand');
while ($slider->have_posts()) : $slider->the_post();
    ?>
    <a href="<?php the_field('slider_link'); ?>">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('slider_resumo'); ?></h2>
            <p><?php the_field('slider_creditos'); ?></p>
        </div>
    </a>
    <div id="newSlider">
        <img src="<?php the_field('slider_img_desktop'); ?>" alt="Foto por: <?php the_field('slider_creditos'); ?>" title="Foto por: <?php the_field('slider_creditos'); ?>" />
    </div> 
    <?php
endwhile;
wp_reset_postdata();
?>
<?php get_footer(); ?>
