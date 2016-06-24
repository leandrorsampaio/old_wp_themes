<?php
// Modulo do programador
include ('inc_programmer.php');
//
// get header()    
include ('header.php');
//
?>






<div class="indexMobile">
    <script>
        // Altura do Slider
        function myFunctionSlider() {
            var ALTURA = ($(window).height());
            if (ALTURA < 801) {
                var mudaid = ($(window).height()) - 100 + "px";
            } else {
                var mudaid = ($(window).height()) / 1.5 - 100 + "px";
                ;
            }
            document.getElementById('sliderFunc1').style.height = mudaid;
            document.getElementById('sliderFunc2').style.height = mudaid;
            document.getElementById('sliderFunc3').style.height = mudaid;
        }
    </script>
    <!-- Swiper -->
    <div class="swiper-container destaquesHome_mobile containerFixed" id="sliderFunc1">
        <div class="swiper-wrapper destaquesHome_mobile_wrapper" id="sliderFunc2">
            <?php
            $argsSliderHome = array(
                'post_type' => 'sliderhome',
                'posts_per_page' => -1,
                'orderby' => 'rand'
            );
            //
            global $querySliderHome;
            $querySliderHome = new WP_Query($argsSliderHome);
            while ($querySliderHome->have_posts()) : $querySliderHome->the_post();
                //
                $sliderHomeMobID = get_the_ID();
                $sliderHomeMobTITLE = get_field_object($slider_textmobile, $sliderHomeMobID);
                //
                echo '<a  class="swiper-slide destaquesHome_mobile_wrapper_item" id="sliderFunc3" style="background-image: url(' . get_field('slider_imagen') . ');">';
                //
                echo '<span class="destaquesHome_mobile_wrapper_item_content">';
                echo '<h1>' . $sliderHomeMobTITLE['value'] . '</h1>';
                echo '</span>';
                //
                echo '</a>';
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
    <script>
        var destaquesHome_mobile = new Swiper('.destaquesHome_mobile', {
            //pagination: '.swiper-pagination',
            autoplay: 6000,
            speed: 500,
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 0,
            loop: true
        });
    </script>
</div>




<p class="destaquesHomeTitle">UMA CIDADE QUE N&Atilde;O CANSA DE SURPREENDER</p>
<div class="destaquesHome containerFixed">
    <div class="destaquesHome_wrapper">
        <?php
        $cont01 = 0;
        $argsDestaquesHome = array(
            'post_type' => 'destaqueshome',
            'posts_per_page' => 4,
            'orderby' => 'rand'
        );
        //
        global $queryDestaquesHome;
        $queryDestaquesHome = new WP_Query($argsDestaquesHome);
        while ($queryDestaquesHome->have_posts()) : $queryDestaquesHome->the_post();
            //
            $destaquesHomeID = get_the_ID();
            $destaquesHomeTITLE = get_field_object($destaqueshome_title, $destaquesHomeID);
            $destaquesHomeRESUMO = get_field_object($destaqueshome_resumo, $destaquesHomeID);
            //
            //
            echo '<div class="destaquesHome_wrapper_item_box">';
            ?>

            <script>
                function destaquesHomeOn<?php echo $cont01; ?>() {
                    document.getElementById("destaquesHome_link").className = "destaquesHome_wrapper_item_box_linkHover-ON";
                }
                function destaquesHomeOff<?php echo $cont01; ?>() {
                    document.getElementById("destaquesHome_link").className = "destaquesHome_wrapper_item_box_linkHover-OFF";
                }
            </script>


            <?php
            echo '<a href="' . get_field('destaqueshome_link') . $idiomaURL . '" onmouseover="destaquesHomeOn' . $cont01 . '()" onmouseout="destaquesHomeOff' . $cont01 . '()" class="destaquesHome_wrapper_item_box_link" style="background-image: url(' . get_field('destaqueshome_imagem') . ');"></a>';

            echo '<a href="' . get_field('destaqueshome_link') . $idiomaURL . '" class="destaquesHome_wrapper_item_box_linkHover" id="destaquesHome_link"><span>Clique e saiba mais</span></a>';




            echo '<h2>' . $destaquesHomeTITLE['value'] . '</h2>';
            echo '<p>' . $destaquesHomeRESUMO['value'] . '</p>';
            echo '<span>' . get_field('destaqueshome_credito') . '</span>';
            echo '</div>';
            //
            $cont01 = $cont01 + 1;
        //
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>





