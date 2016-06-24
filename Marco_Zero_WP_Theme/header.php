<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><!-- jQuery Google link -->
        <script src="<?php bloginfo('template_url') ?>/js/jquery.easing.js"></script><!-- jQuery Easing effects -->
        <script src="<?php bloginfo('template_url') ?>/js/megamenu.js"></script><!-- Mega Menu Script -->
        <script src="<?php bloginfo('template_url') ?>/js/basic-slider.js"></script><!--- Slider Fade --->
        <script src="<?php bloginfo('template_url') ?>/js/aba.js"></script><!---- Ajax Multimidia --->
        <!---- Google Analytics ------>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-329120-19']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <?php include('inc_programador.php'); ?>
    <div id="tudo">
        <!---------- Menu Principal (Topo) ---------->
        <nav id="nav">
            <?php include('inc_menu.php'); ?>
        </nav>
        <div id="miolo">
            <header>
                <div id="header">
                    <!-------------------- Top Bar -------->
                    <div id="topBar" class="wrap">
                        <?php include('inc_topBar.php'); ?>
                    </div>
                </div>
            </header>