<?php get_header(); ?>

<?php
// Sidebar Programador
include 'inc_programador.php';
?>
<div id="contentMob">
    <?php
    //--------  Query SLIDER HOME
    global $slider;
    $slider = new WP_Query('post_type=sliderhome&orderby=rand&posts_per_page=1');
    while ($slider->have_posts()) : $slider->the_post();
        $imgdesk = get_field('imagem_desktop_mobile');
    endwhile;
    wp_reset_query();

    // QUERY TEXTO E LINK DO SLIDER
    global $slidertitle;
    $slidertitle = new WP_Query('post_type=sliderhometitle&orderby=rand&posts_per_page=1');
    while ($slidertitle->have_posts()) : $slidertitle->the_post();
        //echo '<a href="' . get_field('slider_link') . $code_pt . '">' . get_field($fieldKey_slider_pt) . '</a>';
        $textmob = get_field('slider_text_pt');
        $linkmob = get_field('slider_link');
    endwhile;
    wp_reset_query();
    ?>
    <!-- SECTION 1 -->
    <div id="m_sec1" style="background: url(<?php echo $imgdesk; ?>) no-repeat center fixed">
        <div class="m_highlight">
            <h1>
                <a href="<?php echo $linkmob; ?>"><?php echo $textmob; ?></a>
                <p>Cr&eacute;ditos: Jos&eacute; Cordeiro | SPTuris</p>
                <p>Visite: entre em contato com um guia ou agente local.</p>
            </h1>

        </div>
    </div>
    <!-- SECTION 2 -->
    <div id="sec2Mob">
        <h2 class="secXMob_title">Atra&ccedil;&otilde;es</h2> 
        <div class="swiper-container content contentMob">
            <div class="swiper-wrapper mobSwiper-wrapper">
                <?php
                //--------  Query ATRACOES
                global $gastronomia;
                $gastronomia = new WP_Query('post_type=page&orderby=rand&posts_per_page=5');
                while ($gastronomia->have_posts()) : $gastronomia->the_post();
                    ?>
                    <div class="swiper-slide">
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
                        <div class="swiper-slide-text" style="margin-top: -17px;">
                            <a href="<?php echo get_permalink(); ?>">
                                <p><?php echo get_field('atracoes_chamada'); ?></p>
                            </a> 
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="pagination"></div>
        </div>
        <script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
        <script>
            var mySwiper = new Swiper('.swiper-container', {
                pagination: '.pagination',
                paginationClickable: true,
                slidesPerView: 1.5
            })
        </script>
    </div>
    <!-- SECTION 3 -->
    <div id="sec3Mob">
        <div class="sec3Mob_wrap">
            <h2 class="secXMob_title">Roteiros</h2>
            <div class="sec3Mob_quad">
                <div class="sec3Mob_quad_text">
                    <h4><a href="<?php echo get_permalink($rt_mata) . '?lang=' . $idiomaMenu; ?>">Mata Atl&acirc;ntica</a></h4>
                </div>
            </div>
            <div class="sec3Mob_quad">
                <div class="sec3Mob_quad_text">
                    <h4><a href="<?php echo get_permalink($rt_historia) . '?lang=' . $idiomaMenu; ?>">Hist&oacute;ria <span>e</span> Cultura</a></h4>
                </div>
            </div>
            <div class="sec3Mob_quad">
                <div class="sec3Mob_quad_text">
                    <h4 class="sec3Mob_quad_text_solo"><a href="<?php echo get_permalink($rt_religioso) . '?lang=' . $idiomaMenu; ?>">Religioso</a></h4>
                </div>
            </div>
            <div class="sec3Mob_quad">
                <div class="sec3Mob_quad_text">
                    <h4><a href="<?php echo get_permalink($rt_cicloturismo) . '?lang=' . $idiomaMenu; ?>">Ciclo Turismo</a></h4>
                </div>
            </div>
            <div class="sec3Mob_quad">
                <div class="sec3Mob_quad_text">
                    <h4 class="sec3Mob_quad_text_solo"><a href="<?php echo get_permalink($rt_nautico) . '?lang=' . $idiomaMenu; ?>">N&aacute;utico</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION 4 -->
    <div id="sec4Mob">
        <a href="<?php echo get_permalink($ch_onibus) . '?lang=' . $idiomaMenu; ?>" class="sec4Mob_quad">
            <img src="<?php bloginfo('template_url'); ?>/images/sec4_comochegar.png" alt="" />
            <h4>Como Chegar</h4>
        </a>
        <a href="<?php echo get_permalink($of_pousadas) . '?lang=' . $idiomaMenu; ?>" class="sec4Mob_quad">
            <img src="<?php bloginfo('template_url'); ?>/images/sec4_ondeficar.png" alt="" />
            <h4>Onde Ficar</h4>
        </a>
        <a href="<?php echo get_permalink($oc_restaurantes) . '?lang=' . $idiomaMenu; ?>" class="sec4Mob_quad">
            <img src="<?php bloginfo('template_url'); ?>/images/sec4_ondecomer.png" alt="" />
            <h4>Onde Comer</h4>
        </a>
    </div>
    <!-- SECTION 5 -->
    <div id="sec5Mob">
        <div class="sec5Mob_quad">
            <div class="sec5Mob_quad_text">
                <h4 style="padding:25px 0 10px 0 !important;">
                    <a href="<?php echo get_permalink($cr_produtos) . '?lang=' . $idiomaMenu; ?>">PRODUTOS ORG&Acirc;NICOS</a>
                </h4>
            </div>
        </div>
        <div class="sec5Mob_quad">
            <div class="sec5Mob_quad_text">
                <h4>
                    <a href="<?php echo get_permalink($cr_responsabilidade) . '?lang=' . $idiomaMenu; ?>">RESPONSABILIDADE AMBIENTAL</a>
                </h4>
            </div>
        </div>
        <div class="sec5Mob_quad">
            <div class="sec5Mob_quad_text">
                <h4 style="padding:25px 0 10px 0 !important;">
                    <a href="<?php echo get_permalink($bv_fauna) . '?lang=' . $idiomaMenu; ?>">FAUNA E FLORA</a>
                </h4>
            </div>
        </div>
        <div class="sec5Mob_quad">
            <div class="sec5Mob_quad_text">
                <h4 style="padding:25px 0 10px 0 !important;">
                    <a href="<?php echo get_permalink($bv_mapa) . '?lang=' . $idiomaMenu; ?>">MAPAS</a>
                </h4>
            </div>
        </div>
    </div>
</div>
<script>
    // INDEX: CALCULA LARGURA E ALTURA
    // Fun��o adaptImage()
    // Par�metros: targetimg (objeto jquery com elementos selecionados)
    var varAltura = $(window).height(); // altura da janela do navegador
    var varLargura = $(window).width(); // largura da janela do navegador
    //contentMob
    document.getElementById("m_sec1").style.width = varLargura + "px";
    document.getElementById("m_sec1").style.height = varAltura + "px";
</script>
<?php get_footer(); ?>