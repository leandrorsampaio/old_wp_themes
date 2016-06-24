<!doctype html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?php bloginfo('name'); ?></title>

        <!-- Styles -->
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/bibliotecas.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/reset.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/style.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/lpg_1.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/lpg_2.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/lpg_3.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/lpg_4.less" />
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/lpg_5.less" />

        <!-- JS for all -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><!-- Font Awesome -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!-- JQuery -->
        <script src="<?php bloginfo('template_url'); ?>/less/less.js" type="text/javascript"></script>
        <!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script>--><!-- jQuery Easing effects -->
        <script src="<?php bloginfo('template_url'); ?>/js/megamenu.js"></script><!-- Mega Menu Script -->
        <script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script><!-- SWIPPER -->

        <?php
        // JS SOMENTE PARA A HOME DE ROTEIROS
        if (is_single($lpg_3_roteiros)) {
            echo '<script src="' . get_bloginfo('template_url') . '/js/jquery.zaccordion.js"></script>';
        }
        ?>

        <?php
        // JS SOMENTE PARA AS PAGINAS COM TABS
        // VAR EM INC_PROGRAMMER
        if ($paginaComTab == 1) {
            ?>
            <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script><!-- JS TABS -->
            <script src="<?php bloginfo('template_url'); ?>/js/tabcordion.js"></script><!-- JS TABS -->
            <script>
                $(function () {
                    $('.tabcordion').tabcordion();
                });
            </script>
            <?php
        } else {
            // NO JS
        }
        ?>


        <script>
            // MEGAMENU
            $(document).ready(function ($) {
                $('.megamenu').megaMenuReloaded({
                    menu_speed_show: 300, // Time (in milliseconds) to show a drop down
                    menu_speed_hide: 200, // Time (in milliseconds) to hide a drop down
                    menu_speed_delay: 200, // Time (in milliseconds) before showing a drop down
                    menu_effect: 'open_close_slide', // Drop down effect, choose between 'hover_fade', 'hover_slide', 'click_fade', 'click_slide', 'open_close_fade', 'open_close_slide'
                    menu_easing: 'jswing', // Easing Effect : 'easeInQuad', 'easeInElastic', etc.
                    menu_click_outside: 1, // Clicks outside the drop down close it (1 = true, 0 = false)
                    menu_show_onload: 0, // Drop down to show on page load (type the number of the drop down, 0 for none)
                    menubar_trigger: 0, // Show the menu trigger (button to show / hide the menu bar), only for the fixed version of the menu (1 = show, 0 = hide)
                    menubar_hide: 0, // Hides the menu bar on load (1 = hide, 0 = show)
                    menu_responsive: 1, // Enables mobile-specific script
                    menu_carousel: 0, // Enable / disable carousel
                    menu_carousel_groups: 0 // Number of groups of elements in the carousel
                });
            });
        </script>            
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/megamenu_ie.css" />
        <![endif]-->
        <!--[if lt IE 7]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
        <![endif]-->


        <?php wp_head(); ?>
    </head>
    <body ontouchstart="" onload="myFunctionSlider();">




        <?php
        if (is_user_logged_in()) {
            ?>	
            <script>
                $(window).on('resize', showSize);
                showSize();
                function showSize() {
                    $('.size').html('Height: ' + $(window).height() + ' Width: ' + $(window).width());
                    $('.size2').html('Height: ' + screen.height + ' Width: ' + screen.width);
                }
            </script>
            <div class="FULL SCREENTEST">
                <h1>FULL</h1>
                <h1>BROWSER: <span class="size"></span> - SCREEN: <span class="size2"></span></h1>

            </div>
            <div class="MEDIUM SCREENTEST">
                <h1>MEDIUM</h1>
                <h1>BROWSER: <span class="size"></span> - SCREEN: <span class="size2"></span></h1>
            </div>
            <div class="TABLET SCREENTEST">
                <h1>TABLET</h1> 
                <h1>BROWSER: <span class="size"></span> - SCREEN: <span class="size2"></span></h1>
            </div>
            <div class="MOBILE SCREENTEST">
                <h1>MOBILE</h1>
                <h1>BROWSER: <span class="size"></span> - SCREEN: <span class="size2"></span></h1>
            </div>
            <?php
        } else {
            
        }
        ?>







        <div class="all">
            <?php
            if (is_home()) {
                $noHome = ' wpNone';
                $hightHome = ' topHOME ';
            } else {
                $noHome = ' ';
                $hightHome = ' ';
            }
            //
            //
            include ('inc_menu_mobile.php');
            include ('inc_menu_desk.php');
            //
            //
                if (is_home()) {
                echo '<div class="containerFull container-INDEX">';
            } else {
                echo '<div class="noTopWrapper containerFull container-INTERNA">';
            }
            ?>