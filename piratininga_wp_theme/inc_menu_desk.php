<header class="top <?php echo $hightHome; ?> containerFull" <?php echo $noTranslate; ?>>
    <div class="top_colorBg <?php echo $noHome; ?> containerFull" style="<?php echo $cssCorFundo; ?>"></div>

    <?php
    if (is_home()) {
        ?>
        <!-- Swiper -->
        <div class="swiper-container sliderHome">
            <div class="swiper-wrapper sliderHome_wrapper">
                <?php
                $argsSliderHome = array(
                    'post_type' => 'sliderhome',
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                );
                //
                global $querySliderHome;
                $querySliderHome = new WP_Query($argsSliderHome);
                while ($querySliderHome->have_posts()) : $querySliderHome->the_post();
                    //
                    $sliderHomeID = get_the_ID();
                    $sliderHomeTITLE = get_field_object($slider_texto, $sliderHomeID);
                    $sliderHomeRESUMO = get_field_object($slider_resumo, $sliderHomeID);
                    //
                    echo '<div class="swiper-slide sliderHome_wrapper_item" style="background-image: url(' . get_field('slider_imagen') . ');">';
                    echo '<a href="' . get_field('slider_destino') . $idiomaURL . '" class="containerFull sliderHome_wrapper_item_link">';
                    echo '<h1 class="containerFixed">' . $sliderHomeTITLE['value'] . '</h1>';
                    //echo '<p>' . $sliderHomeRESUMO['value'] . '</p>';//
                    echo '<span class="containerFixed">Foto: ' . get_field('slider_creditos') . '</span>';
                    echo '</a>';
                    echo '</div>';

                //
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination sliderHome_wrapper_paginacao"></div>
            <!--
            <div class="swiper-button-next sliderHome_wrapper_btnNext"></div>  
            <div class="swiper-button-prev sliderHome_wrapper_btnPrev"></div>  
            -->
        </div>
        <!-- Initialize Swiper -->
        <script>
            var sliderHome = new Swiper('.sliderHome', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                centeredSlides: true,
                autoplay: 7000,
                autoplayDisableOnInteraction: false,
                loop: true
            });
        </script>
        <?php
    } else {
        // no slider
    }
    //
    //
                    //
                    //
                    //
                    //
                    //
                    //
                    if (is_home()) {
        $imgClass = 'top_explode-bg-HOME-';
        $alturaClass = ' top_explode-Home';
    } else {
        $imgClass = 'top_explode-bg-';
        $alturaClass = ' ';
    }
    $explosaoRand = rand(1, 24);
    ?>
    <div class="top_explode <?php echo $imgClass . $explosaoRand . $alturaClass; ?> containerFull"></div>

    <div class="top_overlay containerFull">
        <nav class="top_overlay_serviceBarDesk containerFull">
            <ul class="top_overlay_serviceBarDesk_ul megamenu containerFixed">
                <li class="top_overlay_serviceBarDesk_ul_li top_overlay_serviceBarDesk-menu">
                    <span class="top_overlay_serviceBarDesk_ul_li_btn drop">
                        <p><?php echo $idioma_interface_menu; ?> <i class="fa fa-bars"></i></p>
                    </span>
                    <div class="top_overlay_serviceBarDesk_ul_li_container megamenu_fullwidth">
                        <p class="top_overlay_serviceBarDesk_ul_li_container_list">
                            <?php echo $menu_5; ?>
                        </p>
                    </div>
                </li>
                <li class="top_overlay_serviceBarDesk_ul_li top_overlay_serviceBarDesk-lang">
                    <script>
                        function PTbandeirasOn() {
                            document.getElementById("PTlangBtn_link-id").className = "PTlangBtn_link-off";
                        }
                        function PTbandeirasOff() {
                            document.getElementById("PTlangBtn_link-id").className = "PTlangBtn_link-on";
                        }
                        function ENbandeirasOn() {
                            document.getElementById("ENlangBtn_link-id").className = "ENlangBtn_link-off";
                        }
                        function ENbandeirasOff() {
                            document.getElementById("ENlangBtn_link-id").className = "ENlangBtn_link-on";
                        }
                        function ESbandeirasOn() {
                            document.getElementById("ESlangBtn_link-id").className = "ESlangBtn_link-off";
                        }
                        function ESbandeirasOff() {
                            document.getElementById("ESlangBtn_link-id").className = "ESlangBtn_link-on";
                        }
                    </script>
                    <?php
                    if ($idioma == 3) {
                        $flagPT = 'off';
                        $flagEN = 'off';
                        $flagES = 'on';
                        //
                        $flagPT_func1 = 'onmouseover="PTbandeirasOff()"';
                        $flagEN_func1 = 'onmouseover="ENbandeirasOff()"';
                        $flagES_func1 = '';
                        //
                        $flagPT_func2 = 'onmouseout="PTbandeirasOn()"';
                        $flagEN_func2 = 'onmouseout="ENbandeirasOn()"';
                        $flagES_func2 = '';
                        //
                    } elseif ($idioma == 2) {
                        $flagPT = 'off';
                        $flagEN = 'on';
                        $flagES = 'off';
                        //
                        $flagPT_func1 = 'onmouseover="PTbandeirasOff()"';
                        $flagEN_func1 = '';
                        $flagES_func1 = 'onmouseover="ESbandeirasOff()"';
                        //
                        $flagPT_func2 = 'onmouseout="PTbandeirasOn()"';
                        $flagEN_func2 = '';
                        $flagES_func2 = 'onmouseout="ESbandeirasOn()"';
                        //
                    } else {
                        $flagPT = 'on';
                        $flagEN = 'off';
                        $flagES = 'off';
                        //
                        $flagPT_func1 = '';
                        $flagEN_func1 = 'onmouseover="ENbandeirasOff()"';
                        $flagES_func1 = 'onmouseover="ESbandeirasOff()"';
                        //
                        $flagPT_func2 = '';
                        $flagEN_func2 = 'onmouseout="ENbandeirasOn()"';
                        $flagES_func2 = 'onmouseout="ESbandeirasOn()"';
                        //
                    }
                    ?>
                    <span class="top_overlay_serviceBarDesk_ul_li_btnFLAGS langBtn">
                        <a class="PTlangBtn_link-<?php echo $flagPT; ?>"
                           id="PTlangBtn_link-id" 
                           <?php echo ' ' . $flagPT_func1 . ' ' . $flagPT_func2; ?>
                           href="<?php echo $getPermalink . '?lang=pt'; ?>"></a>
                        <a class="ENlangBtn_link-<?php echo $flagEN; ?>"
                           id="ENlangBtn_link-id"
                           <?php echo ' ' . $flagEN_func1 . ' ' . $flagEN_func2; ?>
                           href="<?php echo $getPermalink . '?lang=en'; ?>"></a>
                        <a class="ESlangBtn_link-<?php echo $flagES; ?>"
                           style="margin-left: 0;"
                           id="ESlangBtn_link-id"
                           <?php echo ' ' . $flagES_func1 . ' ' . $flagES_func2; ?>
                           href="<?php echo $getPermalink . '?lang=es'; ?>"></a>
                    </span>
                </li>
                <li class="top_overlay_serviceBarDesk_ul_li top_overlay_serviceBarDesk-busca">
                    <span class="top_overlay_serviceBarDesk_ul_li_btn drop">
                        <p><i class="fa fa-search"></i><?php echo $idioma_interface_busca; ?></p>
                    </span>
                    <div class="top_overlay_serviceBarDesk_ul_li_container megamenu_fullwidth">
                        <form class="formSearch" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                            <input class="formSearch_input" type="text" value="Digite uma palavra..." name ="s" maxlenght="20" onclick="this.value = ''"/>
                            <br />
                            <button class="formSearch_btn" type="submit">buscar</button>  
                        </form>
                    </div>
                </li>
                <li class="top_overlay_serviceBarDesk_ul_li top_overlay_serviceBarDesk-social">
                    <span class="top_overlay_serviceBarDesk_ul_li_btn drop">
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-youtube-square"></i>
                    </span>
                    <div class="top_overlay_serviceBarDesk_ul_li_container megamenu_fullwidth">
                        <div class="socialNetworks containerFixed">
                            <div class="socialNetworks_icons">		
                                <a href="http://www.facebook.com/TurismoemSP" target="_blank" class="socialNetworks_fb">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="http://twitter.com/turismosaopaulo" target="_blank" class="socialNetworks_tw">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a href="http://www.youtube.com/user/spturis" target="_blank" class="socialNetworks_yt">
                                    <i class="fa fa-youtube-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_overlay_serviceBarDesk_ul_li top_overlay_serviceBarDesk-clima">
                    <span class="top_overlay_serviceBarDesk_ul_li_btn drop">
                        <p><?php echo $clima_temp . '&deg;'; ?></p>
                    </span>
                    <div class="top_overlay_serviceBarDesk_ul_li_container megamenu_fullwidth">








                        <div class="climaMenu containerFixed">
                            <div class="climaMenu_atual">
                                <?php
                                echo '<p class="climaMenu_atual_semana">' . diaSemana($clima_diaSemana) . '</p>';
                                echo '<p class="climaMenu_atual_data">' . $clima_data . '</p>';
                                echo '<img src="' . get_bloginfo('template_url') . '/images/' . $clima_condicaoCod . '.png" style="margin-right: 6%; float: left;" alt="" />';
                                echo '<p class="climaMenu_atual_clima">' . $clima_temp . '&deg;</p>';
                                ?>
                            </div>
                            <div class="climaMenu_forecast">
                                <?php
                                $cont = 1;
                                foreach ($clima_forecast as $obj_previsao) {

                                    if ($cont == 1) {
                                        //nada    
                                    } else {
                                        echo '<div class="climaMenu_forecast_item' . $cont . '">';
                                        echo '<p climaMenu_forecast_item_semana>' . diaDaSemana($obj_previsao->day, $idioma) . '</p>';
                                        echo '<img src="' . get_bloginfo('template_url') . '/images/' . iconeClima($obj_previsao->code) . '.png" style="margin-bottom: 5%;" alt="" />';
                                        echo '<p class="climaMenu_forecast_item_minMax">Min: ' . (f2c($obj_previsao->low) * -1) . '&deg;</p>';
                                        echo '<p class="climaMenu_forecast_item_minMax">Max: ' . (f2c($obj_previsao->high) * -1) . '&deg;</p>';
                                        echo '</div>';
                                        echo '<div class="climaMenu_forecast_item_separador' . $cont . '">';
                                        echo '</div>';
                                    }


                                    $cont++;
                                }
                                ?>
                            </div>
                            <div class="climaMenu_sol">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/clima_sol.png" alt=""' . $sol_icone . '/>';
                                echo '<p class="climaMenu_sol_nascente" style="margin-right: 51%; text-align: center;"><span>' . $nascente . '<br /></span>' . $clima_solNascente . '</p>';
                                echo '<p class="climaMenu_sol_nascente style="float: left; style="margin-left: 5%; text-align: center;""><span>' . $poente . '<br /></span>' . $clima_solPoente . '</p>';
                                ?>
                            </div> 
                            <div class="climaMenu_vento">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/clima_vento.png" style="margin-top: 20%;" alt="" />';
                                echo '<p class="climaMenu_vento_text"><span>' . $vento . '</span><br />' . $clima_velVento . 'mph NW</p><br />';
                                //echo '<p class="climaMenu_vento_text"><span>Temperatura:</span><br />' . $clima_tempVento . '&deg;</p>';
                                ?>
                            </div>
                            <div class="climaMenu_humidade">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/clima_humidade.png" style="margin-top: 3%;"  alt="" />';
                                echo '<p class="climaMenu_humidade_txt"><span>' . $humidade . '</span><br />' . $clima_humidade . '%</p>';
                                ?>
                            </div>
                            <div class="climaMenu_pressao">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/clima_pressao.png" alt="" />';
                                echo '<p class="climaMenu_pressao_txt"><span>' . $pressao . '</span><br />' . $clima_pressao . 'in</p>';
                                ?>
                            </div>
                            <div class="climaMenu_visibilidade">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/clima_visibilidade.png" alt="" />';
                                echo '<p class="climaMenu_visibilidade_txt"><span>' . $visibilidade . '</span><br />' . $clima_visibilidade . 'km</p>';
                                ?>
                            </div>
                            <div class="climaMenu_creditos">
                                <p>Powered by</p>
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/logoYahoo.png" alt="Logo Yahoo!" style="width: 55%;" />
                                <!--<a href="https://weather.yahoo.com/" target="_blank">Clique para informações completas</a>-->
                            </div>
                        </div>



























                    </div>
                </li>
            </ul>
        </nav>
        <div class="top_overlay_mainNavigation containerFull">
            <div class="top_overlay_mainNavigation_wrapper containerFixed">
                <a class="top_overlay_mainNavigation_wrapper_logo" href="<?php echo get_bloginfo('url') . $idiomaURL; ?>">
                    <?php
                    $logoRand = rand(1, 4);
                    ?>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/top_overlay_mainNavigation_logo-mod-0<?php echo $logoRand; ?>.png" alt="Logo Cidade de S&atilde;o Paulo" />
                </a>
                <nav class="top_overlay_mainNavigation_wrapper_nav">
                    <ul class="top_overlay_mainNavigation_wrapper_nav_ul megamenu">
                        <li class="top_overlay_mainNavigation_wrapper_nav_ul_li noLeftMargin">
                            <span class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn drop">
                                <p><?php echo $idioma_interface_title_pqsp; ?></p>
                                <img class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn_img pqsp" 
                                     src="<?php bloginfo('template_url'); ?>/images/top_overlay_mainNavigation_wrapper_nav_ul_li_btn-marcador-azul.png" alt="Menu Nav marker" 
                                     style="<?php echo $css_noAzul; ?>"
                                     />
                            </span>
                            <div class="top_overlay_mainNavigation_wrapper_nav_ul_li_container megamenu_fullwidth">
                                <div class="megaMenuContainer megaMenuContainer-pqsp containerFixed">
                                    <div class="megaMenuPqsp">
                                        <div class="megaMenuPqsp_links">
                                            <?php echo $menu_1; ?>
                                        </div>
                                        <div class="megaMenuPqsp_banner_first"></div>
                                        <div class="megaMenuPqsp_banner_second"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top_overlay_mainNavigation_wrapper_nav_ul_li">
                            <span class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn drop">
                                <p><?php echo $idioma_interface_title_planeje; ?></p>
                                <img class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn_img suaViagem" 
                                     src="<?php bloginfo('template_url'); ?>/images/top_overlay_mainNavigation_wrapper_nav_ul_li_btn-marcador-amarelo.png" alt="Menu Nav marker" 
                                     style="<?php echo $css_noAmarelo; ?>"
                                     />
                            </span>
                            <div class="top_overlay_mainNavigation_wrapper_nav_ul_li_container megamenu_fullwidth">
                                <div class="megaMenuContainer megaMenuContainer-suaViagem containerFixed">
                                    <div class="megaMenusuaViagem">
                                        <div class="megaMenusuaViagem_tripForm">
                                        </div>
                                        <div class="megaMenusuaViagem_links">
                                            <div class="megaMenusuaViagem_links_col1">
                                                <?php echo $menu_2; ?>
                                            </div>
                                            <div class="megaMenusuaViagem_links_col2">
                                                <?php echo $menu_guiapratico; ?>
                                            </div>
                                            <div class="megaMenusuaViagem_links_col3">
                                                <?php echo $menu_transpurbano; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top_overlay_mainNavigation_wrapper_nav_ul_li">
                            <span class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn drop">
                                <p><?php echo $idioma_interface_title_vivasp; ?></p>
                                <img class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn_img viva" 
                                     src="<?php bloginfo('template_url'); ?>/images/top_overlay_mainNavigation_wrapper_nav_ul_li_btn-marcador-vermelho.png" alt="Menu Nav marker"
                                     style="<?php echo $css_noVermelho; ?>"
                                     />
                            </span>
                            <div class="top_overlay_mainNavigation_wrapper_nav_ul_li_container megamenu_fullwidth">
                                <div class="megaMenuContainer megaMenuContainer-viva containerFixed">
                                    <div class="megaMenuViva">
                                        <div class="megaMenuViva_forms">

                                        </div>
                                        <div class="megaMenuViva_links">
                                            <div class="megaMenuViva_links_menu1">
                                                <?php echo $menu_3; ?>
                                            </div>
                                            <div class="megaMenuViva_links_menu2">
                                                <?php echo $menu_compras; ?>
                                            </div>
                                            <div class="megaMenuViva_links_menu3">
                                                <?php echo $menu_3; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top_overlay_mainNavigation_wrapper_nav_ul_li">
                            <span class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn drop">
                                <p><?php echo $idioma_interface_title_acontece; ?></p>
                                <img class="top_overlay_mainNavigation_wrapper_nav_ul_li_btn_img acontece" 
                                     src="<?php bloginfo('template_url'); ?>/images/top_overlay_mainNavigation_wrapper_nav_ul_li_btn-marcador-verde.png" alt="Menu Nav marker" 
                                     style="<?php echo $css_noVerde; ?>"
                                     />
                            </span>
                            <div class="top_overlay_mainNavigation_wrapper_nav_ul_li_container megamenu_fullwidth">
                                <div class="megaMenuContainer megaMenuContainer-acontece containerFixed">
                                    <div class="megaMenuAcontece">
                                        <div class="megaMenuAcontece_links">
                                            <?php echo $menu_4; ?>
                                        </div>
                                        <div class="megaMenuAcontece_query">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="top_overlay_nameArea containerFixed">
            <h1 class="top_overlay_nameArea_title">
                <?php
                if ($pty == 1) {
                    echo $idioma_interface_title_pqsp;
                } elseif ($pty == 2) {
                    echo $idioma_interface_title_planeje;
                } elseif ($pty == 3) {
                    echo $idioma_interface_title_vivasp;
                } elseif ($pty == 4) {
                    echo $idioma_interface_title_acontece;
                } elseif ($pty == 5) {
                    echo $idioma_interface_title_institucional;
                } else {
                    
                }
                ?>                        
            </h1>
        </div>
        <div class="top_overlay_subNavigation <?php echo $noHome; ?> containerFull"  style="<?php echo $cssCorFundoDark; ?>">
            <div class="top_overlay_subNavigation_wrapper containerFixed">
                <div class="top_overlay_subNavigation_wrapper_search">
                    <!--<i class="fa fa-search"></i>-->
                </div>
                <nav class="top_overlay_subNavigation_wrapper_menu">
                    <?php
                    if ($pty == 1) {
                        echo $menu_1;
                    } elseif ($pty == 2) {
                        echo $menu_2;
                    } elseif ($pty == 3) {
                        ?>







                        <div class="swiper-container redSubNav">
                            <div class="swiper-wrapper">
                                <?php
                                echo $menu_3b;
                                ?>
                            </div>


                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-nextFooter swiper-button-icon">
                                <i class="fa fa-angle-right" style="
                                   font-size: 4em;
                                   color: #fff;
                                   margin-left: 53%;
                                   margin-top: 2px;
                                   background-color: #C21F3D;
                                   height: 45px;
                                   padding: 0 10px 0 10px;
                                   "></i>
                            </div>
                            <div class="swiper-button-prev swiper-button-prevFooter swiper-button-icon">
                                <i class="fa fa-angle-left" style="
                                   font-size: 4em;
                                   color: #fff;
                                   margin-left: -60%;
                                   margin-top: 2px;
                                   background-color: #C21F3D;
                                   height: 45px;
                                   padding: 0 10px 0 10px;
                                   "></i>
                            </div>

                        </div>

                        <!-- Initialize Swiper -->
                        <script>
                            var swiper = new Swiper('.redSubNav', {
                                nextButton: '.swiper-button-next',
                                prevButton: '.swiper-button-prev',
                                slidesPerView: 7,
                                freeMode: true,
                                loop: true
                            });
                        </script>

                        <?php
                    } elseif ($pty == 4) {
                        echo $menu_4;
                    } elseif ($pty == 5) {
                        echo $menu_5;
                    } else {
                        
                    }
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>