<!--
<div class="indexMobile">
    <div class="content_abasMobile">
        <div class="content_block block-1x">
            <div class="tabcordion cspTabs cspTabs-vermelho vermelhoTabs_interna">
                <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-vermelho">
                    <li class="vermelhoTabs_interna_item">
                        <a data-target=".sppara" class="vermelhoTabs_interna_item_link">
                            <p class="vermelhoTabs_interna_item_link_text">S&Atilde;O PAULO PARA...</p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content cspTabs_containers">
                    <div class="tab-content-item sppara cspTabs_containers_item vermelhoTabs_container vermelhoTabs_container-guia">
                        <div class="wpWysiwyg wpWysiwyg-vermelho"  style="height: auto;">
                            <div id="container">
                                <div class="container_item">
                                    <div class="leftimage"><img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_lgbt.png" style="width: 100%;" /></div>
                                    <div class="righttext"><h2>LGBT</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div> 
                                </div>

                                <div class="container_item">
                                    <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_baladeiros.png" style="width: 100%;" /></div>
                                    <div class="righttext"><h2>BALADEIROS</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div> 
                                </div> 

                                <div class="container_item">
                                    <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_gourmets.png" style="width: 100%;" /></div>
                                    <div class="righttext"><h2>GOURMETS</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div> 
                                </div>
                                <div class="container_item">
                                    <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_atletas.png" style="width: 100%;" /></div>
                                    <div class="righttext"><h2>ATLETAS</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_block block-1x">
            <div class="tabcordion cspTabs cspTabs-amarelo amareloTabs_interna">
                <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-amarelo">
                    <li class="amareloTabs_interna_item">
                        <a data-target=".explore" class="amareloTabs_interna_item_link">
                            <p class="amareloTabs_interna_item_link_text">COMO EXPLORAR</p>
                        </a>
                    </li>  
                </ul>
                <div class="tab-content cspTabs_containers">
                    <div class="tab-content-item explore cspTabs_containers_item amareloTabs_container amareloTabs_container-guia">
                        <div class="wpWysiwyg wpWysiwyg-amarelo"  style="height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_block block-1x">
            <div class="tabcordion cspTabs cspTabs-azul azulTabs_interna">
                <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-azul">
                    <li class="azulTabs_interna_item">
                        <a data-target=".vivasp" class="azulTabs_interna_item_link">
                            <p class="azulTabs_interna_item_link_text">SP EM IMAGENS</p>
                        </a>
                    </li>    
                </ul>

                <div class="tab-content cspTabs_containers">
                    <div class="tab-content-item vivasp cspTabs_containers_item azulTabs_container azulTabs_container-guia">
                        <div class="wpWysiwyg wpWysiwyg-azul" style="height: 1280px;">

                            <div class="containerFixed">

                                <a href="<?php echo get_permalink($lpg_1_passeiovirtual); ?>">

                                    <div class="imagens360_first-line">
                                        <div class="imagens360_1 imagens360_box">
                                        </div>
                                    </div>

                                    <div class="imagens360_first-line">
                                        <div class="imagens360_2 imagens360_box">
                                        </div>
                                    </div>

                                    <div class="imagens360_first-line">
                                        <div class="imagens360_3 imagens360_box">
                                        </div>
                                    </div>

                                    <div class="imagens360_first-line">
                                        <div class="imagens360_4 imagens360_box">
                                        </div>
                                    </div>

                                    <div class="imagens360_second-line">
                                        <div class="imagens360_5 imagens360_box">
                                        </div>
                                    </div>

                                    <div class="imagens360_second-line">
                                        <div class="imagens360_6 imagens360_box">
                                        </div>                       
                                    </div>

                                    <div class="imagens360_second-line">
                                        <div class="imagens360_7 imagens360_box">
                                        </div>                       
                                    </div>

                                    <div class="imagens360_second-line">
                                        <div class="imagens360_8 imagens360_box">
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->























