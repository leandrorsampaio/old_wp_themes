<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="stylesheet"  type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/js/collapse.js"></script>
        <?php
        if (is_home()) {
            ?>   
            <!--[if IE 8]>
            <script type="text/javascript">
            window.location = "http://www.autodromodeinterlagos.com.br/wp1/?p=879";
            </script>
            <![endif]-->
            <?php
        } else {
            echo "<body>";
        }
        ?>
        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <?php
        if (is_page(array(75))) {
            //como chegar
            ?>
            <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/smooth.pack.js"></script>
            <!-- <script src="<?php // bloginfo('template_url')                 ?>/js/tabs.js"></script> -->
            <?php
        } else {
            
        }
        ?>
        <?php wp_head(); ?>

        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Autodromo de Interlagos",
            "url" : "http://autodromodeinterlagos.com.br/",
            "logo": "http://www.autodromodeinterlagos.com.br/wp1/wp-content/themes/Ayrton_Senna_WP_Theme/images/logo.png",
            "sameAs" : [ "https://www.facebook.com/autodromodeinterlagos",
            "https://twitter.com/InterlagosTrack"] 
            }
        </script>
        <!-- Meta -->

        <script>
            //analytics
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-329120-50', 'autodromodeinterlagos.com.br');
            ga('send', 'pageview');

        </script>
    </head>
    <?php
    if (is_home()) {
        echo "<body style='overflow:hidden;'>";
    } else {
        echo "<body>";
    }
    ?>
    <div id="tudo">
        <header>
            <?php
            //----- home normal e home de IE8
            if ((is_home()) || (is_page(879))) {
                
            } else {
                ?>

                <div href="#" id="contentInterna_boxMenu">
                    <div id="menuPrincipal_mobile">
                        <div id="menuPrincipal_mobile_links">
                            <?php wp_nav_menu(array('theme_location' => 'menu_superior', 'container' => false)); ?>
                        </div>
                        <div id="menuPrincipal_mobile_arrowRight"></div>
                        <div id="menuPrincipal_mobile_arrowLeft"></div>
                    </div>
                    <div id="contentInterna_boxMenu_logo">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo2015_interno.jpg"></a>
                    </div>
                    <div id="contentInterna_boxMenu_menu">
                        <?php wp_nav_menu(array('theme_location' => 'menu_superior', 'container' => false)); ?>
                    </div>
                </div>
                <div id="contentInterna_boxMenu_mobile">
                    <div id="menuMobile_search">
                        <?php get_search_form(); ?>
                    </div>
                    <ul id="menuMobile" class="menuMobile_links">
                        <?php wp_nav_menu(array('theme_location' => 'menu_espacos', 'container' => false)); ?>
                    </ul>
                </div>
            <?php } // ABERTURA DA TAG PHP ESTAVA ABREVIADA 
            ?>
        </header>
        <script type="text/javascript">
            //Expande o Menu
            $('#menuPrincipal_mobile_links').hide();
            $('#menuPrincipal_mobile_arrowLeft').hide();
            $('#menuPrincipal_mobile_arrowRight').click(function() {
                $('#menuPrincipal_mobile').animate({width: '100%'}, 700),
                        $('#menuPrincipal_mobile_arrowLeft').show();
                $('#menuPrincipal_mobile_arrowRight').hide();
                $('#menuPrincipal_mobile_links').show();
            });
            //Recolhe o Menu
            $('#menuPrincipal_mobile_arrowLeft').click(function() {
                $('#menuPrincipal_mobile').animate({width: '30px'}, 700);
                $("#menuPrincipal_mobile_arrowLeft").hide();
                $("#menuPrincipal_mobile_arrowRight").show();
                $('#menuPrincipal_mobile_links').hide();
            });
        </script>