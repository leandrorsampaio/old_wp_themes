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
                    $post_id_a = 1810;
                    $queried_post_a = get_post($post_id_a);
                    $title_a = $queried_post_a->post_title;
                    echo $title_a;
                    wp_reset_query()
                    ?>
                </a>
                - 
                <a href="<?php echo get_permalink(509); ?>">
                    <?php
                    $post_id_b = 509;
                    $queried_post_b = get_post($post_id_b);
                    $title_b = $queried_post_b->post_title;
                    echo $title_b;
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
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div class="content_direita_article_titleBox">
                        <a class="content_direita_article_link" href="<?php the_permalink(); ?>">
                            <h2 class="content_direita_article_link_textSingle" name="teste"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div id="content_direita_article_theContent_topBar">
                        <div id="recursos">
                            <div id="recursos_print">
                                <a id="recursos_print_link" target="_self" href="javaScript:window.print()"></a> 
                            </div>
                            <div id="recursos_sendEmail">
                                <?php
                                if (function_exists('wp_email')) {
                                    email_link();
                                }
                                ?>
                            </div>
                            <div id="recursos_pdf">
                                <a id="recursos_pdf_link" href="<?php bloginfo('url') ?>/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>" rel="nofollow"></a>
                            </div>
                            <div id="recursos_textSize">
                                <p id="recursos_textSize_title">Texto:</p>
                                <ul class="resizer">
                                    <li class="small">
                                        <a id="btn_small" href="#"></a>
                                    </li>
                                    <li class="medium">
                                        <a id="btn_medium" href="#"></a>
                                    </li>
                                    <li class="large">
                                        <a id="btn_large" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content_direita_article_theContent">
                        <div class="content_direita_article_theContent_telecom">
                            <?php the_content(); ?>
                            <div class="content_direita_article_theContent_telecom_tabela">
                                <?php
                                //########################################################################
                                // Tabelas - (IF) Internet
                                //########################################################################
                                if (is_single('512')) {
                                    //---------------------------------- Page SERVICOS - Custom Fields
                                    $servicos_valores = new WP_Query('page_id=1810');
                                    while ($servicos_valores->have_posts()) : $servicos_valores->the_post();
                                        ?>
                                        <script language="javascript">                                  
                                            //--------------------- Variaveis Tabelas Internet
                                            //------ Tabela 1 
                                            var valor_item1 = new Number(<?php the_field('valor_item1'); ?>);
                                            var valor_item2 = new Number(<?php the_field('valor_item2'); ?>);
                                            var valor_item3 = new Number(<?php the_field('valor_item3'); ?>);
                                            var valor_item4 = new Number(<?php the_field('valor_item4'); ?>);
                                            var valor_item5 = new Number(<?php the_field('valor_item5'); ?>);
                                            var valor_item6 = new Number(<?php the_field('valor_item6'); ?>);
                                            var valor_item7 = new Number(<?php the_field('valor_item7'); ?>);
                                            //
                                            //                                            var valor_item201 = new Number(<?php the_field('valor_item201'); ?>);
                                            //------ Tabela 2
                                            var valor_item20 = new Number(<?php the_field('valor_item20'); ?>);
                                            var valor_item21 = new Number(<?php the_field('valor_item21'); ?>);
                                            var valor_item22 = new Number(<?php the_field('valor_item22'); ?>);
                                            var valor_item23 = new Number(<?php the_field('valor_item23'); ?>);
                                            var valor_item24 = new Number(<?php the_field('valor_item24'); ?>);
                                            var valor_item25 = new Number(<?php the_field('valor_item25'); ?>);
                                            var valor_item26 = new Number(<?php the_field('valor_item26'); ?>);
                                            //                                            var valor_item206 = new Number(<?php the_field('valor_item206'); ?>);
                                            //   
                                            //------ Tabela 3
//                                            var valor_item2b = new Number(<?php the_field('valor_item2b'); ?>);
//                                            var valor_item208 = new Number(<?php the_field('valor_item208'); ?>);
//                                            var valor_item207 = new Number(<?php the_field('valor_item207'); ?>);
//                                            //------ Tabela 4
//                                            var valor_item21a = new Number(<?php the_field('valor_item21a'); ?>);
//                                            var valor_item21b = new Number(<?php the_field('valor_item21b'); ?>);
//                                            var valor_item21c = new Number(<?php the_field('valor_item21c'); ?>);
//                                            var valor_item21d = new Number(<?php the_field('valor_item21d'); ?>);
//                                            var valor_item21e = new Number(<?php the_field('valor_item21e'); ?>);
//                                            var valor_item21f = new Number(<?php the_field('valor_item21f'); ?>);
                                            //-------------------------------- FUNCTION CALCULA TABELAS
                                            function contaTabelaInternet_1() {  
                                            //o + 150 soma o valor da instalacao
                                                var novoTexto = new Number(document.diarias.diarias_select.value);
                                                var resultado_item1 = new Number(novoTexto * valor_item1  + 150);
                                                var resultado_item2 = new Number(novoTexto * valor_item2 + 150);
                                                var resultado_item3 = new Number(novoTexto * valor_item3 + 150);
                                                var resultado_item4 = new Number(novoTexto * valor_item4 + 150);
                                                var resultado_item5 = new Number(novoTexto * valor_item5 + 150);
                                                var resultado_item6 = new Number(novoTexto * valor_item6 + 150);
                                                var resultado_item7 = new Number(novoTexto * valor_item7 + 150);
                                                //                                                var resultado_item201 = new Number(novoTexto * valor_item201);
                                                document.getElementById("item1").innerHTML = resultado_item1;
                                                document.getElementById("item2").innerHTML = resultado_item2;
                                                document.getElementById("item3").innerHTML = resultado_item3;
                                                document.getElementById("item4").innerHTML = resultado_item4;
                                                document.getElementById("item5").innerHTML = resultado_item5;
                                                document.getElementById("item6").innerHTML = resultado_item6;
                                                document.getElementById("item7").innerHTML = resultado_item7;
                                                //                                                document.getElementById("item201").innerHTML = resultado_item201;                                                                                                                                                        
                                            }
                                            function contaTabelaInternet_2() {
                                                //+ 1200 soma o valor da instalação
                                                var novoTexto = new Number(document.diarias3.diarias_select.value);
                                                var resultado_item20 = new Number(novoTexto * valor_item20 + 1200);
                                                var resultado_item21 = new Number(novoTexto * valor_item21 + 1200);
                                                var resultado_item22 = new Number(novoTexto * valor_item22 + 1200);
                                                var resultado_item23 = new Number(novoTexto * valor_item23 + 1200);
                                                var resultado_item24 = new Number(novoTexto * valor_item24 + 1200);
                                                var resultado_item25 = new Number(novoTexto * valor_item25 + 1200);
                                                var resultado_item26 = new Number(novoTexto * valor_item26 + 1200);
                                                //                                                var resultado_item206 = new Number(novoTexto * valor_item206);
                                                //                                                var resultado_item207 = new Number(novoTexto * valor_item207);
                                                document.getElementById("item20").innerHTML = resultado_item20;
                                                document.getElementById("item21").innerHTML = resultado_item21;   
                                                document.getElementById("item22").innerHTML = resultado_item22;
                                                document.getElementById("item23").innerHTML = resultado_item23;
                                                document.getElementById("item24").innerHTML = resultado_item24;
                                                document.getElementById("item25").innerHTML = resultado_item25;
                                                document.getElementById("item26").innerHTML = resultado_item26;
                                                //                                                document.getElementById("item206").innerHTML = resultado_item206;
                                                //                                                document.getElementById("item207").innerHTML = resultado_item207;
                                            }
//                                            function contaTabelaInternet_3() {
//                                                var novoTexto = new Number(document.diarias2.diarias_select.value);
//                                                var resultado_item2b = new Number(novoTexto * valor_item2b);
//                                                var resultado_item208 = new Number(novoTexto * valor_item208);
//                                                document.getElementById("item2b").innerHTML = resultado_item2b;
//                                                document.getElementById("item208").innerHTML = resultado_item208;                                                                                                                                                    
//                                            }
//                                            function contaTabelaInternet_4() {
//                                                var novoTexto = new Number(document.diarias4.diarias_select.value);
//                                                var resultado_item21a = new Number(novoTexto * valor_item21a);
//                                                var resultado_item21b = new Number(novoTexto * valor_item21b);
//                                                var resultado_item21c = new Number(novoTexto * valor_item21c);
//                                                var resultado_item21d = new Number(novoTexto * valor_item21d);
//                                                var resultado_item21e = new Number(novoTexto * valor_item21e);
//                                                var resultado_item21f = new Number(novoTexto * valor_item21f);
//                                                document.getElementById("item21a").innerHTML = resultado_item21a;
//                                                document.getElementById("item21b").innerHTML = resultado_item21b;
//                                                document.getElementById("item21c").innerHTML = resultado_item21c;
//                                                document.getElementById("item21d").innerHTML = resultado_item21d;
//                                                document.getElementById("item21e").innerHTML = resultado_item21e;
//                                                document.getElementById("item21f").innerHTML = resultado_item21f;
//                                            }
                                        </script>
                                        <div id="telecomTables">
                                            <div id="telecomTables_titulos">
                                                <h1>Acesso compartilhado DHCP 
            <!--                                                    <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>-->
                                                </h1>
                                                <h4>O valor da instala&ccedil;&atilde;o j&aacute; est&aacute; incluso no valor da di&aacute;ria.</h4>
                                            </div>
                                            <!--- TABELA 1 --->
                                            <table cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px"><span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="100px"><span class="telecomTables_linha">
                                                                MODALIDADE 
                                                            </span>
                                                            Banda Larga
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias">
                                                                    <select id="diarias_select" onclick="contaTabelaInternet_1()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                              <?php 
                                              $item1 = get_field('valor_item1') + 150;
                                              $item2 = get_field('valor_item2') + 150; 
                                              $item3 = get_field('valor_item3') + 150; 
                                              $item4 = get_field('valor_item4') + 150; 
                                              $item5 = get_field('valor_item5') + 150; 
                                              $item6 = get_field('valor_item6') + 150; 
                                              $item7 = get_field('valor_item7') + 150; 
                                              
                                              ?>
                                                    <tr>
                                                        <td style="text-align: center;">01</td>
                                                        <td style="text-align: center;">512 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item1"><?php echo $item1; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">02</td>
                                                        <td style="text-align: center;">1 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item2"><?php echo $item2; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">03</td>
                                                        <td style="text-align: center;">2 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item3"><?php echo $item3; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">04</td>
                                                        <td style="text-align: center;">4 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item4"><?php echo $item4; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">05</td>
                                                        <td style="text-align: center;">6 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item5"><?php echo $item5; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">06</td>
                                                        <td style="text-align: center;">8 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item6"><?php echo $item6; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">07</td>
                                                        <td style="text-align: center;">10 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item7"><?php echo $item7; ?></span>, 00</td>
                                                    </tr>
            <!--                                                    <tr>
                                                        <td style="text-align: center;">20.1</td>
                                                        <td style="text-align: center;">5 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item201"><?php the_field('valor_item201'); ?></span>, 00</td>
                                                    </tr>-->
                                                    <tr>
                                                        <td style="text-align: center;" colspan="3">Outras velocidades sob consulta</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="telecomTables">
                                            <div id="telecomTables_titulos">
                                                <h1>Acesso dedicado com IP V&aacute;lido
            <!--                                                    <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>-->
                                                </h1>
                                                 <h4>O valor da instala&ccedil;&atilde;o j&aacute; est&aacute; incluso no valor da di&aacute;ria.</h4>
                                            </div>
                                            <!--- TABELA 3 --->
                                            <table border="2" cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px"><span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="100px"><span class="telecomTables_linha">
                                                                MODALIDADE 
                                                            </span>
                                                            Banda Larga
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias3">
                                                                    <select id="diarias_select" onclick="contaTabelaInternet_2()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                       <?php 
                                              $item20 = get_field('valor_item20') + 1200;
                                              $item21 = get_field('valor_item21') + 1200; 
                                              $item22 = get_field('valor_item22') + 1200; 
                                              $item23 = get_field('valor_item23') + 1200; 
                                              $item24 = get_field('valor_item24') + 1200; 
                                              $item25 = get_field('valor_item25') + 1200; 
                                              $item26 = get_field('valor_item26') + 1200; 
                                              
                                              ?>
                                                    <tr>
                                                        <td style="text-align: center;">20</td>
                                                        <td style="text-align: center;">512 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item20"><?php echo $item20; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21</td>                                                   
                                                        <td style="text-align: center;">1 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item21"><?php echo $item21; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">22</td>
                                                        <td style="text-align: center;">2 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item22"><?php echo $item22; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">23</td>
                                                        <td style="text-align: center;">4 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item23"><?php echo $item23; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">24</td>
                                                        <td style="text-align: center;">6 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item24"><?php echo $item24; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">25</td>
                                                        <td style="text-align: center;">8 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item25"><?php echo $item25; ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">26</td>
                                                        <td style="text-align: center;">10 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item26"><?php echo $item26; ?></span>, 00</td>
                                                    </tr>
                                                    <!--
                                                    <tr>
                                                        <td style="text-align: center;">20.6</td>
                                                        <td style="text-align: center;">7 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item206"><?php the_field('valor_item206'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">20.7</td>
                                                        <td style="text-align: center;">8 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item207"><?php the_field('valor_item207'); ?></span>, 00</td>
                                                    </tr>-->
                                                    <tr>
                                                        <td style="text-align: center;" colspan="3">Outras velocidades sob consulta</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
<!--                                        <div id="telecomTables">
                                            <div id="telecomTables_titulos">
                                                <h1>SPEEDY SAMB&Oacute;DROMO e ARENA ANHEMBI 
                                                                <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>
                                                </h1>
                                                <h4>Valor da instala&ccedil;&atilde;o: R$150,00.</h4>
                                            </div>
                                            - TABELA 2 -
                                            <table border="2" cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px"><span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="100px"><span class="telecomTables_linha">
                                                                MODALIDADE 
                                                            </span>
                                                            Banda Larga
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias2">
                                                                    <select id="diarias_select" onclick="contaTabelaInternet_2()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">8</td>  Anteriormente item 2b 
                                                        <td style="text-align: center;">2 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item2b"><?php the_field('valor_item2b'); ?></span>, 00</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="text-align: center;">20.8</td>
                                                        <td style="text-align: center;">4 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item208"><?php the_field('valor_item208'); ?></span>, 00</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="telecomTables">
                                            <div id="telecomTables_titulos">
                                                <h1>LINHA PRIVATIVA DE DADOS 
                                                                <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>
                                                </h1>
                                                <h4>Valor da instala&ccedil;&atilde;o: R$3150,00</h4>
                                            </div>
                                            - TABELA 4 -
                                            <table border="2" cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px"><span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="100px"><span class="telecomTables_linha">
                                                                MODALIDADE 
                                                            </span>
                                                            Banda Larga
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias4">
                                                                    <select id="diarias_select" onclick="contaTabelaInternet_4()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-A</td>
                                                        <td style="text-align: center;">64 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item21a"><?php the_field('valor_item21a'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-B</td>
                                                        <td style="text-align: center;">128 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item21b"><?php the_field('valor_item21b'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-C</td>
                                                        <td style="text-align: center;">256 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item21c"><?php the_field('valor_item21c'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-D</td>
                                                        <td style="text-align: center;">512 Kbps</td>
                                                        <td style="text-align: center;">R$<span id="item21d"><?php the_field('valor_item21d'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-E</td>
                                                        <td style="text-align: center;">1 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item21e"><?php the_field('valor_item21e'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">21-F</td>
                                                        <td style="text-align: center;">2 Mbps</td>
                                                        <td style="text-align: center;">R$<span id="item21f"><?php the_field('valor_item21f'); ?></span>, 00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    //########################################################################
                                    // Tabelas - (IF) Telefonia
                                    //########################################################################
                                } elseif (is_single('513')) {
                                    //---------------------------------- Page SERVICOS - Custon Fields
                                    $servicos_valores = new WP_Query('page_id=1810');
                                    while ($servicos_valores->have_posts()) : $servicos_valores->the_post();
                                        ?>
                                        <script language="javascript">                                  
                                            //---------------------- Variáveis Tabela Telefonia
                                            var valor_item60 = new Number(<?php the_field('valor_item60'); ?>);
                                            //-------------------------------- FUNCTION CALCULA TABELAS
                                            function contaTabelaTelefonia() {
                                                var novoTexto = new Number(document.diarias.diarias_select.value);
                                                var resultado_item60 = new Number(novoTexto * valor_item60 + 60);
                                                document.getElementById("item60").innerHTML = resultado_item60;                                                                                                                                                                                                                                
                                            }
                                        </script>
                                        <div id="telecomTables">
                                            <div id="telecomTables_titulos">
                                                <h1>Linha telef&ocirc;nica
            <!--                                                    <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>-->
                                                </h1>
                                                  <h4>O valor da instala&ccedil;&atilde;o j&aacute; est&aacute; incluso no valor da di&aacute;ria.</h4>
                                            </div>
                                            <table cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px">
                                                            <span class="telecomTables_linha">
                                                                C&Oacute;digo
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="100px">
                                                            <span class="telecomTables_linha">
                                                                DESCRI&Ccedil;&Atilde;O
                                                            </span>
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias">
                                                                    <select id="diarias_select" onclick="contaTabelaTelefonia()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                                <?php 
                                              $item60 = get_field('valor_item60') + 60;
                                              ?>
                                                    <tr>
                                                        <td style="text-align: center;" rowspan="2" valign="middle">60</td>
                                                        <td style="text-align: center;">Linha Telef&ocirc;nica DDR*</td>
                                                        <td style="text-align: center;">R$<span id="item60"><?php echo $item60; ?></span>, 00</td></td>
                                                    </tr>
            <!--                                                    <tr>
                                                        <td style="text-align: center;">Tarifa&ccedil;&atilde;o</td>
                                                        <td style="text-align: center;">Conforme a utiliza&ccedil;&atilde;o apurada na fase P&oacute;s-evento</td>
                                                    </tr>-->
                                                    <!--
                                                    <tr>
                                                        <td style="text-align: center;">14</td>
                                                        <td style="text-align: center;">Instala&ccedil;&atilde;o de rede interna por ponto de voz</td>
                                                        <td style="text-align: center;">R$<span id="item14"><?php // the_field('valor_item14');                       ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">20</td>
                                                        <td style="text-align: center;">Outros servi&ccedil;os/or&ccedil;amento completo</td>
                                                        <td style="text-align: center;">a consultar</td>
                                                    </tr>
                                                    -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--                                        <div id="telecomTables">
                                                                                    <div id="telecomTables_titulos">
                                                                                        <h1>Servi&ccedil;os
                                                                                            <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/></h1>
                                                                                        <h4>Valores com instala&ccedil;&atilde;o inclusos.</h4>
                                                                                    </div>
                                                                                    <table cellspacing="3">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="text-align: center;" bgcolor="#FFCB3E" width="70px">
                                                                                                    <span class="telecomTables_linha">
                                                                                                        C&Oacute;digo
                                                                                                    </span>
                                                                                                </td>
                                                                                                <td style="text-align: center;" bgcolor="#FFCB3E" width="100px">
                                                                                                    <span class="telecomTables_linha">
                                                                                                        DESCRI&Ccedil;&Atilde;O
                                                                                                    </span>
                                                                                                </td>
                                                                                                <td bgcolor="#FFCB3E" width="200px">
                                                                                                    <div class="telecomTables_titulo_selectB">
                                                                                                        PRE&Ccedil;O POR ITEM
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="text-align: center;">16</td>
                                                                                                <td style="text-align: center;">Programa&ccedil;&atilde;o HOTLINE - linha telef&ocirc;nica direta</td>
                                                                                                <td style="text-align: center;">R$<span id="item16"><?php //the_field('valor_item16');         ?></span>, 00</td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="text-align: center;">17</td>
                                                                                                <td style="text-align: center;">Bloqueio de ramal</td>
                                                                                                <td style="text-align: center;">R$<span id="item17"><?php //the_field('valor_item17');         ?></span>, 00</td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="text-align: center;">18</td>
                                                                                                <td style="text-align: center;">Grupo de captura entre ramais</td>
                                                                                                <td style="text-align: center;">R$<span id="item18"><?php //the_field('valor_item18');         ?></span>, 00</td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="text-align: center;">19</td>
                                                                                                <td style="text-align: center;">Grupo consecutivo entre ramais</td>
                                                                                                <td style="text-align: center;">R$<span id="item19"><?php //the_field('valor_item19');         ?></span>, 00</td></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>-->
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    //########################################################################
                                    // Tabelas - (IF) Instalacao e Suporte
                                    //########################################################################
                                } elseif (is_single('515')) {
                                    //---------------------------------- Page SERVICOS - Custon Fields
                                    $servicos_valores = new WP_Query('page_id=1810');
                                    while ($servicos_valores->have_posts()) : $servicos_valores->the_post();
                                        ?>
                                        <div id = "telecomTables">
                                            <div id = "telecomTables_titulos">
                                                <h1>Instala&ccedil;&atilde;o e Suporte &agrave; rede de dados 
            <!--                                                    <img title="Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/images/icon-help.png"/>-->
                                                </h1>
                                            </div>
                                            <table cellspacing="3">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="70px">
                                                            <span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style="text-align: center;" bgcolor="#FFCB3E" width="120px">
                                                            <span class="telecomTables_linha">
                                                                SERVI&Ccedil;OS
                                                            </span>
                                                        </td>
                                                        <td bgcolor="#FFCB3E" width="200px">
                                                            <div class="telecomTables_titulo_selectB">
                                                                INSTALA&Ccedil;&Atilde;O
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">80</td>
                                                        <td style="text-align: center;">Instala&ccedil;&atilde;o de rede interna por ponto de voz</td>
                                                        <td style="text-align: center;">R$<span id="item80"><?php the_field('valor_item80'); ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">81</td>
                                                        <td style="text-align: center;">Instala&ccedil;&atilde;o de rede interna por ponto de dados</td>
                                                        <td style = "text-align: center;">R$ <span id="item81"><?php the_field('valor_item81'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">82</td>
                                                        <td style="text-align: center;">Programa&ccedil;&atilde;o HOTLINE - linha telef&ocirc;nica direta</td>
                                                        <td style="text-align: center;">R$<span id="item82"><?php the_field('valor_item82'); ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">83</td>
                                                        <td style="text-align: center;">Bloqueio de ramal</td>
                                                        <td style="text-align: center;">R$<span id="item83"><?php the_field('valor_item83'); ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">84</td>
                                                        <td style="text-align: center;">Grupo de captura entre ramais</td>
                                                        <td style="text-align: center;">R$<span id="item84"><?php the_field('valor_item84'); ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">85</td>
                                                        <td style="text-align: center;">Grupo consecutivo entre ramais</td>
                                                        <td style="text-align: center;">R$<span id="item85"><?php the_field('valor_item85'); ?></span>, 00</td></td>
                                                    </tr>
                                                       <tr>
                                                        <td style="text-align: center;">86</td>
                                                        <td style="text-align: center;">Linha Privativa de Voz (instala&ccedil;&atilde;o)</td>
                                                        <td style="text-align: center;">R$<span id="item86"><?php the_field('valor_item86'); ?></span>, 00</td></td>
                                                    </tr>
                                                       <tr>
                                                        <td style="text-align: center;">87</td>
                                                        <td style="text-align: center;">Linha Privativa de Dados (instala&ccedil;&atilde;o)</td>
                                                        <td style="text-align: center;">R$<span id="item87"><?php the_field('valor_item87'); ?></span>, 00</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">100</td>
                                                        <td>Outros servi&ccedil;os/or&ccedil;amento completo</td>
                                                        <td style="text-align: center;">a consultar</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    //########################################################################
                                    // Tabelas - (IF) Locacao de Equipamentos
                                    //########################################################################
                                } elseif (is_single('514')) {
                                    //---------------------------------- Page SERVICOS - Custom Fields
                                    $servicos_valores = new WP_Query('page_id=1810');
                                    while ($servicos_valores->have_posts()) : $servicos_valores->the_post();
                                        ?>
                                        <script language="javascript">                                  
                                            //--------------------- Variáveis Tabela Locação                                    
                                            var valor_item70 = new Number(<?php the_field('valor_item70'); ?>);
                                            var valor_item71 = new Number(<?php the_field('valor_item71'); ?>);
                                            var valor_item72 = new Number(<?php the_field('valor_item72'); ?>);
                                            //-------------------------------- FUNCTION CALCULA TABELAS
                                            function contaTabelaLocacao() {
                                                var novoTexto = new Number(document.diarias.diarias_select.value);
                                                var resultado_item70 = new Number(novoTexto * valor_item70);
                                                var resultado_item71 = new Number(novoTexto * valor_item71);
                                                var resultado_item72 = new Number(novoTexto * valor_item72);
                                                document.getElementById("item70").innerHTML = resultado_item70;
                                                document.getElementById("item71").innerHTML = resultado_item71;
                                                document.getElementById("item72").innerHTML = resultado_item72;
                                            }
                                        </script>
                                        <div id = "telecomTables">
                                            <div id = "telecomTables_titulos">
                                                <h1>Loca&ccedil;&atilde;o de equipamentos 
            <!--                                                    <img title = "Aqui v&atilde;o as informa&ccedil;&otilde;es de ajuda" src="<?php bloginfo('template_url') ?>/images/icon-help.png"/>-->
                                                </h1>
                                            </div>
                                            <table cellspacing = "3">
                                                <tbody>
                                                    <tr>
                                                        <td style = "text-align: center;" valign = "middle" bgcolor = "#FFCB3E" width = "70px">
                                                            <span class="telecomTables_linha">
                                                                C&Oacute;DIGO
                                                            </span>
                                                        </td>
                                                        <td style = "text-align: center;" bgcolor = "#FFCB3E" width = "100px">
                                                            <span class="telecomTables_linha">
                                                                ITENS
                                                            </span>
                                                        </td>
                                                        <td bgcolor = "#FFCB3E" width = "200px">
                                                            <div class="telecomTables_titulo_select">
                                                                PRE&Ccedil;O -  selecione a quantidade de di&aacute;rias
                                                            </div>
                                                            <div class="select_box">
                                                                <form name="diarias">
                                                                    <select id="diarias_select" onclick="contaTabelaLocacao()">
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
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style = "text-align: center;">70</td>
                                                        <td style = "text-align: center;">Aparelho Telef&ocirc;nico Anal&oacute;gico</td>
                                                        <td style = "text-align: center;">R$ <span id="item70"><?php the_field('valor_item70'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style = "text-align: center;">71</td>
                                                        <td style = "text-align: center;">Switch 10/100 Mbps de 08 portas</td>
                                                        <td style = "text-align: center;">R$ <span id="item71"><?php the_field('valor_item71'); ?></span>, 00</td>
                                                    </tr>
                                                    <tr>
                                                        <td style = "text-align: center;">72</td>
                                                        <td style = "text-align: center;">Roteador 2 portas (com acesso Wireless)</td>
                                                        <td style = "text-align: center;">R$ <span id="item72"><?php the_field('valor_item72'); ?></span>, 00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    //------------------------------------- (IF) Single - Formulario para Solicitacao de Servicos
                                } elseif (is_single('2610')) {
                                    ?>  
                                    <!-- 
                                    <div id="telecomForm">
                                        <iframe src="http://spturis.com/sistemas/mailer_anhembi/mailer_telecom_form.php" frameBorder=0 width=650 height=1000 scrolling='no'></iframe>
                                    </div>
                                    -->
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div id="content_direita_article_menuTelecom">
                            <?php
                            //---------------------------------- Telecom Menu lateral - (IF) Internet
                            if (is_single('512')) {
                                ?>
                                <h2 class="content_direita_article_menuTelecom_ativo">
                                    <?php the_title(); ?>
                                </h2>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/content_direita_article_menuTelecom_internet.png">
                                <?php
                                $telecom_telefonia = new WP_Query('post_type=servicos&p=513');
                                while ($telecom_telefonia->have_posts()) : $telecom_telefonia->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_suporte = new WP_Query('post_type=servicos&p=515');
                                while ($telecom_suporte->have_posts()) : $telecom_suporte->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_locacao = new WP_Query('post_type=servicos&p=514');
                                while ($telecom_locacao->have_posts()) : $telecom_locacao->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                //---------------------------------- Telecom Menu lateral - (IF) Telefonia
                            } elseif (is_single('513')) {
                                ?>
                                <?php
                                $telecom_telefonia = new WP_Query('post_type=servicos&p=512');
                                while ($telecom_telefonia->have_posts()) : $telecom_telefonia->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <h2 class="content_direita_article_menuTelecom_ativo">
                                    <?php the_title(); ?>
                                </h2>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/content_direita_article_menuTelecom_telefonia.png">
                                <?php
                                $telecom_suporte = new WP_Query('post_type=servicos&p=515');
                                while ($telecom_suporte->have_posts()) : $telecom_suporte->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_locacao = new WP_Query('post_type=servicos&p=514');
                                while ($telecom_locacao->have_posts()) : $telecom_locacao->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                //---------------------------------- Telecom Menu lateral - (IF) Instalacao e Suporte
                            } elseif (is_single('515')) {
                                ?>
                                <?php
                                $telecom_telefonia = new WP_Query('post_type=servicos&p=512');
                                while ($telecom_telefonia->have_posts()) : $telecom_telefonia->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_suporte = new WP_Query('post_type=servicos&p=513');
                                while ($telecom_suporte->have_posts()) : $telecom_suporte->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <h2 class="content_direita_article_menuTelecom_ativo">
                                    <?php the_title(); ?>
                                </h2>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/content_direita_article_menuTelecom_instalacao.png">
                                <?php
                                $telecom_locacao = new WP_Query('post_type=servicos&p=514');
                                while ($telecom_locacao->have_posts()) : $telecom_locacao->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                //---------------------------------- Telecom Menu lateral - (IF) Locacao de Equipamentos
                            } elseif (is_single('514')) {
                                ?>
                                <?php
                                $telecom_telefonia = new WP_Query('post_type=servicos&p=512');
                                while ($telecom_telefonia->have_posts()) : $telecom_telefonia->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_suporte = new WP_Query('post_type=servicos&p=513');
                                while ($telecom_suporte->have_posts()) : $telecom_suporte->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <?php
                                $telecom_locacao = new WP_Query('post_type=servicos&p=515');
                                while ($telecom_locacao->have_posts()) : $telecom_locacao->the_post();
                                    ?>
                                    <h2 class="servicos_4col_title">
                                        <a class="servicos_4col_title_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumb-single2colunas') ?>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <h2 class="content_direita_article_menuTelecom_ativo">
                                    <?php the_title(); ?>
                                </h2>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/content_direita_article_menuTelecom_locacao.png">
                                <?php
                                ?>
                                <?php
                                //---------------------------------- Telecom Menu lateral - (IF) Formulario para Solicitacao de Servicos
                            } else {
                                ?>
                                <?php
                            }
                            ?>
                        </div> 
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>