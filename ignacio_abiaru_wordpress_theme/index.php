<?php get_header(); ?>
<?php
// Sidebar Programador
include 'inc_programador.php';
?>
<?php
//--------  Query SLIDER HOME
$slider1 = 0;
$slider2 = 0;
$contador = 0;
$temporario = 0;
//--------
global $slider;
$slider = new WP_Query('post_type=sliderhome&orderby=rand&posts_per_page=2');
while ($slider->have_posts()) : $slider->the_post();
    $temp = get_field('slider_imagem');
    if ($contador == 0) {
        $slider1 = $temp;
    } else {
        $slider2 = $temp;
    }
    $contador = $contador + 1;
endwhile;
wp_reset_query();
?>
<style>
    section.module.parallax-1 {
        background-image: url("<?php echo $slider1; ?>");
    }
    section.module.parallax-2 {
        background-image: url("<?php echo $slider2; ?>");
    }
</style>
<script type='text/javascript'>//<![CDATA[ 
    $(window).load(function() {
        var $post = $(".parallax-1");
        setInterval(function() {
            $post.toggleClass("parallax-2");
        }, 4000);
    });//]]>  
</script>
<section id="sec1" class="module parallax parallax-1">
    <div class="sec1_marca"></div>  
    
    <p class="sec1_aviso">Visite: entre em contato com um guia ou agente local.</p>
    
    
    
    <div class="sec1_logo">
        <img src="<?php bloginfo('template_url'); ?>/images/logo_sec1.png" alt="Logo Ecoturismo" />
    </div>
    <div class="sec1_chamada">
        <h1>
            <?php
            // QUERY TEXTO E LINK DO SLIDER
            global $slidertitle;
            $slidertitle = new WP_Query('post_type=sliderhometitle&orderby=rand&posts_per_page=1');
            while ($slidertitle->have_posts()) : $slidertitle->the_post();
                echo '<a href="' . get_field('slider_link') . $code_pt . '">' . get_field($fieldKey_slider_pt) . '</a>';
            endwhile;
            wp_reset_query();
            ?>
        </h1>
    </div>
</section>











<section id="sec2" style="height: 465px !important;">
    <div class="swiper-container content">
        <h3 class="secTitle sec2Title">ESCOLHA A SUA ATRA&Ccedil;&Atilde;O</h3>
        <div class="swiper-wrapper">
            <?php
            //--------  Query ATRACOES
            global $gastronomia;
            $gastronomia = new WP_Query('post_type=page&orderby=rand&posts_per_page=-1');
            while ($gastronomia->have_posts()) : $gastronomia->the_post();
                ?>
                <div class="swiper-slide">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="swiper-slide-img">
                            <?php
                            if (get_field('atracoes_img')) {
                                $VARatracoes_img = get_field('atracoes_img');
                            } else {
                                $VARatracoes_img = get_bloginfo('template_url') . '/images/atracoeshomepadrao.jpg';
                            }
                            if (get_field('atracoes_credito')) {
                                $VARatracoes_credito = get_field('atracoes_credito');
                            } else {
                                $VARatracoes_credito = 'SPTuris';
                            }
                            ?>
                            <img src="<?php echo $VARatracoes_img; ?>" alt="<?php echo $VARatracoes_credito; ?>" />
                            <p class="swiper-slide-img-creditos"><?php echo $VARatracoes_credito; ?></p>
                        </div>
                        <div class="swiper-slide-title">
                            <h2><?php echo get_the_title(); ?></h2>
                        </div>
                        <div class="swiper-slide-text">
                            <a href="<?php echo get_permalink(); ?>">
                                <p><?php echo get_field('atracoes_chamada'); ?></p>
                            </a> 
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div class="pagination">
            <a class="arrow-left fa fa-arrow-circle-left flecha" href="#"></a> 
            <a class="arrow-right fa fa-arrow-circle-right flecha flecha2" href="#"></a>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
    <script>
    var mySwiper = new Swiper('.swiper-container', {
        paginationClickable: true,
        slidesPerView: 4,
    })
    $('.arrow-left').on('click', function(e) {
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.arrow-right').on('click', function(e) {
        e.preventDefault()
        mySwiper.swipeNext()
    })
    </script>
</section>









