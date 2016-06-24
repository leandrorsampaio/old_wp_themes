<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/> 
        <link rel="stylesheet" type = "text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"/>
        <link rel = "stylesheet" href = "<?php bloginfo('template_directory'); ?>/css/res-timeline.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/idangerous.swiper.css"/>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>	
        <script src="<?php bloginfo('template_directory'); ?>/js/res-timeline.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/responsivemobilemenu.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.js"></script>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <title><?php bloginfo('name'); ?></title>
        <?php
        // Meta Informações para o Compartilhamento no face
        $titleWP = get_the_title();
        $nomeWP = get_bloginfo('name');
        $publiWP = 'http://www.facebook.com/TurismoemSP';
        ?>
        <?php wp_head(); ?>
        <style>
            @media screen and (max-width: 959px) {
                html {
                    background: url('<?php bloginfo('template_directory'); ?>/images/bgmobile.jpg') no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
            }




            @media screen and (min-width: 960px) {
                html {
                    background: url('<?php bloginfo('template_directory'); ?>/images/bg2.jpg') no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
            }
            #display{
                visibility: hidden;
            }
        </style>

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
        <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio, Daniella Parra e Joao Paulo LR Oliveira" />
        <!-- Meta -->

        <script>
            function showIt2() {
                document.getElementById("display").style.visibility = "visible";
            }
            setTimeout("showIt2()", 3000); // after 5 secs
        </script>
    </head>
    <body>
        <div class="tudo">
            <div class="explosao">
                <header class="headerContainer">
                    <nav id="display" class="rmm minimal">
                        <ul>
                            <li class="noDeskTopo">
                                <a href="https://www.facebook.com/TurismoemSP" target="_blank">Facebook Turismo em S&atilde;o Paulo</a>
                            </li>
                            <li class="noDeskTopo">
                                <a href="https://twitter.com/turismosaopaulo" target="_blank">Twitter Turismo em S&atilde;o Paulo</a>
                            </li>
                            <li class="noDeskTopo">
                                <a href="http://www.cidadedesaopaulo.com/sp/br/cadastrese" target="_blank">Receba Newsletter</a>
                            </li>
                            <li>
                                <a href="http://cidadedesaopaulo.com/sp/br/a-cidade-de-sao-paulo" target="_blank">A Cidade</a>
                            </li>
                            <li>
                                <a href="http://cidadedesaopaulo.com/sp/br/guiadeviagem" target="_blank">Guia de Viagem</a>
                            </li>
                            <li>
                                <a href="http://cidadedesaopaulo.com/sp/br/culturaelazer" target="_blank">Cultura e Lazer</a>
                            </li>
                            <li>
                                <a href="http://spnacopa2014.prefeitura.sp.gov.br/" target="_blank">Cidade-Sede</a>
                            </li>
                            <li>
                                <a href="http://www.spturis.com/mice/novo/" target="_blank">Neg&oacute;cios e Eventos</a>
                            </li>
                            <li>
                                <a href="http://cidadedesaopaulo.com/sp/br/noticias" target="_blank">Not&iacute;cias</a>
                            </li>
                            <li>
                                <a href="http://cidadedesaopaulo.com/sp/br/profissionaisturismo" target="_blank">Profissionais de Turismo</a>
                            </li>
                            <li>
                                <a href="http://imprensa.spturis.com.br/" target="_blank">Imprensa</a>
                            </li>
                            <li class="noBorder">
                                <a href="http://cidadedesaopaulo.com/sp/br/cadastrese" target="_blank">Cadastre-se</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="topo">
                        <div class="topo_logo">
                            <h1>descubra</h1>
                            <h2>S&atilde;o Paulo</h2>
                        </div>
                        <div class="topo_texto">
                            <p>CONFIRA AS ATRA&Ccedil;&Otilde;ES DA CIDADE DURANTE A COPA E AS F&Eacute;RIAS DE JULHO + APROVEITE AS MELHORES OFERTAS DE HOSPEDAGEM</p>
                        </div>
                        <div class="topo_social">
                            <a href="https://www.facebook.com/TurismoemSP" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_face.png" alt="Facebook Link" />
                            </a>
                            <a href="https://twitter.com/turismosaopaulo" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_twitter.png" alt="Twitter Link" />
                            </a>
                            <a href="http://www.cidadedesaopaulo.com/sp/br/cadastrese" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_mail.png" alt="Newsletters Link" />
                            </a>
                        </div>
                    </div>
                    </hearder>
            </div>