<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
        <link rel="stylesheet"  type="text/css" media="print" href="<?php bloginfo('template_url') ?>/print.css" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/nivo-slider/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#slider').nivoSlider({effect: 'fade'});
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-329120-40']);
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
        <!-- Script para validar a aceitação do termo de uso-->
        <script LANGUAGE="JavaScript">
            <!-- Begin
            function checkCheckBox(f) {
                if (f.agree.checked == false)
                {
                    alert('Por favor, leia e aceite os termos antes de continuar');
                    return false;
                } else
                    return true;
            }
            //  End -->
        </script>
        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Imprensa SPTuris - Cidade de Sao Paulo",
            "url" : "http://imprensa.spturis.com.br/",
            "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <!-- <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio, Daniella Parra e Joao Paulo LR Oliveira" /> -->
        <!-- Meta -->
    </head>
    <body <?php body_class() ?> >
        <script type="text/javascript">
            var $buoop = {}
            $buoop.ol = window.onload;
            window.onload = function() {
                try {
                    if ($buoop.ol)
                        $buoop.ol();
                } catch (e) {
                }
                var e = document.createElement("script");
                e.setAttribute("type", "text/javascript");
                e.setAttribute("src", "http://browser-update.org/update.js");
                document.body.appendChild(e);
            }
        </script>
        <header>
            <div id="header_container">
                <div id="header">
                    <div id="header_logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url') ?>/images/header-logo2.png" alt="<?php bloginfo('name') ?> Logo" />
                        </a>
                    </div>
                    <div id="header_box">
                        <h6>
                            <a href="http://imprensa.spturis.com.br/faq">FAQ</a>
                        </h6>
                        <h6>
                            <a href="http://imprensa.spturis.com.br/links">Links</a>
                        </h6>
                        <h6>
                            <a href="http://imprensa.spturis.com.br/contato">Contato</a>
                        </h6>
                        <div id="header_box_flags">
                            <div id="header_box_flags_lang">
                                <a href="http://imprensa.spturis.com.br/tag/english">
                                    <img src="<?php bloginfo('template_url') ?>/images/flags_eng.png" alt="English" />
                                    English
                                </a>
                            </div>
                            <div id="header_box_flags_lang">
                                <a href="http://imprensa.spturis.com.br/tag/espanol">
                                    <img src="<?php bloginfo('template_url') ?>/images/flags_esp.png" alt="Espanol" />
                                    Espa&ntilde;ol
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="header_nav">
                        <nav>
                            <div id="header_nav_container">
                                <?php wp_nav_menu(array('theme_location' => 'menu-superior', 'container' => false)); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>