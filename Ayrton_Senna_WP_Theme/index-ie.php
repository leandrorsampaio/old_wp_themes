<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="stylesheet"  type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/js/collapse.js"></script>

        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

    </head>
    <body style=" background: url(<?php bloginfo('stylesheet_directory'); ?>/images/bg-ie.jpg) no-repeat; background-position: top center;">
        <div id="tudo">
            <div id="IEcontentHome">
                <div href="<?php bloginfo('url'); ?>" id="contentHome_boxLogo">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png"></a>
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
                            <?php
                            //chama os widgets para essa sidebar cadastrados no admin do WP
                            !dynamic_sidebar('traducao');
                            ?>
                        </div>
                        <div id="contentHome_boxService_clima">
                            <?php
                            $result = file_get_contents('http://weather.yahooapis.com/forecastrss?w=455827&u=c');
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
                                <input id="contentHome_boxService_search_input" type="text" value="Buscar" name="s" maxlength="21" onclick="this.value=''" />
                                <input class="contentHome_boxService_search_btn" type="submit" id="searchsubmit" value="" />
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
                    <p id="IEcontentHome_footer_text">Todas as informa&ccedil;&otilde;es est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. Todos os direitos Reservados <br/> Foto do Background: Beto Issa / GP Brasil</p>
                </div>
            </div>
        </div>
    </body>
</html>