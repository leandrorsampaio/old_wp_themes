<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php wp_head(); ?>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

        <!---------------------------------- FOLHAS DE ESTILO ----->
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
        <!--[if lte IE 7]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style_IE7.css" /><![endif]-->
        <!--[if IE 8]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style_IE8.css" /><![endif]-->

        <!---------------------------------- JAVASCRIPTS & BIBLIOTECAS ---------> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/accordion_menu.js"></script>
        <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/smooth.pack.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-cookie.js"></script>

        <!------------------- BARRA DE ROLAGEM ----->
        <script type="text/javascript" id="sourcecode">
            $(function ()
            {
                $('.scroll-pane').jScrollPane();
            });
        </script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/nova-galeria/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/nova-galeria/jquery.jscrollpane.min.js"></script>

        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Anhembi Parque",
            "url" : "http://www.anhembi.com.br",
            "logo": "http://www.anhembi.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/header-logo.png",
            "sameAs" : [ "https://www.facebook.com/AnhembiParque",
            "https://twitter.com/anhembiparque",
            "https://plus.google.com/u/1/116472191067816141276/posts"] 
            }
        </script>
        <!-- <meta name="author" content="Luciana Jabur / Leandro Rossi Sampaio / Daniella Parra / Pagu Senna" />'; -->
        <!-- Meta -->

        <?php
        // ---------------------------------------------------------- TELECOM 2015
        //
        if (is_single(array(11385, 11379, 11377, 11381, 11339))) {
            ?>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
            <!--ABAS-->    
            <script type="text/javascript">$(document).ready(function () {
                $(".tabs-menu a").click(function (event) {
                    event.preventDefault();
                    $(this).parent().addClass("current");
                    $(this).parent().siblings().removeClass("current");
                    var tab = $(this).attr("href");
                    $(".tab-content").not(tab).css("display", "none");
                    $(tab).fadeIn();
                });
            });
            </script>

            <!--TIP-->
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/js/tooltipster.css" />
            <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.tooltipster.min.js"></script>   

            <script>
            $(document).ready(function () {
                $('.tooltip').tooltipster();
            });
            </script>   

            <?php
        }
        ?>                    

        <?php
        //----------------- SLIDER DA HOME
        if (is_home()) {
            ?>
            <link href="<?php bloginfo('template_url') ?>/js/js-image-slider.css" rel="stylesheet" type="text/css" />
            <script src="<?php bloginfo('template_url') ?>/js/js-image-slider.js" type="text/javascript"></script>

            <?php
        } elseif (is_page(7078)) {
            ?>
            <script src="<?php bloginfo('template_url') ?>/js/responsiveslides.js"></script>
            <link href="<?php bloginfo('template_url') ?>/js/js-image-slider.css" rel="stylesheet" type="text/css" />
            <script src="<?php bloginfo('template_url') ?>/js/basic-slider.js" type="text/javascript"></script>
            <?php
            //---------------- SLIDER DA PAGE DESTAQUES
        } elseif ((is_page(array(1848, 5626)))) {
            ?>
            <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/nivo/nivo_slider.js"></script>
            <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('#slider').nivoSlider({effect: 'fade'});
            });
            </script>
            <?php
        } elseif (is_page(6469)) {
            ?>
            <!-- VAlidacao do formulario Telecom -->
            <script src="<?php bloginfo('template_url') ?>/js/validaForm/jquery.maskedinput-1.3.js" type="text/javascript"></script>
            <?php
        }
        ?>

        <script type="text/javascript">
            //--------------------------- RE-SIZE TEXT
            $(document).ready(function () {
                if ($.cookie('TEXT_SIZE')) {
                    $('body').addClass($.cookie('TEXT_SIZE'));
                }
                $('.resizer a').click(function () {
                    var textSize = $(this).parent().attr('class');
                    $('body').removeClass('small medium large').addClass(textSize);
                    $.cookie('TEXT_SIZE', textSize, {path: '/', expires: 10000});
                    return false;
                });
            });
        </script>
        <script>
            //---------------------- SCROLL TO TOP 
            $(document).ready(function () {
                $("#back-top").hide();
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200) {
                            $('#back-top').fadeIn();
                        } else {
                            $('#back-top').fadeOut();
                        }
                    });
                    $('#back-top_arrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });
            });
        </script>
        <script type="text/javascript">
            // --------------------------------- HEATMAP.ME        
            (function () {
                var hm = document.createElement('script');
                hm.type = 'text/javascript';
                hm.async = true;
                hm.src = ('++u-heatmap-it+log-js').replace(/[+]/g, '/').replace(/-/g, '.');
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <script type="text/javascript">
            // ------------------------ Analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-329120-2']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <!-------------------------------- FIM  JAVASCRIPTS ---->
    </head>
    <body>
        <div id="all">
            <!--[if lte IE 8]>
                <div id="IEall">       
            <![endif]-->
            <header>
                <div id="header">
                    <div id="header_content">
                        <div id="header_content_logo">
                            <a href="http://www.anhembi.com.br">
                                <img src="<?php bloginfo('template_url') ?>/images/header-logo.png" alt="<?php bloginfo('name') ?> Logo" />
                            </a>
                        </div>
                        <div id="header_content_menus">
                            <div id="header_content_menus_lang">
                            </div>
                            <div id="header_content_menus_nav">
                                <nav>
                                    <div id="header_content_menus_nav_content">
                                        <?php wp_nav_menu(array('theme_location' => 'menu-superior', 'container' => false)); ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <?php
                        if ((is_home()) || (is_page(1848))) {
                            
                        } else {
                            ?>
                            <div id="back-top">
                                <a id="back-top_arrow" href ="#top">
                                    <span id="back-top_span">
                                        <img src ="http://www.anhembi.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/arrow-top.png" />
                                    </span>
                                </a>
                                <div id="back-top_socialMedia">   
                                    <a id="back-top_socialMedia_rss" target="_blank" href="http://www.anhembi.com.br/feed/"></a>
                                    <a id="back-top_socialMedia_face" target="_blank" href="http://facebook.com/AnhembiParque"></a>
                                    <a id="back-top_socialMedia_twitter" target="_blank" href="http://twitter.com/anhembiparque"></a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>            
            </header>        
            <!--[if lte IE 8]>
                 </div>         
            <![endif]-->