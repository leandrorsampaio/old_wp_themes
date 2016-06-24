<header class="topMobile" <?php echo $noTranslate; ?>>
    <div class="topMobile_header">
        <h1>S&atilde;o Paulo</h1>
        <ul class="megamenu topMobile_menu">
            <li class="topMobile_menu_li">
                <span class="topMobile_menu_li_btn drop">
                    <i class="fa fa-bars topMobile_menu_li_btn_icon"></i>
                </span>
                <nav class="megamenu_fullwidth topMobile_menu_li_megamenu">
                    <ul class="topMobile_menu_li_megamenu_ul">
                        <?php echo $menu_5; ?>

                        <div class="separador"></div>

                        <div class="climaMenu_Mobile">
                            <div class="climaMenu_atual">
                                <?php
                                echo '<img src="' . get_bloginfo('template_url') . '/images/' . $clima_condicaoCod . '.png" style="margin-right: 6%; float: left;" alt="" />';
                                echo '<p class="climaMenu_atual_clima">' . $clima_temp . '&deg;</p>';
                                ?>
                            </div>

                            <div class="climaMenu_forecast">
                                <?php
                                $cont = 1;
                                foreach ($clima_forecast as $obj_previsao) {

                                    if ($cont == 1) {
                                        echo '<div class="climaMenu_forecast_item' . $cont . '">';
                                        echo '<p class="climaMenu_forecast_item_minMax">Min: ' . (f2c($obj_previsao->low) * -1) . '&deg;</p>';
                                        echo '<p class="climaMenu_forecast_item_minMax">Max: ' . (f2c($obj_previsao->high) * -1) . '&deg;</p>';
                                        echo '</div>';
                                    } else {
                                        //nada
                                    }


                                    $cont++;
                                }
                                ?>
                            </div>

                        </div>




                    </ul>
                </nav>
            </li>                           
        </ul>
    </div>



















    <div class="topMobile_tabs">






        <div class="topMobile_tabs_menu">
            <ul class="megamenu topMobile_tabs_menu_ul">
                <li class="topMobile_tabs_menu_ul_li">
                    <span class="topMobile_tabs_menu_ul_li_link pqsp drop">
                        <i class="fa fa-heart"></i>
                        <p><?php echo $idioma_interface_mobile_pqsp; ?></p>
                    </span>
                    <div class="megamenu_fullwidth ui-content topMobile_tabs_content topMobile_tabs_content-pqsp" style="display: none;">
                        <ul class="mobile-menu-icons">
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_1_razoes); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/razoesparavisitarsp_azulESCURO.png" alt="Raz&otilde;es para visitar SP" />
                                    <p> Raz&otilde;es para visitar SP </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_1_historia); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/historiadacidade_azulESCURO.png" alt="Hist&oacute;ria da Cidade" />
                                    <p> Hist&oacute;ria da Cidade</p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_1_dadosefatos); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/dadosefatos_azulESCURO.png" alt="Dados e fatos" />
                                    <p> Dados e fatos </p>
                                </a>
                            </li>
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_1_passeiovirtual); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/passeiovirtual_azulESCURO.png" alt="Passeio Virtual" />
                                    <p> Passeio Virtual </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="topMobile_tabs_menu_ul_li">
                    <span class="topMobile_tabs_menu_ul_li_link planeje drop">
                        <i class="fa fa-heart"></i>
                        <p><?php echo $idioma_interface_mobile_planeje; ?></p>
                    </span>
                    <div class="megamenu_fullwidth ui-content topMobile_tabs_content topMobile_tabs_content-planeje" style="display: none;">
                        <ul class="mobile-menu-icons">
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_2_mapadacidade); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_AMARELO.png" alt="Mapa da Cidade" />
                                    <p> Mapa da Cidade </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_2_comochegar); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/comochegar_AMARELO.png" alt="Como Chegar" />
                                    <p> Como Chegar </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_2_ondeficar); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/ondeficar_AMARELO.png" alt="Onde Ficar" />
                                    <p> Onde Ficar </p>
                                </a>
                            </li>
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_2_guiapratico); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_AMARELO.png" alt="Guia Pr&aacute;tico" />
                                    <p> Guia Pr&aacute;tico </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_2_transporteurbano); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/transporteurbano_AMARELO.png" alt="Transporte Urbano" />
                                    <p> Transporte Urbano </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_2_agencias); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/agencidasdeviagem_AMARELO.png" alt="Ag&ecirc;ncias de Viagem" />
                                    <p> Ag&ecirc;ncias de Viagem </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="topMobile_tabs_menu_ul_li">
                    <span class="topMobile_tabs_menu_ul_li_link viva drop">
                        <i class="fa fa-heart"></i>
                        <p><?php echo $idioma_interface_mobile_vivasp; ?></p>
                    </span>
                    <div class="megamenu_fullwidth ui-content topMobile_tabs_content topMobile_tabs_content-viva" style="display: none;">
                        <ul class="mobile-menu-icons">
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_3_pontosturisticos); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/pontosturisticos_ROSA.png" alt="Pontos Tur&iacute;sticos" />
                                    <p> Pontos Tur&iacute;sticos </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_3_compras); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/compras_ROSA.png" alt="Compras" />
                                    <p> Compras </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_3_comerebeber); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/comerebeber_ROSA.png" alt="Comer e Beber" />
                                    <p> Comer e Beber </p>
                                </a>
                            </li>
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_3_noite); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/noite_ROSA.png" alt="Noite" />
                                    <p> Noite </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_3_cultura); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/cultura_ROSA.png" alt="Cultura" />
                                    <p> Cultura </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_3_esporte); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/esportes_ROSA.png" alt="Esportes" />
                                    <p> Esportes </p>
                                </a>
                            </li>
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_3_muitomaissp); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/muitomaisSP_ROSA.png" alt="Muito + S&atilde;o Paulo" />
                                    <p> Muito + S&atilde;o Paulo </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_3_roteiros); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/roteiros_ROSA.png" alt="Roteiros" />
                                    <p> Roteiros </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_3_fiquemaisumdia); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/fiquemaisumdia_ROSA.png" alt="Fique Mais um Dia" />
                                    <p> Fique Mais um Dia </p>
                                </a>
                            </li>
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_3_arredores); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/arredores_ROSA.png" alt="Arredores" />
                                    <p> Arredores </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="topMobile_tabs_menu_ul_li">
                    <span class="topMobile_tabs_menu_ul_li_link acontece drop">
                        <i class="fa fa-heart"></i>
                        <p><?php echo $idioma_interface_mobile_acontece; ?></p>
                    </span>
                    <div class="megamenu_fullwidth ui-content topMobile_tabs_content topMobile_tabs_content-acontece" style="display: none;">
                        <ul class="mobile-menu-icons">
                            <li class="first-item">
                                <a href="<?php echo get_permalink($lpg_4_agenda); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/agenda_VERDE.png" alt="Agenda" />
                                    <p> Agenda </p>
                                </a>
                            </li>
                            <li class="second-item">
                                <a href="<?php echo get_permalink($lpg_4_novidades); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/novidades_VERDE.png" alt="Novidades" />
                                    <p> Novidades </p>
                                </a>
                            </li>
                            <li class="last-item">
                                <a href="<?php echo get_permalink($lpg_4_dicas); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/dicasdequemviveemsp_VERDE.png" alt="Fique Mais um Dia" />
                                    <p> Dicas de quem vive em SP </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>