<div class="indexMobile">

    <div class="content_block block-1x">
        <div class="tabcordion cspTabs cspTabs-indexMobile">
            <ul class="nav nav-tabs cspTabs_ul">
                <li>
                    <a data-target=".M001">S&Atilde;O PAULO PARA...</a>
                </li>
                <li>
                    <a data-target=".M002">COMO EXPLORAR</a>
                </li>
                <li>
                    <a data-target=".M003">SP EM IMAGENS</a>
                </li>
            </ul>
            <div class="tab-content cspTabs_containers">
                <div class="tab-content-item M001 cspTabs_containers_item_noBoarder">
                    <div class="wpWysiwyg wpWysiwyg-vermelho">
                        <div id="container">
                            <div class="container_item">
                                <div class="leftimage"><img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_lgbt.png" style="width: 100%;" /></div>
                                <div class="righttext"><h2>LGBT</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div> 
                            </div>

                            <div class="container_item">
                                <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_baladeiros.png" style="width: 100%;" /></div>
                                <div class="righttext"><h2>BALADEIROS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div> 
                            </div> 

                            <div class="container_item">
                                <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_gourmets.png" style="width: 100%;" /></div>
                                <div class="righttext"><h2>GOURMETS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div> 
                            </div>
                            <div class="container_item">
                                <div class="leftimage"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_atletas.png" style="width: 100%;" /></div>
                                <div class="righttext"><h2>ATLETAS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content-item M002 cspTabs_containers_item_noBoarder">
                    <div class="wpWysiwyg wpWysiwyg-amarelo">
                        <div class="indexMobTabMapa">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/home_mapadacidade.png" />
                        </div>
                    </div>
                </div>
                <div class="tab-content-item M003 cspTabs_containers_item_noBoarder">
                    <div class="wpWysiwyg wpWysiwyg-azul">
                        <a class="container360MobIndex" href="<?php echo get_permalink($lpg_1_passeiovirtual); ?>">
                            <div class="container360MobIndex_separator"></div>
                            <div class="imagens360_first-line">
                                <div class="imagens360_1 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_2 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_3 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_4 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_5 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_6 imagens360_box">
                                </div>                       
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_7 imagens360_box">
                                </div>                       
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_8 imagens360_box">
                                </div>
                            </div>

                            <div class="container360MobIndex_separator"></div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
























