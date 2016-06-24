<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <meta http-equiv="refresh" content="1800">
            <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
            <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
            <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
            <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('template_url') ?>/dani.css" />
            <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'> <!-- Google Web Fonts -->
                <!-- Meta -->
                <script type="application/ld+json">
                    { "@context" : "http://schema.org",
                    "@type" : "Organization",
                    "name" : "Natal Iluminado - Cidade de Sao Paulo",
                    "url" : "http://cidadedesaopaulo.com/natal",
                    "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
                    "sameAs" : [ "https://www.facebook.com/TurismoemSP",
                    "https://twitter.com/turismosaopaulo",
                    "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
                    "https://www.youtube.com/user/spturis/"] 
                    }
                </script>
                <!--meta name="author" content="Luciana Jabur / Leandro Rossi Sampaio / Daniella Parra / Pagu Senna"-->
                <!-- Meta -->
                <?php wp_enqueue_script("jquery"); ?>
                <?php wp_head(); ?>
                <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/nivo/nivo_slider.js"></script>
                <!-- <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-cookie.js"></script> -->
                <script src="<?php bloginfo('template_url') ?>/js/smoothscroll.js"></script><!-- Smooth Scroll -->
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        jQuery('#slider').nivoSlider({effect: 'fade'});
                    });
                </script>
                <?php
                ///---- auto-height no iframe
                if (is_page(array(16, 24))) {
                    ?>
                    }
                    <script language="JavaScript">
                        function resize_iframe()
                        {
                            var height = window.innerWidth; //Firefox
                            if (document.body.clientHeight)
                            {
                                height = document.body.clientHeight; //IE
                            }
                            document.getElementById("resize").style.height = parseInt(height -
                                    document.getElementById("resize").offsetTop - 8) + "px";
                        }
                    </script>
                <?php }
                ?>
                <?php
                //---- Smooth Scroll
                if (is_page(array(17))) {
                    ?>
                    <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/smooth.pack.js"></script>
                <?php }
                ?>
                </head>
                <body>
                    <!-- analytics -->
                    <script type="text/javascript">

                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-329120-44']);
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
                    <div id="all">
                        <header>
                            <div id="headerBGvinho">
                                <!--
                                <div id="faixaSpturis">
                                    <div id="faixaSpturis_guirlanda"></div>
                                    <div id="faixaSpturis_faixaPadrao">
                                <?php // get_sidebar('barra'); ?>
                                    </div>
                                </div>
                                -->
                                <?php
                                //--- Tamanho do topo diferenciado para a home
                                if (is_home()) {
                                    echo "<div id='header'>";
                                } else {
                                    echo "<div id='headerHOME'>";
                                }
                                ?>
                                <a href="<?php bloginfo('url') ?>">
                                    <?php
                                    //--- Tamanho do logo na home e nas pag. internas
                                    if (is_home()) {
                                        ?>
                                        <div id="header_logo_home">
                                            <img src="<?php bloginfo('template_url') ?>/images/logo2014-vermelho.png" alt="<?php bloginfo('name') ?> Logo" />
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div id="header_logo_interno">
                                            <img src="<?php bloginfo('template_url') ?>/images/logo2014-vermelho.png" alt="<?php bloginfo('name') ?> Logo" />
                                        </div>
                                    <?php }
                                    ?>
                                </a>
                                <?php
                                //--- Tamanho do BANNER na home e nas pag. internas
                                if (is_home()) {
                                    ?>    
                                    <div id="header_bannerHOMESeparator"></div>
                                    <div id="header_bannerHOME">
                                        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
                                        <script language='JavaScript' type='text/javascript'>
                        <!--
                                                            if (!document.phpAds_used)
                            document.phpAds_used = ',';
                        phpAds_random = new String(Math.random());
                        phpAds_random = phpAds_random.substring(2, 11);

                        document.write("<" + "script language='JavaScript' type='text/javascript' src='");
                        document.write("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
                        document.write("&amp;what=zone:28");
                        document.write("&amp;exclude=" + document.phpAds_used);
                        if (document.referrer)
                            document.write("&amp;referer=" + escape(document.referrer));
                        document.write("'><" + "/script>");
                        //-->
                                        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a9bf2287' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:28&amp;n=a9bf2287' border='0' alt=''></a></noscript>

                                    </div>
                                    <?php
                                } else {
                                    ?>    

                                    <div id="header_banner">
                                        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
                                        <script language='JavaScript' type='text/javascript'>
                        <!--
                                                            if (!document.phpAds_used)
                            document.phpAds_used = ',';
                        phpAds_random = new String(Math.random());
                        phpAds_random = phpAds_random.substring(2, 11);

                        document.write("<" + "script language='JavaScript' type='text/javascript' src='");
                        document.write("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
                        document.write("&amp;what=zone:28");
                        document.write("&amp;exclude=" + document.phpAds_used);
                        if (document.referrer)
                            document.write("&amp;referer=" + escape(document.referrer));
                        document.write("'><" + "/script>");
                        //-->
                                        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a9bf2287' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:28&amp;n=a9bf2287' border='0' alt=''></a></noscript>


                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                    </div>
                    <div id="menu">
                        <nav>
                            <?php
                            //--- Menu na home e nas pag. internas
                            if (is_home()) {
                                ?>
                                <div id="menuHome">
                                    <?php
                                } else {
                                    ?>
                                    <div id="menuHome">
                                        <!--<div id="menuInterno">-->
                                    <?php }
                                    ?>
                                    <?php wp_nav_menu(array('theme_location' => 'menu-superior', 'container' => false)); ?>
                                </div>
                        </nav>
                    </div>
                    </header>