<section id="sec3" style="height: 465px !important;">
    <article class="content">
        <h3 class="secTitle sec3Title">ROTEIROS</h3>
        <div class="squareSec3 squareSec3_01 box">
            <div class="box__">
                <div class="box__right box__padrao">
                    <a href="<?php echo get_permalink($rt_mata) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Mata Atl&acirc;ntica</a>
                </div>
                <div class="box__left box__padrao">
                    <a href="<?php echo get_permalink($rt_mata) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Mata Atl&acirc;ntica</a>
                </div>
                <div class="box__top box__padrao">
                    <a href="<?php echo get_permalink($rt_mata) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Mata Atl&acirc;ntica</a>
                </div>
                <div class="box__bottom box__padrao">
                    <a href="<?php echo get_permalink($rt_mata) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Mata Atl&acirc;ntica</a>
                </div>
                <div class="box__center">
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="squareSec3 squareSec3_02">
            <div class="box__">
                <div class="box__right box__padrao">
                    <a href="<?php echo get_permalink($rt_historia) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Hist&oacute;ria e Cultura</a>
                </div>
                <div class="box__left box__padrao">
                    <a href="<?php echo get_permalink($rt_historia) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Hist&oacute;ria e Cultura</a>
                </div>
                <div class="box__top box__padrao">
                    <a href="<?php echo get_permalink($rt_historia) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Hist&oacute;ria e Cultura</a>
                </div>
                <div class="box__bottom box__padrao">
                    <a href="<?php echo get_permalink($rt_historia) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link4">Hist&oacute;ria e Cultura</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="squareSec3 squareSec3_03">
            <div class="box__">
                <div class="box__right box__padrao ">
                    <a href="<?php echo get_permalink($rt_religioso) . '?lang=' . $idiomaMenu; ?>" class="box__link">Religioso</a>
                </div>
                <div class="box__left box__padrao">
                    <a href="<?php echo get_permalink($rt_religioso) . '?lang=' . $idiomaMenu; ?>" class="box__link">Religioso</a>
                </div>
                <div class="box__top box__padrao">
                    <a href="<?php echo get_permalink($rt_religioso) . '?lang=' . $idiomaMenu; ?>" class="box__link">Religioso</a>
                </div>
                <div class="box__bottom box__padrao">
                    <a href="<?php echo get_permalink($rt_religioso) . '?lang=' . $idiomaMenu; ?>" class="box__link">Religioso</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="squareSec3 squareSec3_04">
            <div class="box__">
                <div class="box__right box__padrao">
                    <a href="<?php echo get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu; ?>" class="box__link">Cicloturismo</a>
                </div>
                <div class="box__left box__padrao">
                    <a href="<?php echo get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu; ?>" class="box__link">Cicloturismo</a>
                </div>
                <div class="box__top box__padrao">
                    <a href="<?php echo get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu; ?>" class="box__link">Cicloturismo</a>
                </div>
                <div class="box__bottom box__padrao">
                    <a href="<?php echo get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu; ?>" class="box__link">Cicloturismo</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="squareSec3 squareSec3_05">
            <div class="box__">
                <div class="box__right box__padrao">
                    <a href="<?php echo get_permalink($rt_nautico) . '?lang=' . $idiomaMenu; ?>" class="box__link">N&aacute;utico</a>
                </div>
                <div class="box__left box__padrao">
                    <a href="<?php echo get_permalink($rt_nautico) . '?lang=' . $idiomaMenu; ?>" class="box__link">N&aacute;utico</a>
                </div>
                <div class="box__top box__padrao">
                    <a href="<?php echo get_permalink($rt_nautico) . '?lang=' . $idiomaMenu; ?>" class="box__link">N&aacute;utico</a>
                </div>
                <div class="box__bottom box__padrao">
                    <a href="<?php echo get_permalink($rt_nautico) . '?lang=' . $idiomaMenu; ?>" class="box__link">N&aacute;utico</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
    </article>
</section>