<div class="indexDesktop">

    <div class="abasHome containerFull">
        <div class="tabcordion containerFull">
            <ul class="nav nav-tabs containerFixed">
                <li class="active">
                    <a class="abasHome_aba abasHome_aba-01" data-target=".01">S&Atilde;O PAULO PARA...</a>
                </li>
                <li>
                    <a class="abasHome_aba abasHome_aba-02" data-target=".02">COMO EXPLORAR</a>
                </li>
                <li>
                    <a class="abasHome_aba abasHome_aba-03 noRightMargin" data-target=".03">SP EM IMAGENS</a>
                </li>
            </ul>
            <div class="tab-content containerFull">
                <div class="01 abasHome_blocks blocks-01 active in">
                    <div class="containerFixed">


                        <div class="sppara-first">
                            <div class="sp-first">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_lgbt.png" style="width: 46%;" />
                                <div class="textbox">
                                    <h2>LGBT</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                            </div>

                            <div class="sp-last">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_baladeiros.png" style="width: 46%;" />
                                <div class="textbox">
                                    <h2>BALADEIROS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sppara-second">
                            <div class="sp-first">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_gourmets.png" style="width: 46%;" />
                                <div class="textbox">
                                    <h2>GOURMETS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                            </div>

                            <div class="sp-last">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/sppara_atletas.png" style="width: 46%;" />
                                <div class="textbox">
                                    <h2>ATLETAS</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                            </div>
                        </div>




                    </div>    
                </div>
                <div class="02 abasHome_blocks blocks-02">
                    <div class="containerFixed">

                        <script>
                            function norte() {
                                document.getElementById("norte_css").style.display = "block";
                                document.getElementById("oeste_css").style.display = "none";
                                document.getElementById("sul_css").style.display = "none";
                                document.getElementById("leste_css").style.display = "none";
                                document.getElementById("centro_css").style.display = "none";
                                document.getElementById("norte").style.fontWeight = "bold";
                                document.getElementById("sul").style.fontWeight = "normal";
                                document.getElementById("leste").style.fontWeight = "normal";
                                document.getElementById("oeste").style.fontWeight = "normal";
                                document.getElementById("centro").style.fontWeight = "normal";

                            }
                            function oeste() {
                                document.getElementById("norte_css").style.display = "none";
                                document.getElementById("oeste_css").style.display = "block";
                                document.getElementById("sul_css").style.display = "none";
                                document.getElementById("leste_css").style.display = "none";
                                document.getElementById("centro_css").style.display = "none";
                                document.getElementById("norte").style.fontWeight = "normal";
                                document.getElementById("sul").style.fontWeight = "normal";
                                document.getElementById("leste").style.fontWeight = "normal";
                                document.getElementById("oeste").style.fontWeight = "bold";
                                document.getElementById("centro").style.fontWeight = "normal";
                            }
                            function sul() {
                                document.getElementById("norte_css").style.display = "none";
                                document.getElementById("oeste_css").style.display = "none";
                                document.getElementById("sul_css").style.display = "block";
                                document.getElementById("leste_css").style.display = "none";
                                document.getElementById("centro_css").style.display = "none";
                                document.getElementById("norte").style.fontWeight = "normal";
                                document.getElementById("sul").style.fontWeight = "bold";
                                document.getElementById("leste").style.fontWeight = "normal";
                                document.getElementById("oeste").style.fontWeight = "normal";
                                document.getElementById("centro").style.fontWeight = "normal";
                            }
                            function leste() {
                                document.getElementById("norte_css").style.display = "none";
                                document.getElementById("oeste_css").style.display = "none";
                                document.getElementById("sul_css").style.display = "none";
                                document.getElementById("leste_css").style.display = "block";
                                document.getElementById("centro_css").style.display = "none";
                                document.getElementById("norte").style.fontWeight = "normal";
                                document.getElementById("sul").style.fontWeight = "normal";
                                document.getElementById("leste").style.fontWeight = "bold";
                                document.getElementById("oeste").style.fontWeight = "normal";
                                document.getElementById("centro").style.fontWeight = "normal";
                            }
                            function centro() {
                                document.getElementById("norte_css").style.display = "none";
                                document.getElementById("oeste_css").style.display = "none";
                                document.getElementById("sul_css").style.display = "none";
                                document.getElementById("leste_css").style.display = "none";
                                document.getElementById("centro_css").style.display = "block";
                                document.getElementById("norte").style.fontWeight = "normal";
                                document.getElementById("sul").style.fontWeight = "normal";
                                document.getElementById("leste").style.fontWeight = "normal";
                                document.getElementById("oeste").style.fontWeight = "normal";
                                document.getElementById("centro").style.fontWeight = "bold";
                            }
                        </script>

                        <div class="introbox">
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </p>
                            <h3>REGI&Odblac;ES DE S&Atilde;O PAULO</h3>    
                            <ul>
                                <li id="centro">- Centro</li>
                                <li id="norte">- Norte</li>
                                <li id="sul">- Sul</li>
                                <li id="leste">- Leste</li>
                                <li id="oeste">- Oeste</li>
                            </ul>
                        </div>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/home_mapadacidade.png" width="245" height="375" usemap="#Map" border="0" style="float: right; margin-top: 10px;     cursor: pointer;   position: relative;" />
                        <map name="Map" id="Map">

                            <area shape="poly"
                                  onclick="norte()"
                                  coords="113,39,116,29,120,26,121,22,131,16,135,16,141,10,146,7,147,10,144,14,144,18,138,27,138,31,133,36,133,45,134,50,131,58,132,64,136,69,137,82,138,91,139,94,133,96,123,99,118,96,111,93,98,93,78,89,68,87,57,88,53,89,51,87,42,86,39,79,36,79,33,72,29,65,23,63,19,59,17,63,14,58,17,56,14,53,11,47,6,41,7,36,6,30,12,29,19,32,21,34,25,32,29,29,32,28,34,23,37,24,42,24,46,24,55,29,57,35,61,37,65,41,68,42,70,43,74,45,77,40,81,41,84,42,88,46,91,48,98,45,102,45,105,43"  alt="Norte" />

                            <area onclick="oeste()" shape="poly" coords="36,87,43,90,50,91,51,95,57,92,68,91,77,94,86,95,83,104,78,112,80,116,89,122,82,130,79,135,77,145,72,153,66,150,58,145,50,146,43,147,46,142,41,140,37,136,34,134,28,139,18,142,13,142,16,134,26,128,35,121,38,113,38,101,41,99,46,94"  alt="Oeste" />

                            <area onclick="centro()" shape="poly" coords="91,96,97,97,104,97,103,105,103,114,110,117,113,120,110,123,105,126,99,124,92,120,87,115,83,114,84,111,88,107,90,102"  alt="Centro" />


                            <area onclick="leste()" shape="poly" coords="107,96,112,99,117,100,121,104,130,101,137,100,142,98,144,91,148,89,151,81,157,79,164,74,176,77,184,74,189,81,198,80,205,73,215,72,217,78,223,79,230,74,235,83,237,88,233,90,227,97,223,100,222,105,225,109,222,112,226,120,229,125,229,129,229,132,228,138,221,142,221,147,217,152,216,158,211,162,205,160,201,164,192,162,186,160,184,154,178,152,168,153,161,147,151,147,145,142,140,145,131,139,122,132,116,115,107,113"  alt="Leste" />
                            <area onclick="sul()" shape="poly" coords="93,126,99,129,107,130,110,132,114,125,127,143,125,160,123,166,112,172,110,170,105,173,108,166,106,156,92,155,90,162,87,160,78,167,75,173,81,182,80,190,74,195,76,199,81,201,87,211,91,219,94,230,105,243,104,263,99,268,100,283,108,288,108,304,110,313,112,319,110,325,108,330,113,335,112,338,112,340,104,349,99,354,99,360,95,363,88,357,78,358,71,354,66,359,60,361,46,360,34,366,41,353,39,349,36,345,31,341,27,335,19,331,15,329,12,316,15,309,28,308,29,284,28,278,35,278,37,268,27,260,22,257,16,257,22,249,23,240,32,233,33,225,22,218,18,214,20,206,21,195,17,187,20,167,39,150,49,151,57,150,61,152,64,152,70,157,74,157,80,147,83,134"  alt="Sul" />    
                        </map>

                        <div class="mapbox_home">
                            <div class="maptext_home" id="norte_css">
                                <p>
                                    A regi&atilde;o norte &eacute; o port&atilde;o de entrada de S&atilde;o Paulo para a maioria dos visitantes que chegam de &ocirc;nibus na cidade. Ali est&aacute; o Terminal Rodovi&aacute;rio do Tiet&ecirc;, entre os mais movimentados do mundo. Atende mais de 600 localidades no Brasil e quatro pa&iacute;ses: Uruguai, Paraguai, Chile e Argentina.
                                </p>
                            </div>
                            <div class="maptext_home" id="oeste_css">
                                <p>
                                    A regi&atilde;o engloba complexos culturais fechados e abertos. Na Cidade Universit&aacute;ria est&atilde;o importantes museus da cidade. Ao seu lado, cobras e aranhas chamam a aten&ccedil;&atilde;o no Instituto Butantan. Conjuntos arquitet&ocirc;nicos famosos fazem do Sesc Pomp&eacute;ia, Instituto Tomie Ohtake e Memorial da Am&eacute;rica Latina atra&ccedil;&otilde;es imperd&iacute;veis. 
                                </p>
                            </div>
                            <div class="maptext_home" id="sul_css">
                                <p>
                                    Para quem chega a S&atilde;o Paulo pelo aeroporto internacional de Congonhas, a zona sul da cidade &eacute; o port&atilde;o de entrada. Na regi&atilde;o, o visitante encontra tanto divers&atilde;o diurna, como parques e centros de compras, como noturna, em casas de shows, boates, bares e restaurantes, que ficam abertos durante a madrugada.
                                </p>
                            </div>
                            <div class="maptext_home" id="leste_css">
                                <p>
                                    A Zona Leste de S&atilde;o Paulo possui um farto repert&oacute;rio de atra&ccedil;&otilde;es culturais. Dentre est&aacute;dios de futebol do Corinthians e Juventus, diversos parques, shoppings, planet&aacute;rio, museus e muito mais. Andando pelas ruas da regi&atilde;o podemos desfrutar de muitas op&ccedil;&otilde;es de passeios, divers&atilde;o e cultura.
                                </p>
                            </div>
                            <div class="maptext_home" id="centro_css">
                                <p>
                                    No centro da capital paulista, o passado d&aacute; o tom. Pr&eacute;dios que se confundem com a hist&oacute;ria da cidade e do pa&iacute;s s&atilde;o as principais atra&ccedil;&otilde;es. N&atilde;o deixe de conhecer o Pateo do Collegio, constru&ccedil;&atilde;o simples com um bel&iacute;ssimo museu de arte sacra.                           
                                </p>
                            </div>
                        </div>

                    </div>    
                </div>
                <div class="03 abasHome_blocks blocks-03">
                    <div class="containerFixed">


                        <a href="<?php echo get_permalink($lpg_1_passeiovirtual); ?>">

                            <div class="imagens360_first-line">
                                <div class="imagens360_1 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_2 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_3 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_first-line">
                                <div class="imagens360_4 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_5 imagens360_box">
                                </div>
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_6 imagens360_box">
                                </div>                       
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_7 imagens360_box">
                                </div>                       
                            </div>

                            <div class="imagens360_second-line">
                                <div class="imagens360_8 imagens360_box">
                                </div>
                            </div>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>






