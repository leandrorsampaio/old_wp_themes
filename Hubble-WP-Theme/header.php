<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php
            if (is_home())
                bloginfo('name');
            else
                wp_title('');
            ?>
        </title>
        <style type="text/css" media="screen">
            @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="<?php bloginfo('template_url') ?>/js/js-image-slider.js" type="text/javascript"></script>
        <?php
        wp_get_archives('type=monthly&format=link');
        wp_head();
        ?>

        <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.3.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/easyResponsiveTabs.js" type="text/javascript"></script>


        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Observatorio de Turismo - Cidade de Sao Paulo",
            "url" : "http://www.observatoriodoturismo.com.br/",
            "logo": "http://www.cidadedesaopaulo.com/sp/templates/csp/images/pt-br/header_logo_csp.gif",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio" />
        <!-- Meta -->




        <?php

        function redirecionar($url, $tempo) {
            $url = str_replace('&amp;', '&', $url);
            if ($tempo > 0) {
                header("Refresh: $tempo; URL=$url");
            } else {
                @ob_flush();
                @ob_end_clean();
                header("Location: $url");
                exit;
            }
        }
        ?>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-329120-35']);
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
        <div id="faixaSPTuris">
            <div id="barra" style="background:url(http://www.spturis.com/bar/barra-spturis-fd.gif) repeat-x #FFF; width:100%; height:auto; margin:0; padding:0; border:0; text-align:center;">
                <img src="http://www.spturis.com/bar/barra-spturis-990.gif" border="0" usemap="#Map" style="margin:0 auto" />
                <map name="Map">
                    <area shape="rect" coords="0,0,96,23" href="http://www.spturis.com" target="_blank" alt="S&atilde;o Paulo Turismo" title="S&atilde;o Paulo Turismo" />
                    <area shape="rect" coords="99,0,216,23" href="http://www.cidadedesaopaulo.com" target="_blank" alt="Turismo em S&atilde;o Paulo" title="Turismo em S&atilde;o Paulo" />
                    <area shape="rect" coords="219,0,314,23" href="http://www.anhembi.com.br" target="_blank" alt="Anhembi Parque" title="Anhembi Parque" />
                    <area shape="rect" coords="316,0,364,23" href="http://www.spturis.com" target="_blank" alt="Conhe&ccedil;a os projetos da S&atilde;o Paulo Turismo" title="Conhe&ccedil;a os projetos da S&atilde;o Paulo Turismo" />
                    <area shape="rect" coords="367,0,507,23" href="http://www.cidadedesaopaulo.com/sp/br/profissionaisturismo" target="_blank" alt="Observat&oacute;rio do Turismo da Cidade de S&atilde;o Paulo" title="Observat&oacute;rio do Turismo da Cidade de S&atilde;o Paulo" />
                    <area shape="rect" coords="512,0,573,23" href="http://imprensa.spturis.com" target="_blank" alt="Sala de Imprensa" title="Sala de Imprensa" />
                    <area shape="rect" coords="577,0,650,23" href="http://www.cidadedesaopaulo.com/sp/br/cadastrese" target="_blank" alt="Cadastre-se" title="Cadastre-se" />
                    <area shape="rect" coords="654,0,735,23" href="http://www.spturis.com/faleconosco" target="_blank" alt="Fale conosco" title="Fale conosco" />
                    <area shape="rect" coords="819,2,837,20" href="http://twitter.com/home?status='+url_pagina_atual+'" target="_blank" alt="Twitter" title="Twitter" target="_blank" />
                    <area shape="rect" coords="840,3,856,19" href="http://www.facebook.com/sharer.php?u='+url_pagina_atual+'" alt="Facebook" title="Facebook" target="_blank" />
                    <area shape="rect" coords="860,3,877,19" href="http://promote.orkut.com/preview?nt=orkut.com&amp;tt='+titulo_pagina_atual+'&amp;du='+url_pagina_atual+' " alt="Orkut" title="Orkut" target="_blank" />
                    <area shape="rect" coords="924,3,940,19" href="http://del.icio.us/post?url='+url_pagina_atual+'" alt="Delicious" title="Delicious" target="_blank" />
                    <area shape="rect" coords="903,3,919,19" href="http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk='+url_pagina_atual+'&amp;title=" alt="Google Bookmarks" title="Google Bookmarks" target="_blank" />
                    <area shape="rect" coords="882,3,899,19" href="http://www.myspace.com/index.cfm?fuseaction=postto&amp;t='+titulo_pagina_atual+'&amp;c=&amp;u='+url_pagina_atual+'" alt="MySpace" title="MySpace" target="_blank" />
                    <area shape="rect" coords="945,3,961,19" href="http://digg.com/submit?phase=2&amp;url='+url_pagina_atual+'" alt="Digg" title="Digg" target="_blank" />
                </map>
            </div>
        </div>
        <div id="all">
            <div id="header">
                <div id="header_logo">
                    <a href="http://www.observatoriodoturismo.com.br/">
                        <img src="<?php bloginfo('template_url'); ?>/images/header_logo_logo.jpg" alt="logo SPTuris" />
                    </a>
                </div>
                <div id="header_menu">
                    <ul id="header_menu_ul">
                        <a id="header_menu_ul_a01" href="http://www.observatoriodoturismo.com.br/?page_id=57">
                            <li id="header_menu_ul_a03_li">
                                <p class="header_menu_ul_aXX_li_p">Quem<br/>Somos</p>
                            </li>
                        </a>
                        <a id="header_menu_ul_a03" href="http://www.observatoriodoturismo.com.br/?cat=102">
                            <li id="header_menu_ul_a04_li">
                                <p class="header_menu_ul_aXX_li_p">Estudos e<br/>Publica&ccedil;&otilde;es</p>
                            </li>
                        </a>
                        <a id="header_menu_ul_a05" href="http://www.observatoriodoturismo.com.br/?page_id=52">
                            <li id="header_menu_ul_a05_li">
                                <p class="header_menu_ul_aXX_li_p">Fale<br/>Conosco</p>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>