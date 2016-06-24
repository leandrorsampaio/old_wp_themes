<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset'); ?>" />
        <?php
        // Monta o Title
        $nomeBlog = get_bloginfo('name');
        $nomePagina = get_the_title();
        $titleIndex = '<title>' . $nomeBlog . '</title>';
        $titleSingle = '<title>' . $nomeBlog . ' - ' . $nomePagina . '</title>';
        if (is_home()) {
            $titleFinal = $titleIndex;
            echo $titleFinal;
        } else {
            $titleFinal = $titleSingle;
            echo $titleFinal;
        }
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon.ico" type="image/x-icon" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-24.png" sizes="24x24" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-48.png" sizes="48x48" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-160.png" sizes="160x160" />
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon/icon-apple-152.png" />
        <meta name="msapplication-TileColor" content="#b91d47" />
        <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
        <?php
        // Meta Informações para o Compartilhamento no face
        $titleWP = get_the_title();
        $imageWP = get_bloginfo('template_url') . '/images/ShareFaceIcon.gif';
        $nomeWP = get_bloginfo('name');
        $publiWP = 'http://www.facebook.com/TurismoemSP';
        ?>
        <meta property='og:title' content='<?php echo $titleWP; ?>' />
        <meta property='og:image' content='<?php echo $imageWP; ?>'/>
        <meta property='og:type' content='website' />
        <meta property='og:site_name' content='<?php echo $nomeWP; ?>' />
        <meta property='og:article:publisher' content='<?php echo $publiWP; ?>' />

        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Dicionario de Paulistanes - Cidade de Sao Paulo",
            "url" : "http://cidadedesaopaulo.com/paulistanes/",
            "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <!--<meta name="author" content="Luciana Jabur / Leandro Rossi Sampaio / Daniella Parra" /> -->
        <!-- Meta -->
        <?php
        if (is_home()) {
            
        } else {
            // Meta Informações só para as internas 
            $summaryWP = get_bloginfo('description');
            $permalinkWP = get_permalink();
            ?>        
            <meta property='og:description' content='<?php echo $summaryWP; ?>' />
            <meta property='og:url' content='<?php echo $permalinkWP; ?>' />
            <?php
        }
        ?>
        <!-- J QUERY GOOGLE -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!-- J QUERY CARROUSSEL -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.carouFredSel-6.2.1.js"></script>
        <!-- RESPONSIVE NAV JS -->
        <script src="<?php bloginfo('template_url'); ?>/js/responsive-nav.js"></script>
        <!--- CARROSSEL ALFABETO --->
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.17475.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elastislide.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/elastislide.css" />
        <?php
        if (is_home()) {
            ?>
            <!--- SWIPPER HOME --->
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/swiper.min.css" />
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <?php
            }
            ?>
            <!--- GOOGLE FONTS --->
            <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'></link>
            <!-- Carrossel Dialetos da Cidade -->
            <script type="text/javascript" language="javascript">
                $(function () {
                    // Scrolled by user interaction
                    $('#foo2').carouFredSel({
                        auto: false,
                        prev: '#prev2',
                        next: '#next2',
                        pagination: "#pager2",
                        mousewheel: true,
                        swipe: {
                            onMouse: true,
                            onTouch: true
                        }
                    });
                });
            </script>
            <!-- Player de Audio -->
            <?php if (is_home() || is_single()) {
                ?>
                <script src="<?php bloginfo('template_url'); ?>/js/audiojs/audio.min.js"></script>
                <script>
                audiojs.events.ready(function () {
                    var as = audiojs.createAll();
                });
                </script>
                <?php
            } else {
                
            }
            ?>
            <?php /* Modulo do Programador */ include ('mod_programador.php'); ?>
            <?php wp_head(); ?>
    </head>
    <body>
        <div id="tudo">
            <header>
                <div id="header">
                    <div class="HeadCentralizador">
                        <a href="<?php bloginfo('url'); ?>">
                            <div id="header_logo">
                                <h1>Paulistan&ecirc;s</h1>
                                <h2>Dicion&aacute;rio</h2>
                            </div>
                            <div id="header_carinha">
                                <?php include ('mod_carinhas.php'); ?>
                            </div>
                        </a>
                        <div id="header_menuMobile">
                            <nav class="nav-collapse">
                                <ul>
                                    <li>
                                        <a href="<?php echo get_permalink(9); ?>">Mania de Paulistano</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(11); ?>">Tradu&ccedil;&otilde;es</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(13); ?>">Gastronomia</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(15); ?>">Dialetos da Cidade</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(17); ?>">Pref&aacute;cio</a>
                                    </li>
                                </ul>
                            </nav>
                            <script>
                                var navigation = responsiveNav(".nav-collapse", {
                                    insert: "before"
                                });
                            </script>
                        </div>
                    </div>
                    <div id="header_menu">
                        <div id="header_menu_balaoEsq">
                            <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-menu.png" alt="Elemento decorativo" />
                        </div>
                        <ul>
                            <li id="header_menu-linkMania">
                                <a href="<?php echo get_permalink(9); ?>">Mania de<br/>Paulistano</a>
                            </li>
                            <li id="header_menu-linkTraducoes">
                                <a href="<?php echo get_permalink(11); ?>">Tradu&ccedil;&otilde;es</a>
                            </li>
                            <li id="header_menu-linkGastronomia">
                                <a href="<?php echo get_permalink(13); ?>">Gastronomia</a>
                            </li>
                            <li id="header_menu-linkDialetos">
                                <a href="<?php echo get_permalink(15); ?>">Dialetos<br/>da Cidade</a>
                            </li>
                            <li id="header_menu-linkPrefacio">
                                <a href="<?php echo get_permalink(17); ?>">Pref&aacute;cio</a>
                            </li>
                        </ul>
                    </div>
                    <div id="header_alfabeto">
                        <h4 id="header_alfabeto_title">Selecione<span> uma Letra</span>:</h4>
                        <div id="alfabeto_carousel">
                            <ul id="carousel2" class="elastislide-list">
                                <li><a class="font-1" href="<?php echo $taxLink_a; ?>">A</a></li>
                                <li><a class="font-2" href="<?php echo $taxLink_b; ?>">B</a></li>
                                <li><a class="font-3" href="<?php echo $taxLink_c; ?>">C</a></li>
                                <li><a class="font-4" href="<?php echo $taxLink_d; ?>">D</a></li>
                                <li><a class="font-5" href="<?php echo $taxLink_e; ?>">E</a></li>
                                <li><a class="font-6" href="<?php echo $taxLink_f; ?>">F</a></li>
                                <li><a class="font-7" href="<?php echo $taxLink_g; ?>">G</a></li>
                                <li><a class="font-8" href="<?php echo $taxLink_h; ?>">H</a></li>
                                <li><a class="font-9" href="<?php echo $taxLink_i; ?>">I</a></li>
                                <li><a class="font-10" href="<?php echo $taxLink_j; ?>">J</a></li>
                                <li><a class="font-11" href="<?php echo $taxLink_l; ?>">L</a></li>
                                <li><a class="font-12" href="<?php echo $taxLink_m; ?>">M</a></li>
                                <li><a class="font-13" href="<?php echo $taxLink_n; ?>">N</a></li>
                                <li><a class="font-14" href="<?php echo $taxLink_o; ?>">O</a></li>
                                <li><a class="font-15" href="<?php echo $taxLink_p; ?>">P</a></li>
                                <li><a class="font-16" href="<?php echo $taxLink_q; ?>">Q</a></li>
                                <li><a class="font-3" href="<?php echo $taxLink_r; ?>">R</a></li>
                                <li><a class="font-18" href="<?php echo $taxLink_s; ?>">S</a></li>
                                <li><a class="font-19" href="<?php echo $taxLink_t; ?>">T</a></li>
                                <li><a class="font-20" href="<?php echo $taxLink_u; ?>">U</a></li>
                                <li><a class="font-1" href="<?php echo $taxLink_v; ?>">V</a></li>
                                <li><a class="font-2" href="<?php echo $taxLink_x; ?>">X</a></li>
                                <li><a class="font-3" href="<?php echo $taxLink_z; ?>">Z</a></li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                            $('#carousel2').elastislide();
                        </script>
                    </div>
                </div>  
            </header>