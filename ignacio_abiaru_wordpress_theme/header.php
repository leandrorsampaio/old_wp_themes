<?php
if (is_home() && wp_is_mobile()) {
    $dp_homemobile = 831;
    $redirect = get_permalink(831);
    header("location:$redirect");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/> 
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/responsivetab.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/simple.carousel.js"></script>
        <!-- Meta -->
        <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Ecoturismo Parelheiros - Cidade de Sao Paulo",
            "url" : "http://www.cidadedesaopaulo.com/ecoturismo/",
            "logo": "http://www.cidadedesaopaulo.com/ecoturismo/wp-content/themes/ignacio_abiaru_wordpress_theme/images/logo_sec1.png",
            "sameAs" : [ "https://www.facebook.com/TurismoemSP",
            "https://twitter.com/turismosaopaulo",
            "https://plus.google.com/u/1/+S%C3%A3oPauloTurismosp,", 
            "https://www.youtube.com/user/spturis/"] 
            }
        </script>
        <meta name="author" content="Luciana Jabur, Leandro Rossi Sampaio e Henrique Abdala." />
        <!-- Meta -->        
        <?php
        // JS DO PARALLAX DA HOME
        if (is_home()) {
            echo '<script src="' . get_bloginfo('template_url') . '/js/jquery.scrolly.js"></script>';
        }
        // CSS DA HOME MOBILE
        if (wp_is_mobile() && is_single(831)) {
            ?>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style_indexMobile.css "/> 
            <?php
        }
        // JS DO MENU RESPONSIVO
        if (wp_is_mobile()) {
            ?>
            <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/jquery.mmenu.all.css" />
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mmenu.min.all.js"></script>
            <script type="text/javascript">
                $(function () {
                    $('nav#menu').mmenu();
                });
            </script>
            <?php
        }
        ?>
    </head>
    <?php
    if (!is_home() && !wp_is_mobile()) {
        // se for pagina interna coloca background no fundo
        $bg01 = 'bg-01.jpg';
        $bg02 = 'bg-02.jpg';
        $bg03 = 'bg-03.jpg';
        $bg04 = 'bg-04.jpg';
        $bg05 = 'bg-05.jpg';
        $randomizando = rand(1, 5);
        switch ($randomizando) {
            case 1:
                $imagemfundo = $bg01;
                break;
            case 2:
                $imagemfundo = $bg02;
                break;
            case 3:
                $imagemfundo = $bg03;
                break;
            case 4:
                $imagemfundo = $bg04;
                break;
            case 5:
                $imagemfundo = $bg05;
                break;
        }
        ?>    
        <style>
            html {
                background: url('<?php bloginfo('template_directory'); ?>/images/<?php echo $imagemfundo; ?>') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
        <?php
    } else {
        // nao faz nada
    }
    ?>
    <body>



        <div class="tudo">

            <!-- Google Analytics -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-329120-26', 'auto');
                ga('send', 'pageview');

            </script>
            <!-- Google Analytics -->
<?php
// Inclue o Menu
include 'menu_topo.php';
?>