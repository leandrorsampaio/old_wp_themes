<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="Content-Language" content="pt-br" />
        <meta http-equiv="robots" content="ALL" />
        <meta http-equiv="author" content="São Paulo Turismo - DMV" />
        <meta http-equiv="copyright" content="São Paulo Turismo" />
        <meta http-equiv="distribution" content="web" />
        <meta http-equiv="description" content="Site do Turismetrô da Cidade de São Paulo" />
        <meta http-equiv="keywords" content="São Paulo, Turismetrô, metrô, Turismo, Passeio, cidade de São Paulo" />
        <title>Cidade de S&atilde;o Paulo :: TurisMetr&ocirc;</title>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory') ?>/style_IE.css" />
        <![endif]-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.lightbox-0.5.css" media="screen" />
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.lightbox-0.5.js"></script>
        <!-- ############# Javascript Menu Collapse ######### -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/collapse.js" type="text/javascript"></script>
        <!-- ############# Javascript slider ############ -->
        <link href="<?php bloginfo('template_url') ?>/js/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="<?php bloginfo('template_url') ?>/js/js-image-slider.js" type="text/javascript"></script>
        <!-- ############# Javascript LightBox ############ -->
        <script>
            var style = document.querySelector('style');
            onmessage = function(evt) {
                if (true || evt.origin === 'http://localhost' || evt.origin === 'http://dabblet.com') {
                    var info = JSON.parse(evt.data),
                    data = info.data;
		
                    switch (info.action) {
                        case 'title':
                            document.title = data;
                            break;
				
                        case 'css':
                            style.textContent = data;
                            break;
				
                        case 'html':
                            document.body.innerHTML = data;
                            break;
				
                        case 'javascript':
                            eval(data);
                    }
                }
            };
        </script>
        <script>
            $(document).ready(function(){
                //Examples of how to assign the ColorBox event to elements
                $(".inline").colorbox({inline:true, width:"50%"});
                $(".callbacks").colorbox({
                    onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                    onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                    onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                    onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                    onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
                });
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            //Google Analytics
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
    <body>
        <div id="bgMapa">
        </div>
        <div id="all">
            <header>
                <div id="BOX-ESQ">
                    <div id="headerLogo">
                        <a href="<?php bloginfo('url') ?>">
                            <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo turismetro" />
                        </a>
                    </div>
                    <div id="headerTrad">
                        <?php include('sidebar-traducao.php'); ?>
                    </div>
                    <div id="headerTexto">
                        <h1>PROGRAME SEU FINAL DE SEMANA E CONHE&Ccedil;A S&Atilde;O PAULO<br/>ATRAV&Eacute;S DE NOSSOS ROTEIROS COM GUIAS</h1>
                    </div>
                    <div id="headerLogoCidade">
                        <a href="http://www.cidadedesaopaulo.com/sp/" target="blank">
                            <img src="<?php bloginfo('template_url') ?>/images/logoCidade.png" alt="logo cidade de são paulo" />
                        </a>
                    </div>
                    <div id="menuCen">
                        <?php include('sidebar-menuprincipal.php') ?>
                    </div>
                </div>
                <!--- Menu Collapse - apenas na versão responsiva -->
                <div id="menuCollapse">
                    <?php include('sidebar-menucollapse.php'); ?>
                </div>
                <!-- fim - Menu Collapse -->
                <div id="BOX-DIR">
                    <?php include('sidebar-menusocial.php') ?>
                </div>
            </header>