<div class="linhaDestaques containerFixed">
    <div class="linhaDestaques_agenda">
        <h4 class="linhaDestaques_title">Pr&oacute;ximos Eventos</h4>
        <h5 class="linhaDestaques_sbuTitle">Lorem lorem lorem lorem lorem lorem lorem lorem </h5>
        <div class="linhaDestaques_agenda_calendario"></div>
    </div>
    <div class="linhaDestaques_dicas">
        <h4 class="linhaDestaques_title">Dicas de Quem Ama SP</h4>
        <h5 class="linhaDestaques_sbuTitle">Lorem lorem lorem lorem lorem lorem lorem lorem </h5>
        <div class="linhaDestaques_dicas_faces">
            <?php
            $argsLdt = array(
                'post_type' => 'dicas',
                'posts_per_page' => 3,
                'orderby' => 'rand'
            );
//
            global $queryLdt;
            $queryLdt = new WP_Query($argsLdt);
            while ($queryLdt->have_posts()) : $queryLdt->the_post();
                ?>
                <a href="<?php echo get_permalink($lpg_4_dicas); ?>" 
                   class="linhaDestaques_dicas_faces_link" 
                   style="background-image: url(<?php echo get_field('dicas_retrato'); ?>);">
                    <div class="linhaDestaques_dicas_faces_link_div">
                        <p><?php echo get_field('dicas_nome'); ?></p>
                    </div>
                </a>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>




