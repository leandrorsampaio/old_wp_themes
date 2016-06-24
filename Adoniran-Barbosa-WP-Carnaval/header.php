<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Google Webmaster --->
        <meta name="google-site-verification" content="Y9J6iF_1nv_BQ0AkZIJPz24scbpHB_BUJrz0JO3ZSc8" />
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
        <link rel="stylesheet"  type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
        <link rel="stylesheet"  type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" />
        <!--[if IE 8]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/IE8.css" /><![endif]-->
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>

        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Carnaval - Cidade de Sao Paulo",
            "url" : "http://cidadedesaopaulo.com/carnaval",
            "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <!-- Meta -->



        <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>
        <script type='text/javascript'>//<![CDATA[ 

            $(document).ready(function() {
                var allBoxes = $("div.boxes").children("div");
                transitionBox(null, allBoxes.first());
            });

            function transitionBox(from, to) {
                function next() {
                    var nextTo;
                    if (to.is(":last-child")) {
                        nextTo = to.closest(".boxes").children("div").first();
                    } else {
                        nextTo = to.next();
                    }
                    to.fadeIn(500, function() {
                        setTimeout(function() {
                            transitionBox(to, nextTo);
                        }, 5000);
                    });
                }

                if (from) {
                    from.fadeOut(500, next);
                } else {
                    next();
                }
            }
            //]]>  

        </script>                  



        <?php
        if (is_page(4238)) {
            ?>
            <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mapa_samba_script.js"></script>
            <link rel="stylesheet"  type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/style_mapa_samba.css" />
            <?php
        }
        ?>
        <?php
        // se for a pag. da Linha do Tempo, carregar o smooth pack
        if (is_page(69)) {
            ?>
            <script type = 'text/javascript' src = "<?php bloginfo('template_url'); ?>/js/smooth.pack.js"></script>
            <?php
        } else {
            
        }
        ?>
        <script type="text/javascript">
            //analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-329120-46']);
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
        <div id="tudo">
            <nav>
                <div id="header-menu">
                    <div id="header-menu_itens">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'menu_superior'
                        ));
                        ?>
                    </div>
                </div>
            </nav>
            <?php if (is_home()) {
                ?>
                <header>
                    <div id="headerV2">
                        <div id="sliderV2">                   
                            <div>
                                <div class="boxes">
                                    <?php
                                    $contador = 1;
                                    //---------------------------------- Slider Query
                                    $box1 = new WP_Query('posts_per_page=5&post_type=slider&orderby=rand');
                                    while ($box1->have_posts()) : $box1->the_post();
                                        ?>
                                        <div class="box<?php echo $contador; ?>" style="background-image: url(<?php the_field('slider_foto'); ?>);">
                                            <p class="sliderV2_creditos">
                                                <span><?php the_field('slider_creditos'); ?></span>
                                            </p>
                                        </div>
                                        <?php
                                        $contador = $contador + 1;
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <div id="sliderV2_whiteBG"></div>
                                <div id="sliderV2_logo"></div>
                            </div>
                        </div>
                    </div>
                </header>
                <?php
            } else {
                ?>
                <div id="separatorInternasTop"></div>
                <header>
                    <?php
                    //---------------------------------- Slider Interno Query
                    $box1 = new WP_Query('posts_per_page=1&post_type=sliderinterna&orderby=rand');
                    while ($box1->have_posts()) : $box1->the_post();
                        ?>
                        <div id="headerInterno" style="background-image: url(<?php the_field('slider_foto'); ?>);">
                            <div id="headerInterno_logo">
                                <img src="<?php bloginfo('template_url') ?>/images/logo2014.png" alt="Carnaval Logo" />
                            </div>
                            <p id="sliderV2_creditos"><?php the_field('slider_creditos'); ?></p>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </header>
                <?php
                if (is_page(69)) {
                    //se for linha do tempo
                } else {
                    echo '<!-- englobador (close at header) --><div id="englobador">';
                }
                ?>
                <?php
            }
            ?>