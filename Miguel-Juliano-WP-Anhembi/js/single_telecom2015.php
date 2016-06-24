<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
            <div id="traductor">
                <?php get_sidebar('traducao'); ?>
            </div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo get_permalink(1810); ?>">
                    <?php
                    $post_id = 1810;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
                - 
                <a href="<?php echo get_permalink(509); ?>">
                    <?php
                    $post_id = 509;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('telecom');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <article class="content_direita_article">
                <?php the_content(); ?>
            </article>

            <!--HOME TELECOM-->
            <?php
            if (is_single(11339)) {
                ?>   
                <div class="tl2015_wrapper">
                    <div id="tabs-container">
                        <p id="texto_pedido"> Veja nossos servi&ccedil;os: <br /><br /></p>
                        <ul class="tabs-menu">
                            <li>
                                <a href="#tab-1" id="internet" class="tabs-menu-box">
                                    <!--<img src="<?php bloginfo('template_url') ?>/images/internet.png" alt="Icone internet" class="tabs-menu-box-img" />-->
                                    <i class="fa fa-wifi iconesTopo"></i>
                                    <p id="titulointernet" class="tabs-menu-box-text">INTERNET</p>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-2" id="telefonia" class="tabs-menu-box">
                                    <!--<img src="<?php bloginfo('template_url') ?>/images/telefonia.png" alt="Icone internet" class="tabs-menu-box-img" />-->
                                    <i class="fa fa-phone iconesTopo"></i>
                                    <p id="titulotelefonia" class="tabs-menu-box-text">TELEFONIA</p>
                                </a>
                            </li>
                            <li id="last">
                                <a href="#tab-3" id="servico" class="tabs-menu-box">
                                    <!--<img src="<?php bloginfo('template_url') ?>/images/servico.png" alt="Icone internet" class="tabs-menu-box-img" />-->
                                    <i class="fa fa-plug iconesTopo"></i>
                                    <p id="tituloservico" class="tabs-menu-box-text">SERVI&Ccedil;OS</p>
                                </a>
                            </li> 
                        </ul>
                        <div class="tab">
                            <!--INTERNET-->
                            <div id="tab-1" class="tab-content">
                                <p class="texto_internet">Acesso de Internet de forma compartilhada ou dedicada (IP v&aacute;lido), em diversas velocidades de conex&atilde;o. </p>              

                                <div id="tab-1-config">
                                    <h3 class="tl2015_configtitulo">Tabela de Orienta&ccedil;&atilde;o</h3>                            
                                </div>
                                <!-- In&iacute;cio da Tabela -->
                                <div class="tl2015_linha">
                                    <div class="cel1">Acesso Compartilhado<br/>(DHCP)
                                            <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgNAVBAS" title="Recomend&aacute;vel para acesso &agrave; sites da web, envio e recebimento de emails, download de arquivos, redes wifi..

N&atilde;o recomend&aacute;vel  para aplica&ccedil;&otilde;es que exigem grande tr&aacute;fego de pacotes, como por exemplo, transmiss&atilde;o de v&iacute;deo  ou ainda quando h&aacute;  necessidade de estabelecer conex&otilde;es tipo t&uacute;nel (VPN),  que requerem comunica&ccedil;&atilde;o utilizando portas espec&iacute;ficas." />
                                    </div>
                                    <div class="cel2">Acesso Dedicado<br/>(IP v&aacute;lido)
                                            <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgNAVBAS" title="Nesta modalidade de contrata&ccedil;&atilde;o o microcomputador acessar&aacute;  internet de forma exclusiva, por meio de um endere&ccedil;o IP fixo e v&aacute;lido na internet. S&atilde;o fornecidos o endere&ccedil;o IP, a m&aacute;scara de rede, o endere&ccedil;o do Gateway e o endere&ccedil;o do nosso servidor DNS.

Este tipo de internet &eacute; indicado para clientes que venham a utilizar conex&atilde;o VPN,

necessidade de acesso externo,  transmiss&otilde;es ao vivo e grande tr&aacute; fego de pacotes." />
                                    </div>
                                </div>
                                <div class="tl2015_linha">
                                    <div class="allmbps1">
                                        <div class="mbps">1 Mbps</div>
                                        <div class="mbps">2 Mbps</div>
                                        <div class="mbps">4 Mbps</div>
                                        <div class="mbps mbpsLast">10 Mbps</div>
                                    </div>
                                    <div class="allmbps2">
                                        <div class="mbps2">1 Mbps</div>
                                        <div class="mbps2">2 Mbps</div>
                                        <div class="mbps2">4 Mbps</div>
                                        <div class="mbps2 mbpsLast">10 Mbps</div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_01.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_02.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_03.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX tl2015_itemLAST">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_04.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="cent_NAV">Navega&ccedil;&atilde;o <br/>b&aacute;sica
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_05.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_06.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_07.png" alt="For&ccedil;a do sinal" />
                                        </div>
                                        <div class="tl2015_itemX tl2015_itemLAST">
                                            <img class="tl2015_itemWIFI" src="<?php bloginfo('template_url') ?>/images/wifi_08.png" alt="For&ccedil;a do sinal" />
                                        </div>                             
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <div class="tl2015_itemX">Baixa (360p)</div>
                                        <div class="tl2015_itemX">M&eacute;dia (480p)</div>
                                        <div class="tl2015_itemX">HD<br/>(720p)</div>
                                        <div class="tl2015_itemX tl2015_itemLAST">Full HD (1080p)</div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="cent_VIDEO">V&iacute;deos
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <div class="tl2015_itemX">Baixa (360p)</div>
                                        <div class="tl2015_itemX">M&eacute;dia (480p)</div>
                                        <div class="tl2015_itemX">HD<br/>(720p)</div>
                                        <div class="tl2015_itemX tl2015_itemLAST">Full HD (1080p)</div>        
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <div class="tl2015_itemX">At&eacute;<br/>125 </div>
                                        <div class="tl2015_itemX">At&eacute;<br/>244 </div>
                                        <div class="tl2015_itemX">At&eacute; <br/>488</div>
                                        <div class="tl2015_itemX tl2015_itemLAST">At&eacute;<br/>1220</div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_VELOCIDADE">Velocidade [KB/s]
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <div class="tl2015_itemX2">125 </div>
                                        <div class="tl2015_itemX2">244 </div>
                                        <div class="tl2015_itemX2">488 </div>
                                        <div class="tl2015_itemX2 tl2015_itemLAST">1220 </div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq100MB">
                                        <div class="tl2015_itemX_100MB">25 min</div>
                                        <div class="tl2015_itemX_100MB">13 min</div>
                                        <div class="tl2015_itemX_100MB">7 min</div>
                                        <div class="tl2015_itemX_100MB tl2015_itemLAST">5 min</div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_100MB">Baixar arquivos de 100 MB 
                                        </p>
                                    </div>
                                    <div class="itemDir100MB">
                                        <div class="tl2015_itemX_100MB">15 min</div>
                                        <div class="tl2015_itemX_100MB">7 min</div>
                                        <div class="tl2015_itemX_100MB">4 min</div>
                                        <div class="tl2015_itemX_100MB tl2015_itemLAST">1,5 min</div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq1GB">
                                        <div class="tl2015_itemX_1GB">4h</div>
                                        <div class="tl2015_itemX_1GB">2h</div>
                                        <div class="tl2015_itemX_1GB">1h</div>
                                        <div class="tl2015_itemX_1GB tl2015_itemLAST">37 min</div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_1GB">Baixar arquivos de<br/>1 GB
                                        </p>
                                    </div>
                                    <div class="itemDir1GB">
                                        <div class="tl2015_itemX_1GB">2h30</div>
                                        <div class="tl2015_itemX_1GB">1h15</div>
                                        <div class="tl2015_itemX_1GB">37 min</div>
                                        <div class="tl2015_itemX_1GB tl2015_itemLAST">15 min</div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsqTRANSVIDEO">
                                        <!--<img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG"/>-->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_TRANSVIDEO">Transmiss&atilde;o de v&iacute;deo 
                                        </p>
                                    </div>
                                    <div class="itemDirTRANSVIDEO">
                                        <div class="tl2015_itemX_TRANSVIDEO">Baixa (360p)</div>
                                        <div class="tl2015_itemX_TRANSVIDEO">M&eacute;dia (480p)</div>
                                        <div class="tl2015_itemX_TRANSVIDEO">HD<br/>(720p)</div>
                                        <div class="tl2015_itemX_TRANSVIDEO tl2015_itemLAST">Full HD (1080p)</div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsqTRANSAUDIO">
                                        <!--
                                            <div class="tl2015_itemX"><img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG-v2"/></div>
                                            <div class="tl2015_itemX"><img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG-v2"/></div>
                                            <div class="tl2015_itemX"><img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG-v2"/></div>
                                            <div class="tl2015_itemX tl2015_itemLAST"><img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG-v2"/></div>
                                        -->
                                        <div class="tl2015_itemX_TRANSAUDIO">
                                            <i class="fa fa-times awesomeIconesTelecom2"></i>
                                        </div>
                                        <div class="tl2015_itemX_TRANSAUDIO">
                                            <i class="fa fa-times awesomeIconesTelecom2"></i>
                                        </div>
                                        <div class="tl2015_itemX_TRANSAUDIO">
                                            <i class="fa fa-check-square-o awesomeIconesTelecom2"></i>
                                        </div>
                                        <div class="tl2015_itemX_TRANSAUDIO tl2015_itemLAST">
                                            <i class="fa fa-check-square-o awesomeIconesTelecom2"></i>
                                        </div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_TRANSAUDIO">Transmiss&atilde;o de &aacute;udio
                                        </p>
                                    </div>
                                    <div class="itemDirTRANSAUDIO">
                                        <!-- <img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG"/> -->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <!--<img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG"/>-->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_VPN">Acesso VPN
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <!-- <img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG"/> -->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsqSISTEMA">
                                        <!--<img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG"/>-->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_SISTEMA">Sistema de Vendas ou Pedidos Online
                                        </p>
                                    </div>
                                    <div class="itemDirSISTEMA">
                                        <!-- <img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG"/> -->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <!--<img src="<?php bloginfo('template_url') ?>/images/x.png" class="tl2015_itemIMAG"/>-->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_VOIP">VOIP
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <!-- <img src="<?php bloginfo('template_url') ?>/images/yes.png" class="tl2015_itemIMAG"/> -->
                                        <i class="fa fa-times awesomeIconesTelecom"></i>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsqSIMULT">
                                        <div class="tl2015_itemX_SIMULT">2</div>
                                        <div class="tl2015_itemX_SIMULT">3</div>
                                        <div class="tl2015_itemX_SIMULT">5</div>
                                        <div class="tl2015_itemX_SIMULT tl2015_itemLAST">10</div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_SIMULT">Usu&aacute;rios simult&acirc;neos
                                        </p>
                                    </div>
                                    <div class="itemDirSIMULT">
                                        <div class="tl2015_itemX_SIMULT">3</div>
                                        <div class="tl2015_itemX_SIMULT">5</div>
                                        <div class="tl2015_itemX_SIMULT">8</div>
                                        <div class="tl2015_itemX_SIMULT tl2015_itemLAST">15</div>
                                    </div>
                                </div>
                                <?php
                                // Valores internet
                                $valor1 = 200;
                                $valor2 = 300;
                                $valor3 = 600;
                                $valor4 = 1200;
                                $valor5 = 1500;
                                $valor6 = 1850;
                                $valor7 = 2550;
                                $valor8 = 4465;
                                // instalacao
                                $insta1 = 150;
                                $insta2 = 1500;
                                // valor inicial + instalacao
                                $valor1_ini = $valor1 + $insta1;
                                $valor2_ini = $valor2 + $insta1;
                                $valor3_ini = $valor3 + $insta1;
                                $valor4_ini = $valor4 + $insta1;
                                $valor5_ini = $valor5 + $insta2;
                                $valor6_ini = $valor6 + $insta2;
                                $valor7_ini = $valor7 + $insta2;
                                $valor8_ini = $valor8 + $insta2;
                                ?>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <p class="tl2015_itemINSTALACAO">R$ <?php echo $insta1; ?></p>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR">Instala&ccedil;&atilde;o
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <p class="tl2015_itemINSTALACAO">R$ <?php echo $insta2; ?></p>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsq">
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor1; ?></div>
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor2; ?></div>
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor3; ?></div>
                                        <div class="tl2015_itemX tl2015_itemLAST">R$<br/><?php echo $valor4; ?></div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_DIARIA">Di&aacute;ria
                                        </p>
                                    </div>
                                    <div class="itemDir">
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor5; ?></div>
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor6; ?></div>
                                        <div class="tl2015_itemX">R$<br/><?php echo $valor7; ?></div>
                                        <div class="tl2015_itemX tl2015_itemLAST">R$<br/><?php echo $valor8; ?></div>
                                    </div>
                                </div>
                                <script language="javascript">
                                    //---------------------- Vari&aacute; veis Tabela Telefonia
                                    var valor_item01 = new Number(<?php echo $valor1; ?>);
                                    var valor_item02 = new Number(<?php echo $valor2; ?>);
                                    var valor_item03 = new Number(<?php echo $valor3; ?>);
                                    var valor_item04 = new Number(<?php echo $valor4; ?>);
                                    var valor_item05 = new Number(<?php echo $valor5; ?>);
                                    var valor_item06 = new Number(<?php echo $valor6; ?>);
                                    var valor_item07 = new Number(<?php echo $valor7; ?>);
                                    var valor_item08 = new Number(<?php echo $valor8; ?>);
                                    //-------------------------------- FUNCTION CALCULA TABELAS
                                    function contaTabelaTelefonia() {
                                        var novoTexto = new Number(document.diarias.diarias_select.value);
                                        var resultado_item01 = new Number(novoTexto * valor_item01 + <?php echo $insta1; ?>);
                                        var resultado_item02 = new Number(novoTexto * valor_item02 + <?php echo $insta1; ?>);
                                        var resultado_item03 = new Number(novoTexto * valor_item03 + <?php echo $insta1; ?>);
                                        var resultado_item04 = new Number(novoTexto * valor_item04 + <?php echo $insta1; ?>);
                                        var resultado_item05 = new Number(novoTexto * valor_item05 + <?php echo $insta2; ?>);
                                        var resultado_item06 = new Number(novoTexto * valor_item06 + <?php echo $insta2; ?>);
                                        var resultado_item07 = new Number(novoTexto * valor_item07 + <?php echo $insta2; ?>);
                                        var resultado_item08 = new Number(novoTexto * valor_item08 + <?php echo $insta2; ?>);
                                        document.getElementById("item01").innerHTML = resultado_item01;
                                        document.getElementById("item02").innerHTML = resultado_item02;
                                        document.getElementById("item03").innerHTML = resultado_item03;
                                        document.getElementById("item04").innerHTML = resultado_item04;
                                        document.getElementById("item05").innerHTML = resultado_item05;
                                        document.getElementById("item06").innerHTML = resultado_item06;
                                        document.getElementById("item07").innerHTML = resultado_item07;
                                        document.getElementById("item08").innerHTML = resultado_item08;
                                    }
                                </script>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="itemEsqSIMULE">
                                        <div class="tl2015_itemX">R$<br/><span id="item01"><?php echo $valor1_ini; ?></span></div>
                                        <div class="tl2015_itemX">R$<br/><span id="item02"><?php echo $valor2_ini; ?></span></div>
                                        <div class="tl2015_itemX">R$<br/><span id="item03"><?php echo $valor3_ini; ?></span></div>
                                        <div class="tl2015_itemX tl2015_itemLAST">R$<br/><span id="item04"><?php echo $valor4_ini; ?></span></div>
                                    </div>
                                    <div class="itemCent">
                                        <p class="itemCentMENOR cent_SIMULE">Simule o valor: 
                                        <form name="diarias">
                                            <select id="diarias_select" class="select_borda" onclick="contaTabelaTelefonia()">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>                                            
                                            </select>
                                        </form>
                                        </p>
                                    </div>
                                    <div class="itemDirSIMULE">
                                        <div class="tl2015_itemX">R$<br/><span id="item05"><?php echo $valor5_ini; ?></span></div>
                                        <div class="tl2015_itemX">R$<br/><span id="item06"><?php echo $valor6_ini; ?></span></div>
                                        <div class="tl2015_itemX">R$<br/><span id="item07"><?php echo $valor7_ini; ?></span></div>
                                        <div class="tl2015_itemX tl2015_itemLAST">R$<br/><span id="item08"><?php echo $valor8_ini; ?></span></div>
                                    </div>
                                </div>
                                <div class="tl2015_linha tl2015_linhaMargem">
                                    <div class="pagamentoLine">
                                        <p class="pagamentoLine_title">formas de pagamento</p>

                                        <p class="pagamentoLine_forma">
                                            Cart&otilde;es de cr&eacute;dito:
                                            <i class="fa fa-cc-visa"></i>
                                            <i class="fa fa-cc-mastercard"></i>
                                            <i class="fa fa-cc-amex"></i>
                                        </p>
                                        <p class="pagamentoLine_forma">
                                            Boleto Banc&aacute;rio: 
                                            <i class="fa fa-barcode"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!--TAB1-->                 
                        </div><!--TAB-->
                        <!--TELEFONIA-->
                        <div id="tab-2" class="tab-content">
                            <p class="texto_telefonia">Todos os eventos possuem infraestrutura para instala&ccedil;&atilde;o de linha telef&ocirc;nica com discagem de ramais e tarifa&ccedil;&atilde;o p&oacute;s paga em boleto.</p>    
                            <div id="tab-2-config">
                                <h3 class="tl2015_configtitulo">Configura&ccedil;&otilde;es</h3>
                            </div>
                            <h5 class="tl2015_h5">Programa&ccedil;&atilde;o HOTLINE - linha telef&ocirc;nica direta</h5>
                            <p class="config_telef"> Configura&ccedil;&atilde;o do telefone para que deixe de ser um ramal passando para linha telef&ocirc;nica direta, n&atilde;o &eacute; necess&aacute;rio teclar o 9 para efetuar liga&ccedil;&otilde;es.
                            </p>    
                            <h5 class="tl2015_h5">Grupo de Captura entre Ramais</h5>
                            <p class="config_telef">Famoso "puxar a liga&ccedil;&atilde;o", permite atender a um ramal a partir de outro ramal digitando (**).
                            </p>     
                            <h5 class="tl2015_h5">Grupo Consecutivo entre Ramais</h5>
                            <p class="config_telef">Caso um ramal n&atilde;o for atendido, os outros que fazem parte do grupo tocam consecutivamente, seguindo a ordem estabelecida.
                            </p>                
                            <h5 class="tl2015_h5">Bloqueio de Ramal</h5>
                            <p class="config_telef">Controle das liga&ccedil;&otilde;es da sua equipe.
                            </p>  
                            <div id="tab-4-config">
                                <h3 class="tl2015_configtitulo">Valores</h3>
                            </div>
                            <?php
                            // Valores internet
                            $valor9 = 20;
                            // instalacao
                            $insta3 = 60;
                            // valor inicial + instalacao
                            $valor9_ini = $valor9 + $insta3;
                            ?>
                            <script language="javascript">
                                //---------------------- Variaveis Tabela Telefonia
                                var valor_item09 = new Number(<?php echo $valor9; ?>);
                                //-------------------------------- FUNCTION CALCULA TABELAS
                                function contaTabelaTelefonia2() {
                                    var novoTexto = new Number(document.diarias2.diarias_select2.value);
                                    var resultado_item09 = new Number(novoTexto * valor_item09 + <?php echo $insta3; ?>);
                                    document.getElementById("item09").innerHTML = resultado_item09;
                                }
                            </script>
                            <table class="tl2015_tabelatelefonia tl2015_tabelaGeral">
                                <tr class="tl2015_tr">
                                    <td class="tabelatitulo tl2015_td"><span>Telefonia</span></td>
                                    <td class="tabelatitulo tl2015_td"><span>Instala&ccedil;&atilde;o</span></td>
                                    <td class="tabelatitulo tl2015_td"><span>Di&aacute;ria</span></td>
                                    <td class="tabelatitulo tl2015_td">
                                        <span>Simule</span>
                                        <form name="diarias2">
                                            <select id="diarias_select2" onclick="contaTabelaTelefonia2()">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr  class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="" />
                                        <p>Linha Telef&ocirc;nica</p>
                                    </td>
                                    <td class="tl2015_td">R$ 60</td>
                                    <td class="tl2015_td">R$ 20</td>
                                    <td class="tl2015_td">
                                        R$<span id="item09"><?php echo $valor9_ini; ?></span>
                                    </td>
                                </tr>
                            </table>
                            <table class="tl2015_tabelatelefonia tl2015_tabelaGeral">
                                <tr class="tl2015_tr">
                                    <td class="tabelatitulo tl2015_td"><span>Telefonia</span></td>
                                    <td class="tabelatitulo tl2015_td"><span>Instala&ccedil;&atilde;o</span></td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Configura&ccedil;&atilde;o do telefone para que deixe de ser um ramal passando para linha telef&ocirc;nica direta, n&atilde;o &eacute; necess&aacute;rio teclar o 9 para efetuar liga&ccedil;&otilde;es." />
                                        <p>Hot Line</p>
                                    </td>
                                    <td class="tl2015_td">R$ 150</td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Controle das liga&ccedil;&otilde;es da sua equipe." />
                                        <p>Bloqueio de Chamada</p>
                                    </td>
                                    <td class="tl2015_td">R$ 20</td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Famoso &quot;puxar a liga&ccedil;&atilde;o&quot;, permite atender a um ramal a partir de outro ramal digitando (**)."  />
                                        <p>Captura de Ramal</p>
                                    </td>
                                    <td class="tl2015_td">R$ 20</td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Caso um ramal n&atilde;o for atendido, os outros que fazem parte do grupo tocam consecutivamente, seguindo a ordem estabelecida." />
                                        <p>Ramal Consecutivo</p>
                                    </td>
                                    <td class="tl2015_td">R$ 20</td>
                                </tr>
                            </table>
                            <div class="tl2015_linha tl2015_linhaMargem">
                                <div class="pagamentoLine">
                                    <p class="pagamentoLine_title">formas de pagamento</p>

                                    <p class="pagamentoLine_forma">
                                        Cart&otilde;es de cr&eacute;dito:
                                        <i class="fa fa-cc-visa"></i>
                                        <i class="fa fa-cc-mastercard"></i>
                                        <i class="fa fa-cc-amex"></i>
                                    </p>
                                    <p class="pagamentoLine_forma">
                                        Boleto Banc&aacute;rio: 
                                        <i class="fa fa-barcode"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--SERVI&Ccedil;OS-->
                        <div id="tab-3" class="tab-content">
                            <p class="texto_telefonia"> Uma equipe estar&aacute; preparada para instala&ccedil;&atilde;o e manuten&ccedil;&atilde;o dos servi&ccedil;os e equipamentos. Todos os dias em 2 turnos: das 8h &agrave;s 16h e das 14h &agrave;s 22h.</p>    
                            <div id="tab-3-config">
                                <h3 class="tl2015_configtitulo">Instala&ccedil;&atilde;o</h3>
                            </div>
                            <div class="tl2015_linha tl2015_linhaMargem">
                                <div class="texto_instalacao">    
                                    <h5 class="tl2015_h5">Instala&ccedil;&atilde;o de Rede Interna por Ponto de Voz</h5>
                                    <p class="config_servico"> Servi&ccedil;o de instala&ccedil;&atilde;o da linha telef&ocirc;nica em cada local especificado pelo cliente.
                                    </p>    
                                    <h5 class="tl2015_h5">Instala&ccedil;&atilde;o de Rede Interna por Ponto de Dados</h5>
                                    <p class="config_servico"> Servi&ccedil;o de instala&ccedil;&atilde;o da rede de internet em cada local especificado pelo cliente.
                                    </p>    
                                    <h5 class="tl2015_h5">Instala&ccedil;&atilde;o Linha Privativa de Voz *</h5>
                                    <p class="config_servico"> Linhas para transmiss&atilde;o de voz - comum para empresas de r&aacute;dio.
                                    </p>    
                                    <h5 class="tl2015_h5">Instala&ccedil;&atilde;o Linha Privativa de Dados *</h5>
                                    <p class="config_servico"> Linhas para transmiss&atilde;o de dados. Ponto a ponto. Comum para clientes que buscam seguran&ccedil;a no tr&aacute;fego de dados.
                                    </p> 
                                    <p class="config_servico2">* O Anhembi fornece apenas a interliga&ccedil;&atilde;o f&iacute;sica ao local desejado sendo necess&aacute;ria a contrata&ccedil;&atilde;o do servi&ccedil;o junto a operadora de telefonia. </p>
                                </div>
                            </div>
                            <div id="tab-4-config">
                                <h3 class="tl2015_configtitulo">Loca&ccedil;&atilde;o</h3>
                            </div>
                            <div class="tl2015_linha tl2015_linhaMargem">
                                <h5 class="texto_TITULO">Disponibilize acesso sem fio</h5> 
                                <div class="img_ESQ">
                                    <img src="<?php bloginfo('template_url') ?>/images/roteador.png" />   
                                </div>
                                <div class="texto_DIR">
                                    <p class="config_servico"> Roteador 2 portas: compartilha a sua internet para todos os usu&aacute;rios do seu espa&ccedil;o de forma sem fio com a possibilidade de conectar at&eacute; 2 computadores via cabos.
                                    </p>     
                                    <p class="config_servico2">* Um roteador atende standes com at&eacute; 100m&sup2; de &aacute;rea livre. Caso o stand possua mais do que 100m&sup2;, entre em contato. (interfer&ecirc;ncias podem ocasionar varia&ccedil;&atilde;o de sinal).</p>             
                                </div>
                                <h5  class="texto_TITULO">Amplie a sua rede cabeada</h5>
                                <div class="img_ESQ">
                                    <img src="<?php bloginfo('template_url') ?>/images/switch.png" />                    
                                </div>
                                <div class="texto_DIR">
                                    <p class="config_servico"> Switch de 08 portas (necess&aacute;rio apenas para estruturar uma rede com mais de 2 computadores via cabo).
                                    </p>     
                                    <p class="config_servico2">* Ser&aacute; necess&aacute;rio disponibilizar/contratar um roteador para estruturar a rede.</p>    
                                </div>
                                <h5 class="texto_TITULO">Seu escrit&oacute;rio no estande</h5>
                                <div class="img_ESQ">
                                    <img src="<?php bloginfo('template_url') ?>/images/telefone.png" />                                
                                </div>
                                <div class="texto_DIR">
                                    <p class="config_servico"> Aparelho Telef&ocirc;nico Anal&oacute;gico
                                        Siemens gigaset DA10 com fun&ccedil;&otilde;es de rediscagem, repasse de liga&ccedil;&atilde;o e sistema mudo.
                                    </p>      
                                </div>
                            </div>                            
                            <div id="tab-4-config">
                                <h3 class="tl2015_configtitulo">Valores</h3>
                            </div>
                            <!-- Tabela 1 -->
                            <table class="tl2015_tabela tl2015_tabelaGeral">
                                <tr class="tl2015_tr">
                                    <td class="tabelatitulo tl2015_td"><span>Servi&ccedil;os</span></td>
                                    <td class="tabelatitulo tl2015_td"><span>Instala&ccedil;&atilde;o</span></td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Servi&ccedil;o de instala&ccedil;&atilde;o da linha telef&ocirc;nica em cada local especificado pelo cliente."  />
                                        <p>Ponto de Voz</p>
                                    </td>
                                    <td class="tl2015_td">R$ 100</td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Servi&ccedil;o de instala&ccedil;&atilde;o da rede de internet em cada local especificado pelo cliente."  />
                                        <p>Ponto de Dados</p>
                                    </td>
                                    <td class="tl2015_td">R$ 100</td> 
                               </tr>                        
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Linhas para transmiss&atilde;o de voz - comum para empresas de r&aacute;dio."  />
                                        <p>Linha Privativa (Voz)</p>
                                    </td>
                                    <td class="tl2015_td">R$ 150</td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Linhas para transmiss&atilde;o de dados. Ponto a ponto. Comum para clientes que buscam seguran&ccedil;a no tr&aacute;fego de dados." />
                                        <p>Linha Privativa (Dados)</p>
                                    </td>
                                    <td class="tl2015_td">R$ 1000</td>
                                </tr>
                            </table>
                            <?php
                            $valor10 = 15;
                            $valor11 = 30;
                            $valor12 = 80;
                            ?>
                            <script language="javascript">
                                //---------------------- Variaveis Tabela Telefonia
                                var valor_item10 = new Number(<?php echo $valor10; ?>);
                                var valor_item11 = new Number(<?php echo $valor11; ?>);
                                var valor_item12 = new Number(<?php echo $valor12; ?>);
                                //-------------------------------- FUNCTION CALCULA TABELAS
                                function contaTabelaTelefonia3() {
                                    var novoTexto = new Number(document.diarias3.diarias_select3.value);
                                    var resultado_item10 = new Number(novoTexto * valor_item10);
                                    var resultado_item11 = new Number(novoTexto * valor_item11);
                                    var resultado_item12 = new Number(novoTexto * valor_item12);
                                    document.getElementById("item10").innerHTML = resultado_item10;
                                    document.getElementById("item11").innerHTML = resultado_item11;
                                    document.getElementById("item12").innerHTML = resultado_item12;
                                }
                            </script>
                            <!-- Tabela 2 -->
                            <table class="tl2015_tabela tl2015_tabelaGeral">
                                <tr class="tl2015_tr">
                                    <td class="tabelatitulo tl2015_td" ><span>Loca&ccedil;&atilde;o</span></td>
                                    <td class="tabelatitulo tl2015_td" ><span>Di&aacute;ria</span></td>
                                    <td class="tabelatitulo tl2015_td" >
                                        <span>Simule</span>
                                        <form name="diarias3">
                                            <select id="diarias_select3" onclick="contaTabelaTelefonia3()">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>      
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Siemens gigaset DA10 com fun&ccedil;&otilde;es de rediscagem, repasse de liga&ccedil;&atilde;o e sistema mudo."/>
                                        <p>Telefone</p>
                                    </td>
                                    <td class="tl2015_td">R$ 15</td>
                                    <td class="tl2015_td">
                                        R$ <span id="item10"><?php echo $valor10; ?></span>
                                    </td>
                                </tr>      
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Switch de 08 portas (necess&aacute;rio apenas para estruturar uma rede com mais de 2 computadores via cabo)." />
                                        <p>Switch</p>
                                    </td>
                                    <td class="tl2015_td">R$ 30</td>
                                    <td class="tl2015_td">
                                        R$ <span id="item11"><?php echo $valor11; ?></span>
                                    </td>
                                </tr>  
                                <tr class="tl2015_tr">
                                    <td class="tl2015_td tabelaGeral_alinhaLeft">
                                        <img src="<?php bloginfo('template_url') ?>/images/questionmark.png" class="tooltip tl2015_imgTABELA" title="Roteador 2 portas: compartilha a sua internet para todos os usu&aacute;rios do seu espa&ccedil;o de forma sem fio com a possibilidade de conectar at&eacute; 2 computadores via cabos."  />
                                        <p>Roteador Wireless</p>
                                    </td>
                                    <td class="tl2015_td">R$ 80</td>
                                    <td class="tl2015_td">
                                        R$ <span id="item12"><?php echo $valor12; ?></span>
                                    </td>
                                </tr>  
                            </table>
                            <div class="tl2015_linha tl2015_linhaMargem">
                                <div class="pagamentoLine">
                                    <p class="pagamentoLine_title">formas de pagamento</p>

                                    <p class="pagamentoLine_forma">
                                        Cart&otilde;es de cr&eacute;dito:
                                        <i class="fa fa-cc-visa"></i>
                                        <i class="fa fa-cc-mastercard"></i>
                                        <i class="fa fa-cc-amex"></i>
                                    </p>
                                    <p class="pagamentoLine_forma">
                                        Boleto Banc&aacute;rio: 
                                        <i class="fa fa-barcode"></i>
                                    </p>
                                </div>
                            </div>                            
                        </div>
                    </div> <!--TABSCONTAINER-->
                    <div id="botoes_wrapper">
                        <p id="botoes_text">Se voc&eacute; j&aacute; sabe o seu pedido ou quer efetuar um pagamento clique em um dos links abaixo:</p>
                        <div id="botoes">
                            <a id="fazerpedido" class="botoesPadrao" href="<?php echo get_permalink(11377); ?>">
                                FAZER PEDIDO
                            </a>
                            <a id="efetuarpag" class="botoesPadrao" href="<?php echo get_permalink(11381); ?>">
                                EFETUAR PAGAMENTO
                            </a>
                        </div>   
                    </div>
                </div> <!--WRAPPER-->
                <?php
            }
            ?>          
            <!--COMO FUNCIONA?-->
            <?php
            if (is_single(11377)) {
                ?>   
                <div class="tl2015pedido_wrapper">
                    <!--<section class="tl2015pedido_header">
                        <p class="title_p">Os servi&ccedil;os de Internet e Telefonia s&atilde;o oferecidos com exclusividade pelo Anhembi!</p>
                        <p class="title_p">S&atilde;o destinados a organizadores e expositores dos diversos eventos que acontecem no complexo.</p>
                        <p class="title_p">Para todos os ambientes o evento &eacute; poss&iacute;vel a contrata&ccedil;&atilde;o do servi&ccedil;o, sejam estandes, salas de reuni&atilde;o, credenciamento, plen&aacute;rias, palco, backstage entre muitos outros.</p>
                    </section> -->
                    <br>
                    <div id="conteudo_pedido">
                        <p id="texto_pedido"> Como funciona? </p>
                        <br/>
                        <div id="pedido1">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_1.png" class="tl2015pedido_img"/>
                            <p class="texto">  Clique em &quot;EFETUAR PEDIDO&quot; e preencha os campo com as informa&ccedil;&otilde;es solicitadas. </p>
                            <br />
                            <br />
                        </div>    
                        <div id="pedido2">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_2.png" class="tl2015pedido_img"/>
                            <p class="texto">Na tela seguinte, selecione os produtos/servi&ccedil;os de seu interesse.</p>
                            <br />
                            <br />
                        </div>    
                        <div id="pedido3">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_3.png" class="tl2015pedido_img"/>
                            <p class="texto">Ap&oacute;s o envio dos dados de contrata&ccedil;&atilde;o, os consultores do Anhembi Telecom ir&atilde;o avaliar o seu pedido e entrar&atilde;o em contato com voc&ecirc;, se necess&aacute;rio.</p>
                            <br />
                        </div>
                        <div id="pedido4">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_4.png" class="tl2015pedido_img"/>
                            <p class="texto">Ap&oacute;s a aprova&ccedil;&atilde;o voc&ecirc; receber&aacute; um email com Or&ccedil;amento aprovado, Termo de Acordo do Servi&ccedil;o, prazos, condi&ccedil;&otilde;es de pagamento e instru&ccedil;&otilde;es para finalizar a sua contrata&ccedil;&atilde;o.</p>
                            <br />
                        </div>    
                        <div id="pedido5">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_5.png" class="tl2015pedido_img"/>
                            <p class="texto">Ao inserir o c&oacute;digo identificador do seu pedido no campo direcionado pelo link informado do email que encaminharmos, voc&ecirc; estar&aacute; na tela de pagamento do seu servi&ccedil;o. Basta escolher a forma de pagamento e prosseguir as etapas at&eacute; a sua finaliza&ccedil;&atilde;o.</p>
                        </div>
                        <div id="pedido6">
                            <img src="<?php bloginfo('template_url') ?>/images/pedido_6.png" class="tl2015pedido_img"/>
                            <p class="texto">Depois de encerrada a contrata&ccedil;&atilde;o, a equipe t&eacute;cnica do Anhembi Telecom providenciar&aacute; a instala&ccedil;&atilde;o de todo os servi&ccedil;os de telecomunica&ccedil;&otilde;es contratados para o evento.</p>
                            <br />
                        </div>
                    </div>
                    <div class="botaoComoFunciona">
                        <a class="botoesPadrao" href="<?php echo get_permalink(11379); ?>">
                            EFETUAR PEDIDO
                        </a>                        
                    </div>
                </div>                
                <?php
            }
            ?>
            <!--EFETUAR PAGAMENTO-->
            <?php
            if (is_single(11381)) {
                ?> 
                <div id="conteudo_pedido">
                        <p id="texto_pedido"> Consulta </p>
                        <br />
                        <iframe style="overflow: auto;" src="http://pagamentos.anhembi.com.br" width="350" height="900" scrolling="no"></iframe>
                </div>        
                <?php
            }
            ?>            
            <!--EFETUAR PEDIDO-->
            <?php
            if (is_single(11379)) {
                ?>
                <div id="conteudo_pedido">
                        <p id="texto_pedido"> Solicita&ccedil;&atilde;o de servi&ccedil;os </p>
                        <br />
                        <iframe src="http://anhembi.com.br/telecom/formulario/formulario.php" width="690px" height="350px" scrolling="no"></iframe>
                        <div class="botaoComoFunciona">
                        <a class="botoesPadrao" target="_blank" href="<?php echo get_permalink(11339); ?>">
                            TABELA DE SERVI&Ccedil;OS E PRE&Ccedil;OS
                        </a>                        
                    </div>
                        
                </div>        
                <?php            
            }
            ?>  
        </div>
    </div>
</div>
<?php get_footer(); ?>