<div class="ondeFicar containerFull">
    <div class="ondeFicar_wrapper containerFixed">
        <div class="ondeFicar_wrapper_busca">
            <h4>Onde Ficar</h4>
        </div>
        <div class="ondeFicar_wrapper_banner">
            <div class="ondeFicar_wrapper_banner_container">

            </div>
        </div>
        <div class="ondeFicar_wrapper_links">






            <ul class="megamenu">
                <li class="megamenu_newsletter_btn">
                    <span class="drop">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                            RECEBA NOSSA <br />NEWSLETTER
                        </p>
                    </span>
                    <div class="ondeFicar_wrapper_links_news megamenu_fullwidth">
                        <div class="ondeFicar_wrapper_links_news_wrapper containerFixed">
                            <form class="formSearch" role="search" method="get" id="searchform" action="http://intranet.spturis.com.br/csp/">
                                <input class="formNews_input" type="text" value="Seu e-mail aqui para receber dicas de S&atilde;o Paulo" name="s" maxlenght="50" onclick="this.value = ''">
                                <br>
                                <button class="formNews_btn" type="submit">confirmar</button>  
                            </form>
                        </div>
                    </div>
                </li>
            </ul>







            <i class="fa fa-facebook"></i>
            <p>
                AS MELHORES <br />
                ATRA&Ccedil;&Otilde;ES <br />
                NO FACEBOOK
            </p>

            <i class="fa fa-twitter"></i>
            <p>
                E TAMB&Eacute;M NO <br />
                TWITTER
            </p>

        </div>
    </div>
</div>




<?php
// get footer()
include ('footer.php');
//
?>