<section id="sec4" style="height: 465px !important;">
    <article class="content">



        <a href="<?php echo get_permalink($ch_onibus) . '?lang=' . $idiomaMenu; ?>" class="sec4_row">
            <div class="sec4_topo">
                <div class="sec4_icon sec4_icon_comechegar">
                    <img class="sec4_icon_comechegar_img" src="<?php bloginfo('template_url'); ?>/images/sec4_comochegar.png" alt="como chegar" />
                </div>
                <div class="sec4_title sec4_title_comechegar">
                    <h3>Como Chegar</h3>
                </div>
            </div>
            <div class="sec4_text">
                <p>De carro, &ocirc;nibus, trem</br>ou bicicleta: &eacute; f&aacute;cil e</br>r&aacute;pido chegar &agrave;</br>regi&atilde;o Sul da cidade</p>
            </div>
        </a>




        <a href="<?php echo get_permalink($of_pousadas) . '?lang=' . $idiomaMenu; ?>" class="sec4_row">
            <div class="sec4_topo">
                <div class="sec4_icon sec4_icon_ondeficar">
                    <img src="<?php bloginfo('template_url'); ?>/images/sec4_ondeficar.png" alt="onde ficar" />
                </div>
                <div class="sec4_title sec4_title_ondeficar">
                    <h3>Onde Ficar</h3>
                </div>
            </div>
            <div class="sec4_text">
                <p>Camping, pousadas, hot&eacute;is ou alojamento estudantil - n&atilde;o faltam op&ccedil;&otilde;es de hospedagem!</p>
            </div>
        </a>




        <a href="<?php echo get_permalink($oc_restaurantes) . '?lang=' . $idiomaMenu; ?>" class="sec4_row">
            <div class="sec4_topo">
                <div class="sec4_icon sec4_icon_ondecomer">
                    <img class="sec4_icon_ondecomer_img" src="<?php bloginfo('template_url'); ?>/images/ondecomerV2index.png" alt="Onde comer" />
                </div>
                <div class="sec4_title sec4_title_ondecomer">
                    <h3>Onde Comer</h3>
                </div>
            </div>
            <div class="sec4_text">
                <p>Almo&ccedil;o caipira, botecos, restaurantes, pesqueiros, caf&eacute;s e mercados: voc&ecirc; encontra aqui</p>
            </div>
        </a>




    </article>
</section>










<section id="sec5" style="height: 320px !important;">
    <article class="content">
        <div class="elipseSec5 elipseSec5_01">
            <div class="box2">
                <div class="box__right box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_produtos) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link2">PRODUTOS ORG&Acirc;NICOS</a>
                </div>
                <div class="box__left box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_produtos) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link2">PRODUTOS ORG&Acirc;NICOS</a>
                </div>
                <div class="box__top box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_produtos) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link2">PRODUTOS ORG&Acirc;NICOS</a>
                </div>
                <div class="box__bottom box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_produtos) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link2">PRODUTOS ORG&Acirc;NICOS</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="elipseSec5 elipseSec5_02">
            <div class="box2">
                <div class="box__right box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link3">RESPONSA- BILIDADE AMBIENTAL</a>
                </div>
                <div class="box__left box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link3">RESPONSA- BILIDADE AMBIENTAL</a>
                </div>
                <div class="box__top box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link3">RESPONSA- BILIDADE AMBIENTAL</a>
                </div>
                <div class="box__bottom box__padrao2 circular">
                    <a href="<?php echo get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu; ?>" class="box__link box__link3">RESPONSA- BILIDADE AMBIENTAL</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="elipseSec5 elipseSec5_03">
            <div class="box2">
                <div class="box__right box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_fauna) . '?lang=' . $idiomaMenu; ?>" class="box__link">FAUNA E FLORA</a>
                </div>
                <div class="box__left box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_fauna) . '?lang=' . $idiomaMenu; ?>" class="box__link">FAUNA E FLORA</a>
                </div>
                <div class="box__top box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_fauna) . '?lang=' . $idiomaMenu; ?>" class="box__link">FAUNA E FLORA</a>
                </div>
                <div class="box__bottom box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_fauna) . '?lang=' . $idiomaMenu; ?>" class="box__link">FAUNA E FLORA</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>
        <div class="elipseSec5 elipseSec5_04">
            <div class="box2">
                <div class="box__right box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_mapa) . '?lang=' . $idiomaMenu; ?>" class="box__link">MAPAS</a>
                </div>
                <div class="box__left box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_mapa) . '?lang=' . $idiomaMenu; ?>" class="box__link">MAPAS</a>
                </div>
                <div class="box__top box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_mapa) . '?lang=' . $idiomaMenu; ?>" class="box__link">MAPAS</a>
                </div>
                <div class="box__bottom box__padrao2 circular">
                    <a href="<?php echo get_permalink($bv_mapa) . '?lang=' . $idiomaMenu; ?>" class="box__link">MAPAS</a>
                </div>
                <div class="box__center">
                </div>
            </div>
        </div>




    </article>
</section>





<script>
    // parallax dos sec 2, 3, 4 e 5
    $(document).ready(function() {
        $('.parallaxV2').scrolly({bgParallax: true});
    });
</script>
<?php get_footer(); ?>