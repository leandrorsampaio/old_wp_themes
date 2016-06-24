<!--?php /* Template name: Downloads CSP */ ?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/downloadsCSP.css" />
        <!--[if IE 8]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/downloadsCSP_IE8.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/downloadsCSP_IE8.css" /><![endif]-->
        <?php wp_head(); ?>
        <!-- Google Analytics Imprensa SPTuris -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30648521-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        <header>
            <div id="header">
                <div id="header_logo">
                    <a href="http://www.cidadedesaopaulo.com" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/images/marca_sp.jpg" alt="Sao Paulo - Downloads" />
                    </a>
                </div>
                <div id="header_title">
                    <?php
                    if (is_page(3413)) {
                        //---------------------------------- QUERY Page Portugues
                        $headerpage1 = new WP_Query('page_id=3413');
                        while ($headerpage1->have_posts()) : $headerpage1->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">Cidade de S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    } elseif (is_page(10249)) {
                        //---------------------------------- QUERY Page Ingles
                        $headerpage2 = new WP_Query('page_id=10249');
                        while ($headerpage2->have_posts()) : $headerpage2->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">City of S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    } elseif (is_page(3411)) {
                        //---------------------------------- QUERY Page Espanhol
                        $headerpage3 = new WP_Query('page_id=3411');
                        while ($headerpage3->have_posts()) : $headerpage3->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">Ciudad de S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </header>
        <div id="abas">
            <div class="abas-IE8">
                <a id="abas_pt" href="<?php echo get_permalink(3413); ?>">
                    <h3>Portugu&ecirc;s</h3>
                </a>
            </div>
            <div class="abas-IE8">
                <a id="abas_en" href="<?php echo get_permalink(10249); ?>">
                    <h3>English</h3>
                </a>
            </div>
            <div class="abas-IE8">
                <a id="abas_es" href="<?php echo get_permalink(3411); ?>">
                    <h3>Espa&ntilde;ol</h3>
                </a>
            </div>
        </div>
        <?php
        //---------------------------------- Querys
        if (is_page(3413)) {
            echo '<div id="content_pt">';
            $downloadscsp = new WP_Query('post_type=downloadscsp&tag=Port&posts_per_page=-1');
        } elseif (is_page(10249)) {
            echo '<div id="content_en">';
            $downloadscsp = new WP_Query('post_type=downloadscsp&tag=Eng&posts_per_page=-1');
        } elseif (is_page(3411)) {
            echo '<div id="content_es">';
            $downloadscsp = new WP_Query('post_type=downloadscsp&tag=Esp&posts_per_page=-1');
        }
        while ($downloadscsp->have_posts()) : $downloadscsp->the_post();
            $linkpdf = get_post_custom_values('PDF');
            if (isset($linkpdf)) {
                $linkpdf = get_bloginfo('wpurl') . '/wp-content/plugins/download-monitor/download.php?id=' . implode(get_post_custom_values('PDF'));
                ?>
                <div class="item">
                    <div class="item_thumb">
                        <?php
                        get_post_custom_values('PDF');
                        echo '<a class="item_text_link" href="' . $linkpdf . '" target="_blank">';
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumb-download');
                        } else {
                            ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/thumb-download-padrao.gif" />
                            <?php
                        }
                        ?>
                        </a>
                    </div>
                    <div class="item_text">
                        <h4 class="item_text_title"><?php the_title(); ?></h4>
                        <span class="item_text_resumo">
                            <?php the_excerpt(); ?>
                        </span>
                        <span class="item_text_donloadlink">
                            <a href="<?php echo $linkpdf; ?>" target="_blank">- Download</a>
                        </span>
                        <?php
                        if (get_post_custom_values('ISSUU')) {
                            echo '<span class="item_text_donloadlink">';
                            if (is_page(3413)) {
                                echo '<a href="' . implode(get_post_custom_values('ISSUU')) . '" target="_blank">- Visualizar em tela</a>';
                            } elseif (is_page(10249)) {
                                echo '<a href="' . implode(get_post_custom_values('ISSUU')) . '" target="_blank">- Show on screen</a>';
                            } elseif (is_page(3411)) {
                                echo '<a href="' . implode(get_post_custom_values('ISSUU')) . '" target="_blank">- Mostrar en tela</a>';
                            }
                            echo '</span>';
                        } else {
                            
                        }
                        ?>
                    </div>
                </div>
                <?php
            } else {
                
            }
        endwhile;
        wp_reset_postdata();
        if (is_page(3413)) {
            ?>
            <div id="content_bottom">
                <div id="content_bottom_title">
                    <h5>Acesse Aqui</h5>
                </div>
                <div id="content_bottom_box">
                    <div id="content_bottom_box_left">
                        <a href="http://spturis.com/download/" target="_blank">Publica&ccedil;&otilde;es Antigas</a>
                    </div>
                    <div id="content_bottom_box_mid">
                        <a href="http://www.observatoriodoturismo.com.br/" target="_blank">Observat&oacute;rio do Turismo</a>
                    </div>
                    <div id="content_bottom_box_right">
                        <a href="http://spturis.com/v7/calendarios.php" target="_blank">Calend&aacute;rio de Eventos</a>
                    </div>
                </div>
                <?php
            } elseif (is_page(10249)) {
                ?>
                <div id="content_bottom">
                    <div id="content_bottom_title">
                        <h5>Acess</h5>
                    </div>
                    <div id="content_bottom_box">
                        <div id="content_bottom_box_left">
                            <a href="http://spturis.com/download/" target="_blank">Old Publications</a>
                        </div>
                        <div id="content_bottom_box_mid">
                            <a href="http://www.observatoriodoturismo.com.br/" target="_blank">S&atilde;o Paulo Tourism Observatory</a>
                        </div>
                        <div id="content_bottom_box_right">
                            <a href="http://spturis.com/v7/calendarios.php" target="_blank">Event Calendar</a>
                        </div>
                    </div>
                    <?php
                } elseif (is_page(3411)) {
                    ?>
                    <div id="content_bottom">
                        <div id="content_bottom_title">
                            <h5>&Uacute;nete Aqu&iacute;</h5>
                        </div>
                        <div id="content_bottom_box">
                            <div id="content_bottom_box_left">
                                <a href="http://spturis.com/download/" target="_blank">PUBLICACIONES ANTIGUA</a>
                            </div>
                            <div id="content_bottom_box_mid">
                                <a href="http://www.observatoriodoturismo.com.br/" target="_blank">Observat&oacute;rio do Turismo</a>
                            </div>
                            <div id="content_bottom_box_right">
                                <a href="http://spturis.com/v7/calendarios.php" target="_blank">Calend&aacute;rio de Eventos</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <footer>
                <div id="footer_logosEtxtDOWNLOAD">
                    <div id="footer_logosDOWNLOAD">
                        <div id="footer_logos_imgMarcaSpDOWNLOAD"><a href="http://www.cidadedesaopaulo.com" target="_blank" alt="Site Cidade de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_marcaSP.png" alt="" /></a></div>
                        <div class="footer_logos_imgDOWNLOAD"><a href="http://spturis.com/v7/index.php" target="_blank" alt="Site SPTuris"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPTuris.png" alt="" /></a></div>
                        <div class="footer_logos_imgDOWNLOAD"><a href="http://www.capital.sp.gov.br/portalpmsp/homec.jsp" target="_blank" alt="Site Prefeitura de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPPref.png" alt="" /></a></div>
                    </div>
                    <p id="footer_txtDOWNLOAD">S&atilde;o Paulo Turismo S/A<br/>Av. Olavo Fontoura, 1.209<br/>Anhembi Parque, Santana</br>S&atilde;o Paulo/SP - CEP 02012-021 </p>
                </div>
            </footer>
            <?php wp_footer(); ?>
    </body>
</html>