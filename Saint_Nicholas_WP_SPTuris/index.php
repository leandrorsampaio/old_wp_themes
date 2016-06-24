<?php get_header(); ?>
<div id="contentHome">
    <!-- ---------------------------------------- SLIDER ---------------------------------->
    <div id="contentHome_setor1">
        <div id="slider">
            <?php
            $slider = new WP_Query('post_type=slider');
            while ($slider->have_posts()) : $slider->the_post();
                ?>
                <a href="<?php echo get_permalink(6); ?>">
                    <div class="slider_title" >
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <div class="slider_excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <?php the_post_thumbnail('thumb-slider'); ?>
                </a>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <!------------------------------------------ BLOCO 2 ---------------------------------->
    <div id="contentHome_setor2">
        <div class="contentHome_setor2_box">
            <?php get_sidebar('homebox-atracoes'); ?>
        </div>
        <div class="contentHome_setor2_box">
            <?php get_sidebar('homebox-compras'); ?>
        </div>
        <div class="contentHome_setor2_box">
            <?php get_sidebar('homebox-calendario'); ?>
        </div>
        <div id="contentHome_setor2_boxBig">
            <div id="contentHome_setor2_boxBig_header">
                <?php get_sidebar('homebox-noticias'); ?>
            </div>
        </div>
    </div>
    <!------------------------------------------ BLOCO 3 ---------------------------------->
    <!--
    <div id="contentHome_setor3">
        <div id="contentHome_AlternativoVideo">
            <div id="contentHome_setor4_video_boxYT"> 
                <?php // get_sidebar('homebox-video'); ?>

                <!--
                <img class="size-full wp-image-1100" 
                     title="Catedral da Sé - Foto José Cordeiro / SPTuris" 
                     src="http://natal.spturis.com.br/wp-content/uploads/2014/12/Natal-2014-Catedral-Se_291114_Foto_JoseCordeiro_0465.jpg" 
                     alt="" height="233" width="350" />
                -->
                
                <!--
                <a class="pesquisaLink">
                    <h4 class="pesquisaLink_text">O melhor Natal do Brasil</h4>
                </a>
            </div>
        </div>
        <div id="contentHome_setor3_muralSP">
            <a id="contentHome_setor3_muralSP_fotos" href="<?php echo get_permalink(3155); ?>"></a>
            <a id="contentHome_setor3_muralSP_textos" href="<?php echo get_permalink(3155); ?>">
                <h3>Fotos da cidade</h3>
                <p>Veja as fotos da nossa cidade especialmente iluminada para este Natal.</p>
            </a>
        </div>
    </div>
    -->
</div>
<a href="<?php echo get_permalink(3155); ?>">
    <div id="contentHome_setor4">
    </div>
</a>
<div id="contentHome_setor4Shadow"></div>
<?php get_footer(); ?>

