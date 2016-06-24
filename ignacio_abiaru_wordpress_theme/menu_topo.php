<?php
// Sidebar Programador
include 'inc_programador.php';
?>
<!-- Mega Menu Search Bar -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script><!-- For megamenu search - jQuery Easing effects -->
<script src="<?php bloginfo('template_url'); ?>/js/megamenu_plugins.js"></script><!-- For megamenu search - Mega Menu Plugins -->
<script src="<?php bloginfo('template_url'); ?>/js/megamenu.js"></script><!-- For megamenu search - Mega Menu Script -->
<script>
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
<!-- Mega Menu Search Bar -->
<!-- js para o slider da home -->
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
<?php
if (is_home()) {
    $alteraInterna = '';
    $alteraInterna2 = 'clearInicial';
    ?>
    <!-- Efeito Menu -->
    <script type="text/javascript">
    $(function () {
        // menu estrutura
        var header = $(".clearInicial");
        var headerlogo = $(".headerLogo");
        var headernav = $(".headerNav");
        var headericons = $(".headerIcons");
        var headersearch = $(".headerSearch");
        var headerservices = $(".headerServices");
        // menu search
        var drop = $(".drop");
        var megamenu_fullwidth = $(".megamenu_fullwidth");
        // menu bandeiras e social
        var headerBandeiras = $(".headerBandeiras");
        var headerSocial = $(".headerSocial");
        //
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= (varAltura - 120)) {
                // menu estrutura
                header.removeClass('clearInicialAgain').addClass('darkAlterado');
                headerlogo.removeClass('headerLogo').addClass('headerLogoAlterado');
                headernav.removeClass('headerNav').addClass('headerNavAlterado');
                headericons.removeClass('headerIcons').addClass('headerIconsAlterado');
                headersearch.removeClass('headerSearch').addClass('headerSearchAlterado');
                headerservices.removeClass('headerServices').addClass('headerServicesAlterado');
                // menu search
                drop.removeClass('drop').addClass('dropAlterado');
                megamenu_fullwidth.removeClass('megamenu_fullwidth').addClass('megamenu_fullwidthAlterado');
                // menu bandeiras e social
                headerBandeiras.removeClass('headerBandeiras').addClass('headerBandeirasAlterado');
                headerSocial.removeClass('headerSocial').addClass('headerSocialAlterado');
            } else {
                // menu estrutura
                header.removeClass("darkAlterado").addClass('clearInicialAgain');
                headerlogo.removeClass('headerLogoAlterado').addClass('headerLogo');
                headernav.removeClass('headerNavAlterado').addClass('headerNav');
                headericons.removeClass('headerIconsAlterado').addClass('headerIcons');
                headersearch.removeClass('headerSearchAlterado').addClass('headerSearch');
                headerservices.removeClass('headerServicesAlterado').addClass('headerServices');
                // menu search
                drop.removeClass('dropAlterado').addClass('drop');
                megamenu_fullwidth.removeClass('megamenu_fullwidthAlterado').addClass('megamenu_fullwidth');
                // menu bandeiras e social
                headerBandeiras.removeClass('headerBandeirasAlterado').addClass('headerBandeiras');
                headerSocial.removeClass('headerSocialAlterado').addClass('headerSocial');
            }
        });
    });
    </script>
    <!-- Efeito Menu -->
    <?php
} else {
    $alteraInterna = 'Alterado';
    $alteraInterna2 = 'darkAlterado';
}
?>
<?php
if (!wp_is_mobile()) {
    ?>
    <header class="<?php echo $alteraInterna2; ?>">

        <div class="wraperleft">
            <a href="<?php echo get_bloginfo('url') . '?lang=' . $idiomaMenu; ?>" class="headerLogo<?php echo $alteraInterna; ?>"></a>
            <nav class="headerNav<?php echo $alteraInterna; ?>">
                <div class="centralizador">
                    <ul class="megamenu menuTopoItem"><!-- Begin Mega Menu -->
                        <li class="menuTopoItemLi">
                            <span class="menuTopoItem_link"><?php echo $main_bemvindoV2; ?></span><!-- Begin Item -->
                            <div class="megamenu_fullwidth menuTopoItem_content menuTopoItem_contentBemvindo"><!-- Begin Item Container -->
                                <?php
                                //
                                // Query pega a noticia mais recente para o link "destaques"
                                //
                                global $linkultimopostTopo;
                                $args2 = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1
                                );
                                global $destaquequery2;
                                $destaquequery2 = new WP_Query($args2);
                                while ($destaquequery2->have_posts()) : $destaquequery2->the_post();
                                    $linkultimopostTopo = get_permalink();
                                endwhile;
                                wp_reset_query();
                                // fim query
                                echo '<a href="' . get_permalink($bv_historia) . $code_pt . '">' . $bullet . $bv_historia_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_apa) . $code_pt . '">' . $bullet . $bv_apa_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_fauna) . $code_pt . '">' . $bullet . $bv_fauna_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_mapa) . $code_pt . '">' . $bullet . $bv_mapa_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_pat) . $code_pt . '">' . $bullet . $bv_pat_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_dicas) . $code_pt . '">' . $bullet . $bv_dicas_txtLink . '</a>';
                                echo '<a href="' . get_permalink($bv_seguranca) . $code_pt . '">' . $bullet . $bv_seguranca_txtLink . '</a>';
                                echo '<a href="' . $linkultimopostTopo . $code_pt . '">' . $bullet . $bv_destaques_txtLink . '</a>';
                                ?>
                            </div><!-- End Item Container -->
                        </li><!-- End Item -->
                        <li class="menuTopoItemLi">
                            <span class="menuTopoItem_link extraMargin"><?php echo $main_atracoes; ?></span><!-- Begin Item -->
                            <div class="megamenu_fullwidth menuTopoItem_content menuTopoItem_contentAtracoes"><!-- Begin Item Container -->
                                <?php
                                echo '<div class="mapaSite_atracoesEsq">';
                                echo '<a href="' . get_permalink($at_parques) . $code_pt . '">' . $bullet . $at_parques_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_aldeias) . $code_pt . '">' . $bullet . $at_aldeias_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_rios) . $code_pt . '">' . $bullet . $at_rios_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_mirantes) . $code_pt . '">' . $bullet . $at_mirantes_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_fazendas) . $code_pt . '">' . $bullet . $at_fazendas_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_centrosecumenicos) . $code_pt . '">' . $bullet . $at_centrosecumenicos_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_pesqueiros) . $code_pt . '">' . $bullet . $at_pesqueiros_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_artesanato) . $code_pt . '">' . $bullet . $at_artesanato_txtLink . '</a>';
                                echo '</div>';
                                echo '<div class="mapaSite_atracoesDir">';
                                echo '<a href="' . get_permalink($at_patrimonio) . $code_pt . '">' . $bullet . $at_patrimonio_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_golf) . $code_pt . '">' . $bullet . $at_golf_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_marinas) . $code_pt . '">' . $bullet . $at_marinas_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_centrocultural) . $code_pt . '">' . $bullet . $at_centrocultural_txtLink . '</a>';
                                //PLANETARIO echo '<a href="' . get_permalink($at_planetario) . $code_pt . '">' . $bullet . $at_planetario_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_borboletario) . $code_pt . '">' . $bullet . $at_borboletario_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_aventura) . $code_pt . '">' . $bullet . $at_aventura_txtLink . '</a>';
                                echo '<a href="' . get_permalink($at_flores) . $code_pt . '">' . $bullet . $at_flores_txtLink . '</a>';
                                ?>
                            </div><!-- End Item Container -->
                        </li><!-- End Item -->
                        <li class="menuTopoItemLi">
                            <span class="menuTopoItem_link extraMargin"><?php echo $main_roteiros; ?></span><!-- Begin Item -->
                            <div class="megamenu_fullwidth menuTopoItem_content menuTopoItem_contentRoteiros"><!-- Begin Item Container -->
                                <?php
                                echo '<a href="' . get_permalink($rt_mata) . $code_pt . '">' . $bullet . $rt_mata_txtLink . '</a>';
                                echo '<a href="' . get_permalink($rt_historia) . $code_pt . '">' . $bullet . $rt_historia_txtLink . '</a>';
                                echo '<a href="' . get_permalink($rt_religioso) . $code_pt . '">' . $bullet . $rt_religioso_txtLink . '</a>';
                                echo '<a href="' . get_permalink($rt_cicloturismo) . $code_pt . '">' . $bullet . $rt_cicloturismo_txtLink . '</a>';
                                echo '<a href="' . get_permalink($rt_nautico) . $code_pt . '">' . $bullet . $rt_nautico_txtLink . '</a>';
                                ?>
                            </div><!-- End Item Container -->
                        </li><!-- End Item -->
                        <li class="menuTopoItemLi">
                            <span class="menuTopoItem_link"><?php echo $main_sustentabilidadeV2; ?></span><!-- Begin Item -->
                            <div class="megamenu_fullwidth menuTopoItem_content menuTopoItem_contentSustem"><!-- Begin Item Container -->
                                <?php
                                echo '<a href="' . get_permalink($cr_produtos) . $code_pt . '">' . $bullet . $cr_produtos_txtLink . '</a>';
                                //ARTESANATO echo '<a href="' . get_permalink($cr_artesanato) . $code_pt . '">' . $bullet . $cr_artesanato_txtLink . '</a>';
                                echo '<a href="' . get_permalink($cr_responsabilidade) . $code_pt . '">' . $bullet . $cr_responsabilidade_txtLink . '</a>';
                                // ROOFING echo '<a href="' . get_permalink($cr_roofing) . $code_pt . '">' . $bullet . $cr_roofing_txtLink . '</a>';
                                echo '<a href="' . get_permalink($cr_produtores) . $code_pt . '">' . $bullet . $cr_produtores_txtLink . '</a>';
                                ?>
                            </div><!-- End Item Container -->
                        </li><!-- End Item -->
                        <li class="menuTopoItemLi">
                            <span class="menuTopoItem_link">
                                <a href="<?php echo get_permalink($se_seuevento); ?>"><?php echo $main_seueventoaquiV2; ?></a>
                            </span><!-- Begin Item -->
                        </li><!-- End Item -->
                    </ul><!-- End Mega Menu -->
                    <!--<li><a href="#">ATRA&Ccedil;&Otilde;ES</a></li>
                    <li><a href="#">ROTEIROS</a></li>
                    <li><a href="#">SUSTENTABILIDADE</a></li>
                    <li><a href="#">SEU EVENTO AQUI</a></li>-->
                </div>
            </nav>
        </div>
        <div class="wraperRight">
            <div class="headerServices<?php echo $alteraInterna; ?>">
                <?php
                /*
                 * 
                 * ICONES E MENU DE TRADUCAO
                 * 
                 * 
                  <div class="headerBandeiras<?php echo $alteraInterna; ?>">
                  <ul class="megamenu headerBandeiras_ul"><!-- Begin Mega Menu -->
                  <li>
                  <span class="drop<?php echo $alteraInterna; ?> headerBandeiras_btn fa fa-language"></span><!-- Begin Item -->
                  <div class="megamenu_fullwidth headerBandeiras_container"><!-- Begin Item Container -->
                  <a class="headerBandeiras_container_flag flag_pt" href="#"></a>
                  <a class="headerBandeiras_container_flag flag_en" href="#"></a>
                  <a class="headerBandeiras_container_flag flag_es" href="#"></a>
                  </div><!-- End Item Container -->
                  </li><!-- End Item -->
                  </ul><!-- End Mega Menu -->
                  </div>
                 * 
                 */
                ?>
                <?php
                /*
                 * 
                 * REDES SOCIAIS
                 * 
                 * 
                  <div class="headerSocial<?php echo $alteraInterna; ?>">
                  <a class="headerSocial_item headerSocial_face fa fa-facebook-square" href="https://www.facebook.com/TurismoemSP" target="_blank"></a>
                  <a class="headerSocial_item headerSocial_twitter fa fa-twitter-square" href="https://twitter.com/turismosaopaulo" target="_blank"></a>
                  <a class="headerSocial_item headerSocial_youtube fa fa-youtube-square" href="https://www.youtube.com/user/spturis" target="_blank"></a>
                  </div>
                 * 
                 */
                ?>
            </div>
            <div class="headerSearch<?php echo $alteraInterna; ?>">
                <ul class="megamenu"><!-- Begin Mega Menu -->
                    <li>
                        <span class="drop<?php echo $alteraInterna; ?>">
                            <i class="fa fa-search"></i>
                        </span><!-- Begin Item -->
                        <div class="megamenu_fullwidth sombra"><!-- Begin Item Container -->
                            <div class="col_12">
                                <form class="formuSearch" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                                    <input class="formuSearch_input" type="text" value="Buscar..." name ="s" maxlenght="20" onclick="this.value = ''"/>
                                    <button class="formuSearch_btn" type="submit">ok</button>  
                                </form>
                            </div>
                        </div><!-- End Item Container -->
                    </li><!-- End Item -->
                </ul><!-- End Mega Menu -->
            </div>
            <div class="headerIcons<?php echo $alteraInterna; ?>">
                <a class="headerIconsLink headerIconsLinkItem1" href="<?php echo get_permalink($ch_onibus) . '?lang=' . $idiomaMenu; ?>"
                   onMouseOver="document.MyImage3.src = '<?php bloginfo('template_url'); ?>/images/sec4_comochegar_ON.png';" 
                   onMouseOut="document.MyImage3.src = '<?php bloginfo('template_url'); ?>/images/sec4_comochegar.png';">
                    <img class="headerIconsLinkImg" src="<?php bloginfo('template_url'); ?>/images/sec4_comochegar.png" alt="Como Chegar" title="Como Chegar" name="MyImage3">
                </a>
                <a class="headerIconsLink headerIconsLinkItem2" href="<?php echo get_permalink($of_pousadas) . '?lang=' . $idiomaMenu; ?>"
                   onMouseOver="document.MyImage2.src = '<?php bloginfo('template_url'); ?>/images/sec4_ondeficar_ON.png';" 
                   onMouseOut="document.MyImage2.src = '<?php bloginfo('template_url'); ?>/images/sec4_ondeficar.png';">
                    <img class="headerIconsLinkImg" class="w10" src="<?php bloginfo('template_url'); ?>/images/sec4_ondeficar.png" alt="Onde Ficar" title="Onde Ficar" name="MyImage2">
                </a>
                <a class="headerIconsLink headerIconsLinkItem3" 
                   href="<?php echo get_permalink($oc_restaurantes) . '?lang=' . $idiomaMenu; ?>"
                   onMouseOver="document.MyImage.src = '<?php bloginfo('template_url'); ?>/images/comida_ON.png';" 
                   onMouseOut="document.MyImage.src = '<?php bloginfo('template_url'); ?>/images/comida.png';">
                    <img class="headerIconsLinkImg correcaoOndeComer" src="<?php bloginfo('template_url'); ?>/images/comida.png" alt="Onde Comer" title="Onde Comer" name="MyImage">
                </a>
                <ul class="megamenu"><!-- Begin Mega Menu -->
                    <li>
                        <span class="">
                            <p class="plusSocial fa fa-plus-square"></p>
                        </span><!-- Begin Item -->
                        <div class="megamenu_fullwidth megamenuSocial sombra">
                            <a class="headerSocial_item2 headerSocial_face fa fa-facebook-square" href="https://www.facebook.com/TurismoemSP" target="_blank" title="Turismo em S&atilde;o Paulo"></a>
                            <a class="headerSocial_item2 headerSocial_face fa fa-facebook-square" href="https://www.facebook.com/experiencesaopaulo" target="_blank" title="Experience S&atilde;o Paulo"></a>
                            <a class="headerSocial_item2 headerSocial_twitter fa fa-twitter-square" href="https://twitter.com/turismosaopaulo" target="_blank" title="Turismo em S&atilde;o Paulo"></a>
                            <a class="headerSocial_item2 headerSocial_youtube fa fa-youtube-square" href="https://www.youtube.com/user/spturis" target="_blank" title="Cidade de S&atilde;o Paulo"></a>
                        </div>
                    </li><!-- End Item -->
                </ul><!-- End Mega Menu -->
            </div>
        </div>
    </header>
    <?php
} else {
    // Se nao for desktop exibe menu Mobile
    ?>
    <style>
        nav:not(.mm-menu) {
            display: none;
        }
    </style>
    <div class="headerMobile">
        <a class="headerMobile_logo" href="<?php bloginfo('url'); ?>">
            <img class="headerMobile_logo_img" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo Ecoturismo" />
        </a>
        <div class="headerMobile_menu">
            <a href="#menu" class="headerMobile_menu_link fa fa-bars"></a>
        </div>
    </div>
    <nav id="menu" class="menuMobileSide">
        <ul>
            <li>
            </li>
            <li>
                <a href="<?php echo get_permalink($bv_historia) . $code_pt; ?>"><?php echo $main_bemvindo ?></a>
                <ul>
                    <?php
                    //
                    // Query pega a noticia mais recente para o link "destaques"
                    //
                    global $linkultimopost;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1
                    );
                    global $destaquequery;
                    $destaquequery = new WP_Query($args);
                    while ($destaquequery->have_posts()) : $destaquequery->the_post();
                        $linkultimopost = get_permalink();
                    endwhile;
                    wp_reset_query();
                    // fim query
                    echo '<li><a href="' . get_permalink($bv_historia) . $code_pt . '">' . $bullet . $bv_historia_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_apa) . $code_pt . '">' . $bullet . $bv_apa_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_fauna) . $code_pt . '">' . $bullet . $bv_fauna_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_mapa) . $code_pt . '">' . $bullet . $bv_mapa_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_pat) . $code_pt . '">' . $bullet . $bv_pat_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_dicas) . $code_pt . '">' . $bullet . $bv_dicas_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($bv_seguranca) . $code_pt . '">' . $bullet . $bv_seguranca_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($linkultimopost) . $code_pt . '">' . $bullet . $bv_destaques_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($at_parques) . $code_pt; ?>"><?php echo $main_atracoes ?></a>
                <ul>
                    <?php
                    echo '<li><a href="' . get_permalink($at_parques) . $code_pt . '">' . $bullet . $at_parques_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_aldeias) . $code_pt . '">' . $bullet . $at_aldeias_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_rios) . $code_pt . '">' . $bullet . $at_rios_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_mirantes) . $code_pt . '">' . $bullet . $at_mirantes_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_fazendas) . $code_pt . '">' . $bullet . $at_fazendas_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_centrosecumenicos) . $code_pt . '">' . $bullet . $at_centrosecumenicos_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_pesqueiros) . $code_pt . '">' . $bullet . $at_pesqueiros_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_artesanato) . $code_pt . '">' . $bullet . $at_artesanato_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_patrimonio) . $code_pt . '">' . $bullet . $at_patrimonio_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_golf) . $code_pt . '">' . $bullet . $at_golf_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_marinas) . $code_pt . '">' . $bullet . $at_marinas_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_centrocultural) . $code_pt . '">' . $bullet . $at_centrocultural_txtLink . '</a></li>';
                    //PLANETARIO echo '<li><a href="' . get_permalink($at_planetario) . $code_pt . '">' . $bullet . $at_planetario_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_borboletario) . $code_pt . '">' . $bullet . $at_borboletario_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_aventura) . $code_pt . '">' . $bullet . $at_aventura_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($at_flores) . $code_pt . '">' . $bullet . $at_flores_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($rt_mata) . $code_pt; ?>"><?php echo $main_roteiros ?></a>
                <ul>
                    <?php
                    echo '<li><a href="' . get_permalink($rt_mata) . $code_pt . '">' . $bullet . $rt_mata_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($rt_historia) . $code_pt . '">' . $bullet . $rt_historia_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($rt_religioso) . $code_pt . '">' . $bullet . $rt_religioso_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($rt_cicloturismo) . $code_pt . '">' . $bullet . $rt_cicloturismo_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($rt_nautico) . $code_pt . '">' . $bullet . $rt_nautico_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($cr_produtos) . $code_pt; ?>"><?php echo $main_sustentabilidade ?></a>
                <ul>
                    <?php
                    echo '<li><a href="' . get_permalink($cr_produtos) . $code_pt . '">' . $bullet . $cr_produtos_txtLink . '</a></li>';
                    //ARTESANATO echo '<li><a href="' . get_permalink($cr_artesanato) . $code_pt . '">' . $bullet . $cr_artesanato_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($cr_responsabilidade) . $code_pt . '">' . $bullet . $cr_responsabilidade_txtLink . '</a></li>';
                    // ROOFING echo '<li><a href="' . get_permalink($cr_roofing) . $code_pt . '">' . $bullet . $cr_roofing_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($cr_produtores) . $code_pt . '">' . $bullet . $cr_produtores_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($se_seuevento) . $code_pt; ?>"><?php echo $main_seueventoaqui ?></a>
            </li>
            <li>
                <a href="<?php echo get_permalink($of_camping) . $code_pt; ?>"><?php echo $main_ondeficar ?></a>
                <ul>
                    <?php
                    echo '<li><a href="' . get_permalink($of_camping) . $code_pt . '">' . $bullet . $of_camping_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($of_alojamento) . $code_pt . '">' . $bullet . $of_alojamento_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($of_pousadas) . $code_pt . '">' . $bullet . $of_pousadas_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($oc_restaurantes) . $code_pt; ?>"><?php echo $main_ondecomer ?></a>
                <ul>
                    <?php
                    //COMIDA DE RUA echo '<li><a href="' . get_permalink($oc_comidaderua) . $code_pt . '">' . $bullet . $oc_comidaderua_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_mercado) . $code_pt . '">' . $bullet . $oc_mercado_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_buteco) . $code_pt . '">' . $bullet . $oc_buteco_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_pesqueiros) . $code_pt . '">' . $bullet . $oc_pesqueiros_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_restaurantes) . $code_pt . '">' . $bullet . $oc_restaurantes_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_caipira) . $code_pt . '">' . $bullet . $oc_caipira_txtLink . '</a></li>';
                    echo '<li><a href="' . get_permalink($oc_cafes) . $code_pt . '">' . $bullet . $oc_cafes_txtLink . '</a></li>';
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo get_permalink($ch_onibus) . $code_pt; ?>"><?php echo $main_comochegar ?></a>
                <ul>
                    <?php
                    echo '<li><a href="' . get_permalink($ch_onibus) . $code_pt . '">' . $bullet . $ch_onibus_txtLink . '</a><li>';
                    echo '<li><a href="' . get_permalink($ch_carro) . $code_pt . '">' . $bullet . $ch_carro_txtLink . '</a><li>';
                    echo '<li><a href="' . get_permalink($ch_trem) . $code_pt . '">' . $bullet . $ch_trem_txtLink . '</a><li>';
                    echo '<li><a href="' . get_permalink($ch_bicicleta) . $code_pt . '">' . $bullet . $ch_bicicleta_txtLink . '</a><li>';
                    echo '<li><a href="' . get_permalink($ch_agencias) . $code_pt . '">' . $bullet . $ch_agencias_txtLink . '</a><li>';
                    echo '<li><a href="' . get_permalink($ch_guias) . $code_pt . '">' . $bullet . $ch_guias_txtLink . '</a><li>';
                    ?>
                </ul>
            </li>
            <li>
                <form class="formuSearchMobile" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                    <input class="formuSearchMobile_input" type="text" value="Buscar..." name ="s" maxlenght="20" onclick="this.value = ''"/>
                    <button class="formuSearchMobile_btn" type="submit">ok</button>  
                </form>
            </li>
            <li class="menuSocialMobile">
                <a class="menuSocialMobile_title">Social:</a>
                <a class="menuSocialMobile_item fa fa-facebook-square" href="https://www.facebook.com/TurismoemSP" target="_blank" title="Turismo em S&atilde;o Paulo"></a>
                <!--<a class="menuSocialMobile_item fa fa-facebook-square" href="https://www.facebook.com/experiencesaopaulo" target="_blank" title="Experience S&atilde;o Paulo"></a>-->
                <a class="menuSocialMobile_item fa fa-twitter-square" href="https://twitter.com/turismosaopaulo" target="_blank" title="Turismo em S&atilde;o Paulo"></a>
                <a class="menuSocialMobile_item fa fa-youtube-square" href="https://www.youtube.com/user/spturis" target="_blank" title="Cidade de S&atilde;o Paulo"></a>
            </li>
        </ul>
    </nav>
    <?php
}
?>
<?php
// Inclue breadcrumbs
include 'breadcrumbs.php';
?>