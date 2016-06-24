<?php
// inclui o header
get_header();

//looping
while (have_posts()): the_post();

    // escolhe as cores
    include ('sidebar-escolheacor.php');
    // pega o id das paginas
    include ('sidebar-idspaginas.php')
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>;">
        <div id="noticias_section">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
                <?php
                if ($menu == 1) {
                    include ('sidebar-submenu.php');
                } else {
                    
                }
                ?>
            </div>
            <div id="noticias_section_conteudo">
                <div id="page_section_conteudo">
                    <?php the_content(); ?>
                    <?php
                    // Inclui os nomes das escolas
                    include ('sidebar-mapaDoSamba.php');
                    include ('sidebar-idescolas.php');
                    ?>
                    <div id="legenda">
                        <!-- ESCONDIDOS -->
                        <h1>Escolha uma das Associa&ccedil;&otilde;es:</h1>
                        <ul>
                            <li><a href="#" onclick="showhide('especial');">ESPECIAL</a></li>
                            <li><a href="#" onclick="showhide('acesso');">ACESSO</a></li>
                            <li><a href="#" onclick="showhide('uesp_01');">UESP 01</a></li>
                            <!--
                            <li><a href="#" onclick="showhide('uesp_02');">UESP 02</a></li>
                            <li><a href="#" onclick="showhide('uesp_03');">UESP 03</a></li>
                            <li><a href="#" onclick="showhide('uesp_04');">UESP 04</a></li>
                            <li><a href="#" onclick="showhide('blocos_uesp');">BLOCO UESP</a></li>
                            -->
                            <li><a href="#" onclick="showhide('abbc');">ABBC</a></li>
                            <li><a href="#" onclick="showhide('abasp');">ABASP</a></li>
                            <!--<li><a href="#" onclick="showhide('rodas');">RODAS DE SAMBA</a></li>-->
                        </ul>
                        <br>
                        <p> Cr&eacute;ditos: <a target="_blank" href="http://www.observatoriodoturismo.com.br/">Observat&oacute;rio do Turismo</a></p>   
                    </div>
                    <div id="mapa">
                        <!--    UESP 01    -->
                        <div id="uesp_01" style="display: none;">
                            <div id="escola71" class="marcador">
                                <a href="<?php echo get_permalink(200); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_71 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola30" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_30; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola18" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_19 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola53" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_53; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola28" class="marcador">
                                <a href="<?php echo get_permalink(186); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_28 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>  
                            <div id="escola08" class="marcador">
                                <a href="<?php echo get_permalink(4483); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_09; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola12" class="marcador">
                                <a href="<?php echo get_permalink(199); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_13 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola21" class="marcador">
                                <a href="<?php echo get_permalink(195); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_22 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola38" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_38 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola2015_01" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span>Torcida Jovem</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola65" class="marcador">
                                <a href="<?php echo get_permalink(201); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_65 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola74" class="marcador">
                                <a href="<?php echo get_permalink(192); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_74 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola83" class="marcador">
                                <a href="<?php echo get_permalink(167); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_83 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola84" class="marcador">
                                <a href="<?php echo get_permalink(193); ?>" class="marcador_link marcador_linkUesp01 bg_uesp01"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_84 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        <!--    UESP 02    -->
                        <!--
                        <div id="uesp_02" style="display: none;"> 
                            <div id="escola80" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_80; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola42" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_42; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola02" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_03; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            
                            <div id="escola79" class="marcador">
                                <a href="<?php echo get_permalink(653); ?>" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_79 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola03" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_04 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>          
                            
                            <div id="escola31" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_31; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola40" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_40; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola64" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_64; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola82" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_82; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola85" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_85; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola91" class="marcador">
                                <a href="#" class="marcador_link marcador_linkUesp02 bg_uesp02"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_91; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        -->
                        <!--    UESP 03    -->
                        <!--
                        <div id="uesp_03" style="display: none;">   
                            <div id="escola69" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_69; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_02" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span>Brinco da Marquesa</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_03" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span>Imperatriz da Sul</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola73" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp1_73 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola32" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_32; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola92" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_93; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola27" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_27; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola76" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_76; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola37" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_37; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola52" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_52; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola24" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_24; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola10" class="marcador">
                                <a href="#" class="marcador_link bg_uesp03"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_11; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        -->
                        <!--    UESP 04    -->
                        <!--
                        <div id="uesp_04" style="display: none;">   
                            <div id="escola57" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_57; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola63" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_63; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola44" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp3_44; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola29" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_29; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola59" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_59; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola68" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_68; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                           
                            <div id="escola72" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_72; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola25" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_25; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola62" class="marcador">
                                <a href="#" class="marcador_link bg_uesp04"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp4_62; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                           <div id="escola58" class="marcador">
                               <a href="#" class="marcador_link bg_uesp04"> </a>
                               <div class="marcador_popup">
                                   <span><?php echo $uesp4_58; ?></span>
                                   <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                               </div>
                           </div>
                        </div>
                        --> 
                        <!--    BLOCOS UESP    -->
                        <!--
                        <div id="blocos_uesp" style="display: none;">   
                            <div id="escola2015_04" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span>Iraj&aacute; de Souza</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_05" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span>Mocidade Amazonense</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_06" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span>Unidos do Guara&uacute;</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_07" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span>Mocidade Independente da Zona Norte</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola94" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_94 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola60" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_60 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola86" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_17 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola34" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_34 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola15" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_16 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola75" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_75 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola55" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_55 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola14" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_15 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola43" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_43 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola89" class="marcador">
                                <a href="#" class="marcador_link bg_blocouesp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoUesp_89 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div>
                        -->
                        <!--    ESPECIAL    -->
                        <div id="especial" style="display: none;">  
                            <div id="escola06" class="marcador">
                                <a href="<?php echo get_permalink(149); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_07 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola39" class="marcador">
                                <a href="<?php echo get_permalink(151); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_39 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola49" class="marcador">
                                <a href="<?php echo get_permalink(141); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span>Mocidade Alegre</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola67" class="marcador">
                                <a href="<?php echo get_permalink(127); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_67 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola22" class="marcador">
                                <a href="<?php echo get_permalink(133); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_23 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola07" class="marcador">
                                <a href="<?php echo get_permalink(135); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_08 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola35" class="marcador">
                                <a href="<?php echo get_permalink(139); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_35 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola92" class="marcador">
                                <a href="<?php echo get_permalink(49); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_92 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola95" class="marcador">
                                <a href="<?php echo get_permalink(131); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">    
                                    <span><?php echo $especial_95 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola05" class="marcador">
                                <a href="<?php echo get_permalink(125); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_06 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola56" class="marcador">
                                <a href="<?php echo get_permalink(137); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_55 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola86" class="marcador">
                                <a href="<?php echo get_permalink(147); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_86 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola61" class="marcador">
                                <a href="<?php echo get_permalink(183); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_61 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola90" class="marcador">
                                <a href="<?php echo get_permalink(170); ?>" class="marcador_link bg_especial"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_90 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        <!--    ACESSO    -->
                        <div id="acesso" style="display: none;">
                            <div id="escola09" class="marcador">
                                <a href="#" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $uesp2_10 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola47" class="marcador">
                                <a href="<?php echo get_permalink(129); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_47 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola70" class="marcador">
                                <a href="<?php echo get_permalink(145); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_70 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola41" class="marcador">
                                <a href="#" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup marcador_pop upUesp01">
                                    <span><?php echo $uesp2_41; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola54" class="marcador">
                                <a href="<?php echo get_permalink(189); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_54 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola45" class="marcador">
                                <a href="<?php echo get_permalink(180); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $especial_45 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola13" class="marcador">
                                <a href="<?php echo get_permalink(174); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_14 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>

                            <div id="escola17" class="marcador">
                                <a href="<?php echo get_permalink(198); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">   
                                    <span><?php echo $acesso_18 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola36" class="marcador">
                                <a href="<?php echo get_permalink(177); ?>" class="marcador_link bg_acesso"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $acesso_36 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        <!--    ABBC    -->
                        <div id="abbc" style="display: none;">  
                            <!--
                            <div id="escola88" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_88 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            
                            <div id="escola87" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_87 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->


                            <div id="escola2015_08" class="marcador escola2015_08">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Afox&eacute; Omo Od&eacute;</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_09" class="marcador escola2015_09">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Estrela da Coroa</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_10" class="marcador escola2015_10">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bloco Unidos do Abaet&eacute;</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_11" class="marcador escola2015_11">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bloco SSL</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_12" class="marcador escola2015_12">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Comunidade Paraguaia</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola2015_13" class="marcador escola2015_13">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bloco Esquenta do Partido Alto</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola2015_14" class="marcador escola2015_14">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Imp&eacute;rio do Morro</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola2015_15" class="marcador escola2015_15">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Uni&atilde;o dos Bairros</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            
                            
                            
                            
                             <div id="escola2015_17" class="marcador escola2015_15">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bloco Balatubloco</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                             <div id="escola2015_18" class="marcador escola2015_15">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bloco Partideiros do Maria Z&eacute;lia</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                             <div id="escola2015_19" class="marcador escola2015_15">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span>Bo&ecirc;mios da Madame</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>















                            <div id="escola81" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_81 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola19" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_20 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola33" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_33 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola26" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_26 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola01" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_02 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola20" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_21 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola04" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_05 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="escola66" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_66 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <!--
                            <div id="escola77" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo$blocoABBC_77 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            -->
                            <div id="escola46" class="marcador">
                                <a href="#" class="marcador_link bg_abbc"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $blocoABBC_46 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div> 
                        <!-- ABASP -->
                        <div id="abasp" style="display: none;">
                            <div id="abasp01" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_01 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp02" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span>Bantant&atilde;</span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp03" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_03 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp04" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_04 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp05" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_05 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp06" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_06 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp07" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_07 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp08" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_08 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp09" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_09 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp10" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_10 ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp11" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_11; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                            <div id="abasp12" class="marcador">
                                <a href="#" class="marcador_link bg_abasp"> </a>
                                <div class="marcador_popup">
                                    <span><?php echo $abasp_12; ?></span>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ponta_balao.png" alt="Elemento decorativo" />
                                </div>
                            </div>
                        </div>
                        <!-- RODAS DE SAMBA
                        <div id="rodas" style="display:none;">
                            
                            <div id="rodas01" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas02" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas03" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas04" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas05" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas06" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas07" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas08" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas09" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas10" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas11" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas12" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas13" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas14" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
                            <div id="rodas15" class="marcador"> 
                                <div class="marcador_link bg_rodas marcador_link"> </div>
                            </div>
            
             
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div style="width: 970px; height: 20px; float:left;"></div>
        </div>
    </div>  
<?php endwhile; ?>
<?php get_footer(); ?>