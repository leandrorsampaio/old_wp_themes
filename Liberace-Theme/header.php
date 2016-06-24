<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta charset="ISO-8859-1">
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
        <!--[if lt IE 10]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('template_url') ?>/IE8.css" /><![endif]-->
        <script src="<?php bloginfo('template_url') ?>/js/aba.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script><!--- Menu Collapse --->
        <script src="<?php bloginfo('template_url') ?>/js/smoothscroll.js"></script><!-- Smooth Scroll -->
        <script src="<?php bloginfo('template_url') ?>/js/basic-slider.js"></script><!--- Slider Fade --->
        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Guia LGBT - Cidade de Sao Paulo",
            "url" : "http://cidadedesaopaulo.com/lgbt",
            "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio, Daniella Parra e Joao Paulo LR Oliveira" />
        <!-- Meta -->

        <!-- Google Analytics -->
        <script>
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

            ga('create', 'UA-329120-49', 'spturis.com');
            ga('send', 'pageview');
        </script>
    </head>
    <?php
    //
    //sidebar idioma
    include('sidebar-idioma.php');
    //
    //
    
    
    



    if (is_single(array(372, 373))) {
        ?>
        <body class="overflow">
        <?php } else {
            ?>
        <body>
        <?php }
        ?>
        <div id = "tudo">
            <div id = "topBar">
                <script>
                    //esse script deixa dinâmico o tamanho da barra (de busca, tradução..) do topo.
                    var tamanhoTotal = $(window).height();
                    var y = (tamanhoTotal * 97) / 100;
                    var alturabox = y / 4;
                    document.write("<div id='topBar_barra' style='width:" + y + "px;'>");
                </script>
                <div id = "topBar_barra_servicos">
                    <?php
                    if (is_single(array(372, 373))) {
                        
                    } else {
                        ?>
                        <div class="topBar_item logo">
                            <?php
                            if ($idioma == 'pt') {
                                echo '<a href="';
                                echo get_permalink(372);
                                echo '"><img src="';
                                echo bloginfo('template_url');
                                echo '/images/home_btn.png" alt="S&atilde;o Paulo Guia LGBT">';
                                echo '</a>';
                            } else {
                                echo '<a href="';
                                echo get_permalink(373);
                                echo '"><img src="';
                                echo bloginfo('template_url');
                                echo '/images/home_btn_en.png" alt="S&atilde;o Paulo Guia LGBT">';
                                echo '</a>';
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="topBar_item social">
                        <a href="https://www.facebook.com/TurismoemSP" target="_blank"><img style="margin: 0 5px 0 0;" src="<?php bloginfo('template_url') ?>/images/facebook_flat.png"></a>
                        <a href="https://twitter.com/turismosaopaulo" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/twitter_flat.png"></a>
                    </div>
                    <div class="topBar_item traducao">
                        <?php get_sidebar('traducao'); ?>
                    </div>
                    <div class="topBar_item search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- topBar_barra -->
    <?php
//---- Testa se é página interna ou home
    if ((is_home()) || (is_single(array(372, 373)))) {
        
    } else {
        ?>
        <script>
            var tamanhoTotal = $(window).height();
            var y = (tamanhoTotal * 97) / 100; //está em porcentagem. 
            document.write("<div class='interna' style='height:" + y + "px; width:" + y + "px;'>");
        </script>
        <div class="interna_topo">
            <div class="interna_topo_header Z1-header tipo1x1">
                <header>
                    <?php
                    //
                    include('sidebar-idioma.php');
                    //
                    if ($idioma == 'pt') {
                        ?>
                        <a href="<?php echo get_permalink(372); ?>">
                            <h1 id="fittext-Z1"><span class="tipo3">S&atilde;o<br/></span><span class="tipo3">Paulo<br/></span><span class="tipo4">Guia<br/></span><span class="tipo4">LGBT</span></h1>
                        </a>
                    <?php } else {
                        ?>
                        <a href="<?php echo get_permalink(373); ?>">
                            <h1 id="fittext-Z1"><span class="tipo3">S&atilde;o<br/></span><span class="tipo3">Paulo<br/></span><span class="tipo4">LGBT<br/></span><span class="tipo4">Guide</span></h1>
                        </a>
                        <?php
                    }
                    ?>
                </header>
            </div>
            <?php
            get_sidebar('menu_interno');
        }
        ?>
