<?php include ('inc_programador.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php
            if (is_home()) {
                echo 'Ciclofaixa';
            } else {
                ?><?php bloginfo('name') ?> - <?php bloginfo('description') ?><?php } ?></title>
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
        <style>
            div.navBulletsWrapper div{
                margin-right: 2px !important;
            }
        </style>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
        <!-- AwesomeFonts -->
        <?php
        if (wp_is_mobile()) {
            ?>
            <!-- Only Mobile -->
            <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style_mobile.css" />
            <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>  
            <meta name="viewport"  initial-scale="1">
                <!-- -->
                <?php
            } else {
                ?>
                <?php
            }
            ?>

            <!-- ############# Javascript slider ############ -->
            <script src="<?php bloginfo('template_url') ?>/js/js-image-slider.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
            <link href='<?php bloginfo('template_url') ?>/js/tabulous.css' rel='stylesheet' type='text/css' />
            <link rel="stylesheet"  type="text/css" media="print" href="<?php bloginfo('stylesheet_directory') ?>/print.css" />
            <?php wp_head(); ?>
            <script>
                $(document).ready(function() {
                    //Examples of how to assign the ColorBox event to elements
                    $(".inline").colorbox({inline: true, width: "50%"});
                    $(".callbacks").colorbox({
                        onOpen: function() {
                            alert('onOpen: colorbox is about to open');
                        },
                        onLoad: function() {
                            alert('onLoad: colorbox has started to load the targeted content');
                        },
                        onComplete: function() {
                            alert('onComplete: colorbox has displayed the loaded content');
                        },
                        onCleanup: function() {
                            alert('onCleanup: colorbox has begun the close process');
                        },
                        onClosed: function() {
                            alert('onClosed: colorbox has completely closed');
                        }
                    });
                    //Example of preserving a JavaScript event for inline calls.
                    $("#click").click(function() {
                        $('#click').css({"background-color": "#f00", "color": "#fff", "cursor": "inherit"}).text("Open this window again and this message will still be here.");
                        return false;
                    });
                });
            </script>


            <!-- Meta -->
            <script type="application/ld+json">
                { "@context" : "http://schema.org",
                "@type" : "Organization",
                "name" : "SP de Bike - Cidade de Sao Paulo",
                "url" : "http://cidadedesaopaulo.com/descubra",
                "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
                "sameAs" : [ "https://www.facebook.com/TurismoemSP",
                "https://twitter.com/turismosaopaulo",
                "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
                "https://www.youtube.com/user/spturis/"] 
                }
            </script>
            <!-- <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio, Daniella Parra e Joao Paulo LR Oliveira" />-->
            <!-- Meta -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>--> 
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-329120-45']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            </script>
    </head>
    <body>
        <?php
        if (!wp_is_mobile()) {
            ?>
            <div id="all">
                <div class="faixaHeader">
                    <div class="faixaHeader_busca">
                        <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                            <input class="faixaHeader_busca_input" type="text" value="Buscar..." name ="s" maxlenght="20" onclick="this.value = ''"/>
                            <button class="faixaHeader_busca_btn" type="submit"></button>  
                        </form>
                    </div>
                    <div class="faixaHeader_links">
                        <a href="https://www.facebook.com/TurismoemSP" class="fa fa-facebook-square" target="_blank"></a>
                        <a href="https://twitter.com/turismosaopaulo" class="fa fa-twitter-square" target="_blank"></a>
                    <!--     <a href="<?php echo get_permalink($contato); ?>" class="fa fa-envelope"></a> -->
                    </div>
                </div>
                <header>
                    <?php
                    if (is_page($index_desktop)) {
                        ?>
                        <div id="headerHome">
                            <!--
                            <div id="headerSocial">
                                <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="headerSocial_facebook"></a>
                                <a href="http://twitter.com/turismosaopaulo" target="_blank" id="headerSocial_twitter"></a>
                            </div>
                            -->
                            <div id="headerHome_logo">
                                <div id="headerHome_logo_ciclofaixa">
                                    <a href="<?php bloginfo('url') ?>">
                                        <img src="<?php bloginfo('template_url') ?>/images/header_logo_ciclofaixa.png" alt="Ciclofaixa SP Logo" />
                                    </a>
                                </div>
                            </div>
                            <div id="headerHome_SP">
                                <!--<img src="<?php bloginfo('template_url') ?>/images/banner2-home.gif" alt="Arte com a Sigla SP" />  --> 
                                <!-- --> 
                                <div id="content_slider">
                                    <div id="sliderFrame">
                                        <div id="ribbon">
                                        </div>
                                        <div id="slider">
                                            <?php
                                            $slider = new WP_Query('post_type=slider');
                                            while ($slider->have_posts()) : $slider->the_post();
                                                ?>
                                                <a href=" <?php the_field('link_imagem'); ?>">
                                                    <div class="slider_imagem">
                                                        <?php the_post_thumbnail('thumb-slider'); ?>
                                                    </div>
                                                    <div class="slider_texto">
                                                        <h2><?php the_title(); ?></h2>
                                                        <span class="slider_texto_resumo"><?php the_excerpt(); ?></span>
                                                        <p class="slider_texto_creditos"><?php the_field('creditos_foto'); ?></p>
                                                    </div>
                                                </a>
                                                <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                        <div id="htmlcaption" style="display: none;">
                                            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
                                        </div>
                                    </div>
                                </div>
                                <!--  --> 
                            </div>
                        </div>                    
                        <?php
                    } else {
                        ?>   
                        <div id="headerInterna">
                            <!--
                            <div id="headerSocial">
                                <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="headerSocial_facebook"></a>
                                <a href="http://twitter.com/turismosaopaulo" target="_blank" id="headerSocial_twitter"></a>
                            </div>
                            -->
                            <div id="headerInterna_logo">
                                <div id="headerInterna_logo_ciclofaixa">
                                    <a href="<?php bloginfo('url') ?>">
                                        <img src="<?php bloginfo('template_url') ?>/images/header_logo_ciclofaixa.png" alt="Ciclofaixa SP Logo" />
                                    </a>
                                </div>
                            </div>
                            <div id="headerInterna_ilustra">
                                <?php
                                // pega o post type
                                $postType = get_post_type();
                                if (is_page($roteiros) || $postType == 'roteiros') {
                                    ?>  
                                    <img src="<?php bloginfo('template_url') ?>/images/roteiros-bike.gif" alt="Paraciclo ilustracao" />
                                    <?php
                                } elseif (is_page(array($vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL)) || $postType == 'vias') {
                                    ?>   
                                    <img src="<?php bloginfo('template_url') ?>/images/vias-exclusivas.gif" alt="Alugue Bike ilustracao" />
                                    <?php
                                } elseif (is_page($precisa)) {
                                    ?>  
                                    <img src="<?php bloginfo('template_url') ?>/images/NEWprecisa-bike.gif" alt="Precisa de bike ilustracao" />
                                    <?php
                                } elseif (is_page(array($news, $allNews)) || $postType == 'noticia') {
                                    ?>   
                                    <img src="<?php bloginfo('template_url') ?>/images/NEWbike-news.gif" alt="Pedale com seguranca ilustracao" />
                                    <?php
                                } elseif (is_page($etiqueta)) {
                                    ?>  
                                    <img src="<?php bloginfo('template_url') ?>/images/seguranca-etiqueta.gif" alt="Parques ilustracao" />
                                    <?php
                                } elseif (is_page(array($transporte, $transporte_TR, $transporte_MT))) {
                                    ?> 
                                    <img src="<?php bloginfo('template_url') ?>/images/NEWtrem-metro.gif" alt="transporte" />
                                    <?php
                                } elseif (is_page(array($porai, $porai_app)) || $postType == 'porai') {
                                    ?>  
                                    <img src="<?php bloginfo('template_url') ?>/images/NEWpor-ai.gif" alt="Ciclofaixas ilustracao" />
                                    <?php
                                } elseif (is_page($friendly) || $postType == 'friendly') {
                                    ?>   
                                    <img src="<?php bloginfo('template_url') ?>/images/NEWbike-friendly.gif" alt="Ciclofaixas ilustracao" />
                                    <?php
                                } else {
                                    ?> 
                                    <img id="headerInterna_ilustra_imgTitle" src="<?php bloginfo('template_url') ?>/images/turismo_bike_header.png" alt="Turismo de Bike titulo" />
                                    <?php
                                }
                                ?>
                            </div>
                        </div>             
                        <?php
                    }
                    ?>
                </header>
                <nav>
                    <div id="menu">
                        <ul id="menu_lista">
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($roteiros); ?>" class="menu_lista_item_link-V1 transition30">
                                    <span>Roteiros</span></br>de bike
                                </a>
                            </li>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($vias); ?>" class="menu_lista_item_link-V1 transition30">
                                    Vias<br/><span>Exclusivas</span>
                                </a>
                            </li>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($precisa); ?>" class="menu_lista_item_link-V1 transition30">
                                    Precisa de<br/><span>bike?</span>
                                </a>
                            </li>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($friendly); ?>" class="menu_lista_item_link-V1 transition30">
                                    Bike<br/><span>Friendly</span>
                                </a>
                            </li>
                            <?php
                            //--------  Query Menu (NOTICIA)
                            global $varQuery;
                            $varQuery = new WP_Query('post_type=noticia&posts_per_page=1');
                            while ($varQuery->have_posts()) : $varQuery->the_post();
                                ?>
                                <li class="menu_lista_item">
                                    <a href="<?php echo get_permalink(); ?>" class="menu_lista_item_link-V1 transition30">
                                        Bike<br/><span>News</span>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($etiqueta); ?>" class="menu_lista_item_link-V1 transition30">
                                    Etiqueta e<br/><span>Seguran&ccedil;a</span>
                                </a>
                            </li>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($transporte); ?>" class="menu_lista_item_link-V1 transition30" style="width:121px;">
                                    Bike no <br/> <span>trem e metr&ocirc;</span>
                                </a>
                            </li>
                            <li class="menu_lista_item">
                                <a href="<?php echo get_permalink($porai); ?>" class="menu_lista_item_link-V2 transition30">
                                    <span id="menu_lista_item_link-V2-1">Por a&iacute;</span><span id="menu_lista_item_link-V2-2"> Links Interessantes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php
            } else {
                ?>
                <div class="allMobile">



                    <div class="formMob">
                        <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                            <input class="formMob_input" type="text" value="Buscar..." name ="s" maxlenght="20" onclick="this.value = ''"/>
                            <button class="formMob_btn fa fa-search" type="submit"></button>  
                        </form>
                    </div>




                    <nav class="menuMobile">





                        <img src="<?php bloginfo('template_url') ?>/images/lupa_hover.png" alt="" />









                        <ul id="menu" class="menuMobile_ul">







                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($roteiros); ?>">Roteiros de Bike</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($vias); ?>">Vias Exclusivas</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($precisa); ?>">Precisa de Bike</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($friendly); ?>">Bike Friendly</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($news); ?>">Bike News</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($etiqueta); ?>">Etiqueta e Seguran&ccedil;a</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($transporte_mobile); ?>">Bike no trem e metr&ocirc;</a>
                            </li>
                            <li class="menuMobile_ul_li">
                                <a class="menuMobile_ul_a" href="<?php echo get_permalink($porai_mobile); ?>">Por a&iacute;</a>
                            </li>
                        </ul>
                    </nav>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>
                    <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#menu').slicknav();
                                });
                    </script>
                    <div class="logoMobile">
                        <a href="<?php bloginfo('url'); ?>">
                            <img class="logoMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/logMob.png" alt="Logo" />
                        </a>
                    </div>
                    <?php
                }
                ?>