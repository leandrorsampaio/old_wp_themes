<?php
if (is_home()) {
    $indexMobCorrection = " indexMobCorrection ";
} else {
    $indexMobCorrection = " ";
}
?>

<header class="topMobile <?php echo $indexMobCorrection; ?>" <?php echo $noTranslate; ?>>
    <div class="newMeuMobile">















        <h1 class="float-l newMeuMobile_nome">
            <a href="<?php echo get_bloginfo('url') . $idiomaURL; ?>" title="S&atilde;o Paulo">S&atilde;o Paulo</a>
        </h1>


        <input type="checkbox" id="control-nav" />
        <label for="control-nav" class="control-nav">
            <i class="fa fa-bars"></i>
        </label>
        <label for="control-nav" class="control-nav-close"></label>
        <nav class="float-r newMeuMobile_nav">
            <ul class="list-auto">
                <li class="newMeuMobile_nav_flag">
                    <p>Select the language:</p>



                    
                    <?php
                    if ($idioma == 3) {
                        $corPb_pt = 'pb';
                        $corPb_en = 'pb';
                        $corPb_es = 'cor';
                    } elseif ($idioma == 2) {
                        $corPb_pt = 'pb';
                        $corPb_en = 'cor';
                        $corPb_es = 'pb';
                    } else {
                        $corPb_pt = 'cor';
                        $corPb_en = 'pb';
                        $corPb_es = 'pb';
                    }
                    //
                    //
                    echo '<a class="newMeuMobile_nav_flag_link pt-' . $corPb_pt . '" href="' . $getPermalink . '?lang=pt' . '"></a>';
                    echo '<a class="newMeuMobile_nav_flag_link en-' . $corPb_en . '" href="' . $getPermalink . '?lang=en' . '"></a>';
                    echo '<a class="newMeuMobile_nav_flag_link es-' . $corPb_es . '" href="' . $getPermalink . '?lang=es' . '"></a>';
                    ?>




                </li>
                <li>
                    <?php echo $menu_5; ?>
                </li>
                <li class="newMeuMobile-clima">
                    <?php
                    $cont = 1;
                    foreach ($clima_forecast as $obj_previsao) {
                        if ($cont == 1) {
                            echo '<p>Min: ' . (f2c($obj_previsao->low) * -1) . '&deg; | Max: ' . (f2c($obj_previsao->high) * -1) . '</p>';
                        } else {
                            //nada
                        }
                        $cont++;
                    }
                    ?>
                </li>
                <li class="newMeuMobile-social">
                    <a href="http://www.facebook.com/TurismoemSP" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="http://twitter.com/turismosaopaulo" target="_blank">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                    <a href="http://www.youtube.com/user/spturis" target="_blank">
                        <i class="fa fa-youtube-square"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        $('a.taphover').on("touchstart", function (e) {
            'use strict'; //satisfy code inspectors
            var link = $(this); //preselect the link
            if (link.hasClass('hover')) {
                return true;
            } else {
                link.addClass('hover');
                $('a.taphover').not(this).removeClass('hover');
                e.preventDefault();
                return false; //extra, and to make sure the function has consistent return points
            }
        });
    </script>
    <div class="newMegaManuMobile">
        <ul class="newMegaManuMobile_ul">
            <li class="newMegaManuMobile_ul_li">
                <a class="newMegaManuMobile_ul_li_btn taphover">
                    <span class="newMegaManuMobile_ul_li_btn_style style-pqsp">
                        <i class="fa fa-heart"></i>
                        <p><?php echo $idioma_interface_mobile_pqsp; ?></p>
                    </span>
                    <div class="newMegaManuMobile_ul_li_btn_content content01" >
                        <span onclick="location.href = '<?php echo get_permalink($lpg_1_pqsp); ?>'">
                            <p> Por que S&atilde;o Paulo </p>
                        </span>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_1_razoes); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/razoesparavisitarsp_azulESCURO.png" alt="Raz&otilde;es para visitar SP" />
                            <p> Raz&otilde;es para visitar SP </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_1_historia); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/historiadacidade_azulESCURO.png" alt="Hist&oacute;ria da Cidade" />
                            <p> Hist&oacute;ria da Cidade</p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_1_linhadotempo); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/timeline_azulESCURO.png" alt="Linha do Tempo da cidade" />
                            <p> Linha do Tempo </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_1_dadosefatos); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/dadosefatos_azulESCURO.png" alt="Dados e fatos" />
                            <p> Dados e fatos </p>
                        </div>

                        <div onclick="location.href = '<?php echo get_permalink($lpg_1_passeiovirtual); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/passeiovirtual_azulESCURO.png" alt="Passeio Virtual" />
                            <p> Passeio Virtual </p>
                        </div>

                    </div>
                </a>
            </li>
            <li class="newMegaManuMobile_ul_li">
                <a class="newMegaManuMobile_ul_li_btn taphover">
                    <span class="newMegaManuMobile_ul_li_btn_style style-planeje">
                        <i class="fa fa-paper-plane"></i>
                        <p><?php echo $idioma_interface_mobile_planeje; ?></p>
                    </span>
                    <div class="newMegaManuMobile_ul_li_btn_content content02" >
                        <span onclick="location.href = '<?php echo get_permalink($lpg_2_planeje); ?>'">
                            <p> Planeje sua Viagem </p>
                        </span>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_mapadacidade); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_AMARELO.png" alt="Mapa da Cidade" />
                            <p> Mapa da Cidade </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_comochegar); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/comochegar_AMARELO.png" alt="Como Chegar" />
                            <p> Como Chegar </p>
                        </div>

                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_ondeficar); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/ondeficar_AMARELO.png" alt="Onde Ficar" />
                            <p> Onde Ficar </p>
                        </div>

                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_guiapratico); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_AMARELO.png" alt="Guia Pr&aacute;tico" />
                            <p> Guia Pr&aacute;tico </p>
                        </div>

                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_transporteurbano); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/transporteurbano_AMARELO.png" alt="Transporte Urbano" />
                            <p> Transporte Urbano </p>
                        </div>

                        <div onclick="location.href = '<?php echo get_permalink($lpg_2_agencias); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/agencidasdeviagem_AMARELO.png" alt="Ag&ecirc;ncias de Viagem" />
                            <p> Ag&ecirc;ncias de Viagem </p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="newMegaManuMobile_ul_li">
                <a class="newMegaManuMobile_ul_li_btn taphover">
                    <span class="newMegaManuMobile_ul_li_btn_style style-viva">
                        <i class="fa fa-star"></i>
                        <p><?php echo $idioma_interface_mobile_vivasp; ?></p>
                    </span>
                    <div class="newMegaManuMobile_ul_li_btn_content content03" >
                        <span onclick="location.href = '<?php echo get_permalink($lpg_3_vivasp); ?>'">
                            <p> Viva S&atilde;o Paulo </p>
                        </span>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_pontosturisticos); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/pontosturisticos_ROSA.png" alt="Pontos Tur&iacute;sticos" />
                            <p> Pontos Tur&iacute;sticos </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_compras); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/compras_ROSA.png" alt="Compras" />
                            <p> Compras </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_comerebeber); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/comerebeber_ROSA.png" alt="Comer e Beber" />
                            <p> Comer e Beber </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_noite); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/noite_ROSA.png" alt="Noite" />
                            <p> Noite </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_cultura); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/cultura_ROSA.png" alt="Cultura" />
                            <p> Cultura </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_esporte); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/esportes_ROSA.png" alt="Esportes" />
                            <p> Esportes </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_muitomaissp); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/muitomaisSP_ROSA.png" alt="Muito + S&atilde;o Paulo" />
                            <p> Muito + S&atilde;o Paulo </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_roteiros); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/roteiros_ROSA.png" alt="Roteiros" />
                            <p> Roteiros </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_fiquemaisumdia); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/fiquemaisumdia_ROSA.png" alt="Fique Mais um Dia" />
                            <p> Fique Mais um Dia </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_3_arredores); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/arredores_ROSA.png" alt="Arredores" />
                            <p> Arredores </p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="newMegaManuMobile_ul_li">
                <a class="newMegaManuMobile_ul_li_btn taphover">
                    <span class="newMegaManuMobile_ul_li_btn_style style-acontece">
                        <i class="fa fa-ticket"></i>
                        <p><?php echo $idioma_interface_mobile_acontece; ?></p>
                    </span>
                    <div class="newMegaManuMobile_ul_li_btn_content content04" >
                        <span onclick="location.href = '<?php echo get_permalink($lpg_4_acontece); ?>'">
                            <p> Acontece Aqui </p>
                        </span>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_4_agenda); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/agenda_VERDE.png" alt="Agenda" />
                            <p> Agenda </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_4_novidades); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/novidades_VERDE.png" alt="Novidades" />
                            <p> Novidades </p>
                        </div>
                        <div onclick="location.href = '<?php echo get_permalink($lpg_4_dicas); ?>'">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/dicasdequemviveemsp_VERDE.png" alt="Fique Mais um Dia" />
                            <p> Dicas de quem vive em SP </p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</header>